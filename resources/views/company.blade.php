@extends('layouts.app')

@section('content')

<body>
    <div class="relative bg-white py-16 sm:py-24 lg:py-32">
        <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
            <h2 class="text-base font-semibold tracking-wider text-green-700 uppercase">Reading habits</h2>
            <p class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">Book is a window of the world</p>
            <p class="mt-5 max-w-prose mx-auto text-xl text-gray-500">Breview aims to create a one stop solution for those people who need to share and find reviews for a book.</p>
            <div class="mt-12">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8 h-full">
                            <div class="-mt-6">
                                <div>
                                    <span
                                        class="inline-flex items-center justify-center p-3 bg-green-700 rounded-md shadow-lg">
                                        <!-- Heroicon name: outline/cloud-upload -->
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Why</h3>
                                <p class="mt-5 text-base text-gray-500">​​Book reviews are important because they act as a reflection and interaction (be it one way) for the author to truly get a sense of how the community is reacting and embracing their work.</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8 h-full">
                            <div class="-mt-6">
                                <div>
                                    <span
                                        class="inline-flex items-center justify-center p-3 bg-green-700 rounded-md shadow-lg">
                                        <!-- Heroicon name: outline/lock-closed -->
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Who</h3>
                                <p class="mt-5 text-base text-gray-500">Book reviews give books greater visibility and a greater chance of getting found by more readers. On some websites, books that have more book reviews are more likely to be shown to prospective readers and buyers as compared to books with few or no book reviews.</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8 h-full">
                            <div class="-mt-6">
                                <div>
                                    <span
                                        class="inline-flex items-center justify-center p-3 bg-green-700 rounded-md shadow-lg">
                                        <!-- Heroicon name: outline/refresh -->
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">How</h3>
                                <p class="mt-5 text-base text-gray-500">Breview offers a one stop platform for authors and readers to share, give, and take constructive reviews and feedback.</p>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
    
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="relative bg-white pt-16 pb-32 overflow-hidden">
        <div class="relative">
            <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
                <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-16 lg:max-w-none lg:mx-0 lg:px-0">
                    <div>
                        <div>
                            <span class="h-12 w-12 rounded-md flex items-center justify-center bg-green-700">
                                <!-- Heroicon name: outline/inbox -->
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-6">
                            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">Our Mission</h2>
                            <p class="mt-4 text-lg text-gray-500">Our mission is to build a reading habits.</p>
                        </div>
                    </div>
                </div>
                <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-16 lg:max-w-none lg:mx-0 lg:px-0">
                    <div>
                        <div>
                            <span class="h-12 w-12 rounded-md flex items-center justify-center bg-green-700">
                                <!-- Heroicon name: outline/sparkles -->
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                </svg>
                            </span>
                        </div>
                        <div class="mt-6">
                            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">Our Vision</h2>
                            <p class="mt-4 text-lg text-gray-500">Our vision is being a community of constructive review.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection