@extends('layouts.default')

@section('content')
    <div class="main-spacer">&nbsp;</div>
    <x-form.section-container>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <x-form.form class="non-ajax" method="POST" action="{{ route('password.update') }}">

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <x-form.input-email placeholder="" label="Email" :value="old('email', $request->email)"/>

            <!-- Password -->
            <x-form.input-password placeholder="" label="Password" />

            <!-- Confirm Password -->
            <x-form.input-password placeholder="" label="Confirm Password"
                            name="password_confirmation"
                            id="password_confirmation"/>

            <button type="submit" class="btn">
                {{ __('Reset Password') }}
            </button>

        </x-form.form>
    </x-form.section-container>
@stop
