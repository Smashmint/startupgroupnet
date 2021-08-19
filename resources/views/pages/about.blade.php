@extends('app')

@section('title', 'About')

@section('content')
<section>
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="py-12 md:py-20">

            <!-- Section header -->
            <div class="max-w-3xl mx-auto text-center pb-12 md:pb-20">
                <h2 class="h1 mb-8 text-4xl md:text-5xl leading-5 font-extrabold tracking-tight">Bringing the world's ideas to life</h2>
                <p class="text-xl text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

            <!-- Items -->
            <div class="max-w-3xl mx-auto -my-4 md:-my-6" data-aos-id-timeline>
                <div class="relative py-4 md:py-6 pl-24" data-aos="fade-up" data-aos-delay="200" data-aos-anchor="[data-aos-id-timeline]">
                    <div class="pl-2">
                        <div class="font-architects-daughter text-xl text-purple-600 mb-2">Build up</div>
                        <div class="flex items-center mb-3">
                            <div class="absolute left-0 inline-flex text-sm font-semibold py-1 px-3 text-green-600 bg-green-200 rounded-full">2021</div>
                            <div class="absolute left-0 h-full px-px bg-gray-800 ml-20 self-start transform -translate-x-1/2 translate-y-3" aria-hidden="true"></div>
                            <div class="absolute left-0 w-2 h-2 bg-purple-600 border-4 box-content border-gray-900 rounded-full ml-20 transform -translate-x-1/2" aria-hidden="true"></div>
                            <h4 class="h4">Transitioned to a SaaS business model</h4>
                        </div>
                        <p class="text-lg text-gray-400">Pretium lectus quam id leo. Urna et pharetra pharetra massa massa. Adipiscing enim eu neque aliquam vestibulum morbi blandit cursus risus.</p>
                    </div>
                </div>

                <div class="relative py-4 md:py-6 pl-24" data-aos="fade-up" data-aos-anchor="[data-aos-id-timeline]">
                    <div class="pl-2">
                        <div class="font-architects-daughter text-xl text-purple-600 mb-2">The seed</div>
                        <div class="flex items-center mb-3">
                            <div class="absolute left-0 inline-flex text-sm font-semibold py-1 px-3 text-green-600 bg-green-200 rounded-full">2020</div>
                            <div class="absolute left-0 w-2 h-2 bg-purple-600 border-4 box-content border-gray-900 rounded-full ml-20 transform -translate-x-1/2" aria-hidden="true"></div>
                            <h4 class="h4">The Startup Group was founded in The Netherlands</h4>
                        </div>
                        <p class="text-lg text-gray-400">Pretium lectus quam id leo. Urna et pharetra pharetra massa massa. Adipiscing enim eu neque aliquam vestibulum morbi blandit cursus risus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection