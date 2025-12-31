<nav id="navbar" class="hidden relative lg:flex items-center justify-between animate   px-4   text-white">
    {{-- 1st div --}}
    <div class="">
        <a href="{{ route('home') }}">
            <img class="w-[168px]" src="{{ asset('static-image/unicorn-logo.png') }}" alt="">
        </a>

    </div>
    {{-- 2nd div --}}
    <div>
        <ul id="menu"
            class="flex font-semibold  animate items-center transition duration-500  gap-8 istock font-medium ">
            <li id="service" class=" group  py-7 ">
                <a class="text-sm" href="{{ route('service_sub_route') }}">Service</a>
                <span><img id="white-arrow-1" class="inline w-4 group-hover:rotate-180 transition duration-500"
                        src="{{ asset('static-image/white arrow.png') }}" alt="">
                    <img id="black-arrow-1" class="inline hidden w-3 group-hover:rotate-180 transition duration-500"
                        src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}" alt="">

                </span>

            </li>
            <li id="case-studies" class="  py-7">
                <a class="text-sm" href="{{ route('case-studies') }}"> Case studies</a>


            </li>
            <li id="about-us" class="group  py-7">
                <a class="text-sm" href="{{ route('about') }}">About us</a>
                {{-- <span><img id="white-arrow-2"
                        class="inline w-4 group-hover:rotate-180 transition duration-500"
                        src="{{ asset('static-image/white arrow.png') }}" alt="">
                    <img id="black-arrow-2" class="inline hidden w-3 group-hover:rotate-180 transition duration-500"
                        src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}" alt="">

                </span> --}}

            </li>
            <li id="insights" class="group  py-7">
                <a class="text-sm" href="">Insights</a>
                {{-- <span><img id="white-arrow-3"
                        class="inline w-4 group-hover:rotate-180 transition duration-500"
                        src="{{ asset('static-image/white arrow.png') }}" alt="">
                    <img id="black-arrow-3" class="inline hidden w-3 group-hover:rotate-180 transition duration-500"
                        src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}" alt="">

                </span> --}}

            </li>
        </ul>
    </div>
    {{-- 3dr div --}}
    <div class="w-40 flex justify-center">
        <button id="pulse-button"
            class="py-3 px-6 bg-[#0b4392]  text-white hover:bg-opacity-0   hover:border-2 hover:border-[#0b4392] ">Get
            In Touch <span class="pulse-box"></span>
            <span class="pulse-box"></span>
            <span class="pulse-box"></span></button>
    </div>
    {{-- hover submenu fixed div --}}
    {{-- service div --}}
    {{-- <div id="group-hover-service"
        class="lg:w-11/12 absolute overflow-y-auto h-0    top-20 z-10 right-10   transition-all duration-700 bg-white text-black  flex flex-wrap justify-between  gap-y-10">
        <div class=" w-[30%]  custom-shadow-white p-5  m-1  istock hover:bg-gray-200   group">
            <p class="text-md text-gray-400 group-hover:text-white text-center font-bold border-b-[1px] w-full">SERVICES
            </p>
            <ul class="flex flex-col gap-3">
                <li>
                    <a class="text-gray-300 hover:text-black text-sm " href="{{route('software-development')}}">
                        Software Product Development
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-white  text-sm" href="">
                        Mobile App Development
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-white text-sm " href="">
                        Web Development
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-white text-sm " href="">
                        Internet of Things Development
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-white text-sm " href="">
                        IT Staff Augmentation
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-white text-sm " href="">
                        Business Analysis </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-white text-sm " href="">
                        UI/UX Services
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-white text-sm " href="">
                        Backend Development </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-white text-sm " href="">

                        Data Analytics
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-white text-sm " href="">

                        QA & Testing Services </a>
                </li>
            </ul>
        </div>

        <div class=" w-[30%]  custom-shadow-white p-5  m-1  istock hover:bg-blue-800 hover:text-white group">
            <p class="text-md text-center font-bold text-gray-400 group-hover:text-white border-b-[1px] w-full">SOLUTION
            </p>
            <ul class="flex flex-col gap-3">
                <li>
                    <a class="text-gray-300 hover:text-white text-sm " href="">
                        Enterprise Software Development
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-white  text-sm" href="">
                        MVP Development
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-white text-sm " href="">
                        SaaS Development
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-white text-sm " href="">
                        OpenAI Development
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-white text-sm " href="">
                        Super App Development
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-white text-sm " href="">
                        AGI Solution
                    </a>
                </li>
            </ul>
        </div>
        <div class=" w-[30%]  custom-shadow-white p-5  m-1  istock hover:bg-blue-800 hover:text-white group">
            <p class="text-md text-center font-bold text-gray-400 group-hover:text-white border-b-[1px] w-full">
                Technologies</p>
            <ul class="flex flex-col gap-3">
                <li>
                    <a class="text-gray-300 hover:text-white text-sm " href="">
                        Ai development
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-white  text-sm" href="">
                        Big Data Devellopment
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-white text-sm " href="">
                        Java Development
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-white text-sm " href="">
                        Node. Js Development
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-white text-sm " href="">
                        Ruby On Rails Development
                    </a>
                </li>
                <li>
                    <a class="text-gray-300 hover:text-white text-sm " href="">
                        Blockchain Development
                    </a>
                </li>
            </ul>
        </div>








    </div> --}}
    <div id="group-hover-service"
        class="lg:w-11/12 2xl:w-[1200px] 2xl:right-[30%] absolute overflow-y-auto h-0 top-20 z-10 lg:left-10 transition-all duration-700
           bg-white text-black   shadow-sm">

        <div class="flex flex-wrap justify-between gap-y-10">
            <!-- SERVICES -->
            <div class="w-[30%] bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300 p-5 group">
                <div>
                    <p class="text-md text-gray-600 group-hover:text-blue-600 text-center font-bold border-b pb-2 mb-3">
                        <a class="" href="{{ route('service_sub_route') }}">SERVICES</a>
                    </p>

                </div>
                <ul class="flex flex-col gap-3">
                    <li
                        class="text-gray-500 hover:text-blue-600 text-sm  transition-transform duration-300 ease-in-out hover:scale-110">
                        Software Product Development</li>
                    <li
                        class="text-gray-500 hover:text-blue-600 text-sm  transition-transform duration-300 ease-in-out hover:scale-110">
                        Mobile App Development</li>
                    <li
                        class="text-gray-500 hover:text-blue-600 text-sm  transition-transform duration-300 ease-in-out hover:scale-110">
                        Web Development</li>
                    <li
                        class="text-gray-500 hover:text-blue-600 text-sm  transition-transform duration-300 ease-in-out hover:scale-110">
                        Internet of Things Development</li>
                    <li
                        class="text-gray-500 hover:text-blue-600 text-sm  transition-transform duration-300 ease-in-out hover:scale-110">
                        IT Staff Augmentation</li>
                    <li
                        class="text-gray-500 hover:text-blue-600 text-sm  transition-transform duration-300 ease-in-out hover:scale-110">
                        Business Analysis</li>
                    <li
                        class="text-gray-500 hover:text-blue-600 text-sm  transition-transform duration-300 ease-in-out hover:scale-110">
                        UI/UX Services</li>
                    <li
                        class="text-gray-500 hover:text-blue-600 text-sm  transition-transform duration-300 ease-in-out hover:scale-110">
                        Backend Development</li>
                    <li
                        class="text-gray-500 hover:text-blue-600 text-sm  transition-transform duration-300 ease-in-out hover:scale-110">
                        Data Analytics</li>
                    <li
                        class="text-gray-500 hover:text-blue-600 text-sm  transition-transform duration-300 ease-in-out hover:scale-110">
                        QA & Testing Services</li>
                    <li
                        class="text-gray-500 hover:text-blue-600 text-sm  transition-transform duration-300 ease-in-out hover:scale-110">
                        Blockchain Development</li>
                </ul>

            </div>

            <!-- SOLUTION -->
            <div class="w-[30%] bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300 p-5 group">
                <p class="text-md text-gray-600 group-hover:text-blue-600 text-center font-bold border-b pb-2 mb-3">
                    <a href="{{ route('solution_sub_route') }}"> SOLUTION</a>
                </p>
                <ul class="flex flex-col gap-3">
                    <li
                        class="text-gray-500 hover:text-blue-600 text-sm transition-transform duration-300 ease-in-out hover:scale-110">
                        Enterprise Software Development
                    </li>
                    <li
                        class="text-gray-500 hover:text-blue-600 text-sm transition-transform duration-300 ease-in-out hover:scale-110">
                        MVP Development
                    </li>
                    <li
                        class="text-gray-500 hover:text-blue-600 text-sm transition-transform duration-300 ease-in-out hover:scale-110">
                        SaaS Development
                    </li>
                    <li
                        class="text-gray-500 hover:text-blue-600 text-sm transition-transform duration-300 ease-in-out hover:scale-110">
                        OpenAI Development
                    </li>
                    <li
                        class="text-gray-500 hover:text-blue-600 text-sm transition-transform duration-300 ease-in-out hover:scale-110">
                        Super App Development
                    </li>
                    <li
                        class="text-gray-500 hover:text-blue-600 text-sm transition-transform duration-300 ease-in-out hover:scale-110">
                        AGI Solution
                    </li>
                    <li
                        class="text-gray-500 hover:text-blue-600 text-sm transition-transform duration-300 ease-in-out hover:scale-110">
                        AI Solution
                    </li>
                    <li
                        class="text-gray-500 hover:text-blue-600 text-sm transition-transform duration-300 ease-in-out hover:scale-110">
                        Big Data Solution
                    </li>
                </ul>

            </div>

            <!-- TECHNOLOGIES -->
            <div class="w-[30%] bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300 p-5 group">
                <p class="text-md text-gray-600 group-hover:text-blue-600 text-center font-bold border-b pb-2 mb-3">
                    <a href="{{ route('technologies-sub-route') }}">TECHNOLOGIES</a>
                </p>
                <ul class="flex flex-col gap-3">
                    <li
                        class="text-gray-500 hover:text-blue-600 text-sm transition-transform duration-300 ease-in-out hover:scale-110">
                        Laravel</li>
                    <li
                        class="text-gray-500 hover:text-blue-600 text-sm transition-transform duration-300 ease-in-out hover:scale-110">
                        Django</li>
                    <li
                        class="text-gray-500 hover:text-blue-600 text-sm transition-transform duration-300 ease-in-out hover:scale-110">
                        Java Development</li>
                    <li
                        class="text-gray-500 hover:text-blue-600 text-sm transition-transform duration-300 ease-in-out hover:scale-110">
                        Node.js Development</li>
                    <li
                        class="text-gray-500 hover:text-blue-600 text-sm transition-transform duration-300 ease-in-out hover:scale-110">
                        Ruby On Rails Development</li>
                    <li
                        class="text-gray-500 hover:text-blue-600 text-sm transition-transform duration-300 ease-in-out hover:scale-110">
                        Blockchain Development</li>
                </ul>

            </div>
        </div>


    </div>




    {{-- about-us sub-menu div  --}}


    {{-- <div id="group-hover-about-us"
        class="lg:w-11/12 2xl:w-[1200px]  absolute overflow-auto h-0    top-20 z-10 left-10 2xl:right-[30%]   transition-all duration-700 bg-white text-black  ">



        <p class="text-black">We are an innovative software development company driven by creativity and modern
            technology</p>













    </div> --}}

    {{-- insights sub-menu div --}}

    {{-- <div id="group-hover-insights"
        class="lg:w-11/12 2xl:w-[1200px]  absolute overflow-auto h-0    top-20 z-10 lg:left-10 2xl:right-[30%]   transition-all duration-700 bg-white text-black">

    </div> --}}


