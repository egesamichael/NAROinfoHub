@extends('layouts.infohub')

@section('title', 'Anti-Tick Vaccine | NARO Infohub')

@section('content')
<section class="max-w-6xl mx-auto px-6 py-12">
    <style>
    .infohub-link {
        display:flex;
        align-items:center;
        justify-content:space-between;
        width:100%;
        padding:1rem 1.5rem;
        margin:1rem;
        color:#fff;
        background:#0E5DAA;
        border-radius:0;
        border-bottom:4px solid #0B497E;
        transition:background 0.2s ease;
        text-decoration:none;
    }
    .infohub-link:hover {
        background:#0B497E;
        color:#fff;
        text-decoration:none;
    }
    </style>
    <div class="mb-8">
        <h1 class="text-3xl font-semibold text-gray-900 mb-3">Anti-Tick Vaccine</h1>
        <p class="text-gray-600">Discover resources tailored for veterinarians, farmers, and partners supporting the rollout of the NARO anti-tick vaccine.</p>
    </div>

    <div class="grid gap-10 md:grid-cols-2 md:items-center">
        <div>
            <img src="{{ asset('images/narovac1.png') }}" alt="NARO Anti-tick vaccine" class="w-full h-64 sm:h-80 md:h-[420px] rounded-xl object-cover shadow-lg" loading="lazy">
        </div>

        <div class="space-y-4">
            <a href="{{ route('anti-tick-vaccine.vets') }}" class="infohub-link">
                <span class="text-lg font-semibold">Vets</span>
                <span class="text-2xl font-bold">→</span>
            </a>
            <a href="{{ route('anti-tick-vaccine.farmers') }}" class="infohub-link">
                <span class="text-lg font-semibold">Farmers</span>
                <span class="text-2xl font-bold">→</span>
            </a>
            <a href="{{ route('anti-tick-vaccine.publications') }}" class="infohub-link">
                <span class="text-lg font-semibold">Publications</span>
                <span class="text-2xl font-bold">→</span>
            </a>
            <a href="{{ route('anti-tick-vaccine.faqs') }}" class="infohub-link">
                <span class="text-lg font-semibold">FAQs</span>
                <span class="text-2xl font-bold">→</span>
            </a>
        </div>
    </div>
</section>
@endsection
