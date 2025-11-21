@component('mail::message')

{{-- ========================= --}}
{{-- BRAND HEADER WITH LOGO --}}
{{-- ========================= --}}
<div style="text-align:center; margin-bottom: 25px;">
    <img src="{!! asset('assets') !!}/images/alchemy-logo.webp" alt="Brand Logo" style="max-height: 70px;">
    <h2 style="margin-top:10px; color:#1f2937; font-weight:700;">
        New Lead Notification
    </h2>
</div>

{{-- ========================= --}}
{{-- INTRO TEXT --}}
{{-- ========================= --}}
<p style="font-size:16px; color:#374151;">
    A new lead has submitted their details on your website.
    Below is the information they provided:
</p>

{{-- ========================= --}}
{{-- LEAD INFORMATION --}}
{{-- ========================= --}}
@component('mail::panel')
@php
$fields = [
    'Name' => $lead->name ?? null,
    'Mobile' => $lead->mobile ?? null,
    'Email' => $lead->email ?? null,
    'City' => $lead->city ?? null,
    'Location' => $lead->location ?? null,
    'Project' => $lead->project ?? null,
];
@endphp

@foreach($fields as $label => $value)
    @if(!empty($value))
**{{ $label }}:** {{ $value }}
    @endif
@endforeach

@if(!empty($lead->remark))
**Remarks:**
{{ $lead->remark }}
@endif
@endcomponent

{{-- ========================= --}}
{{-- UTM DETAILS (if available) --}}
{{-- ========================= --}}
@if(!empty($lead->utm_source) || !empty($lead->utm_medium) || !empty($lead->utm_campaign))
@component('mail::subcopy')
### 📊 UTM Tracking Details

@isset($lead->utm_source)
- **Source:** {{ $lead->utm_source }}
@endisset

@isset($lead->utm_medium)
- **Medium:** {{ $lead->utm_medium }}
@endisset

@isset($lead->utm_campaign)
- **Campaign:** {{ $lead->utm_campaign }}
@endisset
@endcomponent
@endif

{{-- ========================= --}}
{{-- CTA BUTTON --}}
{{-- ========================= --}}
@component('mail::button', ['url' => 'https://yourdomain.com/admin/leads', 'color' => 'success'])
View Lead in Dashboard
@endcomponent

{{-- ========================= --}}
{{-- FOOTER --}}
{{-- ========================= --}}
<p style="text-align:center; font-size:13px; color:#9ca3af; margin-top:30px;">
    © {{ date('Y') }} <strong>Your Brand Name</strong>.
    All rights reserved.
</p>

@endcomponent
