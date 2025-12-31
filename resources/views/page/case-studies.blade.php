@extends('page.root')
@section('title', 'case-studies')

@section('layout')
    <main>
        {{-- banner section --}}
        <section>
            <div class="md:h-[100vh] h-[90vh]  relative bg-gradient-to-r from-[#000000] to-[#0B4392] ">
                <div class="absolute top-[10%] lg:top-[15%] text-white pl-4">
                    <div class="text-sm">
                        <a class="font-normal hover:text-green-800" href="{{ route('home') }}">Home <img
                                class="inline w-3 -rotate-90 transition duration-500"
                                src="{{ asset('static-image/white arrow.png') }}" alt=""> </a><span
                            class="text-gray-500">Case Studies</span>
                    </div>

                </div>

                <div>
                    <p
                        class="text-white absolute top-[20%] md:text-center md:w-full lg:top-[25%] lg:text-6xl md:text-4xl  text-2xl pl-4">
                        <span class="text-[#3367d8] hover:text-[#4c7de7]">Projects</span> successfully we developed
                    </p>

                    <p class="text-white absolute top-[35%] md:top-[45%]  md:text-xl  md:text-center md:w-full  pl-4">One look
                        is worth a thousand words.

                    </p>
                </div>
                <div class="absolute top-[50%] md:top-[60%] w-full">
                    <div class="flex justify-center md:flex-row flex-col md:gap-5 gap-3 md:mt-8 mt-4 items-center">
                        <button
                            class="md:py-3 md:px-6 px-4 py-2 animate md:mr-5 bg-[#0b4392]  text-white hover:bg-opacity-0   border-2 border-[#0b4392]">Book
                            Consultation</button>
                        <button
                            class="md:py-3 md:px-6 px-4 py-2 animate bg-[#0b4392] hover:bg-opacity-100  text-white bg-opacity-0   border-2 border-[#0b4392]">Get
                            in Touch
                        </button>
                    </div>
                </div>

            </div>
        </section>

        <section>
            <div class="relative mt-20">
                <div class="lg:h-[90vh] bg-gradient-to-r from-[#000000] to-[#9e3a0b]  sticky top-[50px] z-[1] w-[97%] mx-auto rounded-lg flex  justify-between items-center lg:flex-row flex-col border-2 border-white">
                    <div class="lg:w-[45%] text-white">
                        <p class="md:text-3xl lg:text-5xl lg:p-8 p-4">POS system </p>
                        <p class="lg:p-8 p-4">A MODERN POINT OF SALE SOLUTION THAT STREAMLINES SALES, INVENTORY MANAGEMENT, AND INVOICING —
                            MAKING EVERY TRANSACTION FASTER, ACCURATE, AND FULLY AUTOMATED.</p>

                    </div>
                    <div class="lg:w-[50%] ">
                        <img class="mx-auto w-10/12 lg:rotate-3 lg:hover:rotate-6 lg:hover:scale-105 transition duration-500 " src="{{ asset('static-image/case studies/pos system.webp')}}" alt="">
                    </div>
                </div>
                <div class="lg:h-[90vh] bg-gradient-to-r from-[#000000] to-[#9e3a0b]  sticky top-[50px] z-[2] w-[97%] mx-auto rounded-lg flex  justify-between items-center lg:flex-row flex-col lg:flex-row-reverse border-[1px] border-t-white">
                    <div class="lg:w-[45%] text-white">
                        <p class="md:text-3xl lg:text-5xl lg:p-8 p-4">School Management System </p>
                        <p class="lg:p-8 p-4">A complete digital solution for schools to manage students, teachers, attendance, results, and fees — all from one easy-to-use platform.</p>

                    </div>
                    <div class="lg:w-[50%]">
                        <img class="mx-auto w-10/12 lg:rotate-3 lg:hover:rotate-6 lg:hover:scale-105 transition duration-500 " src="{{ asset('static-image/case studies/school management website.webp')}}" alt="">
                    </div>
                </div>
                <div class="lg:h-[90vh] bg-gradient-to-r from-[#000000] to-[#9e3a0b]  sticky top-[50px] z-[3] w-[97%] mx-auto rounded-lg flex  justify-between items-center lg:flex-row flex-col border-[1px] border-t-white">
                    <div class="lg:w-[45%] text-white">
                        <p class="md:text-3xl lg:text-5xl lg:p-8 p-4">E-Commerce Platform</p>
                        <p class="lg:p-8 p-4">A powerful online shopping platform designed to handle product uploads, order tracking, payments, and delivery management — helping businesses go digital effortlessly.</p>

                    </div>
                    <div class="lg:w-[50%]">
                        <img class="mx-auto w-10/12 lg:rotate-3 lg:hover:rotate-6 lg:hover:scale-105 transition duration-500 " src="{{ asset('static-image/case studies/e-commerce.webp')}}" alt="">
                    </div>
                </div>
                <div class="lg:h-[90vh] bg-gradient-to-r from-[#000000] to-[#9e3a0b]  sticky top-[50px] z-[4] w-[97%] mx-auto rounded-lg flex  justify-between items-center lg:flex-row flex-col lg:flex-row-reverse border-[1px] border-t-white">
                    <div class="lg:w-[45%] text-white">
                        <p class="md:text-3xl lg:text-5xl lg:p-8 p-4">Garments ERP System</p>
                        <p class="lg:p-8 p-4">An all-in-one ERP software tailored for the garments industry to manage orders, production, inventory, exports, and accounts efficiently from a unified dashboard.</p>

                    </div>
                    <div class="lg:w-[50%]">
                        <img class="mx-auto w-10/12 lg:rotate-3 lg:hover:rotate-6 lg:hover:scale-105 transition duration-500 " src="{{ asset('static-image/case studies/erp dashboard.webp')}}" alt="">
                    </div>
                </div>
                <div class="lg:h-[90vh] bg-gradient-to-r from-[#000000] to-[#9e3a0b]  sticky top-[50px] z-[5] w-[97%] mx-auto rounded-lg flex  justify-between items-center lg:flex-row flex-col  border-[1px] border-t-white">
                    <div class="lg:w-[45%] text-white">
                        <p class="md:text-3xl lg:text-5xl lg:p-8 p-4">Government Office Management Software</p>
                        <p class="lg:p-8 p-4">A centralized management system for government offices to automate file processing, employee records, task tracking, and reporting with transparency and efficiency.</p>

                    </div>
                    <div class="lg:w-[50%]">
                        <img class="mx-auto w-10/12 lg:rotate-3 lg:hover:rotate-6 lg:hover:scale-105 transition duration-500 " src="{{ asset('static-image/case studies/office management dashboard.webp')}}" alt="">
                    </div>
                </div>
                <div class="lg:h-[90vh] bg-gradient-to-r from-[#000000] to-[#9e3a0b]  sticky top-[50px] z-[6] w-[97%] mx-auto rounded-lg flex  justify-between items-center lg:flex-row flex-col lg:flex-row-reverse  border-[1px] border-t-white">
                    <div class="lg:w-[45%] text-white">
                        <p class="md:text-3xl lg:text-5xl lg:p-8 p-4">University Management Website</p>
                        <p class="lg:p-8 p-4">A comprehensive web solution for universities that manages student admissions, courses, faculty, results, and research data seamlessly.</p>

                    </div>
                    <div class="lg:w-[50%]">
                        <img class="mx-auto w-10/12 lg:rotate-3 lg:hover:rotate-6 lg:hover:scale-105 transition duration-500 " src="{{ asset('static-image/case studies/university.webp')}}" alt="">
                    </div>
                </div>
                <div class="lg:h-[90vh] bg-gradient-to-r from-[#000000] to-[#9e3a0b]  sticky top-[50px] z-[7] w-[97%] mx-auto rounded-lg flex  justify-between items-center lg:flex-row flex-col   border-[1px] border-t-white">
                    <div class="lg:w-[45%] text-white">
                        <p class="md:text-3xl lg:text-5xl lg:p-8 p-4">Android App</p>
                        <p class="lg:p-8 p-4">Custom-built Android applications optimized for performance, usability, and scalability — delivering seamless experiences on every device.</p>

                    </div>
                    <div class="lg:w-[50%]">
                        <img class="mx-auto w-10/12 lg:rotate-3 lg:hover:rotate-6 lg:hover:scale-105 transition duration-500 " src="{{ asset('static-image/case studies/office management.webp')}}" alt="">
                    </div>
                </div>
                <div class="lg:h-[90vh] bg-gradient-to-r from-[#000000] to-[#9e3a0b]  sticky top-[50px] z-[7] w-[97%] mx-auto rounded-lg flex  justify-between items-center lg:flex-row flex-col lg:flex-row-reverse   border-[1px] border-t-white ">
                    <div class="lg:w-[45%] text-white">
                        <p class="md:text-3xl lg:text-5xl lg:p-8 p-4">iOS App</p>
                        <p class="lg:p-8 p-4">High-quality iOS applications designed with precision and modern UI principles — ensuring smooth functionality and superior user experience on all Apple devices.</p>

                    </div>
                    <div class="lg:w-[50%]">
                        <img class="mx-auto w-10/12 lg:rotate-3 lg:hover:rotate-6 lg:hover:scale-105 transition duration-500 " src="{{ asset('static-image/case studies/ios.webp')}}" alt="">
                    </div>
                </div>



            </div>
        </section>

        <section>

        </section>
    </main>

@endsection
