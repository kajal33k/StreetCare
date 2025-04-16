@extends('layout.main') 
@section('content')
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .hero-bg {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1415369629372-26f2fe60c467?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
        }
    </style>

    <!-- Who We Are Section -->
    <section class="py-16 px-4 max-w-6xl mx-auto">
        <div class="text-center mb-4">
            <h2 class="text-2xl font-semibold text-gray-600">Who We Are...</h2>
        </div>
        
        <div class="text-center mb-16">
            <h1 class="text-3xl md:text-5xl font-bold text-gray-800 mb-6">GIVING VOICELESS ANIMALS A SECOND CHANCE AT LIFE</h1>
            <p class="text-xl md:text-2xl font-medium text-amber-600">OUR WORK SPEAKS THROUGH THE LIVES WE'VE TOUCHED</p>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-16">
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <p class="text-4xl font-bold text-amber-600 mb-2">50K+</p>
                <p class="text-gray-600">ANIMAL'S FLAVOR</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <p class="text-4xl font-bold text-amber-600 mb-2">30K+</p>
                <p class="text-gray-600">INITIATIVE TO SAVE ANIMALS</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <p class="text-4xl font-bold text-amber-600 mb-2">24K+</p>
                <p class="text-gray-600">Nuestr Today, Swir Tomorrow</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <p class="text-4xl font-bold text-amber-600 mb-2">12+</p>
                <p class="text-gray-600">Cars for Crew, Protect the Secret</p>
            </div>
        </div>

        <div class="text-center mb-16">
            <p class="text-xl font-medium text-gray-700 mb-8">Fresh Large Ambulant</p>
            <button class="bg-amber-600 hover:bg-amber-700 text-white font-bold py-3 px-8 rounded-full text-lg transition duration-300 transform hover:scale-105">
                LEARN MORE ABOUT US
            </button>
        </div>

        <!-- FAQ Section -->
        <div class="mb-16">
            <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">What is the primary mission of AMTM?</h3>
            <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">How does AMTM fund its activities?</h3>
            <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Can I volunteer with AMTM?</h3>
            <h3 class="text-2xl font-bold text-gray-800 text-center">How can I adopt an animal from AMTM?</h3>
        </div>

        <!-- Team Section -->
        <div class="mb-16">
            <h3 class="text-3xl font-bold text-gray-800 mb-8 text-center">THE HEART OF AMTM</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="h-48 w-48 mx-auto bg-gray-200 rounded-full mb-4"></div>
                    <h4 class="text-xl font-bold">Rhea Muktani</h4>
                </div>
                <div class="text-center">
                    <div class="h-48 w-48 mx-auto bg-gray-200 rounded-full mb-4"></div>
                    <h4 class="text-xl font-bold">Dr. Subhash Chiangi</h4>
                </div>
                <div class="text-center">
                    <div class="h-48 w-48 mx-auto bg-gray-200 rounded-full mb-4"></div>
                    <h4 class="text-xl font-bold">Kaminkar Drid</h4>
                </div>
            </div>
        </div>

        <!-- Testimonials -->
        <div>
            <h3 class="text-3xl font-bold text-gray-800 mb-8 text-center">WHAT PEOPLE SAY ABOUT US</h3>
            <!-- Testimonial cards would go here -->
        </div>
    </section>

@endsection