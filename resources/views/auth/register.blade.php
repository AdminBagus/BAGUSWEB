@extends('layouts.guest')

@section('content')
    {{-- Container utama --}}
    <div class="flex justify-center items-center min-h-screen p-4">
        {{-- Gambar Dekoratif Absolut --}}
        <div class="absolute top-0 right-32 hidden md:block"> {{-- Ditambah hidden md:block --}}
            <img src="{{ asset('aset/bad3.svg') }}" class="w-full max-w-md lg:max-w-lg opacity-80" /> {{-- Sesuaikan ukuran & opasitas --}}
        </div>
        <div class="absolute bottom-0 start-1/4 md:start-48 z-10 hidden md:block"> {{-- Ditambah hidden md:block, sesuaikan posisi & z-index --}}
            <img src="{{ asset('aset/flower.svg') }}" class="w-full max-w-md lg:max-w-lg opacity-80" /> {{-- Sesuaikan ukuran & opasitas --}}
        </div>

        {{-- Card/Container Form --}}
        {{-- py-5 dikurangi sedikit dari sebelumnya (misal dari py-10), atau sesuaikan sesuai selera --}}
        <div class="px-9 py-5 rounded-2xl w-full max-w-md z-20 backdrop-blur-md" {{-- Naikkan max-w sedikit, sesuaikan blur --}}
             style="background: linear-gradient(148.46deg, rgba(255, 255, 255, 0.25) -47.18%, rgba(255, 255, 255, 0.08) 131%);"> {{-- Opacity background diatur --}}

            {{-- Logo --}}
            <div class="w-full mb-4"> {{-- Margin bottom dikurangi (dari mb-6) --}}
                <img src="{{ asset('aset/logono.png') }}" alt="logo" class="w-32 mx-auto"> {{-- Ukuran logo disesuaikan jika perlu --}}
            </div>

            {{-- Judul --}}
            <h1 class="font-semibold text-black text-xl mb-6 text-center">SIGN UP</h1> {{-- Margin bottom dikurangi (dari mb-8), warna jadi putih --}}

            {{-- Form --}}
            {{-- Hapus space-y-* dari form --}}
            <form action="{{ route('register') }}" method="POST">
                @csrf

                {{-- Grup Input Name --}}
                {{-- Tambahkan margin bawah mb-4 ke div ini --}}
                <div class="mb-4">
                    {{-- Label ditambahkan kembali --}}
                    <label for="name" class="block text-black text-xs mb-1 font-medium">Name</label>
                    <input type="text" id="name" name="name"
                           class="block w-full px-3 py-2 bg-white/10 border border-white/20 rounded-md focus:border-teal-300 focus:ring focus:ring-teal-200 focus:ring-opacity-50 focus:outline-none text-black placeholder-gray-400 text-sm" {{-- Style input diperbarui --}}
                           value="{{ old('name') }}"
                           required
                           autofocus
                           placeholder="Enter your name"> {{-- Placeholder lebih deskriptif --}}
                    @error('name')
                        <p class="text-red-400 text-xs mt-1">{{ $message }}</p> {{-- Warna error disesuaikan --}}
                    @enderror
                </div>

                {{-- Grup Input Email --}}
                 {{-- Tambahkan margin bawah mb-4 ke div ini --}}
                <div class="mb-4">
                     {{-- Label ditambahkan kembali --}}
                    <label for="email" class="block text-black text-xs mb-1 font-medium">Email</label>
                    <input type="email" id="email" name="email"
                           class="block w-full px-3 py-2 bg-white/10 border border-white/20 rounded-md focus:border-teal-300 focus:ring focus:ring-teal-200 focus:ring-opacity-50 focus:outline-none text-black placeholder-gray-400 text-sm" {{-- Style input diperbarui --}}
                           value="{{ old('email') }}"
                           required
                           placeholder="youremail@example.com"> {{-- Placeholder lebih deskriptif --}}
                    @error('email')
                         <p class="text-red-400 text-xs mt-1">{{ $message }}</p> {{-- Warna error disesuaikan --}}
                    @enderror
                </div>

                {{-- Grup Input Password --}}
                 {{-- Tambahkan margin bawah mb-4 ke div ini --}}
                <div class="mb-4">
                    {{-- Label ditambahkan kembali --}}
                    <label for="password" class="block text-black text-xs mb-1 font-medium">Password</label>
                    <input type="password" id="password" name="password"
                           class="block w-full px-3 py-2 bg-white/10 border border-white/20 rounded-md focus:border-teal-300 focus:ring focus:ring-teal-200 focus:ring-opacity-50 focus:outline-none text-black placeholder-gray-400 text-sm" {{-- Style input diperbarui --}}
                           required
                           placeholder="Enter password"> {{-- Placeholder lebih deskriptif --}}
                    @error('password')
                        <p class="text-red-400 text-xs mt-1">{{ $message }}</p> {{-- Warna error disesuaikan --}}
                    @enderror
                </div>

                {{-- Grup Input Confirm Password --}}
                 {{-- Tambahkan margin bawah mb-4 ke div ini --}}
                <div class="mb-4">
                     {{-- Label ditambahkan kembali --}}
                    <label for="password_confirmation" class="block text-black text-xs mb-1 font-medium">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                            class="block w-full px-3 py-2 outline-1 bg-white/10 border border-white/20 rounded-md focus:border-teal-300 focus:ring focus:ring-teal-200 focus:ring-opacity-50 focus:outline-none text-black placeholder-gray-400 text-sm" {{-- Style input diperbarui --}}
                           required
                           placeholder="Confirm your password"> {{-- Placeholder lebih deskriptif --}}
                    @error('password_confirmation')
                        <p class="text-red-400 text-xs mt-1">{{ $message }}</p> {{-- Warna error disesuaikan --}}
                    @enderror
                </div>

                {{-- Tombol Submit --}}
                {{-- Margin atas ditambahkan untuk jarak dari input terakhir --}}
                <button type="submit"
                        class="w-full mt-6 py-2.5 text-sm text-white font-semibold bg-teal-500 hover:bg-teal-600 rounded-lg transition duration-200 shadow-md"> {{-- Warna & style tombol disesuaikan --}}
                    SIGN UP
                </button>

                {{-- Link Login --}}
                <p class="text-black text-xs text-center pt-3"> {{-- Padding top dikurangi, warna disesuaikan --}}
                    Already have account? <a href="{{ route('login') }}" class="font-semibold text-teal-300 hover:text-teal-200">Sign in</a> {{-- Warna link disesuaikan --}}
                </p>
            </form> {{-- Akhir form --}}
        </div> {{-- Akhir Card/Container Form --}}
    </div> {{-- Akhir Container Utama --}}
@endsection