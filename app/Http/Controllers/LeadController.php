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
    public function submit(Request $request)
    {
        // validation
        $data = $request->validate([
            'Name' => 'required|string|max:255',
            'Mob' => 'required|string|max:20',
            'Email' => 'nullable|email|max:255',
            'City' => 'nullable|string|max:255',
            'Remark' => 'nullable|string',
        ]);

        try {

            // reCAPTCHA CHECK
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
                    return back()->with('error', 'reCAPTCHA verification failed.')->withInput();
                }
            }

            // SAVE to DB
            $lead = Lead::create([
                'name'   => $data['Name'] ?? null,
                'mobile' => $data['Mob'] ?? null,
                'email'  => $data['Email'] ?? null,
                'city'   => $data['City'] ?? null,
                'remark' => $data['Remark'] ?? null,
            ]);

            // Email notify admin
            if (isset($lead) && env('ADMIN_EMAIL')) {
                Mail::to(env('ADMIN_EMAIL'))->send(new NewLeadMail($lead));
            }

            // FORWARD TO EXTERNAL URL
            try {
                $client = new \GuzzleHttp\Client();
                $forwardUrl = 'https://evos08.4erealty.com/WebCreate.aspx?UID=fourqt&PWD=wn9mxO76f34=&Channel=DNM&Src=Digital_Nawab&url=';

                $client->post($forwardUrl, [
                    'form_params' => $request->all(),
                    'timeout' => 5,
                ]);
            } catch (\Exception $e) {
                // Forward error — not a blocking error
                Log::error('Forward lead failed: '.$e->getMessage());
            }

            // SUCCESS → THANK YOU PAGE
            return redirect()->route('page.thankyou')->with('success', 'Your form was submitted successfully.');

        } catch (\Exception $e) {

            Log::error('Lead error: '.$e->getMessage());
            return back()->with('error', 'Something went wrong, please try again.')->withInput();
        }
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
