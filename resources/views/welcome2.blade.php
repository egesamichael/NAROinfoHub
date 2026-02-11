@extends('layouts.infohub')

@section('title', 'NARO Infohub')

@section('content')
<!-- <section class="max-w-6xl mx-auto px-6 py-10 mt-6 rounded-xl" style="background:radial-gradient(#d7dfea 1px, transparent 1px);background-size:28px 28px;">
    <h2 class="text-3xl font-semibold text-gray-900 mb-3">Resource Library</h2>
    <p class="text-gray-600 mb-8">Explore our curated resources for agricultural services, technologies, and fact sheets.</p>
    <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
        <div class="bg-[#24a747] rounded-xl shadow-lg p-6 border border-[#1f8f3d]" style="background:#19b34a;">
            <h3 class="text-xl font-semibold text-[#1c4faa] mb-3">Services</h3>
            <p class="text-[#0f4d8a] text-sm">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been ntially</p>
        </div>
        <div class="bg-[#24a747] rounded-xl shadow-lg p-6 border border-[#1f8f3d]" style="background:#19b34a;">
            <h3 class="text-xl font-semibold text-[#1c4faa] mb-3">Technologies</h3>
            <p class="text-[#0f4d8a]
        <div class="bg-[#24a747] rounded-xl shadow-lg p-6 border border-[#1f8f3d]" style="background:#19b34a;">
            <h3 class="text-xl font-semibold text-[#1c4faa] mb-3">Fact sheets</h3>
            <p class="text-[#0f4d8a] text-sm">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been ntially</p>
        </div>
    </div>
</section> -->
<section style="max-width: 1200px; margin: 40px auto; padding: 60px 20px; border-radius: 12px; background: radial-gradient(#d1d5db 1px, transparent 1px); background-size: 28px 28px; background-color: #fcfcfc; font-family: sans-serif;">

    <div style="display: flex; flex-direction: row; gap: 24px; align-items: flex-start; justify-content: space-between;">

        <div style="flex: 1; display: flex; flex-direction: column;">
            <h3 style="font-size: 24px; color: #333; margin-bottom: 15px; font-weight: 500;">Livestock Module</h3>
            <img src="{{ asset('images/livestock.jpg') }}" 
                 alt="Livestock" 
                 style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px; margin-bottom: 15px;">
              <p style="font-size: 15px; color: #333; line-height: 1.4; margin: 0;">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been ntially
            </p>
        </div>

        <div style="flex: 1; display: flex; flex-direction: column;">
            <h3 style="font-size: 24px; color: #2c5282; margin-bottom: 15px; font-weight: 500;">Fisheries Module</h3>
            <img src="{{ asset('images/fishereis.webp') }}" 
                 alt="Fisheries" 
                 style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px; margin-bottom: 15px;">
            <p style="font-size: 15px; color: #333; line-height: 1.4; margin: 0;">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been ntially
            </p>
        </div>

          <div style="flex: 1; display: flex; flex-direction: column;">
            <h3 style="font-size: 24px; color: #2c5282; margin-bottom: 15px; font-weight: 500;">Forestry Module</h3>
            <img src="{{ asset('images/forestries.jpg') }}" 
                 alt="Forestry" 
                 style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px; margin-bottom: 15px;">
            <p style="font-size: 15px; color: #333; line-height: 1.4; margin: 0;">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been ntially
            </p>
        </div>


          <div style="flex: 1; display: flex; flex-direction: column;">
            <h3 style="font-size: 24px; color: #2c5282; margin-bottom: 15px; font-weight: 500;">Crops Module</h3>
            <img src="{{ asset('images/crop.png') }}" 
                 alt="Crops" 
                 style="width: 100%; height: 180px; object-fit: cover; border-radius: 8px; margin-bottom: 15px;">
            <p style="font-size: 15px; color: #333; line-height: 1.4; margin: 0;">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been ntially
            </p>
        </div>

       

    </div>
</section>
@endsection
