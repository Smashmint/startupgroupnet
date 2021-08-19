@extends('app')

@section('title', 'Contact')

@section('content')
<section class="relative">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 relative">
        <div class="pt-32 pb-12 md:pt-40 md:pb-20">
            
            <!-- Page header -->
            <div class="max-w-3xl mx-auto text-center pb-12 md:pb-16">
                <h1 class="h1 mb-8 text-4xl leading-10 md:text-5xl md:leading-5 font-extrabold tracking-tight" data-aos="fade-up">Want to say hello?</h1>
                <p class="text-xl text-gray-400" data-aos="fade-up" data-aos-delay="200">Drop us a line and we will get back to you shortly.</p>
            </div>

            <!-- Contact form -->
            <form class="max-w-xl mx-auto" method="POST" target="{{ route('contact.post') }}">
                @csrf()
                <div class="flex flex-wrap -mx-3 mb-4">
                    <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                        <label class="block text-gray-300 text-sm font-medium mb-1" for="first-name">First Name <span class="text-red-600">*</span></label>
                        <input id="first_name" type="text" class="form-input w-full text-gray-300 bg-transparent border border-gray-700 focus:border-gray-500 @if($errors->has('first_name')) border-red-500 focus:border-red-500 @endif" placeholder="Enter your first name" required />
                        @if($errors->has('first_name'))<p class="text-red-500 text-sm mt-2">{{ $errors->first('first_name') }}</p>@endif
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block text-gray-300 text-sm font-medium mb-1" for="last-name">Last Name <span class="text-red-600">*</span></label>
                        <input id="last_name" type="text" class="form-input w-full text-gray-300 bg-transparent border border-gray-700 focus:border-gray-500" placeholder="Enter your last name" required />
                        @if($errors->has('last_name'))<p class="text-red-500 text-sm mt-2">{{ $errors->first('last_name') }}</p>@endif
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-4">
                    <div class="w-full px-3">
                        <label class="block text-gray-300 text-sm font-medium mb-1" for="email">Email <span class="text-red-600">*</span></label>
                        <input id="email" type="email" class="form-input w-full text-gray-300 bg-transparent border border-gray-700 focus:border-gray-500" placeholder="Enter your email address" required />
                        @if($errors->has('email'))<p class="text-red-500 text-sm mt-2">{{ $errors->first('email') }}</p>@endif
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-4">
                    <div class="w-full px-3">
                        <label class="block text-gray-300 text-sm font-medium mb-1" for="subject">Subject <span class="text-red-600">*</span></label>
                        <input id="subject" type="text" class="form-input w-full text-gray-300 bg-transparent border border-gray-700 focus:border-gray-500" placeholder="How can we help?" required />
                        @if($errors->has('subject'))<p class="text-red-500 text-sm mt-2">{{ $errors->first('subject') }}</p>@endif
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-4">
                    <div class="w-full px-3">
                        <label class="block text-gray-300 text-sm font-medium mb-1" for="message">Message</label>
                        <textarea id="message" rows="4" class="form-textarea w-full text-gray-300 bg-transparent border border-gray-700 focus:border-gray-500" placeholder="Write your message"></textarea>
                        @if($errors->has('message'))<p class="text-red-500 text-sm mt-2">{{ $errors->first('message') }}</p>@endif
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mt-6">
                    <div class="w-full px-3">
                        <button class="btn px-8 py-3 font-medium inline-flex items-center justify-center border border-transparent rounded-sm leading-snug transition duration-150 ease-in-out text-white bg-purple-600 hover:bg-purple-700 w-full">Send</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</section>
@endsection