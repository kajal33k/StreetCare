@extends('layout.main')
@section('content')
  <!-- Hero Section -->
  <section class="min-h-[60vh] flex items-center justify-center px-6 py-20 bg-[#f0f7f1] text-center">
    <div class="max-w-2xl">
      <h1 class="text-4xl sm:text-5xl font-extrabold mb-4 leading-tight text-[#1C3B20]">
        Report an Animal in Need
      </h1>
      <p class="text-lg sm:text-xl text-[#3a5240]">
        Spotted an injured or distressed animal? Fill in the form below and our rescue team will act swiftly to help.
      </p>
    </div>
  </section>

  <!-- Report Form Section -->
  <section class="bg-white px-6 py-16">
    <div class="max-w-3xl mx-auto">
      <h2 class="text-2xl font-bold text-center mb-10 text-[#1C3B20]">Rescue Report Form</h2>
      <form action="#" method="POST" class="space-y-6 bg-[#f8faf8] p-8 rounded-2xl shadow-md border border-[#d8e5da]">

        <div>
          <label for="name" class="block text-sm font-semibold mb-1 text-[#1C3B20]">Your Name</label>
          <input type="text" id="name" name="name" required placeholder="John Doe" 
                 class="w-full border border-[#c8d8cc] px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#2a7d3e]" />
        </div>

        <div>
          <label for="phone" class="block text-sm font-semibold mb-1 text-[#1C3B20]">Phone Number</label>
          <input type="tel" id="phone" name="phone" required placeholder="+123 456 7890" 
                 class="w-full border border-[#c8d8cc] px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#2a7d3e]" />
        </div>

        <div>
          <label for="location" class="block text-sm font-semibold mb-1 text-[#1C3B20]">Location of the Animal</label>
          <input type="text" id="location" name="location" required placeholder="Street name or nearby landmark" 
                 class="w-full border border-[#c8d8cc] px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#2a7d3e]" />
        </div>

        <div>
          <label for="description" class="block text-sm font-semibold mb-1 text-[#1C3B20]">Description of the Situation</label>
          <textarea id="description" name="description" rows="4" required placeholder="E.g. Injured dog limping near market..." 
                    class="w-full border border-[#c8d8cc] px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#2a7d3e]"></textarea>
        </div>

        <div>
          <label for="image" class="block text-sm font-semibold mb-1 text-[#1C3B20]">Upload Photo (optional)</label>
          <input type="file" id="image" name="image" accept="image/*" 
                 class="block w-full text-sm text-[#1C3B20] border border-[#c8d8cc] rounded-xl cursor-pointer py-2 px-4 bg-white file:border-0 file:bg-[#e0efe2] file:text-[#1C3B20] file:font-semibold file:rounded-lg hover:file:bg-[#d0e9d3]" />
        </div>

        <div class="text-center">
          <button type="submit" 
                  class="bg-[#2a7d3e] text-white text-lg px-8 py-3 rounded-2xl hover:bg-[#1C3B20] transition">
            Submit Report
          </button>
        </div>
      </form>
    </div>
  </section>

  <!-- Info Section -->
  <section class="bg-[#f0f7f1] px-6 py-16">
    <div class="max-w-3xl mx-auto text-center">
      <h3 class="text-xl font-bold mb-4 text-[#1C3B20]">Emergency?</h3>
      <p class="text-[#3a5240]">For urgent rescues, call our 24/7 helpline: <strong class="text-[#2a7d3e]">+123 456 7890</strong></p>
    </div>
  </section>
@endsection