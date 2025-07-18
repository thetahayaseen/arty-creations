@extends("layouts.app")

@section("title", "Artist Enrollment Message")

@section("content")

    <div class="flex justify-center px-4 sm:px-6 lg:px-8">

        <div class="mt-5 w-full max-w-4xl py-8 px-4 m-4 rounded-lg border-4 border-stone-300">
            
            <h1 class="mt-6 text-2xl mobile-form-sm:text-3xl font-bold font-display leading-none tracking-tight text-stone-700">
                Artist Enrollment Message
            </h1>
            
            <h2 class="mt-3 text-xl mobile-form-sm:text-2xl font-semibold font-display leading-none tracking-tight text-stone-600">
                Your enrollment request is {{ $status }}.
            </h2>

            <p class="mt-7 font-body font-medium text-base mobile-form-sm:text-lg text-stone-600 transition-colors duration-200">
                {{ $message }}
            </p>
            
        </div>

    </div>

@endsection