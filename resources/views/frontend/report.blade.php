@extends('layout.main')
@section('content')
  <!-- Report Form Hero -->
  <section class="text-center py-12 bg-[#f7f0ea]">
    <h2 class="text-4xl font-bold mb-4">Report a Street Animal in Need</h2>
    <p class="max-w-xl mx-auto text-lg text-[#6e4c5b]">Help us respond faster by providing accurate details about the animal’s condition and location.</p>
  </section>

  <!-- Report Form Section -->
  <section class="max-w-3xl mx-auto px-6 py-12">
    <form class="space-y-6 bg-white p-8 rounded-2xl shadow-lg" enctype="multipart/form-data" method="POST" action="/submit-report">
      <!-- Animal Description -->
      <div>
        <label class="block text-sm font-medium mb-1">Animal Type</label>
        <select class="w-full px-4 py-2 border border-[#ccc] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#a5617b]">
          <option value="">Select an option</option>
          <option>Dog</option>
          <option>Cat</option>
          <option>Bird</option>
          <option>Other</option>
        </select>
      </div>

      <!-- Condition -->
      <div>
        <label class="block text-sm font-medium mb-1">Condition</label>
        <textarea rows="3" placeholder="Describe the condition (injured, sick, abandoned, etc.)"
          class="w-full px-4 py-2 border border-[#ccc] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#a5617b]"></textarea>
      </div>

      <!-- Location -->
      <div>
        <label class="block text-sm font-medium mb-1">Location (with landmarks)</label>
        <input type="text" placeholder="e.g., Near City Park, behind Sunrise Apartments"
          class="w-full px-4 py-2 border border-[#ccc] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#a5617b]" />
      </div>

      <!-- Image Upload -->
      <div>
        <label class="block text-sm font-medium mb-1">Upload Photo (optional)</label>
        <input type="file" accept="image/*" class="block w-full text-sm text-[#44223C] file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-[#a5617b] file:text-white hover:file:bg-[#8c4f69]"/>
        <p class="text-xs text-[#6e4c5b] mt-1">Photos help us assess urgency better.</p>
      </div>

      <!-- Your Info -->
      <div>
        <label class="block text-sm font-medium mb-1">Your Name</label>
        <input type="text" class="w-full px-4 py-2 border border-[#ccc] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#a5617b]" />
      </div>
      <div>
        <label class="block text-sm font-medium mb-1">Contact Number</label>
        <input type="tel" class="w-full px-4 py-2 border border-[#ccc] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#a5617b]" />
      </div>

      <!-- Submit Button -->
      <div class="pt-4">
        <button type="submit"
          class="bg-[#a5617b] text-white px-6 py-3 rounded-lg text-lg font-medium hover:bg-[#8c4f69] transition">Submit Report</button>
      </div>
    </form>
  </section>

 @endsection