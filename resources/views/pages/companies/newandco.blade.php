@extends('app')

@section('title', 'New & Co')

@section('content')

<section>
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="pb-12 md:pb-20">

            <!-- Section header -->
            <div class="max-w-3xl mx-auto text-center pb-12 md:pb-16">
                <h1 class="h1 mb-8 text-4xl leading-10 md:text-5xl md:leading-5 font-extrabold tracking-tight">New & Co</h1>
                <p class="text-xl text-gray-400">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit laborum — semper quis lectus nulla.</p>
            </div>

            <div class="grid md:grid-cols-3 bg-gray-800 divide-y md:divide-y-0 md:divide-x divide-gray-700 px-6 md:px-0 md:py-8 text-center">
                <!-- 1st item -->
                <div class="py-6 md:py-0 md:px-8">
                    <div class="text-4xl font-bold leading-tight tracking-tighter text-purple-600 mb-2" data-aos="fade-up">70k+</div>
                    <div class="text-lg text-gray-400" data-aos="fade-up" data-aos-delay="200">Total subscribers over 3 newsletters.</div>
                </div>
                <!-- 2nd item -->
                <div class="py-6 md:py-0 md:px-8">
                    <div class="text-4xl font-bold leading-tight tracking-tighter text-purple-600 mb-2" data-aos="fade-up">49%</div>
                    <div class="text-lg text-gray-400" data-aos="fade-up" data-aos-delay="200">Combined open rate from all newsletters.</div>
                </div>
                <!-- 3rd item -->
                <div class="py-6 md:py-0 md:px-8">
                    <div class="text-4xl font-bold leading-tight tracking-tighter text-purple-600 mb-2" data-aos="fade-up">$97K</div>
                    <div class="text-lg text-gray-400" data-aos="fade-up" data-aos-delay="200">Lorem ipsum is placeholder text commonly used.</div>
                </div>
            </div>        
        </div>
    </div>
</section>
@endsection