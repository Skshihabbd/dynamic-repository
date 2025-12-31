@extends('dashboard.page.main')
@section('title', 'dashboard')
@section('script')
    <main id="mainContent" class="md:ml-64 min-h-screen p-4 md:px-8 transition-all duration-300">

        <!-- Content Header -->
        <!-- Added mt-10 for mobile to clear the fixed toggle button -->
        <div class="mb-8 mt-10 md:mt-0">
            <h1 class="text-3xl md:text-3xl font-bold text-gray-800 ">Welcome to Unicorn</h1>
        </div>

        <!-- Dashboard Container -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8">

            <!-- Form Section -->
            <div class="bg-white rounded-xl shadow-md p-6 md:p-8 animate-slide-in h-[80vh] overflow-y-auto">
                <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <i class="fas fa-edit text-blue-500"></i> Input Form
                </h3>

                <form id="dashboardForm" class="space-y-5">

                    <!-- Full Name -->
                    <div>
                        <label for="fullName" class="block text-sm font-semibold text-gray-700 mb-2">Full Name</label>
                        <input type="text" id="fullName" placeholder="Enter your full name"
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all text-sm">
                    </div>

                    <!-- Email Address -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                        <input type="email" id="email" placeholder="Enter your email"
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all text-sm">
                    </div>

                    <!-- Phone Number -->
                    <div>
                        <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                        <input type="tel" id="phone" placeholder="Enter your phone number"
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all text-sm">
                    </div>




                    {{-- text editotr --}}

                    <div id="editor">
                        <h2>Demo Content</h2>
                        
                    </div>
                    {{-- text editotr --}}

                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full gradient-purple text-white font-semibold py-3 rounded-lg shadow-md hover:shadow-lg transform hover:-translate-y-0.5 transition-all text-sm md:text-base">
                        <i class="fas fa-paper-plane mr-2"></i> Submit
                    </button>
                </form>
            </div>

            <!-- Preview Section -->
            <div
                class="bg-white rounded-xl shadow-md p-6 md:p-8 animate-slide-in lg:sticky lg:top-8 lg:self-start h-[80vh] overflow-y-auto">
                <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <i class="fas fa-eye text-purple-600"></i> Live Preview
                </h3>

                <!-- Full Name Preview -->
                <div class="mb-6 pb-6 border-b-2 border-gray-200">
                    <p class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Full Name</p>
                    <p class="text-gray-800 text-sm leading-relaxed" id="previewName">
                        <span class="text-gray-400 italic">No data entered yet</span>
                    </p>
                </div>

                <!-- Email Preview -->
                <div class="mb-6 pb-6 border-b-2 border-gray-200">
                    <p class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Email Address</p>
                    <p class="text-gray-800 text-sm leading-relaxed" id="previewEmail">
                        <span class="text-gray-400 italic">No data entered yet</span>
                    </p>
                </div>

                <!-- Phone Preview -->
                <div class="mb-6 pb-6 border-b-2 border-gray-200">
                    <p class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Phone Number</p>
                    <p class="text-gray-800 text-sm leading-relaxed" id="previewPhone">
                        <span class="text-gray-400 italic">No data entered yet</span>
                    </p>
                </div>

                <!-- Department Preview -->
                <div class="mb-6 pb-6 border-b-2 border-gray-200">
                    <p class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Department</p>
                    <p class="text-gray-800 text-sm leading-relaxed" id="previewDepartment">
                        <span class="text-gray-400 italic">No data entered yet</span>
                    </p>
                </div>

                <!-- Message Preview -->
                <div>
                    <p class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">Message</p>
                    <p class="text-gray-800 text-sm leading-relaxed" id="previewMessage">
                        <span class="text-gray-400 italic">No data entered yet</span>
                    </p>
                </div>
            </div>
        </div>
    </main>


@endsection
