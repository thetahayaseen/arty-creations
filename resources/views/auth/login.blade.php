@extends("layouts.app")

@section("title", "Login")

@section("content")

    <x-form.wrapper>

        <x-form.header> Login </x-form.header>
        <x-form.divider />

        <x-form.input name="email" type="email" label="Your Email" placeholder="johndoe@gmail.com" />
        <x-form.input name="password" type="password" label="Your Password" placeholder="●●●●●●●●●●" />

        <x-form.button> Login </x-form.button>
        <x-form.divider />

        <x-form.helper text="Don't have an account? " link="{{ route('auth.register') }}" linkText="Register" />

    </x-form.wrapper>

@endsection