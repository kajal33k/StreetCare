@extends('layout.main')
@section('content')
  <!-- Hero Section -->
  <section class="min-h-screen flex items-center justify-center px-6 py-20 bg-[#f5f9f5]">
    <div class="max-w-3xl text-center">
      <h1 class="text-4xl sm:text-5xl font-extrabold mb-6 text-[#1C3B20]">Donate for Care</h1>
      <p class="text-lg sm:text-xl mb-8 text-[#3A5C40]">
        Your contribution helps provide food, shelter, and medical treatment for street animals in need.
      </p>
      <a href="#donate" class="inline-block bg-[#1C3B20] hover:bg-[#0F2915] text-white text-lg px-8 py-3 rounded-2xl shadow-md transition duration-300">
        Make a Difference
      </a>
    </div>
  </section>

  <!-- Donation Info Section -->
  <section id="donate" class="bg-[#F5F9F5] px-6 py-16">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl font-bold text-center mb-8 text-[#1C3B20]">How Your Donation Helps</h2>
      <div class="grid md:grid-cols-3 gap-8 text-center">
        <div class="p-6 border border-[#C2DAC7] rounded-2xl shadow-sm bg-white hover:shadow-md transition duration-300">
          <img src="https://img.icons8.com/ios-filled/100/1C3B20/dog.png" alt="Food" class="mx-auto mb-4" />
          <h3 class="text-xl font-semibold mb-2 text-[#1C3B20]">Nutritious Food</h3>
          <p class="text-[#3A5C40]">Feed hungry street animals with healthy, balanced meals.</p>
        </div>
        <div class="p-6 border border-[#C2DAC7] rounded-2xl shadow-sm bg-white hover:shadow-md transition duration-300">
          <img src="https://img.icons8.com/ios-filled/100/1C3B20/dog-house.png" alt="Shelter" class="mx-auto mb-4" />
          <h3 class="text-xl font-semibold mb-2 text-[#1C3B20]">Warm Shelter</h3>
          <p class="text-[#3A5C40]">Provide safe and loving shelters during harsh conditions.</p>
        </div>
        <div class="p-6 border border-[#C2DAC7] rounded-2xl shadow-sm bg-white hover:shadow-md transition duration-300">
          <img src="https://img.icons8.com/ios-filled/100/1C3B20/medical-doctor.png" alt="Medical" class="mx-auto mb-4" />
          <h3 class="text-xl font-semibold mb-2 text-[#1C3B20]">Medical Treatment</h3>
          <p class="text-[#3A5C40]">Support surgeries, vaccinations, and emergency treatments.</p>
        </div>
      </div>
    </div>
  </section>
@endsection