@extends('layouts.app')

@section('style')

@endsection
@section('content')
<div class="bg-white">
    <div class="mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
        <button onClick="{{url('search-book')}}" type="button"
            class="w-50px bg-gray-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500"><a
                href="{{url('search-book')}}" class="btn btn-primary" role="button">Kembali</a></button>
        <!-- Product -->
        <div class="mt-5 lg:grid lg:grid-rows-1 lg:grid-cols-7 lg:gap-x-8 lg:gap-y-10 xl:gap-x-16">
            <!-- Product image -->
            <div class="lg:row-end-1 lg:col-span-4">
                <div class="aspect-w-4 aspect-h-3 rounded-lg bg-gray-100 overflow-hidden">
                    <img src="/img/<?php echo $data->path ?>" alt="Book Cover" class="object-center object-cover">
                </div>
            </div>

            <!-- Product details -->
            <div
                class="max-w-2xl mx-auto mt-14 sm:mt-16 lg:max-w-none lg:mt-0 lg:row-end-2 lg:row-span-2 lg:col-span-3">
                <div class="flex flex-col-reverse">
                    <div class="mt-4">
                        <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">{{$data->name}}
                        </h1>
                    </div>

                </div>

                <div class="border-t border-gray-200 mt-10 pt-10">
                    <h3 class="text-sm font-medium text-gray-900">Pengarang</h3>
                    <div class="mt-4 prose prose-sm text-gray-500">
                        <p class="mt-4 text-sm text-gray-500">{{$data->pengarang}}</p>
                    </div>
                </div>

                <div class="border-t border-gray-200 mt-10 pt-10">
                    <h3 class="text-sm font-medium text-gray-900">Penerbit</h3>
                    <p class="mt-4 text-sm text-gray-500">{{$data->penerbit}}</p>
                </div>
            </div>

            <div class="w-full max-w-2xl mx-auto mt-16 lg:max-w-none lg:mt-0 lg:col-span-4">
                <div>
                    <div class="border-b border-gray-200">
                        <div class="-mb-px flex space-x-8" aria-orientation="horizontal" role="tablist">
                            <!-- Selected: "border-indigo-600 text-indigo-600", Not Selected: "border-transparent text-gray-700 hover:text-gray-800 hover:border-gray-300" -->
                            <button id="tab-reviews"
                                class="border-transparent text-gray-700 hover:text-gray-800 hover:border-gray-300 whitespace-nowrap py-6 border-b-2 font-medium text-sm"
                                aria-controls="tab-panel-reviews" role="tab" type="button">Reviews</button>
                        </div>
                    </div>

                    <!-- 'Customer Reviews' panel, show/hide based on tab state -->
                    <div id="tab-panel-reviews" class="-mb-10" aria-labelledby="tab-reviews" role="tabpanel"
                        tabindex="0">
                        @if($review!=null)
                        @foreach($review as $re)
                        <div class="flex justify-between text-sm text-gray-500 space-x-4">
                            <div class="py-10">

                                @if($user!=null)
                                @foreach($user as $us)
                                @if($us->id==$re->user_id)
                                <h3 class="font-medium text-gray-900">{{$us->name}}</h3>
                                @endif
                                @endforeach
                                @endif

                                <div class="mt-4 prose prose-sm max-w-none text-gray-500">
                                    <p>{{$re->comments}}</p>
                                </div>

                                <div class="mt-4 prose prose-sm max-w-none text-gray-500">
                                    <p>{{$re->rate}}/5</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection