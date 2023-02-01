@extends('layouts.default')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <x-breadcrumb>
        {{ __('Login') }}
    </x-breadcrumb>
    <!-- End Breadcrumbs -->
    @if (!empty($message))
    <div class="row mt-5 col-md-5 mx-auto">
        <div class="alert alert-danger" role="alert">
        {{ $message }}
        </div>
    </div>
    @endif
    <!-- ======= Login Section ======= -->
    <x-form.section-container>
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="row mt-5 col-md-5 mx-auto">
                <x-form.form action="/login" method="POST" class="non-ajax">

                <!-- Email Address -->
                <x-form.input-email :value="old('email')"/>

                <!-- Password -->
                <x-form.input-password/>

                <!-- Remember Me -->
                <div class="mt-4 form-check">
                    <input class="form-check-input" type="checkbox" value="" id="remember_me" name="remember">
                    <label for="remember_me" class="form-check-label">Remember me</label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>
                    @endif

                    <x-button class="ml-3">
                        {{ __('Login') }}
                    </x-button>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <label>Don't have an account?</label>
                    <a class="btn btn-light mt-2" style="border: 1px solid #eee" href="/register">
                        Create account
                    </a>
                </div>
            </x-form>
        </div>
    </x-form.section-container>
@stop


