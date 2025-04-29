@extends('layout.main')
@section('content')
  <!-- Hero Section -->
  <section class="min-h-screen flex items-center justify-center px-6 py-20 bg-[#f3f9f4]">
    <div class="max-w-3xl text-center">
      <h1 class="text-4xl sm:text-5xl font-extrabold mb-6 leading-tight text-[#1C3B20]">
        Protect Animals. Be Their Voice. <br class="hidden sm:inline" />
        Become a Street Animal Protector.
      </h1>
      <p class="text-lg sm:text-xl mb-8 text-[#3a5240]">
        Every day, countless street animals face hunger, injury, and neglect. Join our mission to protect and care for them.
      </p>
      <a href="#how" class="inline-block bg-[#1C3B20] hover:bg-[#2a4b2c] text-white text-lg px-8 py-3 rounded-2xl shadow-md transition duration-300">
        Become a Protector
      </a>
    </div>
  </section>

  <!-- How to Become a Protector -->
  <section id="how" class="bg-white px-6 py-16">
    <div class="max-w-5xl mx-auto">
      <h2 class="text-3xl font-bold text-center mb-12 text-[#1C3B20]">How You Can Help</h2>
      <div class="grid md:grid-cols-3 gap-8 text-center">
        <div class="p-6 border border-[#d8e5da] rounded-2xl shadow-sm hover:shadow-md transition">
          <img src="https://img.icons8.com/ios-filled/100/1C3B20/volunteer.png" alt="Volunteer" class="mx-auto mb-4"/>
          <h3 class="text-xl font-semibold mb-2 text-[#1C3B20]">Volunteer</h3>
          <p class="text-[#3a5240]">Help us on the streets to rescue, feed, and care for animals in need.</p>
        </div>
        <div class="p-6 border border-[#d8e5da] rounded-2xl shadow-sm hover:shadow-md transition">
          <img src="https://img.icons8.com/ios-filled/100/1C3B20/give.png" alt="Donate" class="mx-auto mb-4"/>
          <h3 class="text-xl font-semibold mb-2 text-[#1C3B20]">Donate</h3>
          <p class="text-[#3a5240]">Contribute to cover medical bills, food, and safe shelters for rescued animals.</p>
        </div>
        <div class="p-6 border border-[#d8e5da] rounded-2xl shadow-sm hover:shadow-md transition">
          <img src="https://img.icons8.com/ios-filled/100/1C3B20/share.png" alt="Spread Awareness" class="mx-auto mb-4"/>
          <h3 class="text-xl font-semibold mb-2 text-[#1C3B20]">Spread Awareness</h3>
          <p class="text-[#3a5240]">Share our cause with your community to help us reach more kind hearts.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Join Now CTA -->
  <section class="bg-[#f0f7f1] px-6 py-20">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-2xl sm:text-3xl font-bold mb-4 text-[#1C3B20]">Be a Guardian Angel for Street Animals</h2>
      <p class="text-[#3a5240] mb-6">Whether it's your time, resources, or simply your voice—your involvement creates hope and saves lives.</p>
      <a href="#" class="bg-[#1C3B20] hover:bg-[#2a4b2c] text-white text-lg px-8 py-3 rounded-2xl shadow-md transition">
        Join the Movement
      </a>
    </div>
  </section>
@endsection