<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="language" content="english">
    <meta property="og:type" content="website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Premium Luxury Apartments | 2 & 3 BHK Homes at Best Price')</title>
    <meta name="description" content="@yield('description', 'Book your dream home today! Explore 2 & 3 BHK luxury apartments with modern amenities, excellent location, and flexible pricing. Get floor plans, pricing & exclusive offers now.')">
    <meta name="author" content="Digital Nawab || uno">
    <!-- Global site shotcut --->
    <link defer rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon/png">
    <link defer rel="apple-touch-icon image_src" href="assets/images/favicon.png">
    <link defer rel="icon" href="assets/images/favicon.png" type="image/x-icon/png">
    <!-- Outhor and keyword -->
    <meta name="og_site_name" property="og:site_name" content="www.thetopknot.in" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
            integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
    />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Google Tag Manager (head) -->

@if (!empty(env('GTM_ID')))
<script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','{{ env('GTM_ID') }}');
</script>
@endif

<!-- GA4 gtag -->
@if (!empty(env('GA4_MEASUREMENT_ID')))
<script async src="https://www.googletagmanager.com/gtag/js?id={{ env('GA4_MEASUREMENT_ID') }}"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '{{ env('GA4_MEASUREMENT_ID') }}');
</script>
@endif


    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary-light-bg": "#f8fafc",
                        "secondary-dark": "#1e293b",
                        "accent-gold": "#ca8a04",
                        "accent-charcoal-blue": "#475569",
                        "accent-dark": "#0f172a",
                        "primary-dark-bg": "#0f172a",
                        "accent-light-grey": "#f1f5f9",
                        "cta-blue": "#1e40af",
                    },
                    fontFamily: {
                        sans: ["Inter", "sans-serif"],
                    },
                },
            },
        };
    </script>

    <style>
        @import url(https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap);@keyframes pulse-glow{0%,100%{box-shadow:0 0 0 0 rgb(250 204 21 / .6)}50%{box-shadow:0 0 25px 5px rgb(250 204 21 / .4)}}.reveal-element{opacity:0;transform:translateY(20px);transition:opacity 0.8s ease-out,transform 0.8s ease-out}.reveal-element.visible{opacity:1;transform:translateY(0)}.hero-title span{display:inline-block;opacity:0;transform:translateY(20px);animation:fadeInWord 1s ease-out forwards}.hero-title span:nth-child(1){animation-delay:0.2s}.hero-title span:nth-child(2){animation-delay:0.4s}.hero-title span:nth-child(3){animation-delay:0.6s}.hero-title span:nth-child(4){animation-delay:0.8s}.hero-title span:nth-child(5){animation-delay:1s}.hero-title span:nth-child(6){animation-delay:1.2s}@keyframes fadeInWord{to{opacity:1;transform:translateY(0)}}.video-container{position:relative;width:100%;padding-top:56.25%}.video-container iframe{position:absolute;top:0;left:0;width:100%;height:100%}.carousel-container{overflow-x:auto;scroll-behavior:smooth;-webkit-overflow-scrolling:touch;scrollbar-width:none}.carousel-container::-webkit-scrollbar{display:none}@keyframes float{0%,100%{transform:translateY(0)}50%{transform:translateY(-6px)}}.mySwiper .swiper{width:100%;height:90vh}.swiper-slide{position:relative;background-size:cover;background-position:center}.mySwiper .swiper-slide::after{content:"";position:absolute;inset:0;background:rgb(0 0 0 / .45)}.slide-content{position:absolute;bottom:50%;left:10%;z-index:10;color:#fff;text-shadow:0 3px 12px rgb(0 0 0 / .6)}.swiper-pagination-bullet{background:rgb(255 255 255 / .5);opacity:1;width:12px;height:12px;margin:0 6px!important;transition:all 0.3s ease}.swiper-pagination-bullet-active{background:#facc15;width:18px;height:12px;border-radius:8px}.swiper-button-next,.swiper-button-prev{color:#facc15;transition:all 0.3s ease}.swiper-button-next:hover,.swiper-button-prev:hover{color:#fff;text-shadow:0 0 10px rgb(255 215 0 / .7)}@media (max-width:768px){.slide-content{bottom:12%;left:6%}.slide-content h2{font-size:1.75rem}.slide-content p{font-size:1rem}}.enquiry-pop-modal-bg{background:rgb(15 23 42 / .93);transition:opacity 0.4s}.enquiry-pop-modal{transition:transform 0.3s,opacity 0.3s}.enquiry-pop-modal.closed{transform:translateY(100vh) scale(.95);opacity:0;pointer-events:none}.enquiry-pop-modal.open{transform:none;opacity:1;pointer-events:auto}.mobile-menu-close-btn{position:absolute;right:1.25rem;top:1.25rem;z-index:100;background:#ca8a04;border-radius:9999px;padding:.5rem;color:#fff;box-shadow:0 2px 8px #0003;transition:background 0.2s}.mobile-menu-close-btn:hover{background:#f59e42}.amenity-card{position:relative;overflow:hidden;border-radius:.5rem}.swiper.amenitiesGridSwiper{background:transparent!important;box-shadow:none!important;height:100%!important}.amenity-card{position:relative;overflow:hidden;border-radius:.5rem;background:#fff0}.amenity-card img{width:100%;object-fit:cover;transition:transform 0.5s ease;display:block}.amenity-card:hover img{transform:scale(1.05)}.amenity-label{position:absolute;bottom:.75rem;left:.75rem;background-color:rgb(0 0 0 / .6);color:#fff;font-weight:600;font-size:.875rem;padding:.25rem .75rem;border-radius:.25rem;text-transform:uppercase}.swiper-button-next,.swiper-button-prev{width:40px;height:40px;border-radius:9999px;background-color:rgb(255 175 4 / .9);color:#000;display:flex;align-items:center;justify-content:center;transition:all 0.3s ease;box-shadow:none!important}.swiper-button-next:after,.swiper-button-prev:after{font-family:swiper-icons;font-size:20px;text-transform:none!important;letter-spacing:0;color:#fff;line-height:1;font-weight:bolder}.swiper-button-next:hover,.swiper-button-prev:hover{background-color:#facc15;color:#fff}.swiper-slide-shadow-left,.swiper-slide-shadow-right{display:none!important}
    </style>

    <!-- Master CSS Stacks -->
@stack('styles')
</head>

<body class="bg-primary-light-bg text-secondary-dark font-sans antialiased transition-colors duration-500 dark:bg-primary-dark-bg dark:text-slate-100">
<!-- MOBILE MENU OVERLAY -->
<div
        id="mobile-menu-overlay"
        class="fixed inset-0 bg-accent-dark/95 z-[90] transform -translate-x-full transition-transform duration-300 md:hidden"
        style="display: none"
>
    <!-- Close button for mobile menu (visible only on small screens) -->
    <button
            id="mobile-menu-close-btn"
            class="mobile-menu-close-btn md:hidden"
            aria-label="Close Menu"
            onclick="closeMobileMenu()"
            style="display: none"
    >
        <svg
                xmlns="http://www.w3.org/2000/svg"
                width="26"
                height="26"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
        >
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
    </button>
    <div class="flex flex-col p-8 pt-20 space-y-4 text-xl text-white">
        <a
                href="#gold-class-living"
                onclick="closeMobileMenu()"
                class="hover:text-accent-gold transition duration-300"
        >Experience</a
        >
        <a
                href="#architectural-vision"
                onclick="closeMobileMenu()"
                class="hover:text-accent-gold transition duration-300"
        >Project Vision</a
        >
        <a
                href="#floor-plans"
                onclick="closeMobileMenu()"
                class="hover:text-accent-gold transition duration-300"
        >Floor Plans</a
        >

        <a href="#location" onclick="closeMobileMenu()" class="hover:text-accent-gold transition duration-300"
        >Location</a
        >
        <a href="#amenities" onclick="closeMobileMenu()" class="hover:text-accent-gold transition duration-300"
        >Amenities</a
        >
        <a
                href="#walkthrough-video"
                onclick="closeMobileMenu()"
                class="hover:text-accent-gold transition duration-300"
        >Walkthrough Video</a
        >
        <a
                href="#contact-us-block"
                onclick="closeMobileMenu()"
                class="px-4 py-2 bg-accent-gold text-white font-bold rounded-full hover:bg-amber-600 transition duration-300 shadow-md text-center mt-4"
        >Contact Now</a
        >
    </div>
</div>

<!-- FIXED REQUEST CALL BUTTON ON DESKTOP -->
<!-- Request a Call Floating Button -->
<button
    onclick="openRequestCallModal(this)" data-remark="Request a Call | Fixed Right Button"

    class="hidden lg:flex items-center justify-center fixed top-1/2 right-[-4rem] -rotate-90 z-50 px-5 py-3 bg-gradient-to-r from-amber-500 to-yellow-400 text-white font-semibold tracking-wide rounded-t-xl shadow-lg hover:from-yellow-400 hover:to-amber-500 transition-all duration-300 hover:scale-105 hover:shadow-2xl"
>
    📞 Request a Call</button
><!-- Request a Call Floating Button -->

<!-- Floating Buttons (Fixed Right) -->

<!-- FIXED CTA BAR ON MOBILE -->
<div class="overflow-hidden">
    <a
            href="javascript:void(0);"
            id="mobile-fixed-cta"
            onclick="openRequestCallModal(this)" data-remark=" Free Site Visit | Fixed Mobile Button"

            class="fixed bottom-0 left-0 right-0 h-16 bg-accent-dark shadow-2xl flex justify-around hover:bg-accent-gold border-t-4 border-accent-gold items-center md:hidden z-40 text-white font-bold"
    >📞 Free Site Visit
    </a>
</div>

<!-- ENQUIRY POPUP MODAL -->
<div
        id="enquiry-pop-modal-bg"
        class="fixed inset-0 z-[99] hidden justify-center items-end md:items-center p-0 md:p-4 enquiry-pop-modal-bg"
>
    <div
            id="enquiry-pop-modal"
            class="enquiry-pop-modal closed w-full md:w-[450px] bg-white dark:bg-secondary-dark rounded-t-2xl md:rounded-2xl shadow-2xl p-8 pb-6 md:p-10 mx-auto border-t-4 border-accent-gold dark:border-accent-gold flex flex-col relative"
    >
        <button
                onclick="closeEnquiryModal()"
                class="absolute right-4 top-2 md:top-4 p-2 bg-accent-gold rounded-full text-white hover:bg-amber-600 shadow-md z-10"
        >
            <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="22"
                    height="22"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
            >
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
        <h3 class="text-2xl font-bold text-secondary-dark dark:text-white mb-4 text-center">
            Get Priority Pricing & Availability
        </h3>
        <form id="mobile-enquiry-form" action="{{ route('lead.submit') }}"  method="POST" class="space-y-4">
            @csrf

            <input type="text" placeholder="Full Name" name="Name" required minlength="3"
                                maxlength="50"
                                onkeypress="return /^[a-zA-Z ]+$/i.test(event.key)"
                class="w-full px-5 mb-3 py-3 rounded-lg bg-slate-100 border border-slate-300 focus:border-accent-gold focus:ring-1 focus:ring-accent-gold transition duration-300 text-secondary-dark dark:bg-slate-700 dark:border-slate-600 dark:text-white">

            <input type="email" placeholder="Email Address" name="Email"
                class="w-full mb-3 px-5 py-3 rounded-lg bg-slate-100 border border-slate-300 focus:border-accent-gold focus:ring-1 focus:ring-accent-gold transition duration-300 text-secondary-dark dark:bg-slate-700 dark:border-slate-600 dark:text-white">

            <input type="tel" placeholder="Phone Number" name="Mob"
            minlength="10"
                            maxlength="13"
                            onkeypress='return event.charCode >= 48 && event.charCode <= 57'
            required
                class="w-full mb-3 px-5 py-3 rounded-lg bg-slate-100 border border-slate-300 focus:border-accent-gold focus:ring-1 focus:ring-accent-gold transition duration-300 text-secondary-dark dark:bg-slate-700 dark:border-slate-600 dark:text-white">

            <div>
                <select name="City" required class="w-full px-5 py-3 mb-3  rounded-lg bg-slate-100 border border-slate-300 focus:border-accent-gold focus:ring-1 focus:ring-accent-gold transition duration-300 text-slate-500 appearance-none dark:bg-slate-700 dark:border-slate-600 dark:text-slate-300">
                    <option disabled selected>Kindly, give an update on it.</option>
                    <option value="10am-11am" class="text-secondary-dark dark:text-white">10am - 12pm</option>
                    <option value="12am-2pm" class="text-secondary-dark dark:text-white">12pm - 2pm</option>
                    <option value="2pm-4pm" class="text-secondary-dark dark:text-white">2pm - 4pm</option>
                    <option value="4pm-6pm" class="text-secondary-dark dark:text-white">4pm - 6pm</option>
                    <option value="6pm-8pm" class="text-secondary-dark dark:text-white">6pm - 8pm</option>
                </select>
            </div>
            <!-- Auto UTM capture -->
            <input type="hidden" name="utm_source" id="utm_source">
            <input type="hidden" name="utm_medium" id="utm_medium">
            <input type="hidden" name="utm_campaign" id="utm_campaign">
            <!-- reCAPTCHA token -->
            <input type="hidden" name="recaptcha_token" class="recaptcha-token">
            <button type="submit"
                class="w-full px-6 py-3 bg-yellow-500 text-white font-bold rounded-lg hover:bg-yellow-600 transition duration-300">
                Schedule Call Now
            </button>
        </form>
        <p id="mobile-enquiry-success" class="text-green-600 mt-3 text-center text-sm hidden"></p>
        <p id="mobile-enquiry-error" class="text-red-600 mt-3 text-center text-sm hidden"></p>
    </div>
</div>

<!-- HEADER/NAV & REST OF PAGE - UNCHANGED -->
<header
        class="bg-[#0f172a]/95 sticky top-0 z-50 shadow-md backdrop-blur-md border-b border-slate-700 transition-colors duration-500"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
        <div class="text-2xl font-extrabold tracking-tight text-white flex items-center">
            <a href="{!! url('/') !!}">
                <img
                    src="{!! asset('assets') !!}/images/alchemy-logo.webp"
                    alt="Evos Alchemy Logo"
                    class="w-[150px] transition-opacity duration-300"
                />
            </a>
        </div>
        <nav class="hidden md:flex items-center space-x-8 text-sm font-medium text-slate-200">
            <a href="#gold-class-living" class="hover:text-accent-gold transition duration-300">Experience</a>
            <a href="#sales-gallery" class="hover:text-accent-gold transition duration-300">Sales  Gallery</a>
            <a href="#architectural-vision" class="hover:text-accent-gold transition duration-300">Project Vision</a>
            <a href="#floor-plans" class="hover:text-accent-gold transition duration-300">Floor Plans</a>
            <a href="#amenities" class="hover:text-accent-gold transition duration-300">Amenities</a>
            <a href="#location" class="hover:text-accent-gold transition duration-300">Location</a>

            <a href="#walkthrough-video" class="hover:text-accent-gold transition duration-300"
            >Walkthrough Video</a
            >
            <a
                    href="#contact-us-block"
                    class="px-4 py-2 bg-accent-gold text-white font-bold rounded-full hover:bg-amber-600 transition duration-300 shadow-md"
            >Contact</a
            >
            <button
                    id="theme-toggle"
                    class="p-2 hidden rounded-full text-slate-200 hover:bg-slate-700 transition duration-300"
            >
                <svg
                        id="sun-icon"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="w-6 h-6 hidden"
                >
                    <circle cx="12" cy="12" r="4"></circle>
                    <path d="M12 2v2"></path>
                    <path d="M12 20v2"></path>
                    <path d="M4.93 4.93l1.41 1.41"></path>
                    <path d="M17.66 17.66l1.41 1.41"></path>
                    <path d="M2 12h2"></path>
                    <path d="M20 12h2"></path>
                    <path d="M4.93 19.07l1.41-1.41"></path>
                    <path d="M17.66 6.34l1.41-1.41"></path>
                </svg>
                <svg
                        id="moon-icon"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="w-6 h-6"
                >
                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                </svg>
            </button>
        </nav>
        <button
                onclick="openMobileMenu()"
                id="mobile-menu-toggle-btn"
                class="md:hidden text-2xl hover:text-accent-gold text-slate-200"
                aria-label="Open Mobile Menu"
        >
            <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
            >
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </button>
    </div>
</header>

        <main class="flex-grow">
            {{--@if(session('error'))
                <div class="bg-red-500 text-white p-3 rounded mb-4">
                    {{ session('error') }}
                </div>
            @endif

            @if(session('success'))
                <div class="bg-green-500 text-white p-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="bg-red-500 text-white p-3 rounded mb-4">
                    Please fix the errors below.
                </div>
            @endif--}}


                <script>
                    document.addEventListener("DOMContentLoaded", function () {

                        // SUCCESS ALERT
                        @if(session('success'))
                        Swal.fire({
                            title: "Success!",
                            text: "{{ session('success') }}",
                            icon: "success",
                            confirmButtonColor: "#3085d6",
                            confirmButtonText: "OK"
                        });
                        @endif

                        // ERROR ALERT
                        @if(session('error'))
                        Swal.fire({
                            title: "Error!",
                            text: "{{ session('error') }}",
                            icon: "error",
                            confirmButtonColor: "#d33",
                            confirmButtonText: "Retry"
                        });
                        @endif

                        // FORM VALIDATION ERRORS
                        @if ($errors->any())
                        Swal.fire({
                            title: "Please Fix the Errors",
                            html: `
            <ul style='text-align:left'>
                @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                @endforeach
                            </ul>
`,
                            icon: "warning",
                            confirmButtonColor: "#f6ad55",
                        });
                        @endif

                    });
                </script>
                <script>
                    document.addEventListener("DOMContentLoaded", function () {

                        // SUCCESS ALERT
                        @if(session('success'))
                        Swal.fire({
                            title: "Success!",
                            text: "{{ session('success') }}",
                            icon: "success",
                            confirmButtonColor: "#3085d6",
                            confirmButtonText: "OK"
                        });
                        @endif

                        // ERROR ALERT
                        @if(session('error'))
                        Swal.fire({
                            title: "Error!",
                            text: "{{ session('error') }}",
                            icon: "error",
                            confirmButtonColor: "#d33",
                            confirmButtonText: "Retry"
                        });
                        @endif

                        // FORM VALIDATION ERRORS
                        @if ($errors->any())
                        Swal.fire({
                            title: "Please Fix the Errors",
                            html: `
            <ul style='text-align:left'>
                @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                @endforeach
                            </ul>
`,
                            icon: "warning",
                            confirmButtonColor: "#f6ad55",
                        });
                        @endif

                    });
                </script>
                <script>
                    document.addEventListener("DOMContentLoaded", function () {

                        // SUCCESS ALERT
                        @if(session('success'))
                        Swal.fire({
                            title: "Success!",
                            text: "{{ session('success') }}",
                            icon: "success",
                            confirmButtonColor: "#3085d6",
                            confirmButtonText: "OK"
                        });
                        @endif

                        // ERROR ALERT
                        @if(session('error'))
                        Swal.fire({
                            title: "Error!",
                            text: "{{ session('error') }}",
                            icon: "error",
                            confirmButtonColor: "#d33",
                            confirmButtonText: "Retry"
                        });
                        @endif

                        // FORM VALIDATION ERRORS
                        @if ($errors->any())
                        Swal.fire({
                            title: "Please Fix the Errors",
                            html: `
            <ul style='text-align:left'>
                @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                @endforeach
                            </ul>
`,
                            icon: "warning",
                            confirmButtonColor: "#f6ad55",
                        });
                        @endif

                    });
                </script>

                @yield('content')
        </main>
        <!-- 10. Footer & Contact - Switched to anchor dark section -->
<footer id="contact" class="bg-accent-dark border-t border-slate-700 text-slate-200 dark:bg-primary-dark-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 md:py-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
            <!-- Project Name -->
            <div class="reveal-element">
                <a
                        href="https://evosbuildcon.com/”
"
                ></a>
                <img width="80%" src="{!! asset('assets') !!}/images/Untitled-2d-01.webp?evos%20logo" alt="logo" />
                <p class="text-sm text-slate-400 max-w-xs mx-auto md:mx-0 mt-3">
                    From the house of EVOS Buildcon, Odisha’s most trusted luxury developer. Winner of “Best
                    Residential Luxury Project – 2025” title by OTV Business Odisha Awards, Evos Alchemy stands
                    tall as a symbol of design excellence and legacy craftsmanship. Secure your future
                    address of pride today.
                </p>
            </div>

            <!-- Contact Info -->
            <div class="reveal-element" style="transition-delay: 0.1s">
                <h4 class="text-xl font-bold text-white mb-4">Contact Details</h4>

                <ul class="space-y-2 text-slate-400 text-sm mb-6">
                    <li>
                        Email:
                        <a href="mailto:enquiry@evosalchemy.com" class="hover:text-accent-gold transition">
                            enquiry@evosalchemy.com
                        </a>
                    </li>

                    <li>
                        Phone:
                        <a href="tel:+919776099997" class="hover:text-accent-gold transition">
                            +91 9776099997
                        </a>
                    </li>

                    <li>
                        Address:
                        <span class="block leading-relaxed">
                                    Raghunathpur, Nandankanan Road, Bhubaneswar, Odisha 751024
                                </span>
                    </li>
                </ul>

                <!-- Social Media Section -->
                <h4 class="text-lg font-semibold text-white mb-3">Follow Us</h4>

                <div class="flex items-center space-x-4">
                    <!-- Facebook -->
                    <a
                            href="https://www.facebook.com/EvosBuildcon"
                            target="_blank"
                            class="w-9 h-9 flex items-center justify-center rounded-full bg-white/10 hover:bg-accent-gold text-white hover:text-gray-900 transition"
                    >
                        <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                        >
                            <path
                                    d="M22 12a10 10 0 1 0-11.5 9.9v-7h-2v-3h2v-2.3c0-2 1.2-3.1 3-3.1 .9 0 1.8.1 1.8.1v2h-1c-1 0-1.3.6-1.3 1.2V12h2.3l-.4 3h-1.9v7A10 10 0 0 0 22 12"
                            ></path>
                        </svg>
                    </a>

                    <!-- Instagram -->
                    <a
                            href="https://www.instagram.com/evos_bbsr/"
                            target="_blank"
                            class="w-9 h-9 flex items-center justify-center rounded-full bg-white/10 hover:bg-accent-gold text-white hover:text-gray-900 transition"
                    >
                        <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                        >
                            <rect width="20" height="20" x="2" y="2" rx="5"></rect>
                            <path d="M9 12a3 3 0 1 0 6 0 3 3 0 0 0-6 0"></path>
                            <path d="M16.5 7.5h.01"></path>
                        </svg>
                    </a>

                    <!-- Twitter/X -->
                   <!-- <a
                            href="https://x.com/EvosBuildcon_"
                            target="_blank"
                            class="w-9 h-9 flex items-center justify-center rounded-full bg-white/10 hover:bg-accent-gold text-white hover:text-gray-900 transition"
                    >
                        <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                        >
                            <path d="M18 2h-3l-4 6-4-6H4l6.5 9L4 22h3l4-6 4 6h3l-6.5-11L18 2z"></path>
                        </svg>
                    </a>-->

                    <!-- YouTube -->
                    <a
                            href="https://www.youtube.com/channel/UC0tMyXpreiUFxc77M3_jZIw?view_as=subscriber"
                            target="_blank"
                            class="w-9 h-9 flex items-center justify-center rounded-full bg-white/10 hover:bg-accent-gold text-white hover:text-gray-900 transition"
                    >
                        <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                        >
                            <path
                                    d="M19.6 3.2H4.4A4.4 4.4 0 0 0 0 7.6v8.8a4.4 4.4 0 0 0 4.4 4.4h15.2a4.4 4.4 0 0 0 4.4-4.4V7.6a4.4 4.4 0 0 0-4.4-4.4ZM9.8 16.4V7.6l7.2 4.4-7.2 4.4Z"
                            />
                        </svg>
                    </a>

                    <!-- Pinterest -->
                    <!--<a
                            href="https://in.pinterest.com/evos_buildcon/"
                            target="_blank"
                            class="w-9 h-9 flex items-center justify-center rounded-full bg-white/10 hover:bg-accent-gold text-white hover:text-gray-900 transition"
                    >
                        <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                        >
                            <path
                                    d="M12 0C5.37 0 0 5.37 0 12c0 5 3.07 9.27 7.43 11-.1-.94-.2-2.39.04-3.42.22-.96 1.44-6.14 1.44-6.14s-.36-.72-.36-1.78c0-1.66.96-2.9 2.16-2.9 1.02 0 1.52.76 1.52 1.67 0 1.02-.65 2.54-.98 3.96-.28 1.18.6 2.14 1.78 2.14 2.14 0 3.78-2.25 3.78-5.5 0-2.88-2.07-4.9-5.02-4.9-3.42 0-5.42 2.57-5.42 5.22 0 1.04.4 2.14.9 2.74.1.12.12.22.1.34-.1.38-.32 1.18-.36 1.34-.06.18-.2.24-.36.14-1.32-.6-2.14-2.52-2.14-4.06 0-3.3 2.4-6.32 6.92-6.32 3.64 0 6.48 2.6 6.48 6.1 0 3.62-2.28 6.54-5.46 6.54-1.06 0-2.06-.56-2.4-1.2l-.66 2.5c-.26.96-.94 2.18-1.4 2.92A12.02 12.02 0 0 0 12 24c6.63 0 12-5.37 12-12S18.63 0 12 0z"
                            />
                        </svg>
                    </a>-->

                    <!-- LinkedIn -->
                    <a
                            href="https://www.linkedin.com/company/evosbuildcon/"
                            target="_blank"
                            class="w-9 h-9 flex items-center justify-center rounded-full bg-white/10 hover:bg-accent-gold text-white hover:text-gray-900 transition"
                    >
                        <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                        >
                            <path
                                    d="M4.98 3.5C4.98 4.6 4.1 5.5 3 5.5s-1.98-.9-1.98-2S1.9 1.5 3 1.5s1.98.9 1.98 2zM.5 23.5h5V7.98h-5V23.5zM8.5 7.98v15.52h5v-8.22c0-2.06.4-4.06 2.96-4.06 2.52 0 2.54 2.34 2.54 4.18v8.1h5v-8.96c0-4.42-.94-7.8-6.02-7.8-2.4 0-4.02 1.32-4.68 2.58h-.08V7.98h-4.72z"
                            />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Legal/Quick Links -->
            <div class="reveal-element" style="transition-delay: 0.2s">
                <h4 class="text-xl font-bold text-white mb-4">Information</h4>
                <ul class="space-y-2 text-slate-400 text-sm">
                    <li><a href="{!! route('page.privacy') !!}" class="hover:text-accent-gold">Privacy Policy</a></li>
                    <li>
                        <a href="{!! route('page.terms') !!}" class="hover:text-accent-gold">
                            Terms & Conditions</a
                        >
                    </li>
                </ul>
                <!-- Heading -->
                <h3 class="text-md mt-3 font-bold text-white">Scan QR Code for More Information</h3>
                <p class="font-semibold text-white">
                    RERA Registration No.: <span class="text-accent-gold font-bold">RP/19/2023/01077</span>
                </p>
                <div class="inline-block bg-white dark:bg-slate-800 rounded-2xl p-3 mt-3 shadow-lg">
                    <img
                            src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=https://rera.odisha.gov.in/projects/project-details/VTJGc2RHVmtYMTlnVDdFOE1SbllUQzR0K1Z0VnhsOUF4QXU0WXliTnc0MVBTMXdCOWJ3cEQ2c05URWlKZHVhSjhjdVh6ZjdoOGxrWk5IQWMwNjhJVXJnRG0vMkRVSEVtZWFnbGg4VFIyNzQ9?name=EVOS%20ALCHEMY"
                            alt="QR Code"
                            class="w-20 h-20 mx-auto rounded-lg"
                    />
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="mt-12 pt-8 border-t border-slate-700 text-center">
            <p class="text-xs text-slate-500">&copy; 2025 EVOS ALCHEMY | Powered by Digital Nawab</p>
        </div>
    </div>
</footer>

<!-- Luxury Video Modal (Hidden by default) -->
<!-- 🎬 Video Modal -->
<div
        id="video-modal"
        class="fixed inset-0 z-[120] hidden items-center justify-center bg-black/80 backdrop-blur-sm transition-opacity duration-300"
>
    <div class="relative w-11/12 max-w-3xl aspect-video bg-black rounded-2xl overflow-hidden shadow-2xl">
        <button
                onclick="closeVideoModal()"
                class="absolute -top-10 right-0 text-white text-3xl hover:text-yellow-400 transition"
        >
            &times;
        </button>
        <div id="video-player" class="w-full h-full"></div>
    </div>
</div>

<!-- 🌙 Modal  Enquiry Form-->
<div
        id="request-call-modal"
        class="fixed inset-0 z-[110] hidden flex items-center justify-center bg-black/70 backdrop-blur-md transition-opacity duration-300 opacity-0"
>
    <!-- Modal Box -->
    <div
            id="modal-content"
            class="relative w-11/12 max-w-md bg-white/90 dark:bg-slate-800/80 backdrop-blur-xl p-8 rounded-2xl border border-slate-200 dark:border-slate-700 transform scale-95 transition-all duration-300 shadow-xl"
    >
        <!-- ❌ Close Button -->
        <button
                onclick="closeRequestCallModal()"
                class="absolute top-3 right-3 text-2xl text-slate-700 dark:text-white hover:text-yellow-500 transition duration-200"
        >
            <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
            >
                <line x1="18" y1="6" x2="6" y2="18" />
                <line x1="6" y1="6" x2="18" y2="18" />
            </svg>
        </button>

        <!-- ✨ Heading -->
        <h3 class="text-3xl font-extrabold text-slate-900 dark:text-white mb-6 text-center">
            Get a <span class="text-yellow-500">Priority Call</span>
        </h3>

        <!-- 📋 Form -->
        <form id="modal-call-form" class="lead-form" data-form-name="modal_call_form"  action="{{ route('lead.submit') }}" method="POST" class="space-y-4">
            @csrf
            <input type="hidden" name="Remark" id="modal_remark">
            <input type="text" placeholder="Full Name" name="Name" required minlength="3"
                                maxlength="50"
                                onkeypress="return /^[a-zA-Z ]+$/i.test(event.key)"
                class="w-full mb-3 px-5 py-3 rounded-lg bg-slate-100 border border-slate-300 focus:border-accent-gold focus:ring-1 focus:ring-accent-gold transition duration-300 text-secondary-dark dark:bg-slate-700 dark:border-slate-600 dark:text-white">

            <input type="email" placeholder="Email Address" name="Email"
                class="w-full mb-3 px-5 py-3 rounded-lg bg-slate-100 border border-slate-300 focus:border-accent-gold focus:ring-1 focus:ring-accent-gold transition duration-300 text-secondary-dark dark:bg-slate-700 dark:border-slate-600 dark:text-white">

            <input type="tel" placeholder="Phone Number" name="Mob" required minlength="10"
                            maxlength="13"
                            onkeypress='return event.charCode >= 48 && event.charCode <= 57'
                class="w-full mb-3 px-5 py-3 rounded-lg bg-slate-100 border border-slate-300 focus:border-accent-gold focus:ring-1 focus:ring-accent-gold transition duration-300 text-secondary-dark dark:bg-slate-700 dark:border-slate-600 dark:text-white">

                <div>
                    <select name="City" required
                            class="w-full px-5 py-3 mb-3  rounded-lg bg-slate-100 border border-slate-300 focus:border-accent-gold focus:ring-1 focus:ring-accent-gold transition duration-300 text-slate-500 appearance-none dark:bg-slate-700 dark:border-slate-600 dark:text-slate-300">
                        <option disabled selected>Kindly, give an update on it.</option>
                        <option value="10am-11am" class="text-secondary-dark dark:text-white">10am - 12pm</option>
                        <option value="12am-2pm" class="text-secondary-dark dark:text-white">12pm - 2pm</option>
                        <option value="2pm-4pm" class="text-secondary-dark dark:text-white">2pm - 4pm</option>
                        <option value="4pm-6pm" class="text-secondary-dark dark:text-white">4pm - 6pm</option>
                        <option value="6pm-8pm" class="text-secondary-dark dark:text-white">6pm - 8pm</option>
                        <option value="6pm-8pm" class="text-secondary-dark dark:text-white">6pm - 8pm</option>
                    </select>
                </div>
                <!-- Auto UTM capture -->
                <input type="hidden" name="utm_source" id="utm_source">
                <input type="hidden" name="utm_medium" id="utm_medium">
                <input type="hidden" name="utm_campaign" id="utm_campaign">

            <!-- reCAPTCHA token -->
            <input type="hidden" name="recaptcha_token" class="recaptcha-token">

            <button type="submit"
                class="w-full px-6 py-3 bg-yellow-500 text-white font-bold rounded-lg hover:bg-yellow-600 transition duration-300">
                Schedule Call Now
            </button>
        </form>


        <p id="modal-form-message" class="text-center text-sm mt-3 text-green-600 hidden"></p>
        <p id="modal-form-error" class="text-center text-sm mt-3 text-red-600 dark:text-red-400 hidden"></p>
    </div>
</div>

<!-- ... (keep everything until end of body unchanged) ... -->
<!-- All the sections, slider, etc., remain as in original -->

<!-- SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Master JS Stacks -->

<script>
document.addEventListener("DOMContentLoaded", function () {

    const params = new URLSearchParams(window.location.search);

    // ENV Values
    const GA4_ID = "{{ env('GA4_MEASUREMENT_ID') }}";
    const GTM_ID = "{{ env('GTM_ID') }}";

    // Detect all forms with class: .lead-form
    const leadForms = document.querySelectorAll(".lead-form");

    leadForms.forEach(function (form) {

        // UTM Auto-fill for each form
        let utmSource  = form.querySelector(".utm_source");
        let utmMedium  = form.querySelector(".utm_medium");
        let utmCampaign = form.querySelector(".utm_campaign");

        if (utmSource) utmSource.value = params.get("utm_source") || "";
        if (utmMedium) utmMedium.value = params.get("utm_medium") || "";
        if (utmCampaign) utmCampaign.value = params.get("utm_campaign") || "";

        // Form Submit Event
        form.addEventListener("submit", function () {

            // Identify form location automatically
            const formName = form.getAttribute("data-form-name") || "unknown_form";

            // GTM Event
            if (GTM_ID && GTM_ID.trim() !== "") {
                window.dataLayer = window.dataLayer || [];
                dataLayer.push({
                    "event": "lead_form_submit",
                    "form_location": formName
                });
            }

            // GA4 Event
            if (GA4_ID && GA4_ID.trim() !== "" && typeof gtag === "function") {
                gtag("event", "generate_lead", {
                    method: formName
                });
            }

        });

    });

});
</script>



@if(!empty(env('RECAPTCHA_SITE_KEY')))
<script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Load token every time user interacts OR every few seconds
    function loadRecaptchaForAllForms() {
        grecaptcha.ready(function () {
            grecaptcha.execute('{{ env("RECAPTCHA_SITE_KEY") }}', { action: "submit" })
                .then(function (token) {
                    // Fill ALL recaptcha-token inputs
                    document.querySelectorAll(".recaptcha-token").forEach(function (el) {
                        el.value = token;
                    });
                });
        });
    }

    // Load on page load
    loadRecaptchaForAllForms();

    // Refresh token every 90 seconds (Google recommended)
    setInterval(loadRecaptchaForAllForms, 90000);
});
</script>
@endif



