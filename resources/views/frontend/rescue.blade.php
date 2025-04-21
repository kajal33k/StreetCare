@extends('layout.main')
@section('content')
  <!-- Hero Section -->
  <section class="min-h-[60vh] flex items-center justify-center px-6 py-20 bg-[#fff3ef] text-center">
    <div class="max-w-2xl">
      <h1 class="text-4xl sm:text-5xl font-extrabold mb-4 leading-tight">
        Report an Animal in Need
      </h1>
      <p class="text-lg sm:text-xl text-[#5e3c50]">
        Spotted an injured or distressed animal? Fill in the form below and our rescue team will act swiftly to help.
      </p>
    </div>
  </section>

  <!-- Report Form Section -->
  <section class="bg-white px-6 py-16">
    <div class="max-w-3xl mx-auto">
      <h2 class="text-2xl font-bold text-center mb-10">Rescue Report Form</h2>
      <form action="#" method="POST" class="space-y-6 bg-[#fff9f7] p-8 rounded-2xl shadow-md border border-[#ecdede]">

        <div>
          <label for="name" class="block text-sm font-semibold mb-1">Your Name</label>
          <input type="text" id="name" name="name" required placeholder="John Doe" class="w-full border border-[#e0cccc] px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#44223C]" />
        </div>

        <div>
          <label for="phone" class="block text-sm font-semibold mb-1">Phone Number</label>
          <input type="tel" id="phone" name="phone" required placeholder="+123 456 7890" class="w-full border border-[#e0cccc] px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#44223C]" />
        </div>

        <div>
          <label for="location" class="block text-sm font-semibold mb-1">Location of the Animal</label>
          <input type="text" id="location" name="location" required placeholder="Street name or nearby landmark" class="w-full border border-[#e0cccc] px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#44223C]" />
        </div>

        <div>
          <label for="description" class="block text-sm font-semibold mb-1">Description of the Situation</label>
          <textarea id="description" name="description" rows="4" required placeholder="E.g. Injured dog limping near market..." class="w-full border border-[#e0cccc] px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#44223C]"></textarea>
        </div>

        <div>
          <label for="image" class="block text-sm font-semibold mb-1">Upload Photo (optional)</label>
          <input type="file" id="image" name="image" accept="image/*" class="block w-full text-sm text-[#44223C] border border-[#e0cccc] rounded-xl cursor-pointer py-2 px-4 bg-white file:border-0 file:bg-[#f4e2e2] file:text-[#44223C] file:font-semibold file:rounded-lg hover:file:bg-[#edd7d7]" />
        </div>

        <div class="text-center">
          <button type="submit" class="bg-[#44223C] text-white text-lg px-8 py-3 rounded-2xl hover:bg-[#5e2c51] transition">
            Submit Report
          </button>
        </div>
      </form>
    </div>
  </section>

  <!-- Info Section -->
  <section class="bg-[#fdf1ed] px-6 py-16">
    <div class="max-w-3xl mx-auto text-center">
      <h3 class="text-xl font-bold mb-4">Emergency?</h3>
      <p class="text-[#5e3c50]">For urgent rescues, call our 24/7 helpline: <strong>+123 456 7890</strong></p>
    </div>
  </section>

@endsection
