@extends('page.root')
@section('title', 'service category')

@section('layout')
    <main>
        {{-- banner section --}}
        <section>
            <div class="md:h-[100vh] h-[130vh] relative bg-gradient-to-r from-[#000000] to-[#0B4392] pl-4">
                <div class="absolute top-[10%] lg:top-[15%] text-white ">
                    <div class="text-sm">
                        <a class="font-normal hover:text-green-800" href="{{ route('home') }}">Home <img
                                class="inline w-3 -rotate-90 transition duration-500"
                                src="{{ asset('static-image/white arrow.png') }}" alt=""> </a><span
                            class="text-gray-500">Software Development Services</span>
                    </div>

                </div>

                <div>
                    <p class="text-white absolute top-[20%] lg:top-[25%] lg:text-6xl md:text-4xl  text-2xl "> <span
                            class="text-[#3367d8] hover:text-[#4c7de7]">Software Development</span> Services
                    </p>

                    <p class="text-white absolute top-[35%] md:top-[45%] lg:w-[70%] md:text-xl">At Unicorn, we provide
                        end-to-end software
                        development backed by industry-specific expertise, advisory support, and system maintenance,
                        including maintenance of complex legacy solutions. Our software engineering services encompass both
                        the classic outsourcing model and staff augmentation.</p>
                </div>
                <div class="absolute top-[75%] md:top-[70%]">
                    <div class="flex justify-center md:flex-row flex-col md:gap-5 gap-3 md:mt-8 mt-4 items-center">
                        <button
                            class="md:py-3 md:px-6 px-4 py-2 animate md:mr-5 bg-[#0b4392]  text-white hover:bg-opacity-0   border-2 border-[#0b4392]">Book
                            Consultation</button>
                        <button id="goBtn"
                            class="md:py-3 md:px-6 px-4 py-2 animate bg-[#0b4392] hover:bg-opacity-100  text-white bg-opacity-0   border-2 border-[#0b4392]">Contact
                            us

                        </button>
                    </div>
                </div>

            </div>
        </section>

        <section>
            <div>
                {{-- <p class="py-16 text-2xl md:text-4xl font-bold lg:font-normal lg:text-5xl text-center">Popular sector we work</p> --}}

                <div class="flex flex-wrap justify-center gap-16 py-10">
                    <div class="flex justify-between flex-col items-center">
                        <img class="w-28" src="{{ asset('static-image/ecomerce.jpg') }}" alt="">
                        <p class="text-xl  font-bold">E-commerce</p>
                    </div>
                    <div class="flex justify-between flex-col items-center">
                        <img class="w-28" src="{{ asset('static-image/education635.logowik.com.webp') }}" alt="">
                        <p class="text-xl font-bold">Education</p>
                    </div>
                    <div class="flex justify-between flex-col items-center">
                        <img class="w-28" src="{{ asset('static-image/buisness logo.jpg') }}" alt="">
                        <p class="text-xl font-bold">Buisness</p>

                    </div>
                    <div class="flex justify-between flex-col items-center">
                        <img class="w-28" src="{{ asset('static-image/health-caress.jpg') }}" alt="">
                        <p class="text-xl font-bold">Healthcare</p>

                    </div>
                </div>
            </div>
        </section>
        <section>
            <div>
                <p class="py-20 text-2xl md:text-4xl font-bold lg:font-normal lg:text-5xl text-center"> Core tech software
                    develop <span class="text-blue-800">unicorn</span></p>



                <div class="flex flex-col lg:flex-row justify-between w-[95%] mx-auto">

                    <!-- CARD 1 -->
                    <div class="relative lg:w-[32%] p-10 overflow-hidden group bg-white">

                        <!-- gradient layer -->
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-[#e7c296] to-[#d1dae7]
             opacity-0 group-hover:opacity-100
             transition-opacity duration-700 ease-in-out">
                        </div>

                        <!-- content -->
                        <div class="relative lg:z-10">
                            <p class="text-2xl">Custom software development</p>
                            <p class="pt-6">
                                We develop bespoke solutions for specific business needs and requirements. Custom
                                development means full-cycle software development adapted to your case regarding budget,
                                timelines, tech stack, advanced technologies, and other aspects.
                            </p>
                        </div>

                    </div>

                    <!-- CARD 2 -->
                    <div class="relative lg:w-[32%] p-10 overflow-hidden group bg-white">

                        <div
                            class="absolute inset-0 bg-gradient-to-r from-[#e7c296] to-[#d1dae7]
             opacity-0 group-hover:opacity-100
             transition-opacity duration-700 ease-in-out">
                        </div>

                        <div class="relative lg:z-10">
                            <p class="text-2xl">Mobile app development</p>
                            <p class="pt-6">
                                Our team of experienced mobile developers builds iOS, Android, and
                                cross-platform applications.
                            </p>
                        </div>

                    </div>

                    <!-- CARD 3 -->
                    <div class="relative lg:w-[32%] p-10 overflow-hidden group bg-white">

                        <div
                            class="absolute inset-0 bg-gradient-to-r from-[#e7c296] to-[#d1dae7]
             opacity-0 group-hover:opacity-100
             transition-opacity duration-700 ease-in-out">
                        </div>

                        <div class="relative lg:z-10">
                            <p class="text-2xl">Web application development</p>
                            <p class="pt-6">
                                We develop scalable, high-performance, and secure web applications.
                            </p>
                        </div>

                    </div>

                </div>


            </div>
        </section>


        {{-- contact section --}}
        <section>
            <div id="contact-us"
                class="flex md:flex-row flex-col bg-gradient-to-r from-[#dfb076] to-[#518de1] py-16  items-center w-[90%] mx-auto justify-between px-5 my-16">
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
                            <label  class="text-white ">Message*</label> <br>
                            <textarea class="text-black w-full pl-3  md:w-[80%] outline-none border-slate-600 " name="" 
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
