@extends('layouts.app')

@section('content')

<body>
  <div class="bg-gray-50">
    <div class="relative overflow-hidden">

      <div class="relative pt-6 pb-16 sm:pb-24">

        <div class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6">
          <div class="text-center">
            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
              <span class="block">Breview</span>
              <span class="block text-indigo-600 text-3xl">your book review heaven</span>
            </h1>
            <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">We
              provide a way to store book list in a digital library so you don't have to think hard.</p>
          </div>
        </div>
      </div>

      <div class="relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
          <img class="relative rounded-lg shadow-lg"
            src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1890&q=80"
            alt="App screenshot">
        </div>
      </div>
    </div>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <section class="py-12 bg-gray-50 overflow-hidden md:py-20 lg:py-24">
      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <svg
          class="absolute top-full right-full transform translate-x-1/3 -translate-y-1/4 lg:translate-x-1/2 xl:-translate-y-1/2"
          width="404" height="404" fill="none" viewBox="0 0 404 404" role="img" aria-labelledby="svg-workcation">
          <title id="svg-workcation">Breview</title>
          <defs>
            <pattern id="ad119f34-7694-4c31-947f-5c9d249b21f3" x="0" y="0" width="20" height="20"
              patternUnits="userSpaceOnUse">
              <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
            </pattern>
          </defs>
          <rect width="404" height="404" fill="url(#ad119f34-7694-4c31-947f-5c9d249b21f3)" />
        </svg>

        <div class="relative">
          <blockquote class="mt-10">
            <div class="max-w-3xl mx-auto text-center text-2xl leading-9 font-medium text-gray-900">
              <p>&ldquo;Libraries were full of ideas – perhaps the most dangerous and powerful of all weapons.”&rdquo;
              </p>
            </div>
            <footer class="mt-8">
              <div class="md:flex md:items-center md:justify-center">
                <div class="md:flex-shrink-0">
                  <img class="mx-auto h-10 w-10 rounded-full"
                    src="https://images.unsplash.com/photo-1567532939604-b6b5b0db2604?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                    alt="">
                </div>
                <div class="mt-3 text-center md:mt-0 md:ml-4 md:flex md:items-center">
                  <div class="text-base font-medium text-gray-900">Sarah J. Maas</div>

                  <svg class="hidden md:block mx-1 h-5 w-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M11 0h3L9 20H6l5-20z" />
                  </svg>

                  <div class="text-base font-medium text-gray-500">#1 New York Times Bestselling Author</div>
                </div>
              </div>
            </footer>
          </blockquote>
        </div>
      </div>
    </section>

  </div>
</body>
@endsection