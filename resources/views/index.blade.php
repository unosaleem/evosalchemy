@extends('layouts.master')

@section('title','Premium Luxury Apartments | 2 & 3 BHK Homes at Best Price')
@section('description','Book your dream home today! Explore 2 & 3 BHK luxury apartments with modern amenities, excellent location, and flexible pricing. Get floor plans, pricing & exclusive offers now.')

@section('content')
    <!-- Hero Slider -->
<section class="relative w-full h-[80vh]">
    <div class="swiper mySwiper h-full">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div
                    class="swiper-slide Main-slide"
                    style="background-image: url(&quot;assets/slider/slider-1.webp&quot;)"
            >
                <div class="slide-content" data-aos="fade-up" data-aos-delay="300">
                    <h2 class="text-4xl md:text-5xl font-bold mb-2">Luxury Podium Lifestyle</h2>
                    <p class="text-lg md:text-xl text-gray-200">Elevate your everyday experience.</p>

                    <a
                            href="javascript:void(0);"
                            onclick="openRequestCallModal(this)" data-remark="Book a Site visit | Slider Section "
                            class="inline-block px-10 py-3 bg-accent-gold text-white font-semibold mt-4 rounded-2xl shadow-lg hover:bg-yellow-500 hover:text-gray-900 transition duration-300 animate-[float_3s_ease-in-out_infinite]"
                    >
                        Book a Site visit
                    </a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide" style="background-image: url(&quot;assets/slider/slider-2.webp&quot;)">
                <div class="slide-content" data-aos="fade-up" data-aos-delay="300">
                    <h2 class="text-4xl md:text-5xl font-bold mb-2">Landscaped Serenity</h2>
                    <p class="text-lg md:text-xl text-gray-200">Find peace amidst lush surroundings.</p>
                    <a
                            href="javascript:void(0);"
                           onclick="openRequestCallModal(this)" data-remark="Request a Call | Slider Section "
                            class="inline-block px-10 py-3 bg-accent-gold text-white font-semibold rounded-2xl mt-4 shadow-lg hover:bg-yellow-500 hover:text-gray-900 transition duration-300 animate-[float_3s_ease-in-out_infinite]"
                    >
                        Request a Call
                    </a>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide" style="background-image: url(&quot;assets/slider/slider-3.webp&quot;)">
                <div class="slide-content" data-aos="fade-up" data-aos-delay="300">
                    <h2 class="text-4xl md:text-5xl font-bold mb-2">A Space for Wellness</h2>
                    <p class="text-lg md:text-xl text-gray-200">Crafted for rejuvenation and comfort.</p>

                    <a
                            href="javascript:void(0);"
                            onclick="openRequestCallModal(this)" data-remark="Check Pricing | Slider Section "
                            class="inline-block px-10 py-3 bg-accent-gold text-white font-semibold rounded-2xl mt-4 shadow-lg hover:bg-yellow-500 hover:text-gray-900 transition duration-300 animate-[float_3s_ease-in-out_infinite]"
                    >
                        Check Pricing
                    </a>
                </div>
            </div>
        </div>

        <!-- Pagination & Arrows -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

<!-- 3. EXPLORE GOLD CLASS LIVING SECTION (White Background) -->
<section id="gold-class-living" class="py-12 bg-white dark:bg-secondary-dark transition-colors duration-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 reveal-element">
        <header class="text-center mb-16">
            <h2 class="text-4xl font-extrabold text-secondary-dark dark:text-white mb-3">
                Experience <span class="text-accent-gold">Gold Class</span> Living
            </h2>
            <p class="text-xl font-light text-slate-600 dark:text-slate-300">
                Unmatched scale, design, and exclusivity.
            </p>
        </header>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left: Features List -->
            <ul class="space-y-6 text-lg text-slate-700 list-disc pl-5 dark:text-slate-300">
                <li class="">
                    <p>
                        <strong>Odisha’s Tallest & Largest Landmark</strong> With 2 Towers Of 42 Storeys & 2
                        Towers Of 43 Storeys.
                    </p>
                </li>
                <li class="">
                    <p><strong>6.9 Acre Estate</strong> With More Than 70% Open Spaces.</p>
                </li>
                <li class="">
                    <p>Designed By World-renowned Architect Sanjay Puri.</p>
                </li>
                <li class="">
                    <p>Landscaping by Landscape Tectonix Limited, Thailand.</p>
                </li>
                <li class="">
                    <p>Palatial 3, 3+S & 4+S Bedded Residences with Grand Sundecks.</p>
                </li>
                <li class="">
                    <p>Over 30+ Curated Lifestyle Indulgences Across Two Levels (Arth & Aer).</p>
                </li>
                <li class="">
                    <p>A Community Of Like-minded Elite From Different Walks of Life.</p>
                </li>
                <li class="list-none">
                    <a
                            href="javascript:void(0);"
                            onclick="openRequestCallModal(this)" data-remark="Check Floor Plans & Pricing | Gold Class Living Section "
                            class="inline-block px-10 py-3 bg-accent-gold text-white font-semibold rounded-2xl shadow-lg hover:bg-yellow-500 hover:text-gray-900 transition duration-300 animate-[float_3s_ease-in-out_infinite]"
                    >
                        Check Floor Plans & Pricing
                    </a>
                </li>
            </ul>

            <!-- Right: Image Placeholder -->
            <div class="aspect-square rounded-xl overflow-hidden">
                <img
                        src="assets/images/alchemy-banner.webp"
                        alt="Iconic Tower Elevation Visual"
                        class="w-full h-full object-cover"
                />
            </div>
        </div>
    </div>
</section>

<!-- State-of-Art Sales Gallery -->
<section
        id="sales-gallery"
        class="py-12 w-full relative bg-accent-dark dark:bg-accent-dark transition-colors duration-500"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 reveal-element">
        <!-- Heading -->
        <header class="text-center mb-14">
            <h2 class="text-4xl font-extrabold text-white mb-3">
                Our <span class="text-accent-gold">state of art</span> sales gallery
            </h2>
        </header>

        <!-- Shorts Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 justify-items-center">
            <!-- Video 1 -->
            <div class="w-full aspect-[9/16] rounded-2xl overflow-hidden shadow-xl bg-black">
                <iframe
                        class="w-full h-full"
                        src="https://www.youtube.com/embed/c7XGQOFUtRI?autoplay=1&mute=1&controls=0&loop=1&playlist=c7XGQOFUtRI&modestbranding=1&rel=0&playsinline=1"
                        allow="autoplay; encrypted-media"
                        allowfullscreen
                >
                </iframe>
                <a href="javascript:void(0);" onclick="openRequestCallModal(this)" data-remark="Check Floor Plans & Pricing | Sales Gallery videos-2 " class=" px-10 py-3 block md:hidden rounded-2xl font-semibold text-white bg-gradient-to-r from-[#d4a056] to-[#b7853d] hover:from-[#f5c46a] hover:to-[#e1a847] transition-all duration-300 transform hover:-translate-y-1 focus:ring-4 focus:ring-amber-300" bis_skin_checked="1">
                    Check Floor Plans &amp; Pricing
                </a>

            </div>

            <!-- Video 2 -->
            <div class="w-full aspect-[9/16] rounded-2xl overflow-hidden shadow-xl bg-black">
                <iframe
                        class="w-full h-full"
                        src="https://www.youtube.com/embed/7MjJL0_ZgdU?autoplay=1&mute=1&controls=0&loop=1&playlist=7MjJL0_ZgdU&modestbranding=1&rel=0&playsinline=1"
                        allow="autoplay; encrypted-media"
                        allowfullscreen
                >
                </iframe>
                <a href="javascript:void(0);" onclick="openRequestCallModal(this)" data-remark="Check Floor Plans & Pricing | Sales Gallery videos-2 " class=" px-10 py-3 block sm:hidden rounded-2xl font-semibold text-white bg-gradient-to-r from-[#d4a056] to-[#b7853d] hover:from-[#f5c46a] hover:to-[#e1a847] transition-all duration-300 transform hover:-translate-y-1 focus:ring-4 focus:ring-amber-300" bis_skin_checked="1">
                    Check Floor Plans &amp; Pricing
                </a>

            </div>

            <!-- Video 3 -->
            <div class="w-full aspect-[9/16] rounded-2xl overflow-hidden shadow-xl bg-black">
                <iframe
                        class="w-full h-full"
                        src="https://www.youtube.com/embed/DdZhUO-4khI?autoplay=1&mute=1&controls=0&loop=1&playlist=DdZhUO-4khI&modestbranding=1&rel=0&playsinline=1"
                        allow="autoplay; encrypted-media"
                        allowfullscreen
                >
                </iframe>
                <a href="javascript:void(0);" onclick="openRequestCallModal(this)" data-remark="Check Floor Plans & Pricing | Sales Gallery videos-3 " class=" px-10 py-3 block sm:hidden rounded-2xl font-semibold text-white bg-gradient-to-r from-[#d4a056] to-[#b7853d] hover:from-[#f5c46a] hover:to-[#e1a847] transition-all duration-300 transform hover:-translate-y-1 focus:ring-4 focus:ring-amber-300" bis_skin_checked="1">
                    Check Floor Plans &amp; Pricing
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 1.About   Section with Parallax Background and Lead Form (Full-width on mobile, split on desktop) -->
<section
        id="architectural-vision"
        class="py-12 relative dark:bg-secondary-dark transition-colors duration-500 flex items-center justify-center overflow-hidden"
