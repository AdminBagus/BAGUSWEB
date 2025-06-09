@extends('layouts.nav') 

@section('content')
<div class="absolute inset-0 w-full h-full overflow-hidden">
    <img 
        src="https://storage.googleapis.com/a1aa/image/01d7df40-fdf3-4fdb-e5b2-799b04a6d1b5.jpg"
        alt="Modern house facade with trees and cars parked in front under a clear sky"
        class="w-full h-full object-cover object-center"
    />

    {{-- Overlay Transparan --}}
    <div class="absolute top-5 left-0 w-full h-full bg-black bg-opacity-50 flex flex-col justify-center p-10">
        <div class="max-w-xs text-white drop-shadow-lg" style="font-feature-settings: 'liga' 0">
            {{-- Label Developer --}}
            <div class="inline-flex items-center gap-1 bg-blue-600 rounded-full px-3 py-1 text-lg font-semibold">
                <div class="bg-yellow-400 rounded-full p-[2px]">
                    <i class="fas fa-check text-blue-600 text-[12px]"></i>
                </div>      
                Official Developer
            </div>

            {{-- Informasi Terakhir Diperbarui --}}
            <p class="mt-2 text-[13px] font-normal leading-tight">
                Terakhir diperbarui
                <span class="font-semibold">05 Juni 2025</span>
            </p>

            {{-- Judul Properti --}}
            <h1 class="mt-2 text-2xl font-semibold leading-tight">
                Tanakayu, BSD City
            </h1>
            <p class="mt-1 text-sm font-normal">
                Developer: Sinar Mas Land
            </p>
            <p class="mt-3 text-md font-semibold">
                BSD City, Tangerang
            </p>

            {{-- Rating dan Ulasan --}}
            <div class="mt-2 flex items-center gap-2 text-md font-semibold">
                <i class="fas fa-star text-yellow-400 text-lg"></i>
                <span>4.9</span>
                <span class="text-sm font-normal">
                    33 Ulasan
                    <i class="fas fa-chevron-right text-xs"></i>
                </span>
            </div>

            {{-- Informasi Harga --}}
            <div class="mt-4 border-l-4 border-yellow-400 pl-3">
                <p class="text-sm font-semibold">Harga</p>
                <p class="text-xl font-bold leading-tight">
                    Mulai Rp 2,88 Miliar
                </p>
                <p class="text-[10px] font-normal mt-1">
                    Cicilan mulai dari
                    <span class="font-semibold">Rp 10 Jutaan</span>
                    per bulan
                </p>
            </div>

            {{-- Promo Terbatas --}}
            <p class="mt-4 text-sm font-semibold">Promo Terbatas</p>
            <ul class="mt-2 space-y-1 text-sm font-normal">
                <li class="flex items-center gap-2">
                    <span class="bg-pink-600 text-white text-[12px] font-bold rounded px-1.5 py-0.5">%</span>
                    Cash Keras : Disc 11,5%
                </li>
                <li class="flex items-center gap-2">
                    <span class="bg-pink-600 text-white text-[12px] font-bold rounded px-1.5 py-0.5">%</span>
                    KPR Express DP 10% : Subsidy DP 10%
                </li>
                <li class="flex items-center gap-2">
                    <span class="bg-pink-600 text-white text-[12px] font-bold rounded px-1.5 py-0.5">■</span>
                    UTJ : 20 Juta
                </li>
            </ul>

            {{-- Tombol More --}}
            <button 
                class="mt-6 w-full bg-[#7DB6B6] hover:bg-[#619191] transition-colors rounded-md py-3 flex items-center justify-center gap-2 font-semibold text-white text-md" 
                type="button"
            >
                <i class="text-lg"></i>
                Learn More
            </button>
        </div>
    </div>
</div>
@endsection
