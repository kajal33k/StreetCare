@extends('layout.main')
@section('content')
  <!-- Report Form Hero -->
  <section class="text-center py-12 bg-[#f0f7f1]">
    <h2 class="text-4xl font-bold mb-4 text-[#1C3B20]">Report a Street Animal in Need</h2>
    <p class="max-w-xl mx-auto text-lg text-[#3a5240]">Help us respond faster by providing accurate details about the animal's condition and location.</p>
  </section>

  <!-- Report Form Section -->
  <section class="max-w-3xl mx-auto px-6 py-12">
    <form class="space-y-6 bg-white p-8 rounded-2xl shadow-lg border border-[#d8e5da]" enctype="multipart/form-data" method="POST" action="/submit-report">
      <!-- Animal Description -->
      <div>
        <label class="block text-sm font-medium mb-1 text-[#1C3B20]">Animal Type</label>
        <select class="w-full px-4 py-2 border border-[#d0d9d2] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#2a7d3e]">
          <option value="">Select an option</option>
          <option>Dog</option>
          <option>Cat</option>
          <option>Bird</option>
          <option>Other</option>
        </select>
      </div>

      <!-- Condition -->
      <div>
        <label class="block text-sm font-medium mb-1 text-[#1C3B20]">Condition</label>
        <textarea rows="3" placeholder="Describe the condition (injured, sick, abandoned, etc.)"
          class="w-full px-4 py-2 border border-[#d0d9d2] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#2a7d3e]"></textarea>
      </div>

      <!-- Location -->
      <div>
        <label class="block text-sm font-medium mb-1 text-[#1C3B20]">Location (with landmarks)</label>
        <input type="text" placeholder="e.g., Near City Park, behind Sunrise Apartments"
          class="w-full px-4 py-2 border border-[#d0d9d2] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#2a7d3e]" />
      </div>

      <!-- Image Upload -->
      <div>
        <label class="block text-sm font-medium mb-1 text-[#1C3B20]">Upload Photo (optional)</label>
        <input type="file" accept="image/*" class="block w-full text-sm text-[#1C3B20] file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-[#2a7d3e] file:text-white hover:file:bg-[#1C3B20]"/>
        <p class="text-xs text-[#5a6d5f] mt-1">Photos help us assess urgency better.</p>
      </div>

      <!-- Your Info -->
      <div>
        <label class="block text-sm font-medium mb-1 text-[#1C3B20]">Your Name</label>
        <input type="text" class="w-full px-4 py-2 border border-[#d0d9d2] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#2a7d3e]" />
      </div>
      <div>
        <label class="block text-sm font-medium mb-1 text-[#1C3B20]">Contact Number</label>
        <input type="tel" class="w-full px-4 py-2 border border-[#d0d9d2] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#2a7d3e]" />
      </div>

      <!-- Submit Button -->
      <div class="pt-4">
        <button type="submit"
          class="bg-[#2a7d3e] text-white px-6 py-3 rounded-lg text-lg font-medium hover:bg-[#1C3B20] transition w-full sm:w-auto">Submit Report</button>
      </div>
    </form>
  </section>
@endsection