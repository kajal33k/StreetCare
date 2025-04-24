@extends('layout.main')
@section('content')
  <!-- Hero Section -->
  <section class="bg-[#f0f7f1] px-6 py-24 text-center">
    <div class="max-w-3xl mx-auto">
      <h1 class="text-4xl sm:text-5xl font-extrabold mb-6 leading-tight text-[#1C3B20]">
        Know More About Our Mission
      </h1>
      <p class="text-lg sm:text-xl text-[#3a5240]">
        We believe every street animal deserves kindness, care, and a safe place to belong. Learn about the heart behind our work.
      </p>
    </div>
  </section>

  <!-- Our Mission -->
  <section class="px-6 py-16 bg-white">
    <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-12 items-center">
      <div>
        <h2 class="text-3xl font-bold mb-4 text-[#1C3B20]">Our Mission</h2>
        <p class="text-[#3a5240] text-lg leading-relaxed">
          PawProtect exists to rescue, heal, and shelter injured, abandoned, or hungry street animals. We aim to build a world where compassion leads the way — where no life is left suffering alone on the streets.
        </p>
      </div>
      <img src="https://images.unsplash.com/photo-1574158622682-e40e69881006?auto=format&fit=crop&w=600&q=80" alt="Animal Rescue" class="rounded-2xl shadow-md"/>
    </div>
  </section>

  <!-- Our Impact -->
  <section class="px-6 py-16 bg-[#f5faf6]">
    <div class="max-w-5xl mx-auto">
      <h2 class="text-3xl font-bold text-center mb-10 text-[#1C3B20]">What We've Accomplished</h2>
      <div class="grid md:grid-cols-3 gap-8 text-center">
        <div class="bg-white rounded-xl p-6 shadow border border-[#d8e5da]">
          <h3 class="text-4xl font-extrabold text-[#1C3B20] mb-2">3,000+</h3>
          <p class="font-medium text-[#3a5240]">Animals Rescued</p>
        </div>
        <div class="bg-white rounded-xl p-6 shadow border border-[#d8e5da]">
          <h3 class="text-4xl font-extrabold text-[#1C3B20] mb-2">150+</h3>
          <p class="font-medium text-[#3a5240]">Volunteers Involved</p>
        </div>
        <div class="bg-white rounded-xl p-6 shadow border border-[#d8e5da]">
          <h3 class="text-4xl font-extrabold text-[#1C3B20] mb-2">80+</h3>
          <p class="font-medium text-[#3a5240]">Permanent Adoptions</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Values Section -->
  <section class="px-6 py-16 bg-white">
    <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-12 items-center">
      <img src="https://cdn.pixabay.com/photo/2025/04/08/14/38/squirrel-9521648_1280.jpg" alt="Our Values" class="rounded-2xl shadow-md"/>
      <div>
        <h2 class="text-3xl font-bold mb-4 text-[#1C3B20]">What We Stand For</h2>
        <ul class="list-disc pl-6 text-[#3a5240] text-lg space-y-2">
          <li>Empathy for every life</li>
          <li>Community-led action</li>
          <li>Transparency & trust</li>
          <li>Inclusive, non-judgmental service</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Quote Section -->
  <section class="bg-[#1C3B20] text-white px-6 py-24 text-center">
    <div class="max-w-3xl mx-auto">
      <p class="text-xl sm:text-2xl font-light italic mb-6">
        "The greatness of a nation and its moral progress can be judged by the way its animals are treated."  
      </p>
      <p class="text-lg font-semibold">– Mahatma Gandhi</p>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="bg-[#f0f7f1] px-6 py-20 text-center">
    <div class="max-w-3xl mx-auto">
      <h2 class="text-2xl sm:text-3xl font-bold mb-4 text-[#1C3B20]">Ready to Get Involved?</h2>
      <p class="text-[#3a5240] mb-6">
        Whether you volunteer, donate, or share — every action helps change a life. Join us in building a kinder world.
      </p>
      <a href="/volunteer" class="bg-[#1C3B20] text-white px-8 py-3 rounded-2xl text-lg hover:bg-[#2a4b2c] transition">
        Become a Protector
      </a>
    </div>
  </section>
@endsection