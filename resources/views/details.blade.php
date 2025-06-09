@extends('layouts.nav')

@section('content')
<main class="max-w-screen mx-auto px-6 py-6 bg-white">
  <section class="flex flex-col lg:flex-row gap-6">
    <!-- Left Side: Images and Details -->
    <div class="flex-1">
      <div class="flex gap-4">
        <!-- Main Image -->
        <div class="relative rounded-xl overflow-hidden flex-1 max-w-screen h-96 object-bottom">
          <img id="main-image" alt="Street view with palm trees and houses in a neighborhood" class="w-full h-auto object-cover rounded-xl" height="320" src="https://storage.googleapis.com/a1aa/image/971bf9bf-3745-4441-0a50-19e3aa0baf01.jpg" width="720"/>
          <a href="{{ route('homepage') }}" aria-label="Back" class="absolute top-4 left-4 bg-white bg-opacity-90 hover:bg-opacity-100 text-gray-600 rounded-full p-2 shadow-md">
            <i class="fas fa-arrow-left"></i>
          </a>
          <div class="absolute top-4 right-4 flex gap-2">
            <button aria-label="Bookmark" class="bg-white bg-opacity-90 hover:bg-opacity-100 text-gray-600 rounded-full p-2 shadow-md">
              <i class="fas fa-bookmark"></i>
            </button>
            <button aria-label="Share" class="bg-white bg-opacity-90 hover:bg-opacity-100 text-gray-600 rounded-full p-2 shadow-md">
              <i class="fas fa-share-alt"></i>
            </button>
          </div>
        </div>
        <!-- Thumbnail Images -->
        <div class="flex flex-col gap-4 max-w-[160px]">
          <img alt="Living room with furniture and decor" class="rounded-xl object-cover w-full h-20 cursor-pointer" height="80" src="https://storage.googleapis.com/a1aa/image/41124f6c-c653-48c3-6fbc-915aae680691.jpg" width="160" onclick="changeMainImage(this.src)"/>
          <img alt="Living room with furniture and decor" class="rounded-xl object-cover w-full h-20 cursor-pointer" height="80" src="https://storage.googleapis.com/a1aa/image/971bf9bf-3745-4441-0a50-19e3aa0baf01.jpg" width="160" onclick="changeMainImage(this.src)"/>
          <img alt="Room with chair and table" class="rounded-xl object-cover w-full h-20 cursor-pointer" height="80" src="https://storage.googleapis.com/a1aa/image/ba63586d-1496-45bf-81f8-40c9f9d73cc3.jpg" width="160" onclick="changeMainImage(this.src)"/>
          <button class="rounded-xl bg-black bg-opacity-50 text-white text-center text-xs font-normal py-5">
            See All
          </button>
        </div>
      </div>
      <!-- Property Tags -->
      <div class="mt-6 flex flex-wrap items-center gap-2">
        <span class="text-xs text-gray-600 bg-gray-200 rounded-full px-3 py-1 font-normal">House</span>
        <span class="text-xs text-white bg-orange-600 rounded-full px-3 py-1 font-normal flex items-center gap-1">
          NJOP
          <i class="fas fa-chevron-down text-[10px]"></i>
        </span>
      </div>
      <!-- Property Price -->
      <h2 class="mt-2 text-blue-900 font-semibold text-lg leading-tight">IDR 1,9 Billion</h2>
      <!-- Additional Info -->
      <div class="mt-1 flex flex-wrap gap-2">
        <button class="text-xs text-blue-700 bg-blue-100 rounded-full px-3 py-1 flex items-center gap-1">
          <i class="fas fa-info-circle text-[10px]"></i>
          Cicilan mulai Rp 9 Millions/bulan
          <i class="fas fa-chevron-right text-[10px]"></i>
        </button>
        <button class="text-xs text-blue-700 bg-blue-100 rounded-full px-3 py-1 flex items-center gap-1">
          Dapatkan konsultasi KPR
          <i class="fas fa-chevron-right text-[10px]"></i>
        </button>
      </div>
      <!-- Property Description -->
      <p class="mt-3 text-sm text-gray-900 max-w-xl leading-snug">
        Rumah 330 M2 Strategis Dalam Komplek Di Kalibata, Jakarta Selatan
      </p>
      <p class="mt-1 text-xs text-gray-600 max-w-xl">Kalibata, Jakarta Selatan</p>
      <p class="mt-1 text-xs text-blue-900 font-semibold flex items-center gap-1">
        <i class="fas fa-map-marker-alt text-[12px]"></i>
        See Location
      </p>
    </div>
  </section>

  <!-- About Property Section -->
  <section class="mb-6 text-xs text-gray-700">
    <div class="flex justify-between items-center mb-2">
      <h3 class="font-semibold">About Property</h3>
      <button id="toggle-about" class="text-gray-700 focus:outline-none">
        <i class="fas fa-chevron-down"></i>
      </button>
    </div>
    <div id="about-content" class="hidden">
      <p class="whitespace-pre-line leading-relaxed">
        Rumah 300 m2 Strategis dalam Komplek di Kalibata, Jakarta Selatan
        Di jual rumah di dl kat basar pinggir Minggu, Jakarta Selatan di jual di bawah njop
        Lokasi rumah di dalam komplek strategis komplek di pinggir jalan raya besar pasr Minggu tentunya dekat perkotaan di nya
        1 rumah memiliki luas tanah 330 m²
        Tetapi yang di Jual hanya sebagian saja
        Di jual sebagian luas tanah 145 m²
        Surat SHM
        Ex 2 Kmr 1
        L:6,5×23 P
        Biaya pemecahan surat oner yang tanggung
        Jl lebar Araf banjir
        Rp 19 m nego
        Di bawah njop
        Listing BK# 276544
      </p>
    </div>
  </section>

</main>

<script>
  // Change Main Image Function
  function changeMainImage(src) {
    document.getElementById('main-image').src = src;
  }

  // Toggle Show More/Less Logic
  document.getElementById('toggle-about').addEventListener('click', function () {
    const content = document.getElementById('about-content');
    const isHidden = content.classList.contains('hidden');
    content.classList.toggle('hidden', !isHidden);
    this.innerHTML = isHidden
      ? '<i class="fas fa-chevron-up"></i>'
      : '<i class="fas fa-chevron-down"></i>';
  });
</script>
@endsection
