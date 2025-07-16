@extends("layouts.app")

@section("title", "Register")

@section("content")

    <x-form.wrapper>

        <x-form.header> Register </x-form.header>
        <x-form.divider />

        <x-form.input name="name" label="Your Name" placeholder="John Doe" />
        <x-form.input name="email" type="email" label="Your Email" placeholder="johndoe@gmail.com" />
        <x-form.input name="password" type="password" label="Your Password" placeholder="●●●●●●●●●●" />

        <x-form.button> Register </x-form.button>
        <x-form.divider />

        <x-form.helper class="text-xl" text="Already have an account? " link="{{ route('auth.login') }}" linkText="Login" />

    </x-form.wrapper>

@endsection


