<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<script src="{{ asset('js/navbar.js') }}"></script>

<nav class="bg-white shadow-lg border-b border-gray-100 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo/Brand -->
                <div class="flex-shrink-0">
                    <a href="/user" class="navbar-brand flex items-center text-2xl font-bold hover:scale-105 transition-transform duration-200">
                        <img src="{{ asset('images/logo.svg') }}" class="h-12 mr-3 sm:h-9" alt="DeaaL Logo">
                        <span>DeaaL</span>
                    </a>
                </div>
                
                
                <!-- User Profile & Actions -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="{{ route('user.create') }}" class="bg-gradient-to-r from-purple-500 to-blue-500 text-white px-4 py-2 rounded-lg text-sm font-medium hover:from-purple-600 hover:to-blue-600 transition-all duration-200 shadow-md hover:shadow-lg">
                        Buat Anggota Baru
                    </a>
                </div>
                
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button class="hamburger p-2" onclick="toggleMobileMenu()">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Navigation Menu -->
        <div class="mobile-menu md:hidden fixed top-16 right-0 w-64 h-full bg-white shadow-xl z-40">
            <div class="px-6 py-4 space-y-4">
                <a href="/user" class="block text-gray-700 hover:text-purple-600 py-2 text-base font-medium border-b border-gray-100">List User</a>
                <div class="pt-4">
                    <a href="{{ route('user.create') }}" class="bg-gradient-to-r from-purple-500 to-blue-500 text-white px-4 py-2 rounded-lg text-sm font-medium hover:from-purple-600 hover:to-blue-600 transition-all duration-200 shadow-md hover:shadow-lg">
                        Create User
                    </a>
                </div>
            </div>
        </div>
    </nav>