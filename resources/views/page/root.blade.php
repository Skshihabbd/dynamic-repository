<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <link rel="icon" type="image/svg+xml" href="{{ asset('asset/logo.png') }}">




    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Default title')</title>


    @vite('resources/css/app.css')
    {{-- fontt --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Istok+Web:ital,wght@0,400;0,700;1,400;1,700&family=Libertinus+Math&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wdth,wght@0,75,300..800;1,75,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Rubik+Mono+One&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/root.css') }}">
    {{-- fontt --}}


    {{-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> --}}




    {{-- owl carosl --}}
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    {{-- owl carosl --}}
    {{-- animate css --}}
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    {{-- animate css --}}
    <style>
        .bg-white {
            background-color: white;
        }

        .custom-text-white {
            color: black;
        }

        .py-5 {
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .animate {
            transition-duration: 500ms;

        }

        .pulse-button {
            position: relative;
            z-index: 1;
            overflow: visible;
        }

        /* Common style for each pulse layer */
        .pulse-button .pulse-box {
            position: absolute;
            top: -1%;
            left: -10%;
            width: 101%;
            height: 101%;
            border: 2px solid white;

            transform: scale(1);
            opacity: 0;
            pointer-events: none;
            z-index: -1;
            animation: pulse-box 2s ease-out;
        }

        /* second and third pulse start with delay */
        .pulse-button .pulse-box:nth-child(2) {
            animation-delay: 0.5s;
        }

        .pulse-button .pulse-box:nth-child(3) {
            animation-delay: 1s;
        }

        @keyframes pulse-box {
            0% {
                transform: scale(1);
                opacity: 0.4;
            }

            100% {
                transform: scale(1.6);
                opacity: 0;
            }
        }

        @media screen and (max-width: 640px) {
            .position-expand {
                left: 10%;
                top: 20%
            }

        }

        @media screen and (min-width: 641px) and (max-width:768px) {
            .position-expand {
                left: 10%;
                top: 20%
            }
        }

        @media screen and (min-width: 769px) and (max-width:1023px) {
            .position-expand {
                left: 70%;
                top: 20%
            }
        }

        @media screen and (min-width: 1024px) {
            .position-expand {
                left: 70%;
                top: 20%
            }
        }

        .custom-shadow {
            box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.25);
        }

        .custom-shadow-white {
            box-shadow: 0 0 2px 1px rgba(247, 243, 243, 0.25);
        }



        /* arrow icon animation */
        .arrow-animate {
            display: inline-block;
            animation: arrowMove 1s ease-out infinite;
        }

        .arrow-animate:nth-child(1) {
            animation-delay: 0.2s;
        }

        .arrow-animate:nth-child(2) {
            animation-delay: 0.2s;
        }

        .arrow-animate:nth-child(3) {
            animation-delay: 0.2s;
        }

        @keyframes arrowMove {
            0% {
                opacity: 0;
                transform: translateX(-10px) rotate(-90deg);
            }

            50% {
                opacity: 1;
                transform: translateX(0px) rotate(-90deg);
            }

            100% {
                opacity: 0;
                transform: translateX(10px) rotate(-90deg);
            }
        }


        /* double arrow animation */

        /* arrow icon animation */
        .arrow-animate-double {
            display: inline-block;
            animation: arrowMoves 1s ease-out infinite;
        }

        .arrow-animate-double:nth-child(1) {
            animation-delay: 0.2s;
        }

        .arrow-animate-double:nth-child(2) {
            animation-delay: 0.2s;
        }

        .arrow-animate-double:nth-child(3) {
            animation-delay: 0.2s;
        }

        @keyframes arrowMoves {
            0% {
                opacity: 0;
                transform: translateX(-10px);
            }

            50% {
                opacity: 1;
                transform: translateX(0px);
            }

            100% {
                opacity: 0;
                transform: translateX(10px);
            }
        }

        .global-gradient {

            background: linear-gradient(225deg, rgb(60, 129, 218) 7%, rgb(22, 28, 63) 59%);



        }



        /* Modal background */
.custom-modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.6);

    justify-content: center;
    align-items: center;
}

/* Modal content */
.custom-modal-content {
    background: rgb(131, 19, 19);



    animation: fadeIn 0.3s ease;
}

/* Simple animation */
@keyframes fadeIn {
    from { opacity: 0; transform: scale(0.8); }
    to { opacity: 1; transform: scale(1); }
}

/* Close Button */
.close-btn {


    background: #333;
    color: white;
    border: none;
    cursor: pointer;
}

    </style>

    <link rel="stylesheet" href="{{ asset('css/custom-carosol-slider.css') }}">
</head>

<body>
    <div id="page-loader" class=" fixed inset-0 bg-white flex items-center justify-center z-50">
        <i class="fas fa-spinner fa-3x text-blue-500 animate-spin"></i>
    </div>
    <div id="page-content" class="relative istock hidden">

        <div class=" fixed  w-full z-10  lg:z-20">
            @include('component.header')
        </div>

        <div id="top-scroll" class="fixed z-20  top-[80%] left-[70%] md:left-[92%] hidden ">
            <button class="btn btn-primary"><img class="w-5 rotate-180 "
                    src="{{ asset('static-image/white arrow.png') }}" alt=""></button>
        </div>
        <div class="relative  top-14 lg:top-0">
            <div>
                @yield('layout')
            </div>
            <div>
                @include('component.footer')
            </div>

        </div>
    </div>





    {{-- axios cdn --}}
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    {{-- axios cdn --}}

    {{-- sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- sweet alert --}}

    {{-- icon --}}
    <script src="https://kit.fontawesome.com/63e83a9841.js" crossorigin="anonymous"></script>
    {{-- icon --}}
    {{-- jquery --}}
    <script src="{{ asset('jquery/jquery-3.7.1.min.js') }}"></script>


    <!-- Owl Carousel JS -->
    <script src="{{ asset('jquery/owl.carousel.min.js') }}"></script>

    <script>
        




        //new page load and scroll
        function handleNavbarOnScroll() {
            const scrollY = window.scrollY;
            console.log("Scroll Position:", scrollY);

            const navbar = document.getElementById("navbar");
            const topScroll = document.getElementById("top-scroll");
            const pulseButton = document.getElementById("pulse-button");

            if (scrollY > 30) {
                navbar.classList.add("bg-white", "shadow-md", "text-black");
                navbar.classList.remove("text-white");
                document.getElementById("white-arrow-1").classList.add("hidden")
                document.getElementById("black-arrow-1").classList.remove("hidden")

                topScroll.classList.remove("hidden");

                document.getElementById("group-hover-service").classList.replace("top-20", "top-16");


                document.querySelectorAll("#menu li").forEach(item => {
                    item.classList.add("py-5", "animate");
                    item.classList.remove("py-7", "animate");
                });

                pulseButton.addEventListener("mouseenter", () => {
                    pulseButton.classList.replace("text-white", "text-black");
                });
                pulseButton.addEventListener("mouseleave", () => {
                    pulseButton.classList.replace("text-black", "text-white");
                });

            } else {
                document.getElementById("white-arrow-1").classList.remove("hidden")
                document.getElementById("black-arrow-1").classList.add("hidden")


                navbar.classList.remove("bg-white", "shadow-md", "text-black");
                navbar.classList.add("text-white");

                topScroll.classList.add("hidden");

                document.querySelectorAll("#menu li").forEach(item => {
                    item.classList.remove("py-5");
                    item.classList.add("py-7", "transition-all", "duration-500");
                });

                document.getElementById("group-hover-service").classList.replace("top-16", "top-20");


                pulseButton.addEventListener("mouseenter", () => {
                    pulseButton.classList.replace("text-black", "text-white");
                });
            }
        }

        window.addEventListener("scroll", handleNavbarOnScroll);

        // ✅ Reload holeo ekbar call korbe
        window.addEventListener("load", handleNavbarOnScroll);

        // 🔝 Scroll to top button click
        document.getElementById("top-scroll").addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });


        //new page load and scroll

        // service javascript code
        document.getElementById("service").addEventListener("mouseenter", function() {
            document.getElementById("group-hover-service").classList.add("h-screen", "custom-shadow", "px-5")
            document.getElementById("group-hover-service").classList.remove("h-0")
            const childDiv = document.getElementById("group-hover-service").querySelectorAll("div")
            childDiv.forEach((child, index) => {
                child.classList.add("opacity-100", "animate")
                child.classList.remove("opacity-0", "animate")
            });



        })
        document.getElementById("service").addEventListener("mouseleave", function() {
            document.getElementById("group-hover-service").classList.add("h-0")
            document.getElementById("group-hover-service").classList.remove("h-screen", "custom-shadow", "px-5")
            const childDiv = document.getElementById("group-hover-service").querySelectorAll("div")
            childDiv.forEach((child, index) => {
                child.classList.remove("opacity-100", "animate")
                child.classList.add("opacity-0", "animate")

            });



        })

        document.getElementById("group-hover-service").addEventListener("mouseenter", function() {
            document.getElementById("group-hover-service").classList.add("h-screen", "custom-shadow", "px-5")
            document.getElementById("group-hover-service").classList.remove("h-0")
            document.getElementById("black-arrow-1").classList.add("rotate-180")
            document.getElementById("white-arrow-1").classList.add("rotate-180")

            const childDiv = document.getElementById("group-hover-service").querySelectorAll("div")
            childDiv.forEach((child, index) => {
                child.classList.add("opacity-100", "animate")
                child.classList.remove("opacity-0", "animate")
            });

        })


        document.getElementById("group-hover-service").addEventListener("mouseleave", function() {
            document.getElementById("group-hover-service").classList.add("h-0")
            document.getElementById("group-hover-service").classList.remove("h-screen", "custom-shadow", "px-5")
            document.getElementById("black-arrow-1").classList.remove("rotate-180")
            document.getElementById("white-arrow-1").classList.remove("rotate-180")

            const childDiv = document.getElementById("group-hover-service").querySelectorAll("div")
            childDiv.forEach((child, index) => {
                child.classList.remove("opacity-100", "animate")
                child.classList.add("opacity-0", "animate")
            })



        })

        // service javascript code
        // get in touch button code
        setInterval(() => {
            const btn = document.getElementById("pulse-button");

            // Remove and re-add the class to retrigger the animation
            btn.classList.remove("pulse-button");

            // Small delay to allow DOM to reflow before re-adding
            void btn.offsetWidth; // this line forces reflow

            btn.classList.add("pulse-button");
        }, 5000);

        // get in touch button code




        // small navbar javascript code
        document.getElementById("open").addEventListener("click", function() {

            document.getElementById("close").classList.remove("hidden")
            document.getElementById("open").classList.add("hidden")
            document.getElementById("sidebar-menu").classList.add("w-full")
            document.getElementById("sidebar-menu").classList.remove("w-0")



        })
        document.getElementById("close").addEventListener("click", function() {
            document.getElementById("sidebar-menu").classList.remove("w-full")
            document.getElementById("sidebar-menu").classList.add("w-0")
            document.getElementById("close").classList.add("hidden")
            document.getElementById("open").classList.remove("hidden")

        })

        // small navbar clops-service
        document.getElementById("arrow-bottom-service").addEventListener('click', function() {
            document.getElementById("clops-div").classList.add("h-auto")
            document.getElementById("clops-div").classList.remove("h-0")
            document.getElementById("arrow-bottom-service").classList.add("hidden")
            document.getElementById("arrow-top-service").classList.remove("hidden")

        })
        document.getElementById("arrow-top-service").addEventListener('click', function() {
            document.getElementById("clops-div").classList.remove("h-auto")
            document.getElementById("clops-div").classList.add("h-0")
            document.getElementById("arrow-top-service").classList.add("hidden")
            document.getElementById("arrow-bottom-service").classList.remove("hidden")


        })

        // small navbar clops-case studies
        document.getElementById("arrow-bottom-case-studies").addEventListener('click', function() {
            document.getElementById("clops-div-case-studies").classList.add("h-screen")
            document.getElementById("clops-div-case-studies").classList.remove("h-0")
            document.getElementById("arrow-bottom-case-studies").classList.add("hidden")
            document.getElementById("arrow-top-case-studies").classList.remove("hidden")

        })
        document.getElementById("arrow-top-case-studies").addEventListener('click', function() {
            document.getElementById("clops-div-case-studies").classList.remove("h-screen")
            document.getElementById("clops-div-case-studies").classList.add("h-0")
            document.getElementById("arrow-top-case-studies").classList.add("hidden")
            document.getElementById("arrow-bottom-case-studies").classList.remove("hidden")


        })
        // small navbar clops-about-us
        document.getElementById("arrow-bottom-about-us").addEventListener('click', function() {
            document.getElementById("clops-div-about-us").classList.add("h-screen")
            document.getElementById("clops-div-about-us").classList.remove("h-0")
            document.getElementById("arrow-bottom-about-us").classList.add("hidden")
            document.getElementById("arrow-top-about-us").classList.remove("hidden")

        })
        document.getElementById("arrow-top-about-us").addEventListener('click', function() {
            document.getElementById("clops-div-about-us").classList.remove("h-screen")
            document.getElementById("clops-div-about-us").classList.add("h-0")
            document.getElementById("arrow-top-about-us").classList.add("hidden")
            document.getElementById("arrow-bottom-about-us").classList.remove("hidden")


        })
        // small navbar clops-insights
        document.getElementById("arrow-bottom-insights").addEventListener('click', function() {
            document.getElementById("clops-div-insights").classList.add("h-screen")
            document.getElementById("clops-div-insights").classList.remove("h-0")
            document.getElementById("arrow-bottom-insights").classList.add("hidden")
            document.getElementById("arrow-top-insights").classList.remove("hidden")

        })
        document.getElementById("arrow-top-insights").addEventListener('click', function() {
            document.getElementById("clops-div-insights").classList.remove("h-screen")
            document.getElementById("clops-div-insights").classList.add("h-0")
            document.getElementById("arrow-top-insights").classList.add("hidden")
            document.getElementById("arrow-bottom-insights").classList.remove("hidden")


        })













        // background add button



        function tabBar(tab) {


            const button_array = document.getElementById('tab-buttons').querySelectorAll('button')


            button_array.forEach((btn, index) => {
                btn.classList.remove("bg-[#127aff]")
                console.log("sob button id", btn.id);
                if (btn.id === tab) {
                    btn.classList.add("bg-[#127aff]")
                }

            })


            console.log(tab);
            const allClass = document.querySelectorAll('.tab-div')
            console.log(allClass);
            console.log(allClass[0].id);


            allClass.forEach(tabId => {
                if (tabId.id === tab) {

                    tabId.classList.remove('hidden')
                } else {
                    tabId.classList.add('hidden')
                }
            })
        }

        //service page tab-bar make

        // service category section home page

        function tabCategory(tab) {
            console.log(tab);
            const allClass = document.querySelectorAll('.tab-cat-div')
            console.log(allClass);
            console.log(allClass[0].id);


            allClass.forEach(tabId => {

                console.log('button', typeof tab);
                console.log('tabId.id', typeof tabId.id);
                if (Number(tabId.id) === tab) {
                    tabId.classList.remove('hidden')
                } else {
                    tabId.classList.add('hidden')
                }
            })
        }
        // service category section


        // home page accrodian logic
        document.addEventListener("DOMContentLoaded", function() {
            const accordionItems = document.querySelectorAll(".accordion-item");

            accordionItems.forEach(item => {
                const header = item.querySelector(".accordion-header");
                const content = item.querySelector(".accordion-content");
                const arrowDown = item.querySelector(".arrow-down");
                const arrowUp = item.querySelector(".arrow-up");

                header.addEventListener("click", () => {
                    // Collapse all items
                    accordionItems.forEach(i => {
                        if (i !== item) {
                            i.querySelector(".accordion-content").style.height = "0px";
                            i.querySelector(".arrow-down").classList.remove("hidden");
                            i.querySelector(".arrow-up").classList.add("hidden");
                        }
                    });

                    // Toggle clicked item
                    const isOpen = content.style.height !== "0px" && content.style.height !== "";

                    if (isOpen) {
                        content.style.height = "0px";
                        arrowDown.classList.remove("hidden");
                        arrowUp.classList.add("hidden");
                    } else {
                        content.style.height = content.scrollHeight + "px";
                        arrowDown.classList.add("hidden");
                        arrowUp.classList.remove("hidden");
                    }
                });
            });
        });

        // home page accordian logic
        // loading logic
        window.addEventListener("load", function() {
            document.getElementById("page-loader").style.display = "none";
            document.getElementById("page-content").classList.remove("hidden");
        });
    </script>
    {{-- owl casol jquery code --}}
    {{-- <script>
        // navbar code
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                margin: 60,
                loop: true,
                autoplay: true,
                slideTransition: 'linear',
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                autoWidth: true,
                items: 1, // Needed but ignored when autoWidth is true
            });
        });
        // navbar code
    </script> --}}


<script>

    const modal = document.getElementById("customModal");
const openBtn = document.getElementById("pulse-button");
const closeBtn = document.getElementById("closeModalBtn");

// Open Modal
openBtn.addEventListener("click", () => {
    modal.style.display = "flex";
});

// Close Modal button
closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
});

// Click outside close
window.addEventListener("click", (e) => {
    if (e.target === modal) {
        modal.style.display = "none";
    }
});

</script>

<script>
    document.getElementById("goBtn").addEventListener("click", () => {
  document.getElementById("contact-us").scrollIntoView({
   behavior: "smooth", block: "end", inline: "nearest"
  });
});

</script>

</body>

</html>
