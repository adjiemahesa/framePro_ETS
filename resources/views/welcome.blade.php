@extends('layouts.app')

@section('content')

<body>
    <div class="relative py-16 bg-white overflow-hidden">
        <div class="relative">
          <div class="text-lg max-w-prose mx-auto">
            <h1>
              <span class="block text-base text-center text-indigo-600 font-semibold tracking-wide uppercase">
                Introducing
              </span>
              <span class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                Our Startup
              </span>
            </h1>
            <p class="mt-8 text-xl text-gray-500 leading-8">
            “Libraries were full of ideas – perhaps the most dangerous and powerful of all weapons.” -Sarah J. Maas 
            </p>
          </div>
          <div class="mt-16 prose prose-indigo prose-lg text-gray-500 mx-auto">
            <h1 class='mt-10 text-3xl text-blue-600'>About Our Website</h1 >
            <h2 class='py-2 text-md text-gray-500'>We provide a way to store book list in a digital library so you don't have to think hard.</h2 >

            <figure>
              <img
                class="w-full rounded-lg p-2"
                src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1890&q=80"
                alt=""
                width={1310}
                height={873}
              />
            </figure>
          </div>
        </div>
    </div>
</body>
@endsection