>
    <!-- Background Visual (Targeted for Parallax) -->
    <!-- Note: Added background-attachment: fixed for simple, reliable parallax effect -->
    <div
            class="absolute inset-0 bg-cover bg-center opacity-70 dark:opacity-40"
            style="
                    background-image: url(&quot;https://evosbuildcon.com/wp-content/uploads/2024/03/01-banner.jpg&quot;);
                "
    ></div>
    <div class="absolute inset-0 bg-primary-light-bg/80 backdrop-blur-sm dark:bg-primary-dark-bg/80"></div>

    <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center"
    >
        <!-- Marketing Copy -->
        <div class="lg:col-span-7 text-center lg:text-left reveal-element">
            <p class="text-accent-gold uppercase tracking-widest text-sm mb-4 font-semibold">Evos Alchemy</p>
            <h2
                    class="text-4xl md:text-5xl font-extrabold leading-tight text-secondary-dark dark:text-white mb-6"
            >
                Live the <br />
                <span class="text-accent-gold">Tallest Class</span> of <br />
                Architectural Marvel
            </h2>
            <p class="text-slate-600 dark:text-slate-300 text-xl max-w-xl mx-auto lg:mx-0 mb-8 font-light">
                DESIGNED BY THE RENOWNED SANJAY PURI.
            </p>
            <p>
                Evos Alchemy, nestled in Patia’s posh neighbourhood, rises majestically with its 42/43-storey,
                four-tower skyline — the tallest residential development in Odisha. Designed as a gated haven
                for the city’s elite, this landmark blends opulent residences with lush, thoughtfully curated
                landscapes to create an enclave for those who value the finer side of life.
            </p>
            <p class="mb-3">
                Step out of your luxurious home into a world of immersive experiences, where every amenity is
                crafted to deliver a lifestyle par excellence.
            </p>
            <div class="space-x-4">
                <a
                        href="javascript:void(0);"
                        onclick="openRequestCallModal(this)" data-remark="Check Floor Plans & Pricing | Project Vision Section Architectural Marvel"
                        class="inline-block px-10 py-3 bg-accent-gold text-white font-semibold rounded-2xl shadow-lg hover:bg-yellow-500 hover:text-gray-900 transition duration-300 animate-[float_3s_ease-in-out_infinite]"
                >
                    Check Floor Plans & Pricing
                </a>
            </div>
        </div>

        <!-- Lead Inquiry Form (Primary CTA) -->
        <div id="inquiry-form" class="lg:col-span-5 reveal-element">
            <!-- Form container switched to theme-aware colors -->
            <div
                    class="bg-white dark:bg-secondary-dark p-8 md:p-10 rounded-2xl shadow-[0_20px_50px_rgba(0,0,0,0.15)] border border-slate-200 transition duration-500 hover:shadow-[0_30px_70px_rgba(202,138,4,0.4)] hover:border-accent-gold dark:shadow-2xl dark:border-slate-700"
            >
                <h2 class="text-3xl font-bold text-secondary-dark dark:text-white mb-6 text-center">
                    Discover elevated living at Odisha’s tallest address
                </h2>
                <form class="lead-form" data-form-name="modal_call_form" action="{{ route('lead.submit') }}" method="POST">
                    <input type="hidden" name="Remark"  value="Book a Tour | Discover elevated living at Odisha’s tallest address ">
                    @csrf
                    <!-- Input fields styled for both themes -->
                    <input
                            type="text"
                            name="Name"
                            minlength="3"
                                maxlength="50"
                                onkeypress="return /^[a-zA-Z ]+$/i.test(event.key)"
                            placeholder="Full Name"
                            required
                            class="w-full px-5 mb-3 py-3 rounded-lg bg-slate-100 border border-slate-300 focus:border-accent-gold focus:ring-1 focus:ring-accent-gold transition duration-300 text-secondary-dark dark:bg-slate-700 dark:border-slate-600 dark:text-white"
                    />
                    <input
                            type="email"
                            name="Email"
                            placeholder="Email Address"
                            required
                            class="w-full px-5 py-3 mb-3  rounded-lg bg-slate-100 border border-slate-300 focus:border-accent-gold focus:ring-1 focus:ring-accent-gold transition duration-300 text-secondary-dark dark:bg-slate-700 dark:border-slate-600 dark:text-white"
                    />
                    <input
                            type="tel"
                            name="Mob"
                            placeholder="Phone Number"
                            minlength="10"
                            maxlength="13"
                            onkeypress='return event.charCode >= 48 && event.charCode <= 57'
                            required
                            class="w-full px-5 py-3 mb-3  rounded-lg bg-slate-100 border border-slate-300 focus:border-accent-gold focus:ring-1 focus:ring-accent-gold transition duration-300 text-secondary-dark dark:bg-slate-700 dark:border-slate-600 dark:text-white"
                    />


                     <div>
                          <select name="City" required
                            class="w-full px-5 py-3 rounded-lg mb-3 bg-slate-100 border border-slate-300 focus:border-accent-gold focus:ring-1 focus:ring-accent-gold transition duration-300 text-slate-500 appearance-none dark:bg-slate-700 dark:border-slate-600 dark:text-slate-300">
                            <option disabled selected>Kindly, give an update on it.</option>
                              <option value="10am-11am" class="text-secondary-dark dark:text-white">10am - 12pm</option>
                              <option value="12am-2pm" class="text-secondary-dark dark:text-white">12pm - 2pm</option>
                              <option value="2pm-4pm" class="text-secondary-dark dark:text-white">2pm - 4pm</option>
                              <option value="4pm-6pm" class="text-secondary-dark dark:text-white">4pm - 6pm</option>
                              <option value="6pm-8pm" class="text-secondary-dark dark:text-white">6pm - 8pm</option>
                          </select>
                    </div>

                    <div class="flex items-start pt-2 mb-3 ">
                        <input
                                id="updates-checkbox"
                                type="checkbox"
                                class="h-4 w-4 rounded border-slate-400 bg-slate-100 text-accent-gold focus:ring-accent-gold dark:bg-slate-700 dark:border-slate-600"
                                checked
                        />
                        <label for="updates-checkbox" class="ml-3 text-sm text-slate-600 dark:text-slate-400">
                            Send me exclusive project updates and price lists.
                        </label>
                    </div>

                    <!-- Submit button uses accent-gold -->
                    <button
                            type="submit"
                            class="w-full flex justify-center items-center px-8 py-4 bg-accent-gold text-white font-extrabold text-lg rounded-xl shadow-xl hover:bg-amber-600 transition duration-300 transform hover:-translate-y-0.5 active:scale-95"
                    >
                        Book a Tour
                    </button>
                </form>
                <!-- Success/Error Messages -->
                <p id="form-message" class="text-center text-sm mt-4 text-green-600 hidden"></p>
                <p
                        id="form-error-message"
                        class="text-center text-sm mt-4 text-red-600 dark:text-red-400 hidden"
                ></p>
            </div>
        </div>
    </div>
</section>

<!--<section class="relative w-full h-screen overflow-hidden bg-black">
    <div class="absolute top-0 left-0 w-full h-full">
        <iframe
                class="absolute top-1/2 left-1/2 w-[120vw] h-[120vh] -translate-x-1/2 -translate-y-1/2 pointer-events-none"
                src="https://www.youtube.com/embed/qL277RJ2_Jo?autoplay=1&mute=1&controls=0&loop=1&playlist=qL277RJ2_Jo&rel=0&modestbranding=1&playsinline=1"
                frameborder="0"
                allow="autoplay; encrypted-media; picture-in-picture"
                allowfullscreen>
        </iframe>
    </div>
</section>-->

<!--<section class="relative w-full h-screen overflow-hidden bg-black">
    &lt;!&ndash; Responsive Video Wrapper &ndash;&gt;
    <div class="absolute inset-0 w-full h-full">
        <iframe
                class="absolute top-1/2 left-1/2 w-[180vw] h-[180vh] /* Bigger for mobile crop */ md:w-[120vw] md:h-[120vh] /* Desktop */ -translate-x-1/2 -translate-y-1/2 pointer-events-none"
                src="https://www.youtube.com/embed/qL277RJ2_Jo?autoplay=1&mute=1&controls=0&loop=1&playlist=qL277RJ2_Jo&rel=0&modestbranding=1&playsinline=1"
                frameborder="0"
                allow="autoplay; encrypted-media; picture-in-picture"
                allowfullscreen
        >
        </iframe>
    </div>
</section>-->

<section class="relative w-full h-screen overflow-hidden bg-black">
    <div class="absolute inset-0 w-full h-full">
        <iframe
                class="absolute top-1/2 left-1/2 w-[200vw] h-[200vh] md:w-[120vw] md:h-[120vh] -translate-x-1/2 -translate-y-1/2 pointer-events-none"
                src="https://www.youtube.com/embed/qL277RJ2_Jo?mute=1&autoplay=1&controls=0&loop=1&playlist=qL277RJ2_Jo&playsinline=1&modestbranding=1&rel=0&showinfo=0"
                frameborder="0"
                allow="autoplay; encrypted-media; picture-in-picture"
        ></iframe>
    </div>
</section>


<!-- 4. FLOOR PLANS SECTION (Light Grey Background) - NOW A CAROUSEL -->
<section id="floor-plans" class="py-12 bg-accent-light-grey dark:bg-slate-800 transition-colors duration-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <header class="text-center mb-10 reveal-element">
            <h2 class="text-4xl font-extrabold text-secondary-dark dark:text-white mb-3">
                Bespoke Residences & Floor Plans
            </h2>
            <p class="text-xl font-light text-slate-600 dark:text-slate-300">
                Swipe to find the perfect layout for your Gold Class life.
            </p>
        </header>

        <div class="relative">
            <!-- Carousel Container -->
            <div id="floor-plan-carousel" class="carousel-container flex space-x-6 pb-4 md:space-x-8">
                <!-- Unit Type 1: 3 BHK -->
                <div
                        onclick="openRequestCallModal(this)" data-remark="Check Floor Plans & Pricing | Floor Plans Section| 3 BHK Residences"
                        class="min-w-[80%] sm:min-w-[calc(50%-1rem)] lg:min-w-[calc(33.333%-1.33rem)] bg-white dark:bg-secondary-dark rounded-xl reveal-element transition duration-300 hover:shadow-accent-gold/50"
                >
                    <img
                            src="https://evosalchemy.com/wp-content/uploads/elementor/thumbs/07_pop-1-qji59zq3zpuxfq7daesllg95nsnb4cmk6yrj5hsvns.jpg"
                            alt="3 BHK Floor Plan"
                            class="w-full h-auto rounded-t-xl object-cover"
                            onerror="this.onerror=null;this.src='https://placehold.co/600x400/f8fafc/475569?text=3+BHK+Floor+Plan';"
                    />
                    <div class="p-6 text-center dark:bg-accent-dark">
                        <h3 class="text-2xl font-bold text-secondary-dark dark:text-white mb-2">
                            3 BHK Residences
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400 mb-4 text-sm">1,800 - 2,200 sq. ft.</p>
                        <a
                                href="javascript:void(0);"
                                onclick="openRequestCallModal(this)" data-remark="Check Floor Plans & Pricing | Floor Plans Section| 3 BHK Residences"
                                class="inline-block px-10 py-3 bg-accent-gold text-white font-semibold rounded-2xl shadow-lg hover:bg-yellow-500 hover:text-gray-900 transition duration-300 animate-[float_3s_ease-in-out_infinite]"
                        >
                            Check Floor Plans & Pricing
                        </a>
                    </div>
                </div>
                <!-- Unit Type 2: 3.5 BHK -->
                <div
                        onclick="openRequestCallModal(this)" data-remark="Check Floor Plans & Pricing | Floor Plans Section| 3.5 BHK Residences"
                        class="min-w-[80%] sm:min-w-[calc(50%-1rem)] lg:min-w-[calc(33.333%-1.33rem)] bg-white dark:bg-secondary-dark rounded-xl reveal-element transition duration-300 hover:shadow-accent-gold/50"
                        style="transition-delay: 0.1s"
                >
                    <img
                            src="https://evosalchemy.com/wp-content/uploads/elementor/thumbs/07_pop-1-qji59zq3zpuxfq7daesllg95nsnb4cmk6yrj5hsvns.jpg"
                            alt="3.5 BHK Floor Plan"
                            class="w-full h-auto rounded-t-xl object-cover"
                            onerror="this.onerror=null;this.src='https://placehold.co/600x400/f8fafc/475569?text=3.5+BHK+Floor+Plan';"
                    />
                    <div class="p-6 text-center dark:bg-accent-dark">
                        <h3 class="text-2xl font-bold text-secondary-dark dark:text-white mb-2">
                            3.5 BHK Suites
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400 mb-4 text-sm">2,500 - 3,000 sq. ft.</p>
                        <a
                                href="javascript:void(0);"
                                onclick="openRequestCallModal(this)" data-remark="Check Floor Plans & Pricing | Floor Plans Section| 3.5 BHK Residences"
                                class="inline-block px-10 py-3 bg-accent-gold text-white font-semibold rounded-2xl shadow-lg hover:bg-yellow-500 hover:text-gray-900 transition duration-300 animate-[float_3s_ease-in-out_infinite]"
                        >
                            Check Floor Plans & Pricing
                        </a>
                    </div>
                </div>
                <!-- Unit Type 3: 4 BHK -->
                <div
                        onclick="openRequestCallModal(this)" data-remark="Check Floor Plans & Pricing | Floor Plans Section| 4 BHK Residences"
                        class="min-w-[80%] sm:min-w-[calc(50%-1rem)] lg:min-w-[calc(33.333%-1.33rem)] bg-white dark:bg-secondary-dark rounded-xl reveal-element transition duration-300 hover:shadow-accent-gold/50"
                        style="transition-delay: 0.2s"
                >
                    <img
                            src="https://evosalchemy.com/wp-content/uploads/elementor/thumbs/07_pop-1-qji59zq3zpuxfq7daesllg95nsnb4cmk6yrj5hsvns.jpg"
                            alt="4 BHK Luxury Apartment"
                            class="w-full h-auto rounded-t-xl object-cover"
                            onerror="this.onerror=null;this.src='https://placehold.co/600x400/f8fafc/475569?text=4+BHK+Luxury+Apartment';"
                    />
                    <div class="p-6 text-center dark:bg-accent-dark">
                        <h3 class="text-2xl font-bold text-secondary-dark dark:text-white mb-2">
                            4 BHK Sky Homes
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400 mb-4 text-sm">3,200 - 3,800 sq. ft.</p>
                        <a
                                href="javascript:void(0);"
                                onclick="openRequestCallModal(this)" data-remark="Check Floor Plans & Pricing | Floor Plans Section| 4 BHK Residences"
                                class="inline-block px-10 py-3 bg-accent-gold text-white font-semibold rounded-2xl shadow-lg hover:bg-yellow-500 hover:text-gray-900 transition duration-300 animate-[float_3s_ease-in-out_infinite]"
                        >
                            Check Floor Plans & Pricing
                        </a>
                    </div>
                </div>
                <!-- Unit Type 4: 4.5 BHK Penthouse -->
                <div
                        onclick="openRequestCallModal(this)" data-remark="Check Floor Plans & Pricing | Floor Plans Section| 4.5 BHK Residences"
                        class="min-w-[80%] sm:min-w-[calc(50%-1rem)] lg:min-w-[calc(33.333%-1.33rem)] bg-white dark:bg-secondary-dark rounded-xl reveal-element transition duration-300 hover:shadow-accent-gold/50"
                        style="transition-delay: 0.3s"
                >
                    <img
                            src="https://evosalchemy.com/wp-content/uploads/elementor/thumbs/07_pop-1-qji59zq3zpuxfq7daesllg95nsnb4cmk6yrj5hsvns.jpg"
                            alt="4.5 BHK Penthouse"
                            class="w-full h-auto rounded-t-xl object-cover"
                            onerror="this.onerror=null;this.src='https://placehold.co/600x400/f8fafc/475569?text=4.5+BHK+Penthouse';"
                    />
                    <div class="p-6 text-center dark:bg-accent-dark">
                        <h3 class="text-2xl font-bold text-secondary-dark dark:text-white mb-2">
                            4.5 BHK Penthouses
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400 mb-4 text-sm">
                            3,500 - 4,500 sq. ft. | Grand Sundecks
                        </p>
                        <a
                                href="javascript:void(0);"
                                onclick="openRequestCallModal(this)" data-remark="Check Floor Plans & Pricing | Floor Plans Section| 4.5 BHK Residences"
                                class="inline-block px-10 py-3 bg-accent-gold text-white font-semibold rounded-2xl shadow-lg hover:bg-yellow-500 hover:text-gray-900 transition duration-300 animate-[float_3s_ease-in-out_infinite]"
                        >
                            Check Floor Plans & Pricing
                        </a>
                    </div>
                </div>
            </div>

            <!-- Carousel Controls -->
            <button
                    onclick="scrollCarousel('floor-plan-carousel', -1)"
                    class="absolute left-0 top-1/2 -translate-y-1/2 z-10 p-3 bg-white rounded-full shadow-lg border border-slate-200 text-accent-gold hover:bg-slate-100 transition duration-300 dark:bg-slate-700 dark:border-slate-600 dark:hover:bg-slate-600"
            >
                <!-- Left Arrow SVG -->
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
                    <path d="M15 18l-6-6 6-6" />
                </svg>
            </button>
            <button
                    onclick="scrollCarousel('floor-plan-carousel', 1)"
                    class="absolute right-0 top-1/2 -translate-y-1/2 z-10 p-3 bg-white rounded-full shadow-lg border border-slate-200 text-accent-gold hover:bg-slate-100 transition duration-300 dark:bg-slate-700 dark:border-slate-600 dark:hover:bg-slate-600"
            >
                <!-- Right Arrow SVG -->
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
                    <path d="M9 18l6-6-6-6" />
                </svg>
            </button>
        </div>
    </div>
</section>

<!-- Schedule a Site Visit Section -->
<section class="py-12 w-full relative bg-accent-dark dark:bg-accent-dark transition-colors duration-500">
    <div class="max-w-6xl mx-auto bg-white rounded-2xl overflow-hidden shadow-2xl">
        <div class="grid md:grid-cols-2">
            <!-- Left Side - Form -->
            <div class="p-8 md:p-10 relative dark:bg-slate-800">
                <h2
                        class="text-3xl text-secondary-dark dark:text-white font-extrabold mb-6 border-b-2 border-gray-300 pb-2"
                >
                    Schedule a <span class="text-accent-gold">Site Visit</span>
                </h2>


                <form class="lead-form space-y-5" data-form-name="modal_call_form" action="{{ route('lead.submit') }}" method="POST">
                    <input type="hidden" name="Remark"  value="Schedule my Visit | Schedule a Site Visit ">
                    @csrf

                    <!-- Name -->
                    <div
                            class="flex items-center border rounded-lg overflow-hidden focus-within:ring-2 focus-within:ring-yellow-500 transition"
                    >
                                <span class="px-3 text-gray-500">
                                    <i class="fa-solid fa-user"></i>
                                </span>
                        <input
                                type="text"
                                name="Name"
                                minlength="3"
                                maxlength="50"
                                onkeypress="return /^[a-zA-Z ]+$/i.test(event.key)"
                                placeholder="Name*"
                                required
                                class="w-full px-3 py-3 outline-none text-gray-700 dark:bg-slate-700 dark:border-slate-600 dark:text-white"
                        />
                    </div>

                    <!-- Mobile -->
                    <div
                            class="flex items-center border rounded-lg overflow-hidden focus-within:ring-2 focus-within:ring-yellow-500 transition"
                    >
                                <span class="px-3 text-gray-500">
                                    <i class="fa-solid fa-phone"></i>
                                </span>
                        <input
                                type="tel"
                                placeholder="Mobile*"
                                name="Mob"
                                minlength="10"
                                maxlength="13"
                                onkeypress='return event.charCode >= 48 && event.charCode <= 57'
                                required
                                class="w-full px-3 py-3 outline-none text-gray-700 dark:bg-slate-700 dark:border-slate-600 dark:text-white"
                        />
                    </div>

                    <!-- Consent -->
                    <label class="flex items-start space-x-2 text-xs text-gray-600 dark:text-slate-300">
                        <input type="checkbox" required class="mt-1" />
                        <span>
                                    Please be informed that this website is not intended to facilitate any sales
                                    transactions. I understand and acknowledge that the project I am interested in
                                    hasn’t yet secured RERA clearance. The primary purpose of this website is to
                                    generate interest and gather information. By providing my data, I consent to its use
                                    in accordance with the
                                    <a href="{!! route('page.privacy') !!}" class="text-blue-600 underline">Privacy Policy</a> |
                                    <a href="{!! route('page.terms') !!}" class="text-blue-600 underline">Terms & Conditions</a>.
                                </span>
                    </label>

                    <!-- Submit Button -->
                     <button type="submit"
                     class="inline-block px-10 py-3 bg-accent-gold text-white font-semibold rounded-2xl shadow-lg hover:bg-yellow-500 hover:text-gray-900 transition duration-300 animate-[float_3s_ease-in-out_infinite]">
                 Schedule My Visit
             </button>


                </form>
            </div>

            <!-- Right Side - Image -->
            <div class="relative hidden md:block">
                <img src="assets/images/11.webp" alt="Site Visit" class="w-full h-full object-cover" />
            </div>
        </div>
    </div>
</section>

<!-- ✅ amenities Deck Section -->
<section id="amenities" class="py-12 dark:bg-secondary-dark transition-colors duration-500">
    <div class="max-w-7xl mx-auto px-4">
        <header class="text-center mb-10" data-aos="fade-up" data-aos-duration="600">
            <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 dark:text-white mb-4">
                Proposed <span class="text-accent-gold drop-shadow-lg">Amenities</span>
            </h2>
            <p class="text-lg text-slate-600 dark:text-slate-300 max-w-2xl mx-auto">
                A curated collection of lifestyle and wellness indulgences — designed to inspire.
            </p>
        </header>
        <!-- Swiper Container -->
        <div class="swiper amenitiesGridSwiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div onclick="openRequestCallModal(this)" data-remark="Cloud Walkway | Amenities Section" class="amenity-card">
                        <img
                                class="w-full h-64 object-cover"
                                src="assets/images/amenities/walkway.webp"
                                alt="Cafeteria"
                        />
                        <span class="amenity-label">Cloud Walkway</span>
                    </div>

                    <div onclick="openRequestCallModal(this)" data-remark="Fitness Center | Amenities Section" class="amenity-card">
                        <img
                                class="w-full h-64 object-cover"
                                src="assets/images/amenities/fitness.webp"
                                alt="Gymnasium"
                        />
                        <span class="amenity-label">Fitness Center</span>
                    </div>

                    <div onclick="openRequestCallModal(this)" data-remark="Theatre | Amenities Section" class="amenity-card">
                        <img
                                class="w-full h-64 object-cover"
                                src="assets/images/amenities/theatre.webp"
                                alt="Theatre"
                        />
                        <span class="amenity-label">Theatre</span>
                    </div>

                    <div onclick="openRequestCallModal(this)" data-remark="Indoor Play Area | Amenities Section" class="amenity-card">
                        <img
                                class="w-full h-64 object-cover"
                                src="assets/images/amenities/indoor-game.webp"
                                alt="Indoor Play Area"
                        />
                        <span class="amenity-label">Indoor Play Area</span>
                    </div>

                    <div onclick="openRequestCallModal(this)" data-remark="Kids Play Room | Amenities Section" class="amenity-card">
                        <img
                                class="w-full h-64 object-cover"
                                src="assets/images/amenities/kids-play-area.webp"
                                alt="Kids Play Room"
                        />
                        <span class="amenity-label">Kids Play Room</span>
                    </div>

                    <div onclick="openRequestCallModal(this)" data-remark="Library | Amenities Section" class="amenity-card">
                        <img
                                class="w-full h-64 object-cover"
                                src="assets/images/amenities/library.webp"
                                alt="Library"
                        />
                        <span class="amenity-label">Library</span>
                    </div>
                </div>

                <!-- SECOND SLIDE -->
                <div class="swiper-slide grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div onclick="openRequestCallModal(this)" data-remark="Co-Working Space | Amenities Section" class="amenity-card">
                        <img
                                class="w-full h-64 object-cover"
                                src="assets/images/amenities/working-space.webp"
                                alt="Co-Working Space"
                        />
                        <span class="amenity-label">Co-Working Space</span>
                    </div>

                    <div onclick="openRequestCallModal(this)" data-remark="Sky Lounge | Amenities Section" class="amenity-card">
                        <img
                                class="w-full h-64 object-cover"
                                src="assets/images/amenities/sky-lounge.webp"
                                alt="Sky Lounge"
                        />
                        <span class="amenity-label">Sky Lounge</span>
                    </div>

                    <div onclick="openRequestCallModal(this)" data-remark="Spa | Amenities Section" class="amenity-card">
                        <img
                                class="w-full h-64 object-cover"
                                src="assets/images/amenities/spa.webp"
                                alt="Spa"
                        />
                        <span class="amenity-label">Spa </span>
                    </div>

                    <div onclick="openRequestCallModal(this)" data-remark="Café/Lounge | Amenities Section" class="amenity-card">
                        <img
                                class="w-full h-64 object-cover"
                                src="assets/images/amenities/cafe.webp"
                                alt="Cafe"
                        />
                        <span class="amenity-label">Café/Lounge</span>
                    </div>

                    <div onclick="openRequestCallModal(this)" data-remark="Sauna | Amenities Section" class="amenity-card">
                        <img
                                class="w-full h-64 object-cover"
                                src="assets/images/amenities/sauna.webp"
                                alt="Sauna"
                        />
                        <span class="amenity-label">Sauna</span>
                    </div>

                    <div onclick="openRequestCallModal(this)" data-remark="Meditation | Amenities Section" class="amenity-card">
                        <img
                                class="w-full h-64 object-cover"
                                src="assets/images/amenities/meditation.webp"
                                alt="Meditation"
                        />
                        <span class="amenity-label">Meditation</span>
                    </div>
                </div>
            </div>
            <!-- Navigation Arrows -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

        <div class="flex justify-center mt-16">
            <a
                    href="javascript:void(0);"
                    onclick="openRequestCallModal(this)" data-remark="Get a Guided Tour | Amenities Section"
                    class="inline-block px-10 py-3 rounded-2xl font-semibold text-white bg-gradient-to-r from-[#d4a056] to-[#b7853d] hover:from-[#f5c46a] hover:to-[#e1a847] transition-all duration-300 transform hover:-translate-y-1 focus:ring-4 focus:ring-amber-300"
            >
                Get a Guided Tour
            </a>
        </div>
    </div>
</section>

<section id="location" class="py-12 w-full relative bg-accent-dark transition-colors duration-500">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <!-- Left Content (50%) -->
            <div>
                <h2 class="text-md font-semibold text-white drop-shadow-lg uppercase tracking-wide mb-3">
                    Location
                </h2>

                <h3 class="text-4xl font-bold text-white leading-tight mb-6">
                    Benefit From<br />
                    <span class="text-accent-gold drop-shadow-lg">Smooth Connectivity</span><br />
                    At Bhubaneswar’s Epicentre
                </h3>

                <p class="font-light text-slate-400 leading-relaxed mb-8">
                    Nestled in Patia, a posh neighbourhood in Bhubaneswar, Evos Alchemy enjoys superior
                    connectivity to major city hubs, necessary conveniences and recreation avenues. Cherish the
                    ease of seamless commutes as you zip through the city in no time.
                </p>

                <ul class="space-y-3 list-disc text-white pl-5">
                    <li class="font-light text-slate-400">
                        <strong class="font-light text-slate-400">Future Metro Station</strong> – 1 Min
                    </li>
                    <li class="font-light text-slate-400">
                        <strong class="font-light text-slate-400">Restaurants And Fine Dines</strong> – 5 Min
                    </li>
                    <li class="font-light text-slate-400">
                        <strong class="font-light text-slate-400">Nandankanan Zoological Park</strong> – 6 Min
                    </li>
                    <li class="font-light text-slate-400">
                        <strong class="font-light text-slate-400">Premium Educational Institution</strong> – 8
                        Min
                    </li>
                    <li class="font-light text-slate-400">
                        <strong class="font-light text-slate-400">World Class Healthcare</strong> – 10 Min
                    </li>
                    <li class="font-light text-slate-400">
                        <strong class="font-light text-slate-400">IT Hub (Infocity / SEZ)</strong> – 12 Min
                    </li>
                    <li class="font-light text-slate-400">
                        <strong class="font-light text-slate-400">Premium Sports Clubs</strong> – 12 Min
                    </li>
                    <li class="font-light text-slate-400">
                        <strong class="font-light text-slate-400">Centre Of The City</strong> – 20 Min
                    </li>
                </ul>
                <div class="flex justify-start mt-16" bis_skin_checked="1">
                <a href="javascript:void(0);" onclick="openRequestCallModal(this)" data-remark="Check Floor Plans & Pricing | location Section" class="inline-block px-10 py-3 rounded-2xl font-semibold text-white bg-gradient-to-r from-[#d4a056] to-[#b7853d] hover:from-[#f5c46a] hover:to-[#e1a847] transition-all duration-300 transform hover:-translate-y-1 focus:ring-4 focus:ring-amber-300" bis_skin_checked="1">
                    Check Floor Plans &amp; Pricing
                </a>
            </div>
            </div>

            <!-- Right Image (50%) -->
            <div class="w-full h-96 md:h-[500px] rounded-xl overflow-hidden shadow-lg">
                <img onclick="openRequestCallModal(this)" data-remark="Check Floor Plans & Pricing | location Section"
                        src="https://evosalchemy.com/wp-content/uploads/2024/02/Alchemy-Map-1.jpg"
                        alt="Location Image"
                        class="w-full h-full object-cover"
                />

                <a href="javascript:void(0);" onclick="openRequestCallModal(this)" data-remark="Check Floor Plans & Pricing | location Section" class=" px-10 py-3 block sm:hidden rounded-2xl font-semibold text-white bg-gradient-to-r from-[#d4a056] to-[#b7853d] hover:from-[#f5c46a] hover:to-[#e1a847] transition-all duration-300 transform hover:-translate-y-1 focus:ring-4 focus:ring-amber-300" bis_skin_checked="1">
                    Check Floor Plans &amp; Pricing
                </a>
            </div>

        </div>
    </div>
</section>


<!-- 4. What sets us apart (Light Mode Version) -->
<section class="py-12 bg-[#faf7f2] dark:bg-secondary-dark transition-colors duration-500">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Heading -->
        <header class="text-center mb-10 reveal-element">
            <h2 class="text-4xl font-extrabold text-secondary-dark dark:text-white mb-3">
                What Makes <span class="text-accent-gold drop-shadow-lg">Evos Alchemy</span> Exceptional
            </h2>
            <!-- <p class="text-xl font-light text-slate-600 dark:text-slate-300">Swipe to find the perfect layout for your Gold
      Class life.</p> -->
        </header>

        <div class="relative">
            <!-- Content Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-16">
                <!-- Card 1 -->
                <div class="space-y-4">
                    <h3
                            onclick="openRequestCallModal(this)" data-remark="Check Floor Plans & Pricing | What Makes Evos Alchemy Exceptional Section"
                            class="text-lg font-semibold uppercase tracking-wide text-accent-gold"
                    >
                        Curated by Global Visionaries
                    </h3>
                    <p class="text-sm text-justify leading-relaxed text-gray-700 dark:text-gray-300">
                        Designed by Ar. Sanjay Puri and Tectonix Thailand, Evos Alchemy embodies world-class
                        architecture and landscape design that redefine urban luxury.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="space-y-4">
                    <h3
                            onclick="openRequestCallModal(this)" data-remark="Check Floor Plans & Pricing | What Makes Evos Alchemy Exceptional Section"
                            class="text-lg font-semibold text-accent-gold uppercase tracking-wide"
                    >
                        30+ Handpicked Lifestyle Amenities
                    </h3>
                    <p class="text-sm text-justify leading-relaxed text-gray-700 dark:text-gray-300">
                        From sky lounges to infinity pools, meditation zones to fitness studios — every amenity
                        has been thoughtfully curated for those who seek more than comfort — they seek
                        perfection.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="space-y-4">
                    <h3
                            onclick="openRequestCallModal(this)" data-remark="Check Floor Plans & Pricing | What Makes Evos Alchemy Exceptional Section"
                            class="text-lg font-semibold text-accent-gold uppercase tracking-wide"
                    >
                        Gold-Class Residences
                    </h3>
                    <p class="text-sm text-justify leading-relaxed text-gray-700 dark:text-gray-300">
                        Spacious 3, 3+S & 4+S BHK residences with grand sundecks, luxurious finishes, and
                        panoramic city views thoughtfully crafted to complement a lifestyle of elegance and
                        exclusivity.
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="space-y-4">
                    <h3
                            onclick="openRequestCallModal(this)" data-remark="Check Floor Plans & Pricing | What Makes Evos Alchemy Exceptional Section"
                            class="text-lg font-semibold text-accent-gold uppercase tracking-wide"
                    >
                        Legacy of Trust & Excellence
                    </h3>
                    <p class="text-sm text-justify leading-relaxed text-gray-700 dark:text-gray-300">
                        Built on a foundation of integrity, innovation, and over a decade of delivering
                        excellence, Evos Group is a name synonymous with luxury and reliability.
                    </p>
                </div>
                <!-- Card 5 -->

                <!-- Card 6 -->
                <div class="space-y-4">
                    <h3
                            onclick="openRequestCallModal(this)" data-remark="Check Floor Plans & Pricing | What Makes Evos Alchemy Exceptional Section"
                            class="text-lg font-semibold text-accent-gold uppercase tracking-wide"
                    >
                        Seamless Connectivity
                    </h3>
                    <p class="text-sm text-justify leading-relaxed text-gray-700 dark:text-gray-300">
                        Strategically located at Patia, Raghunathpur, offering easy access to top educational
                        hubs, IT parks, healthcare, and lifestyle destinations.
                    </p>
                </div>
                <!-- Card 7 -->
            </div>

            <!-- Call to Action -->
            <div class="flex justify-center mt-16">
                <a
                        href="javascript:void(0);"
                        onclick="openRequestCallModal(this)" data-remark="Check Floor Plans & Pricing | What Makes Evos Alchemy Exceptional Section"
                        class="inline-block px-10 py-3 rounded-2xl font-semibold text-white bg-gradient-to-r from-[#d4a056] to-[#b7853d] hover:from-[#f5c46a] hover:to-[#e1a847] transition-all duration-300 transform hover:-translate-y-1 focus:ring-4 focus:ring-amber-300"
                >
                    Check Floor Plans & Pricing
                </a>
            </div>
        </div>
    </div>
</section>


<!-- 7. WALKTHROUGH VIDEO SECTION (White Background) -->
<section id="walkthrough-video" class="py-12 bg-accent-dark dark:bg-accent-dark transition-colors duration-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 reveal-element text-center">
        <p class="text-accent-gold uppercase tracking-widest text-sm mb-4 font-semibold">Virtual Tour</p>
        <h2 class="text-4xl text-white font-extrabold mb-3">
            Walkthrough <span class="text-accent-gold drop-shadow-lg">Video</span>
        </h2>
        <p class="text-xl font-light text-slate-400 mx-auto mb-10">
            Dive into a cinematic preview of The Evos Alchemy Residences and experience the "Gold Class Living"
            firsthand.
        </p>

        <!-- Video Thumbnail / Play Button Area -->
        <div
                class="relative max-w-4xl mx-auto rounded-xl overflow-hidden shadow-2xl group cursor-pointer overflow-hidden border-4 border-transparent hover:border-accent-gold transition duration-500"
                onclick="openVideoModal()"
        >
            <!-- Placeholder YouTube ID -->

            <!-- Placeholder Image -->
            <img
                    src="https://evosalchemy.com/wp-content/uploads/2024/02/01-2.jpg.webp"
                    onerror="this.onerror=null;this.src='https://evosalchemy.com/wp-content/uploads/2024/02/01-2.jpg.webp';"
                    alt="Video Walkthrough Thumbnail"
                    class="w-full h-full object-cover transition duration-300 border-4 border-white border-radius-xl group-hover:opacity-80"
            />

            <!-- Play Icon Overlay -->
            <div
                    class="absolute inset-0 flex items-center justify-center bg-black/30 group-hover:bg-black/40 transition duration-300"
            >
                <svg
                        class="w-20 h-20 text-accent-gold fill-current opacity-90 group-hover:scale-105 transition duration-300"
                        viewBox="0 0 24 24"
                >
                    <path
                            d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14zm10-7l-6 4V8l6 4z"
                    />
                </svg>
            </div>
        </div>

        <a
                href="javascript:void(0);"
                onclick="openRequestCallModal(this)" data-remark="Check Floor Plans & Pricing | Walkthrough Video Section"
                class="inline-block px-10 py-3 bg-accent-gold text-white font-semibold rounded-2xl shadow-lg mt-4 hover:bg-yellow-500 hover:text-gray-900 transition duration-300 animate-[float_3s_ease-in-out_infinite]"
        >
            Check Floor Plans & Pricing
        </a>
    </div>
</section>

<!-- 9. CONTACT HUB (Form, Map, and Details) - Redesigned Section -->
<section
        id="contact-us-block"
        class="py-12 bg-accent-light-grey dark:bg-slate-800 transition-colors duration-500"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 reveal-element">
        <header class="text-center mb-12">
            <h2 class="text-4xl font-extrabold text-secondary-dark dark:text-white mb-3">
                Your Priority <span class="text-accent-gold">Contact Hub</span>
            </h2>
            <p class="text-xl font-light text-slate-600 dark:text-slate-300 max-w-3xl mx-auto">
                Schedule a private viewing, find our site office, or request a detailed price list instantly.
            </p>
        </header>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <!-- LEFT COLUMN: Embedded Contact Form -->
            <div
                    class="bg-white dark:bg-accent-dark p-8 md:p-10 rounded-2xl shadow-[0_20px_50px_rgba(0,0,0,0.15)] border border-slate-200 transition duration-500 hover:shadow-xl hover:border-accent-gold dark:shadow-2xl dark:border-slate-700"
            >
                <h3
                        class="text-2xl font-bold text-secondary-dark dark:text-white mb-6 border-b border-slate-200 dark:border-slate-700 pb-3"
                >
                    <span class="text-accent-gold">Book</span> a Personal Consultation
                </h3>
                <!-- Duplicated Priority Form (Needs unique IDs, but keeping original for simplicity) -->

                <form class="lead-form space-y-5" data-form-name="modal_call_form" action="{{ route('lead.submit') }}" method="POST">
                    @csrf
                    <input type="hidden" name="Remark"  value="Request Price & Availability | Book a Personal Consultation ">
                    <div
                            class="flex items-center border rounded-lg overflow-hidden focus-within:ring-2 focus-within:ring-yellow-500 transition"
                    >
                                <span class="px-3 text-gray-500">
                                    <i class="fa-solid fa-user"></i>
                                </span>
                        <input
                                type="text"
                                name="Name"
                                placeholder="Full Name*"
                                minlength="3"
                                maxlength="50"
                                onkeypress="return /^[a-zA-Z ]+$/i.test(event.key)"
                                required
                                class="w-full px-3 py-3 outline-none text-gray-700 dark:bg-slate-700 dark:border-slate-600 dark:text-white"
                        />
                    </div>

                    <div
                            class="flex items-center border rounded-lg overflow-hidden focus-within:ring-2 focus-within:ring-yellow-500 transition"
                    >
                                <span class="px-3 text-gray-500">
                                    <i class="fa-solid fa-mobile"></i>
                                </span>
                        <input
                                type="tel"
                                name="Mob"
                                placeholder="Mobile Number*"
                                minlength="10"
                                maxlength="13"
                                onkeypress='return event.charCode >= 48 && event.charCode <= 57'
                                required
                                class="w-full px-3 py-3 outline-none text-gray-700 dark:bg-slate-700 dark:border-slate-600 dark:text-white"
                        />
                    </div>

                    <div
                            class="flex items-center border rounded-lg overflow-hidden focus-within:ring-2 focus-within:ring-yellow-500 transition"
                    >
                                <span class="px-3 text-gray-500">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                        <input
                                type="email"
                                name="Email"
                                placeholder="Email*"
                                required
                                class="w-full px-3 py-3 outline-none text-gray-700 dark:bg-slate-700 dark:border-slate-600 dark:text-white"
                        />
                    </div>


                    <div>
                        <select name="City" required
                                class="w-full px-5 py-3 mb-3  rounded-lg bg-slate-100 border border-slate-300 focus:border-accent-gold focus:ring-1 focus:ring-accent-gold transition duration-300 text-slate-500 appearance-none dark:bg-slate-700 dark:border-slate-600 dark:text-slate-300">
                            <option disabled selected>Kindly, give an update on it.</option>
                            <option value="10am-11am" class="text-secondary-dark dark:text-white">10am - 12pm</option>
                            <option value="12am-2pm" class="text-secondary-dark dark:text-white">12pm - 2pm</option>
                            <option value="2pm-4pm" class="text-secondary-dark dark:text-white">2pm - 4pm</option>
                            <option value="4pm-6pm" class="text-secondary-dark dark:text-white">4pm - 6pm</option>
                            <option value="6pm-8pm" class="text-secondary-dark dark:text-white">6pm - 8pm</option>


                        </select>
                    </div>

                    <button
                            type="submit"
                            class="w-full flex justify-center items-center px-8 py-4 bg-accent-gold text-white font-extrabold text-lg rounded-xl shadow-xl hover:bg-amber-600 transition duration-300 transform hover:-translate-y-0.5 active:scale-95"
                    >
                        Request Price & Availability
                    </button>
                </form>
                <p id="form-message-secondary" class="text-center text-sm mt-4 text-green-600 hidden"></p>
                <p
                        id="form-error-message-secondary"
                        class="text-center text-sm mt-4 text-red-600 dark:text-red-400 hidden"
                ></p>
            </div>

            <!-- RIGHT COLUMN: Map and Details -->
            <div class="space-y-8">
                <!-- Location Map Placeholder -->
                <div
                        id="map-placeholder"
                        class="aspect-video w-full rounded-xl overflow-hidden shadow-2xl border-4 border-accent-charcoal-blue"
                >
                    <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.269384979306!2d85.82954627582909!3d20.371779910017892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1909cef5a84c19%3A0xc9d47a86f0a85d79!2sEvos%20Alchemy!5e0!3m2!1sen!2sin!4v1762855597620!5m2!1sen!2sin"
                            width="100%"
                            height="500"
                            style="border: 0"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                </div>

                <!-- Direct Contact Details -->
                <div class="grid grid-cols-1 sm:grid-cols-1 gap-6 text-center">
                    <!-- Contact 1: Phone -->
                    <div
                            class="p-4 bg-white dark:bg-secondary-dark rounded-xl shadow-lg border-b-4 border-accent-gold transition duration-300 hover:scale-[1.03]"
                    >
                        <a
                                href="tel:+919776099997"
                                class="text-md font-semibold text-accent-charcoal-blue dark:text-slate-200 hover:text-accent-gold transition duration-300"
                        >📞 +91 9776099997</a
                        >
                        <a
                                href="mailto:enquiry@evosalchemy.com"
                                class="text-md font-semibold text-accent-charcoal-blue dark:text-slate-200 hover:text-accent-gold transition duration-300"
                        >📧 enquiry@evosalchemy.com</a
                        >
                        <a
                                href="https://maps.app.goo.gl/SiBfWg61NQzgTLJm7"
                                class="text-md font-semibold text-accent-charcoal-blue dark:text-slate-200 hover:text-accent-gold transition duration-300"
                        >📍Site Office</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<!-- ⚙️ Script my swipper homepage Slider -->
<script>
    const swiper = new Swiper(".mySwiper", {
        loop: true,
        autoplay: { delay: 3500, disableOnInteraction: false },
        pagination: { el: ".swiper-pagination", clickable: true },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        effect: "fade",
        speed: 1000,
    });
</script>

<!-- ⚙️ Script Video Modal Player-->
<script>
    const videoModal = document.getElementById("video-modal");
    const videoPlayer = document.getElementById("video-player");

    // ✅ Use a fixed (static) YouTube embed URL
    const staticVideoUrl = "https://www.youtube.com/embed/CfQgKB2EV6k?autoplay=1&rel=0&modestbranding=1&fs=1";

    function openVideoModal() {
        videoPlayer.innerHTML = `
      <iframe
        src="${staticVideoUrl}"
        class="w-full h-full rounded-2xl"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen>
      </iframe>
    `;
        videoModal.classList.remove("hidden");
        videoModal.classList.add("flex");
        document.body.style.overflow = "hidden";
    }

    function closeVideoModal() {
        videoPlayer.innerHTML = ""; // stops video
        videoModal.classList.add("hidden");
        videoModal.classList.remove("flex");
        document.body.style.overflow = "";
    }

    // close when clicking outside the video
    videoModal.addEventListener("click", (e) => {
        if (e.target === videoModal) {
            closeVideoModal();
        }
    });

    // Auto open after 10 seconds
    window.addEventListener("load", function () {
        setTimeout(() => {
            openRequestCallModal();
        }, 10000);
    });

</script>

<!-- ⚙️ Script Amenities Swiper-->
<script>
    const amenitiesSwiper = new Swiper(".amenitiesGridSwiper", {
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        speed: 900,
        effect: "slide",
    });
</script>

<!-- ⚙️ Script YouTube Shorts Swiper-->
<script>

    var swiper = new Swiper(".youtubeShortsSwiper", {
        loop: true,
        autoplay: {
            delay: 1, // continuous motion
            disableOnInteraction: false,
        },
        speed: 800,
        slidesPerView: 1.2,
        centeredSlides: true,
        spaceBetween: 20,

        breakpoints: {
            640: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
        },

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>
@endpush