@stack('scripts')
<script>
    AOS.init({
        once: true,
        duration: 700,
    });
</script>

<script>
    // ---- MOBILE MENU TOGGLE ----
    function openMobileMenu() {
        const overlay = document.getElementById("mobile-menu-overlay");
        const closeBtn = document.getElementById("mobile-menu-close-btn");
        overlay.style.display = "block";
        setTimeout(() => {
            overlay.classList.remove("-translate-x-full");
            // Show close button (for overlay)
            if (closeBtn) closeBtn.style.display = "";
        }, 10);
        document.body.style.overflow = "hidden";
    }

    function closeMobileMenu() {
        const overlay = document.getElementById("mobile-menu-overlay");
        const closeBtn = document.getElementById("mobile-menu-close-btn");
        overlay.classList.add("-translate-x-full");
        setTimeout(() => {
            overlay.style.display = "none";
            // Hide close button (ensure not tab-reachable)
            if (closeBtn) closeBtn.style.display = "none";
        }, 300);
        document.body.style.overflow = "";
    }

    // Navigation outside click closes menu
    document.addEventListener("click", function (e) {
        const overlay = document.getElementById("mobile-menu-overlay");
        if (!overlay) return;
        if (overlay.style.display !== "none" && overlay.style.display !== "") {
            if (e.target === overlay) {
                closeMobileMenu();
            }
        }
    });

    // ESC closes both mobile menu and enquiry modal
    document.addEventListener("keydown", function (e) {
        if (e.key === "Escape") {
            closeMobileMenu();
            closeEnquiryModal();
        }
    });

    // ---- FIXED ENQUIRY POPUP FOR MOBILE ----
    const enquiryOpenBtn = document.getElementById("enquiry-open-btn");
    if (enquiryOpenBtn) {
        enquiryOpenBtn.addEventListener("click", function (e) {
            e.preventDefault();
            openEnquiryModal();
        });
    }

    function openEnquiryModal() {
        const bg = document.getElementById("enquiry-pop-modal-bg");
        const modal = document.getElementById("enquiry-pop-modal");
        bg.classList.remove("hidden");
        setTimeout(() => {
            bg.classList.add("flex");
            modal.classList.remove("closed");
            modal.classList.add("open");
        }, 10);
        document.body.style.overflow = "hidden";
    }

    function closeEnquiryModal() {
        const bg = document.getElementById("enquiry-pop-modal-bg");
        const modal = document.getElementById("enquiry-pop-modal");
        bg.classList.remove("flex");
        modal.classList.remove("open");
        modal.classList.add("closed");
        setTimeout(() => {
            bg.classList.add("hidden");
            document.body.style.overflow = "";
        }, 300);
    }

    document.getElementById("enquiry-pop-modal-bg").addEventListener("click", function (e) {
        if (e.target === this) {
            closeEnquiryModal();
        }
    });

    // Submit for mobile enquiry modal (shows fake success/error message only)
    document.getElementById("mobile-enquiry-form").addEventListener("submit", function (e) {
        e.preventDefault();
        const succ = document.getElementById("mobile-enquiry-success");
        const err = document.getElementById("mobile-enquiry-error");
        succ.classList.add("hidden");
        err.classList.add("hidden");
        if (this.checkValidity()) {
            succ.textContent = "Thank you! We'll contact you soon.";
            succ.classList.remove("hidden");
            this.reset();
            setTimeout(closeEnquiryModal, 1500);
        } else {
            err.textContent = "Please fill all required fields.";
            err.classList.remove("hidden");
        }
    });

    // --- Other Original JS ---

    // Floor Plan Carousel
    function scrollCarousel(containerId, direction) {
        const container = document.getElementById(containerId);
        if (!container) return;
        let itemWidth;
        if (window.innerWidth >= 1024) {
            itemWidth = container.clientWidth / 3;
        } else if (window.innerWidth >= 640) {
            itemWidth = container.clientWidth / 2;
        } else {
            itemWidth = container.querySelector("div").offsetWidth + window.innerWidth * 0.04;
        }
        container.scrollLeft += direction * itemWidth;
    }

    document.addEventListener("DOMContentLoaded", () => {
        // Theme toggle and reveal logic
        const themeToggle = document.getElementById("theme-toggle");
        const htmlElement = document.documentElement;
        const sunIcon = document.getElementById("sun-icon");
        const moonIcon = document.getElementById("moon-icon");
        const savedTheme = localStorage.getItem("theme");
        const prefersDark = window.matchMedia("(prefers-color-scheme: dark)").matches;
        if (savedTheme === "dark" || (!savedTheme && prefersDark)) {
            htmlElement.classList.add("dark");
            moonIcon.classList.add("hidden");
            sunIcon.classList.remove("hidden");
        } else {
            sunIcon.classList.add("hidden");
            moonIcon.classList.remove("hidden");
        }
        themeToggle.addEventListener("click", () => {
            if (htmlElement.classList.contains("dark")) {
                htmlElement.classList.remove("dark");
                localStorage.setItem("theme", "light");
                moonIcon.classList.remove("hidden");
                sunIcon.classList.add("hidden");
            } else {
                htmlElement.classList.add("dark");
                localStorage.setItem("theme", "dark");
                moonIcon.classList.add("hidden");
                sunIcon.classList.remove("hidden");
            }
        });

        // Reveal
        const elements = document.querySelectorAll(".reveal-element");
        const observerOptions = { root: null, rootMargin: "0px", threshold: 0.1 };
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        elements.forEach((el) => {
            observer.observe(el);
        });

        // Parallax
        const heroBg = document.getElementById("hero-bg");
        if (heroBg) {
            const handleParallax = () => {
                const parallaxFactor = 0.4;
                const yOffset = window.scrollY * parallaxFactor;
                heroBg.style.transform = `translate3d(0, ${yOffset}px, 0)`;
            };
            window.addEventListener("scroll", handleParallax);
            handleParallax();
        }

        // Show mobile menu close btn if overlay is open on load (very rare fallback)
        const overlay = document.getElementById("mobile-menu-overlay");
        const closeBtn = document.getElementById("mobile-menu-close-btn");
        if (overlay && closeBtn && overlay.style.display !== "none" && overlay.style.display !== "") {
            closeBtn.style.display = "";
        }

        // Inquiry Forms (desktop)
        const form = document.getElementById("priority-form");
        const formMessage = document.getElementById("form-message");
        const formErrorMessage = document.getElementById("form-error-message");
        form.addEventListener("submit", function (e) {
            e.preventDefault();
            formMessage.classList.add("hidden");
            formErrorMessage.classList.add("hidden");
            if (form.checkValidity()) {
                const submitButton = form.querySelector('button[type="submit"]');
                const originalText = submitButton.innerHTML;
                submitButton.disabled = true;
                submitButton.innerHTML = "Securing...";
                setTimeout(() => {
                    submitButton.innerHTML = originalText;
                    submitButton.disabled = false;
                    form.reset();
                    formMessage.classList.remove("hidden");
                    formMessage.classList.add("text-green-600");
                    formMessage.textContent =
                        "Success! Your priority access is confirmed. We'll contact you within 24 hours.";
                }, 1500);
            } else {
                formErrorMessage.textContent = "Please ensure all required fields are filled out correctly.";
                formErrorMessage.classList.remove("hidden");
                form.querySelector(":invalid")?.focus();
            }
        });
    });
