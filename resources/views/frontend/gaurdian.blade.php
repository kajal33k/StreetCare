@extends('layout.main')
@section('content')
  <!-- Hero Section -->
  <section class="bg-[#fceeea] px-6 py-24 text-center">
    <div class="max-w-3xl mx-auto">
      <h1 class="text-4xl sm:text-5xl font-extrabold mb-6 leading-tight">
        Become a Guardian of Street Animals
      </h1>
      <p class="text-lg sm:text-xl text-[#5e3c50]">
        Guardians are the heart of our mission — consistent supporters who ensure no animal is ever left behind.
      </p>
    </div>
  </section>

  <!-- Program Overview -->
  <section class="px-6 py-16 bg-white">
    <div class="max-w-5xl mx-auto text-center">
      <h2 class="text-3xl font-bold mb-6">What is a Guardian?</h2>
      <p class="text-lg text-[#4b3a42] mb-8 max-w-2xl mx-auto">
        A Guardian is someone who pledges ongoing monthly support to provide food, medical aid, and shelter to injured or abandoned street animals. Your support keeps the rescue alive, every single day.
      </p>

      <div class="grid md:grid-cols-3 gap-6 text-left">
        <div class="bg-[#fdf5f3] rounded-xl p-6 shadow-md border border-[#ecdede]">
          <h3 class="font-bold text-xl mb-2 text-[#44223C]">🏥 Medical Support</h3>
          <p>Fund emergency surgeries, vaccinations, and post-treatment care for rescued animals.</p>
        </div>
        <div class="bg-[#fdf5f3] rounded-xl p-6 shadow-md border border-[#ecdede]">
          <h3 class="font-bold text-xl mb-2 text-[#44223C]">🍲 Monthly Meals</h3>
          <p>Provide daily nourishment to animals living in shelters and on the streets.</p>
        </div>
        <div class="bg-[#fdf5f3] rounded-xl p-6 shadow-md border border-[#ecdede]">
          <h3 class="font-bold text-xl mb-2 text-[#44223C]">🏡 Safe Shelter</h3>
          <p>Help us maintain loving shelters for sick, injured, or abandoned animals.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Steps to Become a Guardian -->
  <section class="px-6 py-20 bg-[#fdf1ed]">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl font-bold mb-10">How to Become a Guardian</h2>
      <div class="space-y-8 text-left">
        <div class="flex items-start space-x-4">
          <span class="text-2xl font-bold text-[#44223C]">1.</span>
          <div>
            <h3 class="font-semibold text-lg">Choose a Contribution Plan</h3>
            <p class="text-[#4b3a42]">Pick a monthly amount that you’re comfortable with. Every little bit helps.</p>
          </div>
        </div>
        <div class="flex items-start space-x-4">
          <span class="text-2xl font-bold text-[#44223C]">2.</span>
          <div>
            <h3 class="font-semibold text-lg">Submit the Guardian Form</h3>
            <p class="text-[#4b3a42]">Tell us about yourself and how you’d like to help. We’ll guide you from there.</p>
          </div>
        </div>
        <div class="flex items-start space-x-4">
          <span class="text-2xl font-bold text-[#44223C]">3.</span>
          <div>
            <h3 class="font-semibold text-lg">Start Saving Lives</h3>
            <p class="text-[#4b3a42]">Receive updates, guardian badges, and thank-you stories from the animals you’ve helped.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="bg-[#44223C] text-white px-6 py-20 text-center">
    <div class="max-w-2xl mx-auto">
      <h2 class="text-2xl sm:text-3xl font-bold mb-4">Ready to Become a Guardian?</h2>
      <p class="mb-6 text-lg">Start your monthly contribution today and become a hero for street animals everywhere.</p>
      <a href="/donate" class="bg-white text-[#44223C] px-8 py-3 rounded-2xl text-lg font-semibold hover:bg-[#fdf5f3] transition">
        Start Giving Monthly
      </a>
    </div>
  </section>

@endsection
