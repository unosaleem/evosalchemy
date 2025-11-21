<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use App\Mail\NewLeadMail;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{
    public function index(Request $request)
    {
        // GET DATE FILTERS
        $from = $request->from;
        $to   = $request->to;

        // QUERY
        $query = Lead::query();

        if ($from) {
            $query->whereDate('created_at', '>=', $from);
        }

        if ($to) {
            $query->whereDate('created_at', '<=', $to);
        }

        // GET LEADS (pagination so page fast stays fast)
        $leads = $query->orderBy('id', 'DESC')->paginate(100);

        // RETURN VIEW
        return view('enquiry', compact('leads', 'from', 'to'));
    }

    public function submit(Request $request)
    {
        // STEP 1: VALIDATION
        try {
            $data = $request->validate([
                'Name' => 'required|string|max:255',
                'Mob'  => 'required|string|max:20',
                'Email'=> 'nullable|email|max:255',
                'City' => 'nullable|string|max:255',
                'Remark'=> 'nullable|string',
            ]);
        } catch (\Exception $e) {
            return back()->with('error', 'Validation Error: '.$e->getMessage())->withInput();
        }


        // STEP 2: reCAPTCHA CHECK
        try {
            $recaptchaToken  = $request->input('recaptcha_token');
            $recaptchaSecret = trim(env('RECAPTCHA_SECRET_KEY'));
            $recaptchaSite   = trim(env('RECAPTCHA_SITE_KEY'));

            $enableRecaptcha = (!empty($recaptchaSecret) && !empty($recaptchaSite));

            if ($enableRecaptcha && $recaptchaToken) {

                $response = \Http::asForm()->post(
                    'https://www.google.com/recaptcha/api/siteverify',
                    [
                        'secret'   => $recaptchaSecret,
                        'response' => $recaptchaToken,
                        'remoteip' => $request->ip()
                    ]
                );

                $json = $response->json();

                if (!($json['success'] ?? false) || (($json['score'] ?? 0) < 0.4)) {
                    return back()->with('error', 'reCAPTCHA Failed: Low score or invalid token')->withInput();
                }
            }
        } catch (\Exception $e) {
            return back()->with('error', 'reCAPTCHA Error: '.$e->getMessage())->withInput();
        }


        // STEP 3: SAVE TO DB
        try {
            $lead = Lead::create([
                'name'   => $data['Name'] ?? null,
                'mobile' => $data['Mob'] ?? null,
                'email'  => $data['Email'] ?? null,
                'city'   => $data['City'] ?? null,
                'remark' => $data['Remark'] ?? null,
            ]);
        } catch (\Exception $e) {
            return back()->with('error', 'Database Save Error: '.$e->getMessage())->withInput();
        }


        // STEP 4: SEND EMAIL
        try {
            if (isset($lead) && env('ADMIN_EMAIL')) {
                Mail::to(env('ADMIN_EMAIL'))->send(new NewLeadMail($lead));
            }
        } catch (\Exception $e) {
            return back()->with('error', 'Mail Error: '.$e->getMessage())->withInput();
        }


        // STEP 5: FORWARD TO EXTERNAL API
        try {
            $client = new \GuzzleHttp\Client();

            $url = 'https://evos08.4erealty.com/WebCreate.aspx';

            $params = [
                'UID'     => 'fourqt',
                'PWD'     => 'wn9mxO76f34=',
                'Channel' => 'DNM',
                'Src'     => 'Digital_Nawab',
                'Name'    => $request->Name,
                'Email'   => $request->Email,
                'Mob'     => $request->Mob,
                'City'    => $request->City ?? null,
                'Remark'  => $request->Remark ?? null,
            ];

            $response = $client->post($url, [
                'form_params' => $params,
                'timeout'     => 10,
            ]);

//            return response($response->getBody()->getContents(), 200);

        } catch (\Exception $e) {
            return response()->json([
                'error'   => true,
                'message' => 'Forward API Error',
                'details' => $e->getMessage()
            ], 500);
        }



        // SUCCESS
        return redirect()->route('page.thankyou')->with('success', 'Your form was submitted successfully.');
    }


    public function submits(Request $request)
    {
        // validation
        $data = $request->validate([
            'Name' => 'required|string|max:255',
            'Mob' => 'required|string|max:20',
            'Email' => 'nullable|email|max:255',
            'City' => 'nullable|string|max:255',
            'Remark' => 'nullable|string',
        ]);

    // Verify reCAPTCHA v3

    // ---------------------------------------------------------
    // reCAPTCHA condition: only if BOTH keys are available
    // ---------------------------------------------------------
    $recaptchaToken  = $request->input('recaptcha_token');
    $recaptchaSecret = trim(env('RECAPTCHA_SECRET_KEY'));
    $recaptchaSite   = trim(env('RECAPTCHA_SITE_KEY'));

    $enableRecaptcha = (!empty($recaptchaSecret) && !empty($recaptchaSite));

    if ($enableRecaptcha && $recaptchaToken) {
        try {
            $response = \Http::asForm()->post(
                'https://www.google.com/recaptcha/api/siteverify',
                [
                    'secret'   => $recaptchaSecret,
                    'response' => $recaptchaToken,
                    'remoteip' => $request->ip()
                ]
            );

            $json = $response->json();

            // v3 returns score (0–1). Threshold recommended = 0.4+
            if (!($json['success'] ?? false) || (($json['score'] ?? 0) < 0.4)) {
                return redirect()->back()
                    ->withErrors(['recaptcha' => 'reCAPTCHA verification failed.'])
                    ->withInput();
            }
        } catch (\Exception $e) {
            \Log::error('reCAPTCHA verify failed: ' . $e->getMessage());
        }
    }

        // save to DB (optional — make sure migration exists)
        try {
            $lead = Lead::create([
                'name' => $data['Name'] ?? null,
                'mobile' => $data['Mob'] ?? null,
                'email' => $data['Email'] ?? null,
                'city' => $data['City'] ?? null,
                'remark' => $data['Remark'] ?? null,
            ]);
            if (isset($lead) && env('ADMIN_EMAIL')) {
                Mail::to(env('ADMIN_EMAIL'))->send(new NewLeadMail($lead));
            }
        } catch (\Exception $e) {
            // DB error — continue to forward anyway
            Log::error('Lead save failed: '.$e->getMessage());
        }

        // forward to external URL using Guzzle
        try {
            $client = new Client();
            $forwardUrl = 'https://evos08.4erealty.com/WebCreate.aspx?UID=fourqt&PWD=wn9mxO76f34=&Channel=DNM&Src=Digital_Nawab&url=';

            $client->post($forwardUrl, [
                'form_params' => $request->all(),
                'timeout' => 5,
            ]);
        } catch (\Exception $e) {
            Log::error('Forward lead failed: '.$e->getMessage());

        }

        // redirect to thank you
        return redirect()->route('page.thankyou')->with('status', 'submitted');
    }


}
