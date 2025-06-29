@extends('layouts.app')

@section('title', 'Register')

@section('content')


    <form class="max-w-sm mx-auto" method="post">
        @csrf

        <h1 class="mb-5 text-3xl font-bold font-display leading-none tracking-tight text-stone-900">Register</h1>
        <hr class="text-left w-100 h-1 mx-auto mb-5 bg-stone-100 border-0 rounded-sm">

        {{-- Name --}}

        <div class="mt-5">
            <label for="name" class="block mb-2 text-md font-body font-semibold text-stone-900">Your Name</label>
            <input type="text" id="name" name="name" class="bg-stone-50 border border-stone-300 text-stone-900 font-body font-medium text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-1.5 px-3" placeholder="John Doe" value="{{ old('name') }}">
            @error("name")
                <p class="mt-2 text-md text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span>
            @enderror
        </div>

        {{-- Email --}}

        <div class="mt-5">
            <label for="email" class="block mb-2 text-md font-body font-semibold text-stone-900">Your Email</label>
            <input type="email" id="email"  name="email" class="bg-stone-50 border border-stone-300 text-stone-900 font-body font-medium text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-1.5 px-3" placeholder="johndoe@gmail.com" value="{{ old('email') }}">
            @error("email")
                <p class="mt-2 text-md text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span>
            @enderror
        </div>

       {{-- Password --}}
                
        <div class="mt-5">
            <label for="password" class="block mb-2 text-md font-body font-semibold text-stone-900">Your Password</label>
            <input type="password" id="password" name="password" autocomplete="new-password" class="bg-stone-50 border border-stone-300 text-stone-900 font-body font-medium text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-1.5 px-3" placeholder="●●●●●●●●●●" value="{{ old('password') }}">
            @error("password")
                <p class="mt-2 text-md text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span>
            @enderror
        </div>

       <button type="submit" class="mt-7 w-full text-white bg-stone-600 hover:bg-stone-700 focus:ring-4 focus:outline-none focus:ring-stone-400 rounded-lg text-lg px-4 py-2 text-center font-display font-semibold transition duration-200">
           Register
       </button>

         <hr class="mt-6 text-left w-100 h-1 mx-auto bg-stone-100 border-0 rounded-sm">
         
         <div class="mt-4">
             <p class="font-body font-medium text-lg text-stone-600 transition-colors duration-200">
                 Already have an account?
                 <a href="{{ route('auth.login') }}" class="font-semibold text-stone-700 hover:text-stone-800">Login</a>
             </p>
         </div>

    </form>


@endsection


