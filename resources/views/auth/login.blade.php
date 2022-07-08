@extends('layouts.app')
@section('title', 'Login')
@section('content')
    <div class="min-h-screen bg-gray-100 text-gray-800 antialiased px-4 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl mx-auto text-center">
            <span class="text-2xl font-bold">Login to your account</span>
            <form method="POST">
                @csrf
                <div class="relative mt-4 bg-white shadow-md sm:rounded-lg text-left">
                    <div class="h-2 bg-emerald-400 rounded-t-md"></div>
                    <div class="py-6 px-8">
                        <label class="block font-semibold">Email<label>
                        <input type="text" placeholder="Email" name="email"
                            class=" border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md">
                        <label class="block mt-3 font-semibold">Password<label>
                        <input type="password" placeholder="Password" name="password" class=" border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md">

                        @error('message')
                            <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* Error failed to login </p>
                        @enderror

                        <div class="flex justify-between items-baseline">
                            <button class="m-2 bg-emerald-500 text-white py-2 px-6 rounded-lg">Login</button>
                            <button class="m-2 bg-orange-600 text-white py-2 px-6 rounded-lg"><a href="{{ route('register') }}">Register user</a></button>
                            <a href="#" class="text-sm hover:underline">Forgot password?</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
