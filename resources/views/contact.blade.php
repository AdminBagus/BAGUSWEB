@extends('layouts.nav') {{-- Menggunakan layout yang baru dibuat --}}

@section('Contact') 

@section('content')
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <h2 class="text-white text-center font-extrabold text-lg md:text-xl mb-2">
        Get In Touch With Us
    </h2>
    <p class="text-center text-gray-400 text-xs md:text-sm max-w-xl mx-auto mb-12 leading-tight">
        For More Information About Our Product &amp; Services. Please Feel Free To Drop Us An Email.
        Our Staff Always Be There To Help You Out. Do Not Hesitate!
    </p>
    <div class="flex flex-col md:flex-row md:space-x-20 max-w-5xl mx-auto">
        <div class="flex flex-col space-y-10 mb-12 md:mb-0 md:w-1/3">
            <div class="flex items-start space-x-3">
                <i class="fas fa-map-marker-alt mt-1 text-white"></i>
                <div class="text-white">
                    <h3 class="font-semibold text-sm mb-1">Address</h3>
                    <p class="text-xs leading-tight">
                        236 5th SE Avenue, New
                        <br />
                        York NY10000, United
                        <br />
                        States
                    </p>
                </div>
            </div>
            <div class="flex items-start space-x-3">
                <i class="fas fa-phone-alt mt-1 text-white"></i>
                <div class="text-white">
                    <h3 class="font-semibold text-sm mb-1">Phone</h3>
                    <p class="text-xs leading-tight">
                        Mobile: +(84) 546-6789
                        <br />
                        Hotline: +(84) 456-6789
                    </p>
                </div>
            </div>
            <div class="flex items-start space-x-3">
                <i class="fas fa-clock mt-1 text-white"></i>
                <div class="text-white">
                    <h3 class="font-semibold text-sm mb-1">Working Time</h3>
                    <p class="text-xs leading-tight">
                        Monday-Friday: 9:00 - 22:00
                        <br />
                        Saturday-Sunday: 9:00 - 21:00
                    </p>
                </div>
            </div>
        </div>
        <form aria-label="Contact form" class="md:w-2/3 space-y-6">
            <div>
                <label class="block text-xs font-semibold mb-1 text-white" for="name">Your name</label>
                <input class="w-full rounded-md border border-gray-300 px-3 py-2 text-xs placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#7DB6B6] focus:border-[#7DB6B6]" id="name" name="name" placeholder="Abc" type="text" />
            </div>
            <div>
                <label class="block text-xs font-semibold mb-1 text-white" for="email">Email address</label>
                <input class="w-full rounded-md border border-gray-300 px-3 py-2 text-xs placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#7DB6B6] focus:border-[#7DB6B6]" id="email" name="email" placeholder="Abc@def.com" type="email" />
            </div>
            <div>
                <label class="block text-xs font-semibold mb-1 text-white" for="subject">Subject</label>
                <input class="w-full rounded-md border border-gray-300 px-3 py-2 text-xs placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#7DB6B6] focus:border-[#7DB6B6]" id="subject" name="subject" placeholder="This is an optional" type="text" />
            </div>
            <div>
                <label class="block text-xs font-semibold mb-1 text-white" for="message">Message</label>
                <textarea class="w-full rounded-md border border-gray-300 px-3 py-2 text-xs placeholder-gray-400 resize-none focus:outline-none focus:ring-1 focus:ring-[#7DB6B6] focus:border-[#7DB6B6]" id="message" name="message" placeholder="Hi! I'd like to ask about" rows="3"></textarea>
            </div>
            <div class="flex justify-center">
                <button class="bg-[#7DB6B6] text-white text-xs font-light rounded-md px-12 py-2 hover:bg-[#6aa3a3] transition-colors" type="submit">
                    Submit
                </button>
            </div>
        </form>
    </div>
</section>

<!-- Features Section -->
<section class="bg-[#7DB6B6] relative pt-16 pb-24 overflow-hidden">
    <svg class="absolute top-0 left-0 w-full h-20 md:h-28" fill="none" preserveaspectratio="none" viewbox="0 0 1440 80" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 80C120 0 360 0 480 0C600 0 720 40 840 40C960 40 1080 0 1200 0C1320 0 1440 80 1440 80H0Z" fill="#7DB6B6"></path>
    </svg>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col md:flex-row justify-between items-center md:items-start max-w-6xl mx-auto space-y-10 md:space-y-0 md:space-x-12 text-white">
            <div class="flex items-center space-x-3 max-w-xs">
                <i class="fas fa-trophy text-lg"></i>
                <div>
                    <h4 class="font-semibold text-sm">High Quality</h4>
                    <p class="text-xs font-light">crafted from top materials</p>
                </div>
            </div>
            <div class="flex items-center space-x-3 max-w-xs">
                <i class="fas fa-check-circle text-lg"></i>
                <div>
                    <h4 class="font-semibold text-sm">Warranty Protection</h4>
                    <p class="text-xs font-light">Over 2 years</p>
                </div>
            </div>
            <div class="flex items-center space-x-3 max-w-xs">
                <i class="fas fa-truck text-lg"></i>
                <div>
                    <h4 class="font-semibold text-sm">Free Shipping</h4>
                    <p class="text-xs font-bold">Order over 150 $</p>
                </div>
            </div>
            <div class="flex items-center space-x-3 max-w-xs">
                <i class="fas fa-headset text-lg"></i>
                <div>
                    <h4 class="font-semibold text-sm">24 / 7 support</h4>
                    <p class="text-xs font-light">Dedicated support</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimoni -->

@endsection
