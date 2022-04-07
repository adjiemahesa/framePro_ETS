@extends('layouts.app')

@section('content')
<div class="min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Register your account</h2>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
            <form class="space-y-6" action="{{ route('register') }}" method="POST">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Name') }}</label>
                    <div class="mt-1">
                        <input id="name" name="name" type="text" required autocomplete="email" autofocus required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm form-control @error('name') is-invalid @enderror">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">{{ __('E-Mail Address') }}</label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" required autocomplete="email" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" required autocomplete="current-password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm form-control @error('password') is-invalid @enderror">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <!-- <label for="password-confirm" class="block text-sm font-medium text-gray-700">{{ __('Confirm Password') }}</label> -->
                    <label for="password-confirm" class="col-form-label block text-sm font-medium text-gray-700">{{ __('Confirm Password') }}</label>
                    <div class="mt-1">
                        <input id="password-confirm" type="password" class="form-control appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" name="password_confirmation" required autocomplete="new-password">
                        <!-- <input id="password-confirm" name="password-confirmation" type="password" required autocomplete="new-password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm form-control"> -->
                    </div>
                </div>

                <div>
                    <label for="role" class="block text-sm font-medium text-gray-700 form-check-label">{{ __('Select Role') }}</label>
                    <select id="role" name="role" class="form control block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        <option value=""></option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>

                <div>
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 btn btn-primary">{{ __('Register') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection