@extends('layouts.infohub')

@section('title', 'NARO Infohub')

@section('content')
<section class="max-w-6xl mx-auto px-6 py-10 mt-6 rounded-xl" style="background:radial-gradient(#d7dfea 1px, transparent 1px);background-size:28px 28px;">
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
</section>
@endsection
