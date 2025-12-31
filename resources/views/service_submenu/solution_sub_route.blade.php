@extends('page.root')
@section('title', 'solution')

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
                            class="text-gray-500">Software Solution Services</span>
                    </div>

                </div>

                <div>
                    <p class="text-white absolute top-[20%] lg:top-[25%] lg:text-6xl md:text-4xl  text-2xl "> <span
                            class="text-[#3367d8] hover:text-[#4c7de7]">Software Solution</span> Services
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
                        <button
                            class="md:py-3 md:px-6 px-4 py-2 animate bg-[#0b4392] hover:bg-opacity-100  text-white bg-opacity-0   border-2 border-[#0b4392]">Get
                            in Touch
                        </button>
                    </div>
                </div>

            </div>
        </section>



    </main>

@endsection
