@extends('layout.main')
@section('content')
  <!-- Hero Section -->
  <section class="min-h-screen flex items-center justify-center px-6 py-20 bg-[#f8faf8]">
    <div class="max-w-3xl text-center">
      <h1 class="text-4xl sm:text-5xl font-extrabold mb-6 text-[#1C3B20]">Medical Help for Street Animals</h1>
      <p class="text-lg sm:text-xl mb-8 text-[#3a5240]">
        Your support enables life-saving treatments, emergency care, and vaccinations for injured and sick animals on the street.
      </p>
      <a href="#support" class="inline-block bg-[#1C3B20] hover:bg-[#2a4b2c] text-white text-lg px-8 py-3 rounded-2xl shadow-md transition duration-300">
        Support Medical Aid
      </a>
    </div>
  </section>

  <!-- Medical Services Section -->
  <section class="bg-white px-6 py-16" id="support">
    <div class="max-w-5xl mx-auto">
      <h2 class="text-3xl font-bold text-center mb-10 text-[#1C3B20]">What Medical Help Provides</h2>
      <div class="grid md:grid-cols-3 gap-8 text-center">
        <div class="p-6 border border-[#d8e5da] rounded-2xl shadow-sm">
          <img src="https://img.icons8.com/ios-filled/100/1C3B20/bandage.png" alt="Injury Care" class="mx-auto mb-4" />
          <h3 class="text-xl font-semibold mb-2 text-[#1C3B20]">Injury Care</h3>
          <p class="text-[#3a5240]">Immediate treatment for wounds, fractures, and infections.</p>
        </div>
        <div class="p-6 border border-[#d8e5da] rounded-2xl shadow-sm">
          <img src="https://img.icons8.com/ios-filled/100/1C3B20/syringe.png" alt="Vaccination" class="mx-auto mb-4" />
          <h3 class="text-xl font-semibold mb-2 text-[#1C3B20]">Vaccinations</h3>
          <p class="text-[#3a5240]">Preventive shots to protect against common street diseases.</p>
        </div>
        <div class="p-6 border border-[#d8e5da] rounded-2xl shadow-sm">
          <img src="https://img.icons8.com/ios-filled/100/1C3B20/stethoscope.png" alt="Checkups" class="mx-auto mb-4" />
          <h3 class="text-xl font-semibold mb-2 text-[#1C3B20]">Health Checkups</h3>
          <p class="text-[#3a5240]">Regular checkups to monitor and maintain animal health.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="bg-[#f0f7f1] px-6 py-16">
    <div class="max-w-3xl mx-auto text-center">
      <h2 class="text-2xl font-bold mb-4 text-[#1C3B20]">Every Treatment Saves a Life</h2>
      <p class="mb-6 text-[#3a5240]">
        Join hands in giving street animals a fighting chance. Your help funds surgeries, medications, and post-treatment care.
      </p>
      <a href="#" class="bg-[#1C3B20] hover:bg-[#2a4b2c] text-white text-lg px-8 py-3 rounded-2xl shadow-md transition duration-300">
        Help Heal Them
      </a>
    </div>
  </section>
@endsection