</nav>


{{-- small navbar --}}
<nav class="lg:hidden  relative z-50 ">
    {{-- top-bar --}}
    <div class="flex justify-between items-center  pl-3 py-3 bg-gradient-to-r from-[#000000] to-[#0B4392]">
        <div>
            <a href="{{ route('home') }}"><img class="w-[128px]" src="{{ asset('static-image/unicorn-logo.png') }}"
                    alt=""></a>
        </div>
        <div class="w-28 flex justify-center ">
            <a class="py-1 px-3 hidden sm:block bg-[#0b4392]  text-white     " href="">Contact

            </a>
        </div>

        <div>
            <img id="open" class="w-8   " src="{{ asset('static-image/menu-open.png') }}" alt="">
            <img id="close" class=" w-8  hidden  " src="{{ asset('static-image/menus-close.png') }}"
                alt="">
        </div>

    </div>
    {{-- sidebar --}}
    <div id="sidebar-menu" class="  animate bg-white  absolute h-screen w-0 overflow-hidden top-14">


        <div class="h-[80vh]  justify-between  overflow-y-auto navigate w-11/12 mx-auto space-y-10 ">
            {{-- service --}}
            <div>
                <div class="flex justify-between items-center border-b-[1px] pb-3 pt-5">
                    <p>Service</p>
                    <div>
                        <img id="arrow-bottom-service" class="w-4 "
                            src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}" alt="">
                        <img id="arrow-top-service" class="w-4 rotate-180 hidden"
                            src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}" alt="">
                    </div>
                </div>
                <div id="clops-div" class="h-0 overflow-hidden bg-white  text-black transition-all duration-500">
                    <ul class="space-y-5 pl-5 w-8/12 text-sm ">
                        <li class="hover:text-green-800 font-bold">
                            <a href="{{ route('service_sub_route') }}">Service</a>
                        </li>
                        <li class="hover:text-green-800 font-bold">
                            <a href="{{ route('solution_sub_route') }}"> Solution</a>
                        </li>
                        <li class="hover:text-green-800 font-bold">
                            <a href="{{ route('technologies-sub-route') }}">Technologies</a>
                        </li>

                    </ul>
                </div>
            </div>
            {{-- case-studies --}}
            <div>

                <div class="flex justify-between  items-center border-b-[1px] pb-3 pt-5">
                    <p><a href="{{ route('case-studies') }}">Case Studies</a></p>
                    <div class="hidden">
                        <img id="arrow-bottom-case-studies" class="w-4 "
                            src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}" alt="">
                        <img id="arrow-top-case-studies" class="w-4 rotate-180 hidden"
                            src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}" alt="">
                    </div>
                </div>

            </div>
            {{-- about-us --}}
            <div>

                <div class="flex justify-between items-center  border-b-[1px] pb-3 pt-5">
                    <p><a href="{{ route('about') }}">About us</a></p>
                    <div class="hidden
                    ">
                        <img id="arrow-bottom-about-us" class="w-4 "
                            src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}" alt="">
                        <img id="arrow-top-about-us" class="w-4 rotate-180 hidden"
                            src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}" alt="">
                    </div>
                </div>
                <div id="clops-div-about-us"
                    class="h-0 overflow-hidden bg-[#0b4392] text-white transition-all duration-500 hidden">
                    <ul class="space-y-5 pl-5 w-8/12">
                        <li>
                            Software Product Development
                        </li>
                        <li>
                            Software Product Development
                        </li>
                        <li>
                            Software Product Development
                        </li>
                        <li>
                            Software Product Development
                        </li>
                        <li>
                            Software Product Development
                        </li>
                        <li>
                            Software Product Development
                        </li>
                    </ul>
                </div>
            </div>
            {{-- insights --}}
            <div>

                <div class="flex justify-between items-center border-b-[1px] pb-3 pt-5">
                    <p><a href="">Insights</a></p>
                    <div class="hidden ">
                        <img id="arrow-bottom-insights" class="w-4 "
                            src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}" alt="">
                        <img id="arrow-top-insights" class="w-4 rotate-180 hidden"
                            src="{{ asset('static-image/free-arrow-left-icon-3099-thumb.png') }}" alt="">
                    </div>
                </div>
                <div id="clops-div-insights"
                    class="h-0 bg-[#0b4392] text-white overflow-hidden transition-all duration-500 hidden">
                    <ul class="space-y-5 pl-5 w-8/12">
                        <li>
                            Software Product Development
                        </li>
                        <li>
                            Software Product Development
                        </li>
                        <li>
                            Software Product Development
                        </li>
                        <li>
                            Software Product Development
                        </li>
                        <li>
                            Software Product Development
                        </li>
                        <li>
                            Software Product Development
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</nav>

<section>
    <!-- Modal -->
    <div id="customModal" class="custom-modal">
        <div class="custom-modal-content relative">

               <section class="hidden lg:block">
            <div 
                class="flex md:flex-row flex-col bg-gradient-to-r from-[#dfb076] to-[#518de1] py-16  items-center w-[100%] mx-auto justify-between px-5 ">
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
                                rows="3" placeholder="Describe your query"></textarea>
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

            <button id="closeModalBtn" class="close-btn absolute top-3 right-3 px-4 py-2">close</button>
        </div>
    </div>
</section>
