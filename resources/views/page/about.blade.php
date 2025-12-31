@extends('page.root')
@section('title', 'about-us page')

@section('layout')

    <section>
        <div class="md:h-[100vh] h-[90vh]  relative bg-gradient-to-r from-[#000000] to-[#0B4392] ">
            <div class="absolute top-[10%] lg:top-[15%] text-white pl-4">
                <div class="text-sm">
                    <a class="font-normal hover:text-green-800" href="{{ route('home') }}">Home <img
                            class="inline w-3 -rotate-90 transition duration-500"
                            src="{{ asset('static-image/white arrow.png') }}" alt=""> </a><span
                        class="text-gray-500">About Us</span>
                </div>

            </div>

            <div>
                <p
                    class="text-white absolute top-[20%] md:text-center md:w-full lg:top-[25%] lg:text-6xl md:text-4xl  text-2xl pl-4">
                    About <span class="text-[#3367d8] hover:text-[#4c7de7]">Unicorn</span>
                </p>


 <div class="absolute top-[35%] md:top-[35%]  w-full">
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
                <div
                    class="w-full mx-auto absolute top-[55%] md:top-[60%] lg:top-[55%]  flex flex-wrap justify-center md:justify-between  text-center ">

                    <!-- Item 1 -->
                    <div class="flex flex-col items-center w-[40%] md:w-[15%] my-3">
                        <p class="flex items-center justify-center">
                            <span class="lg:text-4xl font-bold text-blue-600" id="count1">0</span>
                            <span class="text-white text-2xl">+</span>
                        </p>
                        <p class="text-white lg:mt-2 text-sm sm:text-base">Satisfaction rate%</p>
                    </div>

                    <!-- Item 2 -->
                    <div class="flex flex-col items-center w-[40%] md:w-[15%] my-3">
                        <p class="flex items-center justify-center">
                            <span class="lg:text-4xl font-bold text-blue-600" id="count2">0</span>
                            <span class="text-white text-2xl">+</span>
                        </p>
                        <p class="text-white lg:mt-2 text-sm sm:text-base">Successful projects</p>
                    </div>

                    <!-- Item 3 -->
                    <div class="flex flex-col items-center w-[40%] md:w-[15%] my-3">
                        <p class="flex items-center justify-center">
                            <span class="lg:text-4xl font-bold text-blue-600" id="count3">0</span>
                            <span class="text-white text-2xl">+</span>
                        </p>
                        <p class="text-white lg:mt-2 text-sm sm:text-base">Countries</p>
                    </div>

                    <!-- Item 4 -->
                    <div class="flex flex-col items-center w-[40%] md:w-[15%] my-3">
                        <p class="flex items-center justify-center">
                            <span class="lg:text-4xl font-bold text-blue-600" id="count4">0</span>
                            <span class="text-white text-xl">%</span>
                        </p>
                        <p class="text-white lg:mt-2 text-sm sm:text-base">Senior specialists</p>
                    </div>

                    <!-- Item 5 -->
                    <div class="flex flex-col items-center w-[40%] md:w-[15%] my-3">
                        <p class="flex items-center justify-center">
                            <span class="lg:text-4xl font-bold text-blue-600" id="count5">0</span>
                            <span class="text-white text-2xl">+</span>
                        </p>
                        <p class="text-white lg:mt-2 text-sm sm:text-base">Years’ Client engagement</p>
                    </div>

                    <!-- Item 6 -->
                    <div class="flex flex-col items-center w-[40%] md:w-[15%] my-3">
                        <p class="flex items-center justify-center">
                            <span class="lg:text-4xl font-bold text-blue-600" id="count6">0</span>
                            <span class="text-white text-2xl">+</span>
                        </p>
                        <p class="text-white lg:mt-2 text-sm sm:text-base">Years on the market</p>
                    </div>

                </div>




            </div>


        </div>
    </section>

    <script>
        function animateCount(id, end, duration = 2000) {
            const element = document.getElementById(id);
            let start = 0;
            const stepTime = Math.abs(Math.floor(duration / end));

            const timer = setInterval(() => {
                start += 1;
                element.textContent = start;
                if (start >= end) clearInterval(timer);
            }, stepTime);
        }

        // Animate all counts
        animateCount("count1", 98);
        animateCount("count2", 250);
        animateCount("count3", 25);
        animateCount("count4", 70);
        animateCount("count5", 3);
        animateCount("count6", 13);
    </script>
@endsection
