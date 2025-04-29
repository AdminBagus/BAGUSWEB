@extends('layouts.nav') {{-- Menggunakan layout yang baru dibuat --}}

@section('Welcome to HOMEPAGE') 

@section('content')

    {{-- Hero Section --}}
    {{-- Beri sedikit padding bawah atau biarkan, margin negatif gambar akan mengaturnya --}}
    <div class="bg-[#4A4545] text-white pb-10 md:pb-12"> {{-- Sedikit mengurangi pb awal --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-center gap-8 md:gap-12 pt-8 md:pt-12">
            {{-- Gambar Orang --}}
            <img
                alt="3D man construction worker"
                class="w-[450px] h-[490px] md:w-[620px] md:h-[680px] {{-- Dibuat sedikit lebih besar lagi --}}
                       object-contain order-2 md:order-1
                       relative z-[-0] -mb-24 md:-mb-32 transform scale-x-[-1]" {{-- !! KUNCI: Margin Bawah Negatif untuk overlap !! --}}
                src="{{ asset('aset/orang.png') }}" {{-- Pastikan path asset benar: public/aset/orang.png --}}
            />
            {{-- Teks Hero --}}
            <div class="text-center md:text-left max-w-lg order-1 md:order-2 relative z-0"> {{-- Pastikan teks di belakang gambar jika perlu --}}
                <h1 class="font-extrabold text-2xl sm:text-3xl md:text-4xl leading-tight">
                    Every Time Need Changes,<br />
                    <span class="text-[#7DB6B6]"> We Work for the Future.. </span>
                </h1>
                <div class="mt-8 flex justify-center md:justify-start space-x-4">
                    <button aria-label="Primary action button" class="bg-[#7DB6B6] text-white w-32 h-10 rounded-md hover:bg-[#6aa3a3] transition duration-200">Start</button>
                    <button aria-label="Secondary action button" class="bg-[#E5E5E5] text-black w-24 h-10 rounded-md border border-gray-400 hover:bg-gray-300 transition duration-200">Learn</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Services Section --}}
    {{-- !! KUNCI: Tambah padding atas secara signifikan !! --}}
    <section class="bg-white pt-28 md:pt-20 pb-12 md:pb-16 relative"> {{-- Tambahkan pt besar, sesuaikan sesuai kebutuhan --}}
        <div class="max-w-4xl mx-auto text-center px-4">
            <h2 class="font-extrabold text-2xl md:text-3xl text-gray-800">Our Services</h2>
            <p class="text-gray-500 text-sm mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="max-w-6xl mx-auto mt-10 px-4 flex items-center justify-center gap-2 md:gap-4">
            {{-- Tombol navigasi carousel --}}
            <button id="services-prev" class="carousel-button text-gray-500 hover:text-gray-800 text-3xl font-thin p-2 disabled:opacity-50 disabled:cursor-not-allowed">←</button>
            <div id="services-carousel" class="flex gap-6 overflow-x-scroll scrollbar-hide scroll-smooth flex-1 max-w-xl md:max-w-3xl lg:max-w-4xl">
                {{-- Service items --}}
                @php
                    $services = [
                        ['img' => 'https://storage.googleapis.com/a1aa/image/4bea7146-2507-4d4a-4c40-b4fac06ee151.jpg', 'name' => 'Furniture'],
                        ['img' => 'https://storage.googleapis.com/a1aa/image/fb3bc74d-6533-4346-d4c7-1b370f5ed0c1.jpg', 'name' => 'Renovation'],
                        ['img' => 'https://storage.googleapis.com/a1aa/image/6216b493-c571-42ce-ac97-302f12293975.jpg', 'name' => 'Full Designer'],
                        ['img' => 'aset/blueprint.jpeg', 'name' => 'Planning'],
                        ['img' => 'aset/consultant.jpeg', 'name' => 'Consultation'],
                    ];
                @endphp
                @foreach ($services as $service)
                    <div class="flex flex-col items-center flex-shrink-0 w-[180px] sm:w-[200px] md:w-[220px] carousel-item">
                        <img alt="{{ $service['name'] }}" class="rounded-lg object-cover w-full h-[220px] sm:h-[240px] md:h-[260px] shadow-md" src="{{ $service['img'] }}"/>
                        <p class="font-semibold mt-4 text-center text-gray-700 text-sm md:text-base">{{ $service['name'] }}</p>
                    </div>
                @endforeach
            </div>
             {{-- Tombol navigasi carousel --}}
            <button id="services-next" class="carousel-button text-gray-500 hover:text-gray-800 text-3xl font-thin p-2 disabled:opacity-50 disabled:cursor-not-allowed">→</button>
        </div>
    </section>

    {{-- Project Section --}}
    <section class="relative bg-[#4A4545] text-white pt-20 md:pt-24 pb-24 md:pb-28 overflow-hidden">
    <img src="{{ asset('aset/wave_white.svg') }}"  alt="WAVE" class="w-full relative z-10 bottom-28 max-h-[350px]">

         <div class="max-w-7xl h-[50vh] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center gap-10 relative z-10">
             <div class="flex flex-col max-w-xs space-y-4 text-center md:text-left items-center md:items-start flex-shrink-0">
                 <h3 class="font-extrabold text-3xl md:text-4xl leading-tight">Our<br />Project</h3>
                 <p class="text-sm max-w-[240px] text-gray-300">Our designer already made a lot of beautiful prototype of rooms that inspire you</p>
                 <a href="#" class="bg-[#7DB6B6] text-white text-sm font-semibold px-6 py-2.5 w-max rounded-md hover:bg-[#6aa3a3] transition duration-200">Explore More</a>
             </div>

             <div class="flex-1 flex items-center justify-center w-full md:w-auto md:pl-8">
                 <button id="project-prev" class="carousel-button text-gray-400 hover:text-white text-3xl font-thin p-2 mr-2 disabled:opacity-50 disabled:cursor-not-allowed">←</button>
                 <div id="project-carousel" class="flex gap-6 overflow-x-scroll scrollbar-hide scroll-smooth max-w-xs sm:max-w-md md:max-w-xl lg:max-w-2xl xl:max-w-4xl">
                     @php
                         $projects = [
                             ['img' => 'https://storage.googleapis.com/a1aa/image/c063d68d-db60-4a0e-bf8e-66dcc059eaf2.jpg', 'category' => 'Bed Room', 'title' => 'Inner Peace', 'url' => '#project1'],
                             ['img' => 'https://via.placeholder.com/280x300/7DB6B6/ffffff?text=Project+2', 'category' => 'Living Room', 'title' => 'Modern Comfort', 'url' => '#project2'],
                             ['img' => 'https://via.placeholder.com/280x300/4A4545/ffffff?text=Project+3', 'category' => 'Kitchen', 'title' => 'Sleek Design', 'url' => '#project3'],
                             ['img' => 'https://via.placeholder.com/280x300/E5E5E5/000000?text=Project+4', 'category' => 'Office', 'title' => 'Productive Space', 'url' => '#project4'],
                         ];
                     @endphp
                     @foreach ($projects as $project)
                         <div class="carousel-item relative min-w-[260px] max-w-[280px] rounded-md overflow-hidden group flex-shrink-0">
                             <img alt="{{ $project['title'] }}" class="w-full h-[300px] object-cover" src="{{ $project['img'] }}"/>
                             <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-80 backdrop-blur-sm p-4 text-black transition-all duration-300 ease-in-out">
                                 <p class="text-xs font-semibold">{{ $project['category'] }}</p>
                                 <p class="text-xl font-bold leading-tight mt-1">{{ $project['title'] }}</p>
                                 <a href="{{ $project['url'] }}" class="absolute bottom-3 right-3 bg-[#7DB6B6] text-white rounded-full w-7 h-7 flex items-center justify-center hover:bg-[#6aa3a3] transition duration-200 opacity-0 group-hover:opacity-100 translate-y-2 group-hover:translate-y-0">
                                     <i class="fas fa-arrow-right text-xs"></i>
                                 </a>
                             </div>
                         </div>
                     @endforeach
                 </div>
                 <button id="project-next" class="carousel-button text-gray-400 hover:text-white text-3xl font-thin p-2 ml-2 disabled:opacity-50 disabled:cursor-not-allowed">→</button>
             </div>
         </div>
         <img src="{{ asset('aset/wave_tosca.png') }}"  alt="WAVE" class="w-full relative z-10 top-28 max-h-[150px]">
     </section>