</script>

<!-- 🧠 JS for modal -->

<!-- ⚙️ Modal Script -->
<script>
    const modal = document.getElementById("request-call-modal");
    const modalContent = document.getElementById("modal-content");

    function openRequestCallModal(trigger = null) {

        const remarkInput = document.getElementById("modal_remark");

        // IF CLICKED
        if (trigger && trigger.dataset.remark) {
            remarkInput.value = trigger.dataset.remark;
        }
        else {
            // AUTO POPUP
            remarkInput.value = "window load pop";
        }

        modal.classList.remove("hidden");

        setTimeout(() => {
            modal.classList.remove("opacity-0");
            modalContent.classList.remove("scale-95");
        }, 10);
    }


    function closeRequestCallModal() {
        modal.classList.add("opacity-0");
        modalContent.classList.add("scale-95");
        setTimeout(() => {
            modal.classList.add("hidden");
        }, 300);
    }

    // Close modal if click outside
    modal.addEventListener("click", (e) => {
        if (e.target === modal) closeRequestCallModal();
    });
</script>

<!--
<script>
    const modal = document.getElementById("request-call-modal");
    const modalContent = document.getElementById("modal-content");

    function openRequestCallModal() {
        modal.classList.remove("hidden");
        setTimeout(() => {
            modal.classList.remove("opacity-0");
            modalContent.classList.remove("scale-95");
        }, 10);
    }

    // Auto open after 10 seconds
    window.addEventListener("load", function () {
        setTimeout(() => {
            openRequestCallModal();
        }, 10000);
    });



    function closeRequestCallModal() {
        modal.classList.add("opacity-0");
        modalContent.classList.add("scale-95");
        setTimeout(() => {
            modal.classList.add("hidden");
        }, 300);
    }

    // Close modal on clicking outside
    modal.addEventListener("click", (e) => {
        if (e.target === modal) closeRequestCallModal();
    });
</script>
-->
</body>
</html>

