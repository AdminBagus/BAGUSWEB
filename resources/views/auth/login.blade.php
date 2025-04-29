@extends('layouts.guest')

@section('content')
    {{-- Container utama --}}
    <div class="flex justify-center items-center min-h-screen p-4">
        {{-- Gambar Dekoratif Absolut (Sama seperti Register) --}}
        <div class="absolute top-0 left-32 hidden md:block"> {{-- Ditambah hidden md:block --}}
            <img src="{{ asset('aset/bad3.svg') }}" class="w-full max-w-md lg:max-w-lg opacity-80 transform scale-x-[-1]" /> {{-- Sesuaikan ukuran & opasitas --}}
        </div>
        <div class="absolute bottom-0 end-1/4 md:end-36 z-10 hidden md:block"> {{-- Ditambah hidden md:block, sesuaikan posisi & z-index --}}
            <img src="{{ asset('aset/flower.svg') }}" class="w-full max-w-md lg:max-w-lg opacity-80 transform scale-x-[-1]" /> {{-- Sesuaikan ukuran & opasitas --}}
        </div>

        {{-- Card/Container Form (Sama seperti Register) --}}
        {{-- py-5 dikurangi sedikit dari sebelumnya (misal dari py-10), atau sesuaikan sesuai selera --}}
        <div class="px-9 py-5 rounded-2xl w-full max-w-md z-20 backdrop-blur-md" {{-- Naikkan max-w sedikit, sesuaikan blur --}}
             style="background: linear-gradient(148.46deg, rgba(255, 255, 255, 0.25) -47.18%, rgba(255, 255, 255, 0.08) 131%);"> {{-- Opacity background diatur --}}

            {{-- Logo (Sama seperti Register) --}}
            <div class="w-full mb-4"> {{-- Margin bottom dikurangi (dari mb-6) --}}
                <img src="{{ asset('aset/logono.png') }}" alt="logo" class="w-32 mx-auto"> {{-- Ukuran logo disesuaikan jika perlu --}}
            </div>

            {{-- Judul (Diganti menjadi SIGN IN) --}}
            <h1 class="font-semibold text-black text-xl mb-6 text-center">SIGN IN</h1> {{-- Margin bottom dikurangi (dari mb-8), warna jadi hitam (sesuai contoh register) --}}

            {{-- Session Status (dari form login, sesuaikan style jika perlu) --}}
            {{-- Pastikan warna teks kontras dengan background card --}}
            <x-auth-session-status class="mb-4 text-sm text-green-600 dark:text-green-400" :status="session('status')" />

            {{-- Form Login --}}
            <form method="POST" action="{{ route('login') }}">
                @csrf

                {{-- Grup Input Email --}}
                <div class="mb-4">
                    {{-- Label disesuaikan dengan style register --}}
                    <label for="email" class="block text-black text-xs mb-1 font-medium">{{ __('Email') }}</label>
                    {{-- Input disesuaikan dengan style register --}}
                    <input type="email" id="email" name="email"
                           class="block w-full px-3 py-2 bg-white/10 border border-white/20 rounded-md focus:border-teal-300 focus:ring focus:ring-teal-200 focus:ring-opacity-50 focus:outline-none text-black placeholder-gray-500 text-sm" {{-- Warna teks input disesuaikan --}}
                           value="{{ old('email') }}"
                           required
                           autofocus
                           autocomplete="username"
                           placeholder="youremail@example.com">
                    {{-- Error message disesuaikan dengan style register --}}
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p> {{-- Warna error disesuaikan --}}
                    @enderror
                    {{-- Alternatif jika menggunakan komponen Breeze: --}}
                    {{-- <x-input-label for="email" :value="__('Email')" class="block text-black text-xs mb-1 font-medium"/>
                    <x-text-input id="email" class="block w-full px-3 py-2 bg-white/10 border border-white/20 rounded-md focus:border-teal-300 focus:ring focus:ring-teal-200 focus:ring-opacity-50 focus:outline-none text-black placeholder-gray-500 text-sm" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="youremail@example.com" />
                    <x-input-error :messages="$errors->get('email')" class="text-red-500 text-xs mt-1" /> --}}
                </div>

                {{-- Grup Input Password --}}
                <div class="mb-4">
                    {{-- Label disesuaikan dengan style register --}}
                    <label for="password" class="block text-black text-xs mb-1 font-medium">{{ __('Password') }}</label>
                    {{-- Input disesuaikan dengan style register --}}
                    <input type="password" id="password" name="password"
                           class="block w-full px-3 py-2 bg-white/10 border border-white/20 rounded-md focus:border-teal-300 focus:ring focus:ring-teal-200 focus:ring-opacity-50 focus:outline-none text-black placeholder-gray-500 text-sm" {{-- Warna teks input disesuaikan --}}
                           required
                           autocomplete="current-password"
                           placeholder="Enter password">
                     {{-- Error message disesuaikan dengan style register --}}
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p> {{-- Warna error disesuaikan --}}
                    @enderror
                    {{-- Alternatif jika menggunakan komponen Breeze: --}}
                    {{-- <x-input-label for="password" :value="__('Password')" class="block text-black text-xs mb-1 font-medium"/>
                    <x-text-input id="password" class="block w-full px-3 py-2 bg-white/10 border border-white/20 rounded-md focus:border-teal-300 focus:ring focus:ring-teal-200 focus:ring-opacity-50 focus:outline-none text-black placeholder-gray-500 text-sm" type="password" name="password" required autocomplete="current-password" placeholder="Enter password" />
                    <x-input-error :messages="$errors->get('password')" class="text-red-500 text-xs mt-1" /> --}}
                </div>

                {{-- Remember Me Checkbox --}}
                <div class="mb-4"> {{-- Gunakan mb-4 agar konsisten --}}
                    <label for="remember_me" class="inline-flex items-center">
                        {{-- Style checkbox disesuaikan agar cocok --}}
                        <input id="remember_me" type="checkbox" class="rounded border-white/30 bg-white/10 text-teal-500 shadow-sm focus:ring-teal-400 focus:ring-offset-0" name="remember"> {{-- Sesuaikan focus offset jika perlu --}}
                        {{-- Style teks disesuaikan agar cocok --}}
                        <span class="ms-2 text-xs text-black">{{ __('Remember me') }}</span> {{-- Warna teks disesuaikan --}}
                    </label>
                </div>

                {{-- Bagian Bawah: Forgot Password & Tombol Login --}}
                <div class="flex items-center justify-between mt-6"> {{-- mt-6 untuk spasi sebelum tombol --}}
                    @if (Route::has('password.request'))
                        {{-- Style link disesuaikan --}}
                        <a class="underline text-xs text-teal-600 hover:text-teal-700 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500" {{-- Warna link disesuaikan --}}
                           href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @else
                        {{-- Placeholder agar justify-between bekerja --}}
                        <span></span>
                    @endif

                    {{-- Tombol Login: Style mirip tombol register tapi tidak full-width --}}
                    <button type="submit"
                           class="ms-3 px-6 py-2 text-sm text-white font-semibold bg-teal-500 hover:bg-teal-600 rounded-lg transition duration-200 shadow-md"> {{-- Sesuaikan padding & margin --}}
                        {{ __('Log in') }}
                    </button>
                    {{-- Alternatif jika menggunakan komponen Breeze: --}}
                    {{-- <x-primary-button class="ms-3 px-6 py-2 text-sm text-white font-semibold bg-teal-500 hover:bg-teal-600 rounded-lg transition duration-200 shadow-md">
                        {{ __('Log in') }}
                    </x-primary-button> --}}
                </div>

                {{-- Link ke Register --}}
                <p class="text-black text-xs text-center pt-4"> {{-- pt-4 untuk spasi, warna disesuaikan --}}
                    Don't have an account? <a href="{{ route('register') }}" class="font-semibold text-teal-600 hover:text-teal-700">Sign up</a> {{-- Warna link disesuaikan --}}
                </p>

            </form> {{-- Akhir form --}}
        </div> {{-- Akhir Card/Container Form --}}
    </div> {{-- Akhir Container Utama --}}
@endsection