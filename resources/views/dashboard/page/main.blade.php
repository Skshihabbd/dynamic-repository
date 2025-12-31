<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>@yield('title', 'Default title')</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* Custom animations */
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-slide-in {
            animation: slideIn 0.5s ease;
        }

        /* Smooth transitions */
        * {
            transition: all 0.3s ease;
        }

        /* Scrollbar styling */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #667eea;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #764ba2;
        }

        /* Gradient backgrounds (Tailwind custom utility) */
        .gradient-purple {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        /* Custom style for active sidebar link */
        .sidebar-link.active {
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            padding-left: 20px; /* Visual effect on active state */
        }

        /* Focus styles for inputs - ensuring no default outline */
        input:focus, select:focus, textarea:focus {
            outline: none;
        }
    </style>


<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
</head>
<body>
 <!-- Sidebar Toggle Button (Mobile/Small Devices) -->
    <!-- Hidden on screens larger than 'md' (768px) -->
    <button id="sidebarToggle" class="fixed top-3 left-3 z-50 md:hidden gradient-purple text-white p-2 rounded-md shadow-lg hover:shadow-xl transition-all">
        <i class="fas fa-bars text-lg"></i>
    </button>

    <!-- Sidebar Overlay (Mobile/Small Devices) -->
    <!-- Hidden by default, shown when sidebar is open, hidden on screens larger than 'md' -->
    <div id="sidebarOverlay" class="hidden fixed inset-0 bg-black bg-opacity-50 z-40 md:hidden"></div>

    <!-- Sidebar Navigation -->
    <!-- Hidden on screens smaller than 'md', visible on 'md' and up -->
    @include('dashboard.component.header')

    @yield('script')
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

 <script>
        const quill = new Quill('#editor', {
            theme: 'snow'
        });
    </script>

     <script>
        // ===== SIDEBAR TOGGLE FUNCTIONALITY (For Mobile/Small Devices) =====
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebarOverlay');

        // Toggle sidebar on button click
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('translate-x-0');
            sidebar.classList.toggle('-translate-x-full');
            sidebarOverlay.classList.toggle('hidden');
        });

        // Close sidebar when overlay is clicked
        sidebarOverlay.addEventListener('click', function() {
            sidebar.classList.add('-translate-x-full');
            sidebar.classList.remove('translate-x-0');
            sidebarOverlay.classList.add('hidden');
        });

        // Close sidebar when a menu item is clicked
        document.querySelectorAll('.sidebar-link').forEach(link => {
            link.addEventListener('click', function(e) {

                // Update active state
                document.querySelectorAll('.sidebar-link').forEach(a => {
                    a.classList.remove('active');
                    a.classList.add('text-opacity-80');
                });
                this.classList.add('active');
                this.classList.remove('text-opacity-80');

                // Close sidebar on mobile after selection
                if (window.innerWidth < 768) {
                    sidebar.classList.add('-translate-x-full');
                    sidebar.classList.remove('translate-x-0');
                    sidebarOverlay.classList.add('hidden');
                }
            });
        });


        // ===== HANDLE WINDOW RESIZE (To ensure correct state on desktop/mobile switch) =====
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 768) {
                // On desktop, ensure sidebar is visible and toggle elements are hidden
                sidebar.classList.remove('-translate-x-full');
                sidebar.classList.add('translate-x-0');
                sidebarOverlay.classList.add('hidden');
            } else {
                // On mobile, ensure sidebar is hidden unless the toggle state is active
                if (sidebar.classList.contains('translate-x-0')) {
                    sidebarOverlay.classList.remove('hidden');
                }
            }
        });
    </script>

</body>
</html>
