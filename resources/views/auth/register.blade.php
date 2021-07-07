@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name:</label>
                    <input type="text" name="name" id="name"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror"
                        placeholder="Your name" value="{{ old('name') }}">
                </div>

                @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
                <div class="mb-4">
                    <label for="username" class="sr-only">Username:</label>
                    <input type="text" name="username" id="username" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror"
                        placeholder="Username" value="{{ old('username') }}">
                </div>
                @error('username')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
                <div class="mb-4">
                    <label for="email" class="sr-only">Email:</label>
                    <input type="email" name="email" id="email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror"
                        placeholder="Your email" value="{{ old('email') }}">
                </div>
                @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
                <div class="mb-4">
                    <label for="password" class="sr-only">Password:</label>
                    <input type="password" name="password" id="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror"
                        placeholder="Choose a password">
                </div>
                @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
                <div class="mb-4">
                    <label for="password" class="sr-only">Password again</label>
                    <input type="password" name="password_confirmation" id="password"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password_confirmation') border-red-500 @enderror" placeholder="Repeat your password">
                </div>
                @error('password_confirmation')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
                <div>
                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-3 rounded font=medium w-full">Register</button>
                </div>
            </form>
        </div>
    </div>

@endsection
