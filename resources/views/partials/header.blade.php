<header class="absolute w-full z-30">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="flex items-center justify-between h-20">

            <!-- Site branding -->
            <div class="flex-shrink-0 mr-4">
                <!-- Logo -->
                <a class="block" href="{{ route('home') }}" aria-label="The Startup Group">
                    <svg class="w-8 h-8 fill-current text-purple-600" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                        <path d="M31.952 14.751a260.51 260.51 0 00-4.359-4.407C23.932 6.734 20.16 3.182 16.171 0c1.634.017 3.21.28 4.692.751 3.487 3.114 6.846 6.398 10.163 9.737.493 1.346.811 2.776.926 4.262zm-1.388 7.883c-2.496-2.597-5.051-5.12-7.737-7.471-3.706-3.246-10.693-9.81-15.736-7.418-4.552 2.158-4.717 10.543-4.96 16.238A15.926 15.926 0 010 16C0 9.799 3.528 4.421 8.686 1.766c1.82.593 3.593 1.675 5.038 2.587 6.569 4.14 12.29 9.71 17.792 15.57-.237.94-.557 1.846-.952 2.711zm-4.505 5.81a56.161 56.161 0 00-1.007-.823c-2.574-2.054-6.087-4.805-9.394-4.044-3.022.695-4.264 4.267-4.97 7.52a15.945 15.945 0 01-3.665-1.85c.366-3.242.89-6.675 2.405-9.364 2.315-4.107 6.287-3.072 9.613-1.132 3.36 1.96 6.417 4.572 9.313 7.417a16.097 16.097 0 01-2.295 2.275z" />
                    </svg>
                </a>
            </div>

            <!-- Desktop navigation -->
            <nav class="hidden md:flex md:flex-grow">

                <!-- Desktop menu links -->
                <ul class="flex flex-grow justify-center flex-wrap items-center">
                    <li>
                        <a class="text-gray-300 hover:text-gray-200 px-4 py-2 flex items-center transition duration-150 ease-in-out" href="features.html">Companies</a>
                    </li>
                    <li>
                        <a class="text-gray-300 hover:text-gray-200 px-4 py-2 flex items-center transition duration-150 ease-in-out" href="{{ route('services') }}">Services</a>
                    </li>
                    <li>
                        <a class="text-gray-300 hover:text-gray-200 px-4 py-2 flex items-center transition duration-150 ease-in-out" href="{{ route('about') }}">About</a>
                    </li>
                    <li>
                        <a class="text-gray-300 hover:text-gray-200 px-4 py-2 flex items-center transition duration-150 ease-in-out" href="{{ route('contact') }}">Contact</a>
                    </li>                    
                </ul>

                <!-- Desktop sign in links -->
                <ul class="flex flex-grow justify-end flex-wrap items-center hidden">
                    <li>
                        <a class="font-medium text-purple-600 hover:text-gray-200 px-4 py-3 flex items-center transition duration-150 ease-in-out" href="signin.html">Sign in</a>
                    </li>
                    <li>
                        <a class="btn-sm text-white bg-purple-600 hover:bg-purple-700 ml-3" href="signup.html">Sign up</a>
                    </li>
                </ul>

            </nav>
            
            <!-- Mobile menu -->
            <div class="md:hidden" x-data="{ expanded: false }">

                <!-- Hamburger button -->
                <button
                    class="hamburger"
                    :class="{ 'active': expanded }"
                    @click.stop="expanded = !expanded"
                    aria-controls="mobile-nav"
                    :aria-expanded="expanded"
                >
                    <span class="sr-only">Menu</span>
                    <svg class="w-6 h-6 fill-current text-gray-300 hover:text-gray-200 transition duration-150 ease-in-out" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <rect y="4" width="24" height="2" rx="1" />
                        <rect y="11" width="24" height="2" rx="1" />
                        <rect y="18" width="24" height="2" rx="1" />
                    </svg>
                </button>

                <!-- Mobile navigation -->
                <nav
                    id="mobile-nav"
                    class="absolute top-full z-20 left-0 w-full px-4 sm:px-6 overflow-hidden transition-all duration-300 ease-in-out"
                    x-ref="mobileNav"
                    :style="expanded ? 'max-height: ' + $refs.mobileNav.scrollHeight + 'px; opacity: 1' : 'max-height: 0; opacity: .8'"
                    @click.away="expanded = false"
                    @keydown.escape.window="expanded = false"
                    x-cloak
                >
                    <ul class="bg-gray-800 px-4 py-2">
                        <li>
                            <a class="flex text-gray-300 hover:text-gray-200 py-2" href="features.html">Features</a>
                        </li>
                        <li>
                            <a class="flex text-gray-300 hover:text-gray-200 py-2" href="{{ route('about') }}">About</a>
                        </li>
                        <li>
                            <a class="flex text-gray-300 hover:text-gray-200 py-2" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>