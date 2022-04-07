@extends('layouts.app')

@section('style')

@endsection
@section('content')
<div class="relative py-16 bg-white overflow-hidden">
    <div class="relative">
        <div class="text-lg max-w-prose mx-auto">
            <h1>
                <span
                    class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Book List
                </span>
            </h1>
        </div>
    </div>
    <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
        @foreach ($list_book as $book)
        <div class="group relative" onClick="{{url('/review-book/'.$book->id)}}">
            <div class="w-full h-80 bg-gray-200 rounded-md overflow-hidden group-hover:opacity-75 ">
                <img src="img/<?php echo $book->path ?>" class="object-contain h-full w-full">
            </div>
            <div class="mt-4 flex justify-between">
                <div>
                    <h3 class="text-sm text-gray-700">
                        <a href="{{url('/review-book/'.$book->id)}}">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            {{$book->name}}
                        </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">{{$book->pengarang}}</p>
                </div>
                <p class="text-sm font-medium text-gray-900">{{$book->penerbit}}</p>
            </div>
            <div class="mt-4 w-full text-center p-2 border border-gray-300 hover:border-gray-400">
                <a href="{{url('/review-book/'.$book->id)}}" class="btn btn-primary" role="button">Open</a>
            </div>
        </div>

        @endforeach
    </div>
</div>
@endsection