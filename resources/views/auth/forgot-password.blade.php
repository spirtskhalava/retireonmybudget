@extends('layouts.default')

@section('content')
    <div class="main-spacer">&nbsp;</div>
    <x-form.section-container>
            <div class="row mt-7 mx-auto">
                <div class="mb-4 text-sm text-gray-600">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>
            </div>
            <div class="row mt-5 col-md-5 mx-auto">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <x-form.form class="non-ajax" method="POST" action="{{ route('password.email') }}">

                    <!-- Email Address -->
                    <x-form.input-email label="Email" :value="old('email')" autofocus/>

                    <button type="submit" clas="btn">
                        {{ __('Email Password Reset Link') }}
                    </button>

                </x-form.form>
            </div>
    </x-form.section-container>
@stop
