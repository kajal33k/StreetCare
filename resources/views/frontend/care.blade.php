@extends('layout.main')
@section('content')
  <!-- Hero Section -->
  <section class="min-h-screen flex items-center justify-center px-6 py-20 bg-[#fdf6f0]">
    <div class="max-w-3xl text-center">
      <h1 class="text-4xl sm:text-5xl font-extrabold mb-6">Donate for Care</h1>
      <p class="text-lg sm:text-xl mb-8 text-[#5b3b4f]">
        Your contribution helps provide food, shelter, and medical treatment for street animals in need.
      </p>
      <a href="#donate" class="inline-block bg-[#44223C] hover:bg-[#5b2e50] text-white text-lg px-8 py-3 rounded-2xl shadow-md transition duration-300">
        Make a Difference
      </a>
    </div>
  </section>

  <!-- Donation Info Section -->
  <section id="donate" class="bg-white px-6 py-16">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl font-bold text-center mb-8">How Your Donation Helps</h2>
      <div class="grid md:grid-cols-3 gap-8 text-center">
        <div class="p-6 border border-[#e5d6d6] rounded-2xl shadow-sm">
          <img src="https://img.icons8.com/ios-filled/100/44223C/dog.png" alt="Food" class="mx-auto mb-4" />
          <h3 class="text-xl font-semibold mb-2">Nutritious Food</h3>
          <p>Feed hungry street animals with healthy, balanced meals.</p>
        </div>
        <div class="p-6 border border-[#e5d6d6] rounded-2xl shadow-sm">
          <img src="https://img.icons8.com/ios-filled/100/44223C/dog-house.png" alt="Shelter" class="mx-auto mb-4" />
          <h3 class="text-xl font-semibold mb-2">Warm Shelter</h3>
          <p>Provide safe and loving shelters during harsh conditions.</p>
        </div>
        <div class="p-6 border border-[#e5d6d6] rounded-2xl shadow-sm">
          <img src="https://img.icons8.com/ios-filled/100/44223C/medical-doctor.png" alt="Medical" class="mx-auto mb-4" />
          <h3 class="text-xl font-semibold mb-2">Medical Treatment</h3>
          <p>Support surgeries, vaccinations, and emergency treatments.</p>
        </div>
      </div>
    </div>
  </section>

 @endsection
