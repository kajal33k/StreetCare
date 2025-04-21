@extends('layout.main')
@section('content')
  <!-- Hero Section -->
  <section class="min-h-screen flex items-center justify-center px-6 py-20 bg-[#fff6f2]">
    <div class="max-w-3xl text-center">
      <h1 class="text-4xl sm:text-5xl font-extrabold mb-6 leading-tight">
        Protect Animals. Be Their Voice. <br class="hidden sm:inline" />
        Become a Street Animal Protector.
      </h1>
      <p class="text-lg sm:text-xl mb-8 text-[#5d3c50]">
        Every day, countless street animals face hunger, injury, and neglect. Join our mission to protect and care for them.
      </p>
      <a href="#how" class="inline-block bg-[#44223C] hover:bg-[#5a2a4d] text-white text-lg px-8 py-3 rounded-2xl shadow-md transition duration-300">
        Become a Protector
      </a>
    </div>
  </section>

  <!-- How to Become a Protector -->
  <section id="how" class="bg-white px-6 py-16">
    <div class="max-w-5xl mx-auto">
      <h2 class="text-3xl font-bold text-center mb-12">How You Can Help</h2>
      <div class="grid md:grid-cols-3 gap-8 text-center">
        <div class="p-6 border border-[#e4d8d8] rounded-2xl shadow-sm hover:shadow-md transition">
          <img src="https://img.icons8.com/ios-filled/100/44223C/volunteer.png" alt="Volunteer" class="mx-auto mb-4"/>
          <h3 class="text-xl font-semibold mb-2">Volunteer</h3>
          <p>Help us on the streets to rescue, feed, and care for animals in need.</p>
        </div>
        <div class="p-6 border border-[#e4d8d8] rounded-2xl shadow-sm hover:shadow-md transition">
          <img src="https://img.icons8.com/ios-filled/100/44223C/give.png" alt="Donate" class="mx-auto mb-4"/>
          <h3 class="text-xl font-semibold mb-2">Donate</h3>
          <p>Contribute to cover medical bills, food, and safe shelters for rescued animals.</p>
        </div>
        <div class="p-6 border border-[#e4d8d8] rounded-2xl shadow-sm hover:shadow-md transition">
          <img src="https://img.icons8.com/ios-filled/100/44223C/share.png" alt="Spread Awareness" class="mx-auto mb-4"/>
          <h3 class="text-xl font-semibold mb-2">Spread Awareness</h3>
          <p>Share our cause with your community to help us reach more kind hearts.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Join Now CTA -->
  <section class="bg-[#fef4f1] px-6 py-20">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-2xl sm:text-3xl font-bold mb-4">Be a Guardian Angel for Street Animals</h2>
      <p class="text-[#62455a] mb-6">Whether it's your time, resources, or simply your voice—your involvement creates hope and saves lives.</p>
      <a href="#" class="bg-[#44223C] hover:bg-[#5e3052] text-white text-lg px-8 py-3 rounded-2xl shadow-md transition">
        Join the Movement
      </a>
    </div>
  </section>

@endsection
