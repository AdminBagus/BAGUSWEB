@extends('layouts.nav') {{-- Menggunakan layout yang baru dibuat --}}

@section('title', 'Welcome to HOMEPAGE') {{-- Menambahkan title untuk halaman --}}

@section('content')

    {{-- Hero Section --}}
    <div class="bg-[#4A4545] text-white pb-10 md:pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-center gap-8 md:gap-12 pt-8 md:pt-12">
            <img
                alt="3D man construction worker"
                class="w-[450px] h-[490px] md:w-[620px] md:h-[680px] object-contain order-2 md:order-1 relative z-[-0] -mb-24 md:-mb-32 transform scale-x-[-1]"
                src="{{ asset('aset/orang.png') }}"
            />
            <div class="text-center md:text-left max-w-lg order-1 md:order-2 relative z-0">
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
    <section class="bg-white pt-28 md:pt-20 pb-12 md:pb-16 relative">
        <div class="max-w-4xl mx-auto text-center px-4 pt-28">
            <h2 class="font-extrabold text-2xl md:text-3xl text-gray-800">Our Services</h2>
            <p class="text-gray-500 text-sm mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="max-w-6xl mx-auto mt-10 px-4 flex items-center justify-center gap-4 md:gap-6">
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
                <button class="service-button flex flex-col items-center h-[220px] sm:h-[240px] md:h-[260px] p-4 bg-gray-100 rounded-lg shadow-md hover:shadow-2xl transition duration-300 transform hover:scale-105">
                    <img alt="{{ $service['name'] }}" class="rounded-lg object-cover w-full h-[220px] sm:h-[240px] md:h-[260px]" src="{{ $service['img'] }}"/>
                    <p class="font-semibold mt-4 text-center text-gray-700 text-sm md:text-base">{{ $service['name'] }}</p>
                </button>
            @endforeach
        </div>
    </section>

    {{-- Project Section --}}
    <section class="relative bg-[#4A4545] text-white pt-20 md:pt-24 pb-24 md:pb-28 overflow-hidden">

        <img src="{{ asset('aset/wave_white.svg') }}" alt="WAVE" class="w-full relative z-10 bottom-80 min-h-screen">

        <div class="max-w-7xl h-[20vh] mx-auto bottom-44 px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center gap-10 relative z-10">
            <div class="flex flex-col max-w-xs space-y-4 text-center md:text-left items-center md:items-start flex-shrink-0">
                <h3 class="font-extrabold text-3xl md:text-4xl leading-tight">Our<br />Project</h3>
                <p class="text-sm max-w-[240px] text-gray-300">Our designer already made a lot of beautiful prototype of rooms that inspire you</p>
                <a href="#" class="bg-[#7DB6B6] text-white text-sm font-semibold px-6 py-2.5 w-max rounded-md hover:bg-[#6aa3a3] transition duration-200">Explore More</a>
            </div>
            <div class="flex-1 flex items-center justify-center w-full md:w-auto md:pl-8">
                <button id="project-prev" class="carousel-button text-white hover:text-white text-3xl font-bold p-2 -mr-8 right-10 relative">←</button>
                <div id="project-carousel" class="flex gap-6 overflow-hidden scroll-smooth max-w-xs sm:max-w-md md:max-w-xl lg:max-w-2xl xl:max-w-4xl">
                    @php
                        $projects = [
                            ['img' => 'https://storage.googleapis.com/a1aa/image/c063d68d-db60-4a0e-bf8e-66dcc059eaf2.jpg', 'category' => 'Bed Room', 'title' => 'Inner Peace', 'url' => '#project1'],
                            ['img' => 'https://storage.googleapis.com/a1aa/image/c063d68d-db60-4a0e-bf8e-66dcc059eaf2.jpg', 'category' => 'Living Room', 'title' => 'Modern Comfort', 'url' => '#project2'],
                            ['img' => 'https://storage.googleapis.com/a1aa/image/c063d68d-db60-4a0e-bf8e-66dcc059eaf2.jpg', 'category' => 'Kitchen', 'title' => 'Sleek Design', 'url' => '#project3'],
                            ['img' => 'https://storage.googleapis.com/a1aa/image/c063d68d-db60-4a0e-bf8e-66dcc059eaf2.jpg', 'category' => 'Office', 'title' => 'Productive Space', 'url' => '#project4'],
                        ];
                    @endphp
                    @foreach ($projects as $project)
                        <div class="carousel-item relative min-w-[260px] max-w-[280px] rounded-md overflow-hidden group flex-shrink-0">
                            <img alt="{{ $project['title'] }}" class="w-full h-[300px] object-cover" src="{{ $project['img'] }}"/>
                            <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-80 backdrop-blur-sm p-4 text-black transition-all duration-300 ease-in-out">
                                <p class="text-xs font-semibold">{{ $project['category'] }}</p>
                                <p class="text-xl font-bold leading-tight mt-1">{{ $project['title'] }}</p>
                                <a href="{{ route('details') }}" class="absolute bottom-3 right-3 bg-[#7DB6B6] text-white rounded-full w-7 h-7 flex items-center justify-center hover:bg-[#6aa3a3] transition duration-200 opacity-0 group-hover:opacity-100 translate-y-2 group-hover:translate-y-0">
                                    <i class="fas fa-arrow-right text-xs"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button id="project-next" class="carousel-button text-white hover:text-white text-3xl font-bold p-2 ml-2">→</button>
            </div>
        </div>
        <img src="{{ asset('aset/wave_tosca.png') }}" alt="WAVE" class="w-full relative z-10 top-28 h-[150px]">
    </section>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        function setupInfinityCarousel(carouselId, prevButtonId, nextButtonId) {
            const carousel = document.getElementById(carouselId);
            const prevButton = document.getElementById(prevButtonId);
            const nextButton = document.getElementById(nextButtonId);
            const items = carousel.querySelectorAll('.carousel-item');

            if (!carousel || !prevButton || !nextButton || items.length === 0) {
                console.warn(`Carousel setup failed for: ${carouselId}. Elements not found or no items.`);
                if (prevButton) prevButton.disabled = true;
                if (nextButton) nextButton.disabled = true;
                return;
            }

            const itemWidth = items[0].offsetWidth + parseInt(getComputedStyle(carousel).gap);
            const totalWidth = carousel.scrollWidth;
            const visibleWidth = carousel.clientWidth;

            // Clone items untuk menciptakan efek infinity loop
            items.forEach((item) => {
                const clone = item.cloneNode(true);
                carousel.appendChild(clone);
            });

            // Set initial scroll position to the first real item
            carousel.scrollLeft = itemWidth;

            function scrollToNext() {
                if (carousel.scrollLeft + carousel.clientWidth >= carousel.scrollWidth - itemWidth) {
                    // Jika sudah di akhir, kembali ke awal dengan smooth
                    carousel.scrollTo({
                        left: itemWidth,
                        behavior: 'smooth'
                    });
                } else {
                    // Scroll ke item berikutnya
                    carousel.scrollBy({
                        left: itemWidth,
                        behavior: 'smooth'
                    });
                }
            }

            function scrollToPrev() {
                if (carousel.scrollLeft <= itemWidth) {
                    // Jika sudah di awal, pergi ke akhir dengan smooth
                    carousel.scrollTo({
                        left: carousel.scrollWidth - 2 * itemWidth,
                        behavior: 'smooth'
                    });
                } else {
                    // Scroll ke item sebelumnya
                    carousel.scrollBy({
                        left: -itemWidth,
                        behavior: 'smooth'
                    });
                }
            }

            // Event listeners untuk tombol navigasi
            prevButton.addEventListener('click', scrollToPrev);
            nextButton.addEventListener('click', scrollToNext);
        }

        // Initialize infinity carousel
        setupInfinityCarousel('project-carousel', 'project-prev', 'project-next');

        // Animasi masuk untuk Service Buttons
        const serviceButtons = document.querySelectorAll('.service-button');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, index * 150);
                }
            });
        }, { threshold: 0.1 });

        serviceButtons.forEach((button) => {
            button.style.opacity = '0';
            button.style.transform = 'translateY(30px)';
            button.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(button);
        });

        // Event listener untuk service buttons (tanpa URL)
        serviceButtons.forEach((button) => {
            button.addEventListener('click', function() {
                const serviceName = this.querySelector('p').textContent;
                console.log(`Service clicked: ${serviceName}`);
                // Tambahkan logika custom di sini, misalnya:
                // - Tampilkan modal
                // - Scroll ke section tertentu
                // - Tampilkan informasi detail
                alert(`You clicked on ${serviceName} service!`);
            });
        });
    });
</script>
@endpush