@endsection

@push('scripts')
   {{-- Script carousel tetap sama --}}
   <script>
     // Kode JavaScript untuk carousel tidak perlu diubah
     document.addEventListener('DOMContentLoaded', function() {
        function setupCarousel(carouselId, prevButtonId, nextButtonId) {
            const carousel = document.getElementById(carouselId);
            const prevButton = document.getElementById(prevButtonId);
            const nextButton = document.getElementById(nextButtonId);
             // ... (sisa kode setupCarousel sama seperti sebelumnya) ...
            const items = carousel.querySelectorAll('.carousel-item');

            if (!carousel || !prevButton || !nextButton || items.length === 0) {
                console.warn(`Carousel setup failed for: ${carouselId}. Elements not found or no items.`);
                if(prevButton) prevButton.disabled = true;
                if(nextButton) nextButton.disabled = true;
                return;
            }

            const itemWidth = items[0].offsetWidth + parseInt(getComputedStyle(carousel).gap);
            let scrollAmount = 0; // Variabel ini sepertinya tidak digunakan, bisa dihapus jika tidak perlu

            function updateButtons() {
                const tolerance = 2; // Sedikit toleransi
                const currentScroll = Math.round(carousel.scrollLeft);
                const maxScroll = Math.round(carousel.scrollWidth - carousel.clientWidth);

                prevButton.disabled = currentScroll <= tolerance;
                nextButton.disabled = currentScroll >= maxScroll - tolerance;
            }

            prevButton.addEventListener('click', () => {
                carousel.scrollBy({ left: -itemWidth, behavior: 'smooth' });
            });

            nextButton.addEventListener('click', () => {
                 carousel.scrollBy({ left: itemWidth, behavior: 'smooth' });
            });

            let scrollTimeout;
            carousel.addEventListener('scroll', () => {
                clearTimeout(scrollTimeout);
                scrollTimeout = setTimeout(updateButtons, 150);
            }, { passive: true });

             let resizeTimeout;
             window.addEventListener('resize', () => {
                 clearTimeout(resizeTimeout);
                 resizeTimeout = setTimeout(() => {
                     updateButtons();
                 }, 250);
             });

            setTimeout(updateButtons, 150); // Initial check sedikit ditunda
        }

        setupCarousel('services-carousel', 'services-prev', 'services-next');
        setupCarousel('project-carousel', 'project-prev', 'project-next');
    });
   </script>
@endpush