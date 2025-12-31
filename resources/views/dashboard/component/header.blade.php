 <aside id="sidebar"
     class="fixed top-0 left-0 h-screen w-64 gradient-purple text-white p-5 overflow-y-auto z-40 transform -translate-x-full md:translate-x-0 transition-transform duration-300">

     <!-- Sidebar Header -->
     <div class="mb-8 pb-5 border-b border-white border-opacity-20">
         <h2 class="text-2xl font-bold flex items-center gap-2">
             <i class="fas fa-chart-line"></i> Dashboard
         </h2>
     </div>

     <!-- Sidebar Menu -->
     <ul class="space-y-3">
         <li>
             <a href="{{ route('dashboard') }}"
                 class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-white hover:bg-opacity-20 text-sm font-medium transition-all
       {{ request()->routeIs('dashboard') ? 'active text-white' : 'text-white text-opacity-80' }}">
                 <i class="fas fa-home w-5 text-center"></i> Dashboard
             </a>
         </li>

         <li>
             <a href="{{ route('profile') }}"
                 class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-white hover:bg-opacity-20 text-sm font-medium transition-all
       {{ request()->routeIs('profile') ? 'active text-white' : 'text-white text-opacity-80' }}">
                 <i class="fas fa-user w-5 text-center"></i> Blog
             </a>
         </li>

         <li>
             <a href="#"
                 class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-white hover:bg-opacity-20 text-white text-opacity-80 text-sm font-medium transition-all">
                 <i class="fas fa-cog w-5 text-center"></i> Settings
             </a>
         </li>
         <li>
             <a href="#"
                 class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-white hover:bg-opacity-20 text-white text-opacity-80 text-sm font-medium transition-all">
                 <i class="fas fa-bell w-5 text-center"></i> Notifications
             </a>
         </li>
         <li>
             <a href="#"
                 class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-white hover:bg-opacity-20 text-white text-opacity-80 text-sm font-medium transition-all">
                 <i class="fas fa-file-alt w-5 text-center"></i> Reports
             </a>
         </li>
         <li>
             <a href="#"
                 class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-white hover:bg-opacity-20 text-white text-opacity-80 text-sm font-medium transition-all">
                 <i class="fas fa-envelope w-5 text-center"></i> Messages
             </a>
         </li>
         <li>
             <a href="#"
                 class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-white hover:bg-opacity-20 text-white text-opacity-80 text-sm font-medium transition-all">
                 <i class="fas fa-sign-out-alt w-5 text-center"></i> Logout
             </a>
         </li>
     </ul>
 </aside>
