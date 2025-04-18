@extends('layout.main') 
@section('content')
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #fefcf8;
    }
    .hero-bg {
        background: linear-gradient(rgba(114, 60, 103, 0.5), rgba(114, 60, 103, 0.5)), url('https://images.unsplash.com/photo-1415369629372-26f2fe60c467?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
        background-size: cover;
        background-position: center;
    }
</style>

<section class="py-20 px-6 max-w-6xl mx-auto">
    <div class="text-center mb-4">
        <h2 class="text-2xl font-semibold text-[#8B5C80]">Who We Are...</h2>
    </div>
    
    <div class="text-center mb-16">
        <h1 class="text-3xl md:text-5xl font-extrabold text-[#46253F] mb-6 leading-tight">GIVING VOICELESS ANIMALS A SECOND CHANCE AT LIFE</h1>
        <p class="text-xl md:text-2xl font-medium text-[#A77B99] italic">OUR WORK SPEAKS THROUGH THE LIVES WE'VE TOUCHED</p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-16">
        <div class="bg-[#F8F1F6] p-6 rounded-xl shadow-lg hover:shadow-xl transition text-center">
            <p class="text-4xl font-bold text-[#723C67] mb-2">50K+</p>
            <p class="text-[#5B2F53]">Happy Animals Rescued</p>
        </div>
        <div class="bg-[#F8F1F6] p-6 rounded-xl shadow-lg hover:shadow-xl transition text-center">
            <p class="text-4xl font-bold text-[#723C67] mb-2">30K+</p>
            <p class="text-[#5B2F53]">Lifesaving Missions</p>
        </div>
        <div class="bg-[#F8F1F6] p-6 rounded-xl shadow-lg hover:shadow-xl transition text-center">
            <p class="text-4xl font-bold text-[#723C67] mb-2">24K+</p>
            <p class="text-[#5B2F53]">Adoptions Made Joyful</p>
        </div>
        <div class="bg-[#F8F1F6] p-6 rounded-xl shadow-lg hover:shadow-xl transition text-center">
            <p class="text-4xl font-bold text-[#723C67] mb-2">12+</p>
            <p class="text-[#5B2F53]">Ambulances On Patrol</p>
        </div>
    </div>

    <div class="text-center mb-16">
        <p class="text-xl font-medium text-[#46253F] mb-6">Meet our magical ambulant heroes</p>
        <button class="bg-[#723C67] hover:bg-[#5B2F53] text-white font-semibold py-3 px-10 rounded-full text-lg shadow-md hover:shadow-lg transition duration-300 transform hover:scale-105">
            LEARN MORE ABOUT US
        </button>
    </div>

    <div class="mb-20 bg-gradient-to-br from-[#F8F1F6] to-white p-10 rounded-2xl shadow-inner">
        <h3 class="text-2xl font-bold text-[#723C67] mb-8 text-center">Frequently Asked Questions</h3>
        <div class="space-y-6 text-lg text-[#5B2F53] font-medium">
            <p>🌱 <strong>What is the primary mission of AMTM?</strong> — To rescue, rehabilitate, and rehome voiceless animals in need.</p>
            <p>🌸 <strong>How does AMTM fund its activities?</strong> — Through donations, sponsorships, and love from kind souls like you.</p>
            <p>🌼 <strong>Can I volunteer with AMTM?</strong> — Absolutely! We always welcome gentle hands and warm hearts.</p>
            <p>🌿 <strong>How can I adopt an animal from AMTM?</strong> — Just reach out to us and we’ll guide you through every step.</p>
        </div>
    </div>

    <div class="mb-20">
        <h3 class="text-3xl font-bold text-[#46253F] mb-10 text-center">✨ THE HEART OF AMTM ✨</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="text-center">
                <div class="h-48 w-48 mx-auto bg-[#A77B99] rounded-full mb-4 shadow-inner"></div>
                <h4 class="text-xl font-bold text-[#5B2F53]">Rhea Muktani</h4>
            </div>
            <div class="text-center">
                <div class="h-48 w-48 mx-auto bg-[#A77B99] rounded-full mb-4 shadow-inner"></div>
                <h4 class="text-xl font-bold text-[#5B2F53]">Dr. Subhash Chiangi</h4>
            </div>
            <div class="text-center">
                <div class="h-48 w-48 mx-auto bg-[#A77B99] rounded-full mb-4 shadow-inner"></div>
                <h4 class="text-xl font-bold text-[#5B2F53]">Kaminkar Drid</h4>
            </div>
        </div>
    </div>

    <div>
        <h3 class="text-3xl font-bold text-[#46253F] mb-8 text-center">💬 WHAT PEOPLE SAY ABOUT US</h3>
        <!-- Testimonials to go here -->
    </div>
</section>

@endsection