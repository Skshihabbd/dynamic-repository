@extends('page.root')
@section('title', 'home page')

@section('layout')





    <main>
        {{-- banar section --}}
        <section>
            <div class=" h-[100vh] relative">
                <video autoplay muted loop class="w-full h-[100vh] object-cover">
                    <source src="{{ asset('static video/video.mp4') }}" type="video/mp4" />
                </video>
                <div class="absolute top-0 left-0 w-full h-[100vh] bg-gradient-to-r from-black  to-gray-500/30 "></div>
                <div class="absolute top-[10%] right-[15%]  md:top-[30%] md:left-[15%] w-[70%]  mx-auto text-center">
                    <p class="text-white text-3xl lg:text-5xl istock">Welcome to <span class="text-blue-600 ">Unicorn</span>
                        Software
                        and
                        Solutions</p>

                    <p class="text-white lg:text-xl pt-3"> Build your software from us to manage Business</p>

                    <div class="flex justify-center md:flex-row flex-col md:gap-5 gap-3 md:mt-8 mt-4 items-center">
                        <button id="goBtn"
                            class="md:py-3 md:px-6 px-4 py-2 animate md:mr-5 bg-[#0b4392]  text-white hover:bg-opacity-0   border-2 border-[#0b4392]">Book
                            Consultation</button>
                        <button
                            class="md:py-3 md:px-6 px-4 py-2 animate bg-[#0b4392] hover:bg-opacity-100  text-white bg-opacity-0   border-2 border-[#0b4392]"><a
                                href="{{ route('service_sub_route') }}">See
                                Our Service</a></button>
                    </div>
                </div>

            </div>

        </section>

        {{-- next section --}}

        <section>
            <div class="w-11/12 mx-auto my-16">
                <p class="text-3xl lg:text-6xl text-center my-10 font-bold istock">How we can help your business grow
                </p>

                <p class="text-xl lg:text-2xl text-center">We’re a passionate team of developers, designers, and strategists
                    committed
                    to building high-quality software. Since 2015, we’ve been helping businesses grow through technology.
                </p>

                <div class="mt-12 flex justify-between lg:flex-row flex-col gap-5">

                    <div class=" lg:w-[30%] custom-shadow  bg-gray-100 rounded-md  ">

                        {{-- <div class="p-10  mx-auto  backdrop-blur-2xl bg-white/30"> --}}

                        <div class="p-5 md:p-10 ">
                            <p class="text-2xl text-black">Founded in 2018</p>
                            <p class="text-black pt-8 ">We started our journey in 2018 with a mission to deliver
                                scalable, innovative, and efficient software solutions.</p>
                        </div>
                    </div>
                    <div class=" lg:w-[30%] custom-shadow bg-gray-100 rounded-md">

                        {{-- <div class="p-10  mx-auto  backdrop-blur-2xl bg-white/30"> --}}

                        <div class="p-5 md:p-10">
                            <p class="text-2xl text-black">100+ Successful Projects</p>
                            <p class="text-black pt-8 ">Over the years, we've completed 100+ projects across diverse
                                industries, showcasing our commitment to quality and client satisfaction.</p>
                        </div>
                    </div>
                    <div class=" lg:w-[30%] custom-shadow bg-gray-100 rounded-md">

                        {{-- <div class="p-10  mx-auto  backdrop-blur-2xl bg-white/30"> --}}

                        <div class="p-5 md:p-10">
                            <p class="text-2xl text-black">Global Client Base</p>
                            <p class="text-black pt-8 ">Our services have reached clients in over 15+ countries, earning
                                trust through timely delivery, reliable communication, and long-term collaboration.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        {{-- service we provide --}}
        <section>
            <div class="   bg-gradient-to-b from-[#000000] to-[#074db0] my-10 py-10">
                <div class="w-11/12 mx-auto">
                    <p class="text-5xl text-white pt-16 text-center"><span class="text-blue-500">Service</span> We Provide
                    </p>
                    <p class="py-5 text-left text-gray-500 hover:text-gray-300 ">We are Unicorn, a software development
                        company that leverages technology to create custom software products that address Clients’
                        challenges, needs, and pain points. Guided by core principles such as transparency, close
                        collaboration, expertise, and well-established management and development processes, we provide
                        exceptional services to our Clients with a strong focus on delivering business value — not just
                        software.</p>


                    <div class="hidden md:flex justify-between items-center">
                        <div id="tab-buttons"
                            class=" flex justify-between flex-col w-4/12 gap-6 custom-shadow-white p-5 shadow-md">
                            <button id="tab-1" onclick="tabBar('tab-1')"
                                class="py-3 px-6     bg-[#127aff]   text-white  ">Design
                            </button>
                            <button id="tab-2" onclick="tabBar('tab-2')"
                                class="py-3   px-6 animate    text-white  ">Fronend
                            </button>
                            <button id="tab-3" onclick="tabBar('tab-3')"
                                class="  py-3 px-6 animate    text-white  ">Backend
                            </button>
                            <button id="tab-4" onclick="tabBar('tab-4')"
                                class="py-3 px-6 animate     text-white  ">Database
                            </button>
                            <button id="tab-5" onclick="tabBar('tab-5')"
                                class="py-3 px-6 animate    text-white  ">Deployment
                            </button>
                        </div>
                        {{-- text-stack-icon div --}}
                        <div class="w-7/12">
                            <div id="tab-1" class="py-16 tab-div  ">
                                <div class="w-full   ">
                                    <p class="text-3xl text-white pb-5">Crafting Visual Experiences That Speak

                                    </p>
                                    <p class="text-gray-400">We design unique and engaging visuals tailored to your brand.
                                        From logos to full UI/UX layouts, we blend creativity with functionality.
                                        Our focus is to create designs that not only look good but work well.
                                        We ensure user-centric aesthetics with consistent branding.
                                        Stand out with designs that leave a lasting impression.

                                        .</p>
                                </div>
                            </div>
                            <div id="tab-2" class="py-16  tab-div hidden">
                                <div class="w-full   ">
                                    <p class="text-3xl text-white pb-5">Pixel-Perfect, Responsive Interfaces

                                    </p>
                                    <p class="text-gray-400">We build clean, fast, and responsive user interfaces.
                                        Your application will look great on every device and browser.
                                        Using modern frameworks, we ensure smooth user interactions.
                                        Accessibility and performance are at the heart of our code.
                                        We turn your ideas into interactive digital experiences.

                                        .</p>
                                </div>
                            </div>
                            <div id="tab-3" class="py-16  tab-div hidden">
                                <div class="w-full   ">
                                    <p class="text-3xl text-white pb-5">Robust Logic Behind the Scenes

                                    </p>
                                    <p class="text-gray-400">We develop secure and scalable server-side systems.
                                        Our backends handle complex logic and business operations with ease.
                                        We use modern tech like Node.js, Express, and more.
                                        Authentication, API integration, and real-time processing—covered.
                                        Everything is built for reliability, performance, and growth.

                                        .</p>
                                </div>
                            </div>
                            <div id="tab-4" class="py-16  tab-div hidden">
                                <div class="w-full   ">
                                    <p class="text-3xl text-white pb-5">Secure & Structured Data Handling


                                    </p>
                                    <p class="text-gray-400">Your data deserves a solid and organized foundation.
                                        We design relational and NoSQL databases tailored to your needs.
                                        Data integrity, speed, and security are our priorities.
                                        From schema design to query optimization, we handle it all.
                                        Access your data reliably—anytime, anywhere.

                                        .</p>
                                </div>
                            </div>
                            <div id="tab-5" class="py-16  tab-div hidden">
                                <div class="w-full   ">
                                    <p class="text-3xl text-white pb-5">Launching Your Dream to the World



                                    </p>
                                    <p class="text-gray-400">We make your application live with zero downtime deployment.
                                        From version control to CI/CD pipelines, we streamline everything.
                                        We work with platforms like Vercel, Netlify, Heroku, and AWS.
                                        Performance, security, and uptime are constantly monitored.
                                        Let us take care of the tech while you focus on growth.

                                        .</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- small device custom accordion --}}

                    <div class="md:hidden">
                        <!-- Accordion Item Start -->
                        <div class="accordion-item">
                            <div
                                class="flex justify-between items-center border-b-[1px] pb-3 pt-5 accordion-header cursor-pointer">
                                <p class="text-white">Design</p>
                                <div>
                                    <img class="arrow-down w-6"
                                        src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}"
                                        alt="">
                                    <img class="arrow-up w-6 rotate-180 hidden"
                                        src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div
                                class="accordion-content h-0 bg-[#0b4392] text-white overflow-hidden transition-all duration-500">
                                <div class="w-11/12 mx-auto   ">
                                    <p class="text-2xl text-white pb-5">Crafting Visual Experiences That Speak

                                    </p>
                                    <p class="text-gray-400">We design unique and engaging visuals tailored to your brand.
                                        From logos to full UI/UX layouts, we blend creativity with functionality.
                                        Our focus is to create designs that not only look good but work well.
                                        We ensure user-centric aesthetics with consistent branding.
                                        Stand out with designs that leave a lasting impression.

                                        .</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion Item End -->



                        <div class="accordion-item">
                            <div
                                class="flex justify-between items-center border-b-[1px] pb-3 pt-5 accordion-header cursor-pointer">
                                <p class="text-white">Fronend</p>
                                <div>
                                    <img class="arrow-down w-6"
                                        src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}"
                                        alt="">
                                    <img class="arrow-up w-6 rotate-180 hidden"
                                        src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div
                                class="accordion-content h-0 bg-[#0b4392] text-white overflow-hidden transition-all duration-500">
                                <div class="w-11/12 mx-auto   ">
                                    <p class="text-2xl text-white pb-5">Pixel-Perfect, Responsive Interfaces

                                    </p>
                                    <p class="text-gray-400">We build clean, fast, and responsive user interfaces.
                                        Your application will look great on every device and browser.
                                        Using modern frameworks, we ensure smooth user interactions.
                                        Accessibility and performance are at the heart of our code.
                                        We turn your ideas into interactive digital experiences.


                                        .</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div
                                class="flex justify-between items-center border-b-[1px] pb-3 pt-5 accordion-header cursor-pointer">
                                <p class="text-white">Backend</p>
                                <div>
                                    <img class="arrow-down w-6"
                                        src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}"
                                        alt="">
                                    <img class="arrow-up w-6 rotate-180 hidden"
                                        src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div
                                class="accordion-content h-0 bg-[#0b4392] text-white overflow-hidden transition-all duration-500">
                                <div class="w-11/12 mx-auto   ">
                                    <p class="text-2xl text-white pb-5">Robust Logic Behind the Scenes
                                    </p>
                                    <p class="text-gray-400">We develop secure and scalable server-side systems.
                                        Our backends handle complex logic and business operations with ease.
                                        We use modern tech like Node.js, Express, and more.
                                        Authentication, API integration, and real-time processing—covered.
                                        Everything is built for reliability, performance, and growth.
                                        .</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div
                                class="flex justify-between items-center border-b-[1px] pb-3 pt-5 accordion-header cursor-pointer">
                                <p class="text-white">Database</p>
                                <div>
                                    <img class="arrow-down w-6"
                                        src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}"
                                        alt="">
                                    <img class="arrow-up w-6 rotate-180 hidden"
                                        src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div
                                class="accordion-content h-0 bg-[#0b4392] text-white overflow-hidden transition-all duration-500">
                                <div class="w-11/12 mx-auto   ">
                                    <p class="text-2xl text-white pb-5">Secure & Structured Data Handling

                                    </p>
                                    <p class="text-gray-400">Your data deserves a solid and organized foundation.
                                        We design relational and NoSQL databases tailored to your needs.
                                        Data integrity, speed, and security are our priorities.
                                        From schema design to query optimization, we handle it all.
                                        Access your data reliably—anytime, anywhere.

                                        .</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <div
                                class="flex justify-between items-center border-b-[1px] pb-3 pt-5 accordion-header cursor-pointer">
                                <p class="text-white">Deployment</p>
                                <div>
                                    <img class="arrow-down w-6"
                                        src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}"
                                        alt="">
                                    <img class="arrow-up w-6 rotate-180 hidden"
                                        src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div
                                class="accordion-content h-0 bg-[#0b4392] text-white overflow-hidden transition-all duration-500">
                                <div class="w-11/12 mx-auto   ">
                                    <p class="text-2xl text-white pb-5">Launching Your Dream to the World


                                    </p>
                                    <p class="text-gray-400">We make your application live with zero downtime deployment.
                                        From version control to CI/CD pipelines, we streamline everything.
                                        We work with platforms like Vercel, Netlify, Heroku, and AWS.
                                        Performance, security, and uptime are constantly monitored.
                                        Let us take care of the tech while you focus on growth.

                                        .</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- small device --}}
                </div>
            </div>
        </section>

        {{-- message fro our ceo --}}

        <section>
            <div class="relative  md:flex items-center  bg-gradient-to-r from-[#d19999] to-[#074db0]/30 md:h-screen">

                <div
                    class="w-11/12 mx-auto py-10 md:py-0  flex items-center justify-between md:flex-row flex-col gap-10 md:gap-0">
                    <div class="md:w-6/12">
                        <img class="h-full " src="{{ asset('static-image/ceo.webp') }}" alt="">
                        <div class="absolute top-[30%] left-[5%] md:top-auto md:left-auto">
                            <p class="py-1 text-white md:text-gray-200">CEO and Founder</p>
                            <p class="py-1 text-white md:text-gray-200">Abu Bakkar Siddique</p>
                        </div>
                    </div>
                    <div class="md:w-5/12">
                        <p class="text-3xl font-semibold pb-5">Message from CEO</p>
                        <p class="text-gray-100 text-xl">
                            We don’t just build software — empower businesses to thrive in a digital-first world. By
                            blending
                            cutting-edge technology with transparent collaboration, we create solutions that make a
                            difference.</p>
                    </div>
                </div>

            </div>
        </section>


        {{-- industry we help --}}

        <section>
            <div class="my-10 ">
                <p class="text-center text-4xl font-semibold py-10">INDUSTRY WE HELP</p>
                {{-- start content --}}
                <div class="accordion-item">
                    <div
                        class="bg-gradient-to-r from-[#7f1414]/40 to-[#074db0]/50 flex justify-between items-center border-b-[1px] py-5 accordion-header cursor-pointer md:px-10">
                        <p class="text-white font-semibold text-3xl">Healthcare sector</p>
                        <div>
                            <img class="arrow-down w-6"
                                src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}" alt="">
                            <img class="arrow-up w-6 rotate-180 hidden"
                                src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}" alt="">
                        </div>
                    </div>
                    <div class="accordion-content h-0 bg-[#0b4392] text-white overflow-hidden transition-all duration-500">
                        <div class="w-11/12 mx-auto  space-y-5 py-5 ">
                            <p class="text-3xl font-semibold">Healthcare</p>
                            <p class="text-gray-400 hover:text-white">We develop services, tools, and systems to provide
                                patients and staff with up-to-date software.

                                .</p>
                        </div>
                    </div>
                </div>
                <!-- Accordion Item End -->
                {{-- start content --}}
                <div class="accordion-item">
                    <div
                        class="bg-gradient-to-r from-[#7f1414]/40 to-[#074db0]/50 flex justify-between items-center border-b-[1px] py-5 accordion-header cursor-pointer md:px-10">
                        <p class="text-white font-semibold text-3xl">Education sector</p>
                        <div>
                            <img class="arrow-down w-6"
                                src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}" alt="">
                            <img class="arrow-up w-6 rotate-180 hidden"
                                src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}" alt="">
                        </div>
                    </div>
                    <div class="accordion-content h-0 bg-[#0b4392] text-white overflow-hidden transition-all duration-500">
                        <div class="w-11/12 mx-auto  space-y-5 py-5 ">
                            <p class="text-3xl font-semibold">Education</p>
                            <p class="text-gray-400 hover:text-white">E-learning solutions that make education flexible,
                                engaging, and highly efficient.
                                .</p>
                        </div>
                    </div>
                </div>
                <!-- Accordion Item End -->
                {{-- start content --}}
                <div class="accordion-item">
                    <div
                        class="bg-gradient-to-r from-[#7f1414]/40 to-[#074db0]/50 flex justify-between items-center border-b-[1px] py-5 accordion-header cursor-pointer md:px-10">
                        <p class="text-white font-semibold text-3xl">Retail sector</p>
                        <div>
                            <img class="arrow-down w-6"
                                src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}" alt="">
                            <img class="arrow-up w-6 rotate-180 hidden"
                                src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}" alt="">
                        </div>
                    </div>
                    <div class="accordion-content h-0 bg-[#0b4392] text-white overflow-hidden transition-all duration-500">
                        <div class="w-11/12 mx-auto  space-y-5 py-5 ">
                            <p class="text-3xl font-semibold">Retail</p>
                            <p class="text-gray-400 hover:text-white">We build stronger connections with customers through
                                web and mobile applications with superior shopping experience and 24/7 availability.
                                .</p>
                        </div>
                    </div>
                </div>
                <!-- Accordion Item End -->
                {{-- start content --}}
                <div class="accordion-item">
                    <div
                        class="bg-gradient-to-r from-[#7f1414]/40 to-[#074db0]/50 flex justify-between items-center border-b-[1px] py-5 accordion-header cursor-pointer md:px-10">
                        <p class="text-white font-semibold text-3xl">Manufacturing
                            sector</p>
                        <div>
                            <img class="arrow-down w-6"
                                src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}" alt="">
                            <img class="arrow-up w-6 rotate-180 hidden"
                                src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}" alt="">
                        </div>
                    </div>
                    <div class="accordion-content h-0 bg-[#0b4392] text-white overflow-hidden transition-all duration-500">
                        <div class="w-11/12 mx-auto  space-y-5 py-5 ">
                            <p class="text-3xl font-semibold">Manufacturing
                            </p>
                            <p class="text-gray-400 hover:text-white">Comprehensive software solutions for supply chain
                                management, inventory management, warehouses, production monitoring, process automation, and
                                more.
                                .</p>
                        </div>
                    </div>
                </div>
                <!-- Accordion Item End -->
                {{-- start content --}}
                <div class="accordion-item">
                    <div
                        class="bg-gradient-to-r from-[#7f1414]/40 to-[#074db0]/50 flex justify-between items-center border-b-[1px] py-5 accordion-header cursor-pointer md:px-10">
                        <p class="text-white font-semibold text-3xl">Professional Services

                            sector</p>
                        <div>
                            <img class="arrow-down w-6"
                                src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}" alt="">
                            <img class="arrow-up w-6 rotate-180 hidden"
                                src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}" alt="">
                        </div>
                    </div>
                    <div class="accordion-content h-0 bg-[#0b4392] text-white overflow-hidden transition-all duration-500">
                        <div class="w-11/12 mx-auto  space-y-5 py-5 ">
                            <p class="text-3xl font-semibold">Professional Services

                            </p>
                            <p class="text-gray-400 hover:text-white">We develop CRM, management tools, billing products,
                                document management systems, and more. Our solutions are built for professionals by
                                professionals.
                                .</p>
                        </div>
                    </div>
                </div>
                <!-- Accordion Item End -->
                {{-- start content --}}
                <div class="accordion-item">
                    <div
                        class="bg-gradient-to-r from-[#7f1414]/40 to-[#074db0]/50 flex justify-between items-center border-b-[1px] py-5 accordion-header cursor-pointer md:px-10">
                        <p class="text-white font-semibold text-3xl">Logistics & Transportation
                            sector</p>
                        <div>
                            <img class="arrow-down w-6"
                                src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}" alt="">
                            <img class="arrow-up w-6 rotate-180 hidden"
                                src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}" alt="">
                        </div>
                    </div>
                    <div class="accordion-content h-0 bg-[#0b4392] text-white overflow-hidden transition-all duration-500">
                        <div class="w-11/12 mx-auto  space-y-5 py-5 ">
                            <p class="text-3xl font-semibold ">Logistics & Transportation
                            </p>
                            <p class="text-gray-400 hover:text-white">Software for freight reservation, transportation
                                management, and streamlined supply chain operations to keep goods and business moving.
                                .</p>
                        </div>
                    </div>
                </div>
                <!-- Accordion Item End -->
                {{-- start content --}}
                <div class="accordion-item">
                    <div
                        class="bg-gradient-to-r from-[#7f1414]/40 to-[#074db0]/50 flex justify-between items-center border-b-[1px] py-5 accordion-header cursor-pointer md:px-10">
                        <p class="text-white font-semibold  text-3xl">Engineering & Construction
                            sector</p>
                        <div>
                            <img class="arrow-down w-6"
                                src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}" alt="">
                            <img class="arrow-up w-6 rotate-180 hidden"
                                src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}" alt="">
                        </div>
                    </div>
                    <div class="accordion-content h-0 bg-[#0b4392] text-white overflow-hidden transition-all duration-500">
                        <div class="w-11/12 mx-auto  space-y-5 py-5 ">
                            <p class="text-3xl font-semibold">Engineering & Construction
                            </p>
                            <p class="text-gray-400 hover:text-white">From advanced BIM solutions and cost estimation tools
                                to IoT integration, we lay the foundation for the construction industry.
                                .</p>
                        </div>
                    </div>
                </div>
                <!-- Accordion Item End -->
                {{-- start content --}}
                <div class="accordion-item">
                    <div
                        class="bg-gradient-to-r from-[#7f1414]/40 to-[#074db0]/50 flex justify-between items-center border-b-[1px] py-5 accordion-header cursor-pointer md:px-10">
                        <p class="text-white font-semibold text-3xl">Marketing & Advertising
                            sector</p>
                        <div>
                            <img class="arrow-down w-6"
                                src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}" alt="">
                            <img class="arrow-up w-6 rotate-180 hidden"
                                src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}" alt="">
                        </div>
                    </div>
                    <div class="accordion-content h-0 bg-[#0b4392] text-white overflow-hidden transition-all duration-500">
                        <div class="w-11/12 mx-auto  space-y-5 py-5 ">
                            <p class="text-3xl font-semibold">Marketing & Advertising
                            </p>
                            <p class="text-gray-400 hover:text-white">We build effective Client relationships with
                                marketing automation tools that help optimize strategies, gather insights, and achieve brave
                                goals.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Accordion Item End -->



                {{-- end content --}}
            </div>
        </section>


        {{-- core tech-stack we work --}}

        <section>
            <div>
                <div>
                    <p class="text-3xl md:text-5xl text-black pt-16 text-center">Core<span
                            class="text-blue-500">Teck-Stack</span> We Use
                    </p>
                    <p class="py-5 text-xl text-gray-500 w-11/12 mx-auto text-center ">We are Unicorn, a software
                        development
                        company that leverages technology to create custom software products that address Clients’
                        challenges, needs, and pain points. Guided by core principles such as transparency, close
                        collaboration, expertise, and well-established management and development processes, we provide
                        exceptional services to our Clients with a strong focus on delivering business value — not just
                        software.</p>
                </div>


                <div>
                    <div class="flex justify-between flex-col items-center py-5">
                        <div
                            class="  flex justify-between md:flex-row  flex-col  w-11/12 gap-6 custom-shadow-white p-5 shadow-md">
                            <button onclick="tabBar('tab-1')"
                                class="py-3 lg:px-12 px-3 hover:bg-opacity-0 hover:shadow-custom font-semibold hover:text-black  bg-[#127aff]   text-white  focus:shadow-custom focus:bg-opacity-0 focus:text-black">Design
                            </button>
                            <button onclick="tabBar('tab-2')"
                                class="py-3 lg:px-12 px-3 hover:bg-opacity-0 hover:shadow-custom font-semibold hover:text-black animate  bg-[#127aff]  text-white  focus:shadow-custom focus:bg-opacity-0 focus:text-black">Frontend
                            </button>
                            <button onclick="tabBar('tab-3')"
                                class="  py-3 lg:px-12 px-3 hover:bg-opacity-0 hover:shadow-custom font-semibold hover:text-black animate  bg-[#127aff]  text-white  focus:shadow-custom focus:bg-opacity-0 focus:text-black">Backend
                            </button>
                            <button onclick="tabBar('tab-4')"
                                class="py-3 lg:px-12 px-3 hover:bg-opacity-0 hover:shadow-custom font-semibold hover:text-black animate  bg-[#127aff]  text-white  focus:shadow-custom focus:bg-opacity-0 focus:text-black">Database
                            </button>
                            <button onclick="tabBar('tab-5')"
                                class="py-3 lg:px-12 px-3 hover:bg-opacity-0 hover:shadow-custom font-semibold hover:text-black animate  bg-[#127aff]  text-white  focus:shadow-custom focus:bg-opacity-0 focus:text-black">Deployment
                            </button>
                        </div>
                        {{-- text-stack-icon div --}}
                        <div class="w-11/12 mx-auto">
                            <div id="tab-1" class="py-16 tab-div  ">
                                <div class="w-full   ">
                                    <div class="flex flex-wrap items-center justify-between gap-20">

                                        {{-- logo --}}
                                        <img class="w-20" src="{{ asset('static-image/Figma-logo.svg.png') }}"
                                            alt="">

                                    </div>
                                </div>
                            </div>
                            <div id="tab-2" class="py-16  tab-div hidden">
                                <div class="w-full   ">
                                    <div class="flex flex-wrap items-center justify-between gap-20">

                                        {{-- logo --}}
                                        <img class="w-24" src="{{ asset('static-image/HTML5_logo.svg.png') }}"
                                            alt="">
                                        <img class="w-24"
                                            src="{{ asset('static-image/CSS3_logo_and_wordmark.svg.png') }}"
                                            alt="">

                                        <img class="w-20" src="{{ asset('static-image/javascript.jpg') }}"
                                            alt="">
                                        <img class="w-24" src="{{ asset('static-image/react.png') }}" alt="">
                                        <img class="w-24" src="{{ asset('static-image/veu.png') }}" alt="">
                                        <img class="w-24" src="{{ asset('static-image/reactnative-inner.svg') }}"
                                            alt="">
                                        <img class="w-24"
                                            src="{{ asset('static-image/flutter-logo-png_seeklogo-349577.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-3" class="py-16  tab-div hidden">
                                <div class="w-full   ">
                                    <div class="flex flex-wrap items-center justify-between gap-20">

                                        {{-- backend logo --}}
                                        <img class="w-24" src="{{ asset('static-image/Node.js_logo.svg.png') }}"
                                            alt="">
                                        <img class="w-24"
                                            src="{{ asset('static-image/CSS3_logo_and_wordmark.svg.png') }}"
                                            alt="">

                                        <img class="w-20" src="{{ asset('static-image/javascript.jpg') }}"
                                            alt="">
                                        <img class="w-24" src="{{ asset('static-image/react.png') }}" alt="">
                                        <img class="w-24" src="{{ asset('static-image/veu.png') }}" alt="">
                                        <img class="w-24" src="{{ asset('static-image/reactnative-inner.svg') }}"
                                            alt="">
                                        <img class="w-24"
                                            src="{{ asset('static-image/flutter-logo-png_seeklogo-349577.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-4" class="py-16  tab-div hidden">
                                <div class="w-full   ">
                                    <div class="flex flex-wrap items-center justify-between gap-20">

                                        {{-- backend logo --}}
                                        <img class="w-24" src="{{ asset('static-image/Node.js_logo.svg.png') }}"
                                            alt="">
                                        <img class="w-24"
                                            src="{{ asset('static-image/CSS3_logo_and_wordmark.svg.png') }}"
                                            alt="">

                                        <img class="w-20" src="{{ asset('static-image/javascript.jpg') }}"
                                            alt="">
                                        <img class="w-24" src="{{ asset('static-image/react.png') }}" alt="">
                                        <img class="w-24" src="{{ asset('static-image/veu.png') }}" alt="">
                                        <img class="w-24" src="{{ asset('static-image/reactnative-inner.svg') }}"
                                            alt="">
                                        <img class="w-24"
                                            src="{{ asset('static-image/flutter-logo-png_seeklogo-349577.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div id="tab-5" class="py-16  tab-div hidden">
                                <div class="w-full   ">
                                    <div class="flex flex-wrap items-center justify-between gap-20">

                                        {{-- deploymwnt --}}
                                        <img class="w-24" src="{{ asset('static-image/ci-cd.png') }}" alt="">
                                        <img class="w-24"
                                            src="{{ asset('static-image/CSS3_logo_and_wordmark.svg.png') }}"
                                            alt="">

                                        <img class="w-20" src="{{ asset('static-image/javascript.jpg') }}"
                                            alt="">
                                        <img class="w-24" src="{{ asset('static-image/react.png') }}" alt="">
                                        <img class="w-24" src="{{ asset('static-image/veu.png') }}" alt="">
                                        <img class="w-24" src="{{ asset('static-image/reactnative-inner.svg') }}"
                                            alt="">
                                        <img class="w-24"
                                            src="{{ asset('static-image/flutter-logo-png_seeklogo-349577.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- advance tech we work --}}
        <section>
            <div class="bg-gradient-to-b from-[#000000] to-[#074db0]  text-center my-10 py-10">
                <p class="md:text-5xl text-white py-10">Advanced tech we work with</p>

                <div class="w-11/12 mx-auto flex justify-between lg:flex-row flex-col flex-wrap gap-10">
                    {{-- child div --}}
                    <div class="lg:w-5/12 custom-shadow-white p-5 hover:bg-gradient-to-r from-[#a85959] to-[#074db0]">
                        <p class="text-white text-2xl text-left">AI development </p>
                        <p class="text-white text-left py-5">Data is the lifeblood of the modern digital era, and we are on
                            top of it, helping businesses process and transform data for their needs. Whether it’s
                            optimizing operations, enhancing customer experiences, or identifying market trends, our big
                            data expertise transforms raw data into a strategic asset for the business.</p>

                        <div class="w-11/12 flex  flex-col  items-start">
                            <p class="text-white text-start flex justify-center items-center">
                                <span class="pr-3"><img class="w-5 "
                                        src="{{ asset('static-image/green-chekmark_1294168-1047-min.png') }}"
                                        alt=""></span> transforms raw data into a strategic asset for the business.
                            </p>
                            <p class="text-white text-start flex justify-center items-center"><span class="pr-3"><img
                                        class="w-5"
                                        src="{{ asset('static-image/green-chekmark_1294168-1047-min.png') }}"
                                        alt=""></span> transforms raw data into a strategic asset for the business.
                            </p>
                            <p class="text-white text-start flex justify-center items-center"><span class="pr-3"><img
                                        class="w-5"
                                        src="{{ asset('static-image/green-chekmark_1294168-1047-min.png') }}"
                                        alt=""></span> transforms raw data into a strategic asset for the business.
                            </p>
                            <p class="text-white text-start flex justify-center items-center"><span class="pr-3"><img
                                        class="w-5"
                                        src="{{ asset('static-image/green-chekmark_1294168-1047-min.png') }}"
                                        alt=""></span> transforms raw data into a strategic asset for the business.
                            </p>
                            <p class="text-white text-start flex justify-center items-center"><span class="pr-3"><img
                                        class="w-5"
                                        src="{{ asset('static-image/green-chekmark_1294168-1047-min.png') }}"
                                        alt=""></span> transforms raw data into a strategic asset for the business.
                            </p>
                            <p class="text-white text-start flex justify-center items-center"><span class="pr-3"><img
                                        class="w-5"
                                        src="{{ asset('static-image/green-chekmark_1294168-1047-min.png') }}"
                                        alt=""></span> transforms raw data into a strategic asset for the business.
                            </p>
                            <p class="text-white text-start flex justify-center items-center"><span class="pr-3"><img
                                        class="w-5"
                                        src="{{ asset('static-image/green-chekmark_1294168-1047-min.png') }}"
                                        alt=""></span> transforms raw data into a strategic asset for the business.
                            </p>
                        </div>
                    </div>
                    <div class="lg:w-5/12 custom-shadow-white p-5 hover:bg-gradient-to-r from-[#a85959] to-[#074db0]">
                        <p class="text-white text-2xl text-left">Blockchain development </p>
                        <p class="text-white text-left py-5">Data is the lifeblood of the modern digital era, and we are on
                            top of it, helping businesses process and transform data for their needs. Whether it’s
                            optimizing operations, enhancing customer experiences, or identifying market trends, our big
                            data expertise transforms raw data into a strategic asset for the business.</p>

                        <div class="w-11/12 flex  flex-col  items-start">
                            <p class="text-white text-start flex justify-center items-center">
                                <span class="pr-3"><img class="w-5 "
                                        src="{{ asset('static-image/green-chekmark_1294168-1047-min.png') }}"
                                        alt=""></span> transforms raw data into a strategic asset for the business.
                            </p>
                            <p class="text-white text-start flex justify-center items-center"><span class="pr-3"><img
                                        class="w-5"
                                        src="{{ asset('static-image/green-chekmark_1294168-1047-min.png') }}"
                                        alt=""></span> transforms raw data into a strategic asset for the business.
                            </p>
                            <p class="text-white text-start flex justify-center items-center"><span class="pr-3"><img
                                        class="w-5"
                                        src="{{ asset('static-image/green-chekmark_1294168-1047-min.png') }}"
                                        alt=""></span> transforms raw data into a strategic asset for the business.
                            </p>
                            <p class="text-white text-start flex justify-center items-center"><span class="pr-3"><img
                                        class="w-5"
                                        src="{{ asset('static-image/green-chekmark_1294168-1047-min.png') }}"
                                        alt=""></span> transforms raw data into a strategic asset for the business.
                            </p>
                            <p class="text-white text-start flex justify-center items-center"><span class="pr-3"><img
                                        class="w-5"
                                        src="{{ asset('static-image/green-chekmark_1294168-1047-min.png') }}"
                                        alt=""></span> transforms raw data into a strategic asset for the business.
                            </p>
                            <p class="text-white text-start flex justify-center items-center"><span class="pr-3"><img
                                        class="w-5"
                                        src="{{ asset('static-image/green-chekmark_1294168-1047-min.png') }}"
                                        alt=""></span> transforms raw data into a strategic asset for the business.
                            </p>
                            <p class="text-white text-start flex justify-center items-center"><span class="pr-3"><img
                                        class="w-5"
                                        src="{{ asset('static-image/green-chekmark_1294168-1047-min.png') }}"
                                        alt=""></span> transforms raw data into a strategic asset for the business.
                            </p>
                        </div>
                    </div>
                    <div class="lg:w-5/12 custom-shadow-white p-5 hover:bg-gradient-to-r from-[#a85959] to-[#074db0]">
                        <p class="text-white text-2xl text-left">Big Data development </p>
                        <p class="text-white text-left py-5">Data is the lifeblood of the modern digital era, and we are on
                            top of it, helping businesses process and transform data for their needs. Whether it’s
                            optimizing operations, enhancing customer experiences, or identifying market trends, our big
                            data expertise transforms raw data into a strategic asset for the business.</p>

                        <div class="w-11/12 flex  flex-col  items-start">
                            <p class="text-white text-start flex justify-center items-center">
                                <span class="pr-3"><img class="w-5 "
                                        src="{{ asset('static-image/green-chekmark_1294168-1047-min.png') }}"
                                        alt=""></span> transforms raw data into a strategic asset for the business.
                            </p>
                            <p class="text-white text-start flex justify-center items-center"><span class="pr-3"><img
                                        class="w-5"
                                        src="{{ asset('static-image/green-chekmark_1294168-1047-min.png') }}"
                                        alt=""></span> transforms raw data into a strategic asset for the business.
                            </p>
                            <p class="text-white text-start flex justify-center items-center"><span class="pr-3"><img
                                        class="w-5"
                                        src="{{ asset('static-image/green-chekmark_1294168-1047-min.png') }}"
                                        alt=""></span> transforms raw data into a strategic asset for the business.
                            </p>
                            <p class="text-white text-start flex justify-center items-center"><span class="pr-3"><img
                                        class="w-5"
                                        src="{{ asset('static-image/green-chekmark_1294168-1047-min.png') }}"
                                        alt=""></span> transforms raw data into a strategic asset for the business.
                            </p>
                            <p class="text-white text-start flex justify-center items-center"><span class="pr-3"><img
                                        class="w-5"
                                        src="{{ asset('static-image/green-chekmark_1294168-1047-min.png') }}"
                                        alt=""></span> transforms raw data into a strategic asset for the business.
                            </p>
                            <p class="text-white text-start flex justify-center items-center"><span class="pr-3"><img
                                        class="w-5"
                                        src="{{ asset('static-image/green-chekmark_1294168-1047-min.png') }}"
                                        alt=""></span> transforms raw data into a strategic asset for the business.
                            </p>
                            <p class="text-white text-start flex justify-center items-center"><span class="pr-3"><img
                                        class="w-5"
                                        src="{{ asset('static-image/green-chekmark_1294168-1047-min.png') }}"
                                        alt=""></span> transforms raw data into a strategic asset for the business.
                            </p>
                        </div>
                    </div>
                    <div class="lg:w-5/12 custom-shadow-white p-5 hover:bg-gradient-to-r from-[#a85959] to-[#074db0]">
                        <p class="text-white text-2xl text-left">Internet of Things development </p>
                        <p class="text-white text-left py-5">Data is the lifeblood of the modern digital era, and we are on
                            top of it, helping businesses process and transform data for their needs. Whether it’s
                            optimizing operations, enhancing customer experiences, or identifying market trends, our big
                            data expertise transforms raw data into a strategic asset for the business.</p>

                        <div class="w-11/12 flex  flex-col  items-start">
                            <p class="text-white text-start flex justify-center items-center">
                                <span class="pr-3"><img class="w-5 "
                                        src="{{ asset('static-image/green-chekmark_1294168-1047-min.png') }}"
                                        alt=""></span> transforms raw data into a strategic asset for the business.
                            </p>
                            <p class="text-white text-start flex justify-center items-center"><span class="pr-3"><img
                                        class="w-5"
                                        src="{{ asset('static-image/green-chekmark_1294168-1047-min.png') }}"
                                        alt=""></span> transforms raw data into a strategic asset for the business.
                            </p>
                            <p class="text-white text-start flex justify-center items-center"><span class="pr-3"><img
                                        class="w-5"
                                        src="{{ asset('static-image/green-chekmark_1294168-1047-min.png') }}"
                                        alt=""></span> transforms raw data into a strategic asset for the business.
                            </p>
                            <p class="text-white text-start flex justify-center items-center"><span class="pr-3"><img
                                        class="w-5"
                                        src="{{ asset('static-image/green-chekmark_1294168-1047-min.png') }}"
                                        alt=""></span> transforms raw data into a strategic asset for the business.
                            </p>
                            <p class="text-white text-start flex justify-center items-center"><span class="pr-3"><img
                                        class="w-5"
                                        src="{{ asset('static-image/green-chekmark_1294168-1047-min.png') }}"
                                        alt=""></span> transforms raw data into a strategic asset for the business.
                            </p>
                            <p class="text-white text-start flex justify-center items-center"><span class="pr-3"><img
                                        class="w-5"
                                        src="{{ asset('static-image/green-chekmark_1294168-1047-min.png') }}"
                                        alt=""></span> transforms raw data into a strategic asset for the business.
                            </p>
                            <p class="text-white text-start flex justify-center items-center"><span class="pr-3"><img
                                        class="w-5"
                                        src="{{ asset('static-image/green-chekmark_1294168-1047-min.png') }}"
                                        alt=""></span> transforms raw data into a strategic asset for the business.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- client review section --}}



       

        {{-- Commitment Guaranteed --}}
        <section>
            <div class="my-20">
                <div>
                    <p class="text-3xl  lg:w-[80%] text-center mx-auto">GUIDED BY STRONG <span
                            class="text-[#2563eb]">VALUES</span>,
                        WE SHAPE A BETTER TOMORROW</p>
                </div>

                <div class="flex flex-wrap justify-between w-[90%] mx-auto mt-16 gap-y-8">
                    <div class="lg:w-[45%] ">
                        <p class="text-xl pb-2 font-bold">Our Commitment to Sustainable Impact
                        </p>

                        <p>We champion sustainable growth and meaningful impact. As members of the Council for Inclusive
                            Capitalism, we embed responsible, future-focused practices into every project—benefiting the
                            environment, society, and the global economy.</p>
                    </div>
                    <div class="lg:w-[45%]">
                        <p class="text-xl pb-2 font-bold">Putting Clients at the Center

                        </p>

                        <p>Our Clients are our core focus. We deeply understand their needs, exceed expectations, and
                            deliver solutions aligned with their business goals—building strong, long-term partnerships.</p>
                    </div>
                    <div class="lg:w-[45%]">
                        <p class="text-xl pb-2 font-bold">Driven by Agility and Innovation

                        </p>

                        <p>We thrive in change. With Agile principles and modern technologies, we respond quickly to
                            evolving requirements and consistently stay ahead of market trends.</p>
                    </div>
                    <div class="lg:w-[45%]">
                        <p class="text-xl pb-2 font-bold">Trusted Security and Data Protection

                        </p>

                        <p>ISO 9001 and ISO 27001 certified, we uphold world-class standards in data protection. From NDAs
                            to two-factor authentication and strict internal policies, we ensure complete security and
                            confidentiality of Client information.</p>
                    </div>
                    <div class="lg:w-[45%]">
                        <p class="text-xl pb-2 font-bold">Respecting Cultures, Building Connections

                        </p>

                        <p>We embrace cultural diversity with respect and understanding. Operating across the USA, EU,
                            Africa, Asia, and Latin America, we adapt to regional nuances to create smooth and meaningful
                            collaboration.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- contact section --}}

        <section>
            <div id="contact-us"
                class="flex md:flex-row flex-col bg-gradient-to-r from-[#dfb076] to-[#518de1] py-16  items-center w-[90%] mx-auto justify-between px-5 mb-16">
                <div class="md:w-[45%] space-y-8 text-white">
                    <div class="flex  items-center gap-x-2"> <img class="w-7"
                            src="{{ asset('static-image/contact page/home-contact-icon.png') }}" alt="">
                        <p>12/17 Nirala khulna -1100</p>
                    </div>
                    <div class="flex  items-center gap-x-2"> <img class="w-7"
                            src="{{ asset('static-image/contact page/email.png') }}" alt="">
                        <p>skshihab170@gmail.com</p>
                    </div>

                    <div>
                        <p>We’d love to hear from you.
                            Share your thoughts, project details, or questions—our team will connect with you shortly.</p>
                    </div>
                </div>





                <div class="w-full md:w-[45%] space-y-5">
                    <form action="">
                        <div>
                            <label for="fullname" class="text-white">Name*</label> <br>
                            <input class="outline-none  text-black border-slate-600 w-full md:w-[80%] h-10 pl-3"
                                type="text" name="" id="fullname" placeholder="Type your name">
                        </div>
                        <div>
                            <label class="text-white">Email*</label> <br>
                            <input class="outline-none text-black border-slate-600 w-full md:w-[80%] h-10 pl-3"
                                type="email" name="" id="" placeholder="Type your email">
                        </div>
                        <div>
                            <label class="text-white ">Message*</label> <br>
                            <textarea class="text-black w-full pl-3  md:w-[80%] outline-none border-slate-600 " name="" id=""
                                rows="5" placeholder="Describe your query"></textarea>
                        </div>
                        <button type="button"
                            class="btn w-full md:w-[80%]
         bg-gradient-to-r from-[#255ead] to-[#4c4848]
         border-black hover:border-black hover:bg-gradient-to-r hover:from-[#181717] hover:to-[#1853a5] text-white ">
                            Submit
                        </button>

                    </form>
                </div>
            </div>
        </section>



    </main>


@endsection
