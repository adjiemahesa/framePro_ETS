@extends('layouts.adminnav')

@section('content')
<div class="min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
        <form class="space-y-8 divide-y divide-gray-200" method="POST" action="{{route('book.store')}}" enctype="multipart/form-data">
            <div>
                @csrf
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Add Book</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Please enter the information here.</p>
                </div>

                <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="user-name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Name</label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input type="text" id="user-name" placeholder="Name" name="name" class="appearance-none block w-3/4 px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="penerbit" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Penerbit</label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input type="text" id="penerbit" placeholder="Penerbit" name="penerbit" class="appearance-none block w-3/4 px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="pengarang" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Pengarang</label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input type="text" id="pengarang" placeholder="Pengarang" name="pengarang" class="appearance-none block w-3/4 px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="image" class="block text-sm font-medium text-gray-700"> Image </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input type="file" class="custom-file-input" id="file" required name="file">
                        </div>
                    </div>

                    <div class="pt-10">
                        <div class="flex justify-center">
                            <button type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <a href="{{url('home')}}">Kembali</a>
                            </button>
                            <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add Book</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection