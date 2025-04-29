<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"> {{-- Penting untuk form POST & AJAX --}}

    <title>{{ config('app.name', 'Bagus') }} - @yield('title', 'BAGUS')</title> 

    {{-- Fonts (Contoh menggunakan Google Fonts) --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    {{-- Jika menggunakan Font Awesome, tambahkan link CDN atau lokal di sini --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <!-- Scripts -->
     @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Scripts (Defer agar dimuat setelah parsing HTML) --}}
    {{-- Ganti ini dengan cara Anda memuat JS yang sudah dicompile (termasuk Alpine.js jika digunakan) --}}
    {{-- Contoh jika Anda compile ke public/js/app.js --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- Tambahkan script untuk carousel di sini atau di dalam app.js --}}
    <script src="{{ asset('js/carousel.js') }}" defer></script> {{-- Buat file ini jika belum ada --}}

    {{-- Tambahkan CSS/JS spesifik per halaman jika perlu --}}
    @stack('styles')
    @stack('scripts')

    {{-- Style untuk menyembunyikan scrollbar (jika tidak dikonfigurasi di tailwind.config.js) --}}
    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hide {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
    </style>

</head>
<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900"> {{-- Ganti warna bg default jika perlu --}}
    <div class="min-h-screen flex flex-col">

        {{-- Navigasi Utama --}}
        <nav
            aria-label="Primary Navigation"
            class="bg-[#4A4545] text-white w-full sticky top-0 z-30" {{-- Membuat navbar sticky --}}
        >
            <div class="max-w-7xl mx-auto flex items-center justify-between px-2 sm:px-4 lg:px-2 h-16">
                {{-- Logo and Brand Name --}}
                <div class="flex items-center space-x-2">
                    <a href="{{ url('/') }}" class="flex items-center mr-10">
                        <img
                            alt="Bagus Logo"
                            class="w-auto h-8"
                            src="{{ asset('aset/A.png') }}" 
                        />
                        <span class="font-extrabold text-white text-xl select-none -ml-10">
                            BAGUS.
                        </span>
                    </a>
                </div>

                {{-- Desktop Navigation Links --}}
                <ul class="hidden md:flex items-center space-x-4 text-sm font-normal flex-grow justify-end mr-4">
                    {{-- Gunakan route() helper jika memungkinkan --}}
                    <li><a class="'text-[#7DB6B6] font-semibold' : 'hover:text-[#7DB6B6]' }}" href="#">Home</a></li>
                    <li><a class="{{ request()->routeIs('projects.*') ? 'text-[#7DB6B6] font-semibold' : 'hover:text-[#7DB6B6]' }}" href="#">Project</a></li> {{-- Ganti dengan nama route project Anda --}}
                    <li><a class="{{ request()->routeIs('contact') ? 'text-[#7DB6B6] font-semibold' : 'hover:text-[#7DB6B6]' }}" href="#">Contact</a></li> {{-- Ganti dengan nama route contact Anda --}}
                </ul>

                {{-- Search and Auth Section --}}
                <div class="hidden md:flex items-center space-x-4 flex-shrink-0">
                    {{-- Search Form --}}
                    <form class="hidden lg:block" action="#" method="GET"> {{-- Tambahkan action & method --}}
                        <input
                            class="bg-[#3e3a3a] border border-gray-500 rounded-md text-white text-xs placeholder:text-gray-400 px-3 py-1.5 w-40 focus:outline-none focus:ring-1 focus:ring-[#7DB6B6] focus:border-[#7DB6B6]"
                            placeholder="Search..."
                            type="search"
                            name="query" {{-- Tambahkan name attribute --}}
                        />
                    </form>

                    {{-- Authentication Links/Dropdown --}}
                    @auth
                        <div class="relative" x-data="{ open: false }" @click.outside="open = false">
                            {{-- Trigger Dropdown --}}
                            <button @click="open = ! open" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-300 bg-[#3e3a3a] hover:text-white focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>

                            {{-- Dropdown Content (Contoh menggunakan Alpine.js untuk toggle) --}}
                            <div x-show="open"
                                 x-transition:enter="transition ease-out duration-200"
                                 x-transition:enter-start="opacity-0 scale-95"
                                 x-transition:enter-end="opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-75"
                                 x-transition:leave-start="opacity-100 scale-100"
                                 x-transition:leave-end="opacity-0 scale-95"
                                 class="absolute right-0 z-50 mt-2 w-48 rounded-md shadow-lg origin-top-right bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                 style="display: none;" {{-- Hindari FOUC --}}
                                 @click="open = false">
                                <div class="py-1">
                                    <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        {{ __('Profile') }}
                                    </a>
                                    {{-- Logout Form --}}
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); this.closest('form').submit();"
                                           class="block w-full px-4 py-2 text-left text-sm text-gray-700 hover:bg-gray-100">
                                            {{ __('Log Out') }}
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-300 hover:text-white underline">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-300 hover:text-white underline">Register</a>
                        @endif
                    @endauth
                </div>

                {{-- Mobile Menu Button (Contoh menggunakan Alpine.js) --}}
                <div class="md:hidden flex items-center" x-data="{ mobileMenuOpen: false }">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-white focus:outline-none p-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                    </button>
                     {{-- Mobile Menu Panel (Contoh) --}}
                    <div x-show="mobileMenuOpen"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 scale-95"
                         x-transition:enter-end="opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-75"
                         x-transition:leave-start="opacity-100 scale-100"
                         x-transition:leave-end="opacity-0 scale-95"
                         class="absolute top-16 inset-x-0 p-2 transition transform origin-top-right md:hidden bg-[#4A4545] shadow-lg"
                         style="display: none;"
                         @click.away="mobileMenuOpen = false">
                        <div class="rounded-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div class="px-5 pt-4 flex items-center justify-between">
                                <div>
                                    {{-- Bisa tambahkan logo lagi di sini jika mau --}}
                                </div>
                                <div class="-mr-2">
                                    <button @click="mobileMenuOpen = false" type="button" class="rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                        <span class="sr-only">Close menu</span>
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="px-2 pt-2 pb-3 space-y-1">
                                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('home') || request()->is('/') ? 'text-[#7DB6B6] bg-gray-900' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Home</a>
                                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('projects.*') ? 'text-[#7DB6B6] bg-gray-900' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Project</a>
                                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('contact') ? 'text-[#7DB6B6] bg-gray-900' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Contact</a>
                                 {{-- Tambahkan Search & Auth untuk mobile jika perlu --}}
                            </div>
                            @guest
                             <div class="px-5 py-4 border-t border-gray-700">
                                <a href="{{ route('login') }}" class="block w-full px-5 py-2 text-center font-medium text-white bg-[#7DB6B6] rounded-md hover:bg-[#6aa3a3]">Log in</a>
                                @if (Route::has('register'))
                                    <p class="mt-3 text-center text-sm font-medium text-gray-400">
                                        Not registered? <a href="{{ route('register') }}" class="text-[#7DB6B6] hover:underline">Register</a>
                                    </p>
                                @endif
                            </div>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        {{-- Konten Halaman --}}
        <main class="flex-grow">
            @yield('content')
        </main>


            
        <!-- Footer Section -->
        <footer class="bg-[#71b4b3] text-black text-xs px-6 py-10 w-full mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-6 max-w-7xl mx-auto">
                <div class="space-y-4">
                <p>
                Customer Supports:
                </p>
                <p>
                (0341) 479-148
                </p>
                <p>
                Jl. Lorem Ipsum
                </p>
                <p>
                bagus@gmail.com
                </p>
                </div>
                <div class="space-y-2">
                <p class="font-semibold text-xs">
                TOP CATEGORY
                </p>
                <p>
                Freelancer
                </p>
                <p>
                Part Time
                </p>
                <p>
                Work From Home
                </p>
                <p>
                Full Time
                </p>
                </div>
                <div class="space-y-2">
                <p class="font-semibold text-xs">
                QUICK LINKS
                </p>
                <p>
                Shop Product
                </p>
                <p>
                Shoping Cart
                </p>
                <p>
                Wishlist
                </p>
                <p>
                Compare
                </p>
                <p>
                Track Order
                </p>
                <p>
                Customer Help
                </p>
                <p>
                About Us
                </p>
                </div>
                <div class="space-y-2">
                <p class="font-semibold text-xs">
                DOWNLOAD APP
                </p>
                <button aria-label="Google Play download button" class="flex items-center gap-2 bg-gray-300 rounded px-2 py-1 w-max mb-2">
                <img alt="Google Play icon placeholder" class="w-5 h-5" height="20" src="https://storage.googleapis.com/a1aa/image/ecedaf3f-2369-4b90-1e59-7b7214e178dc.jpg" width="20"/>
                <div class="text-left text-[9px] leading-tight">
                <p>
                    Get it now
                </p>
                <p class="font-semibold text-xs">
                    Google Play
                </p>
                </div>
                </button>
                <button aria-label="App Store download button" class="flex items-center gap-2 bg-gray-300 rounded px-2 py-1 w-max">
                <img alt="App Store icon placeholder" class="w-5 h-5" height="20" src="https://storage.googleapis.com/a1aa/image/4deaa879-65d6-4af1-1f53-dce765ca6fca.jpg" width="20"/>
                <div class="text-left text-[9px] leading-tight">
                <p>
                    Get it now
                </p>
                <p class="font-semibold text-xs">
                    App Store
                </p>
                </div>
                </button>
                </div>
                <div class="space-y-2">
                <p class="font-semibold text-xs">
                POPULAR TAG
                </p>
                <div class="flex flex-wrap gap-2">
                <span class="border border-black rounded px-2 py-0.5 text-[9px] cursor-pointer">
                Part Time
                </span>
                <span class="border border-black rounded px-2 py-0.5 text-[9px] cursor-pointer">
                Freelance
                </span>
                <span class="border border-black rounded px-2 py-0.5 text-[9px] cursor-pointer">
                WFH
                </span>
                <span class="border border-black rounded px-2 py-0.5 text-[9px] cursor-pointer">
                Malang
                </span>
                <span class="border border-black rounded px-2 py-0.5 text-[9px] cursor-pointer">
                Jakarta
                </span>
                <span class="border border-black rounded px-2 py-0.5 text-[9px] cursor-pointer">
                Tunjangan
                </span>
                <span class="border border-black rounded px-2 py-0.5 text-[9px] cursor-pointer">
                Manajer
                </span>
                <span class="border border-black rounded px-2 py-0.5 text-[9px] cursor-pointer">
                Full Time
                </span>
                <span class="border border-black rounded px-2 py-0.5 text-[9px] cursor-pointer">
                Sekretaris
                </span>
                <span class="border border-black rounded px-2 py-0.5 text-[9px] cursor-pointer">
                PT
                </span>
                <span class="border border-black rounded px-2 py-0.5 text-[9px] cursor-pointer">
                Security
                </span>
                <span class="border border-black rounded px-2 py-0.5 text-[9px] cursor-pointer">
                OB
                </span>
                <span class="border border-black rounded px-2 py-0.5 text-[9px] cursor-pointer">
                Customer Service
                </span>
                </div>
                </div>
            </div>
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-sm">
                    © {{ date('Y') }} BAGUS. All rights reserved.
                    {{-- Tambahkan link atau info lain di sini --}}
                </div>
        </footer>

    </div> {{-- Penutup min-h-screen --}}
</body>
</html>