@extends('layouts.default')

@section('content')
    <div class="main-spacer">&nbsp;</div>
    <x-form.section-container>

        <div class="row mt-7 mx-auto">
            <div class="mb-4 text-sm text-gray-600">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </div>
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="row mt-7 mx-auto">
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <x-form.form method="POST" class="non-ajax" action="{{ route('verification.send') }}">
                <div>
                    <button type="submit" clas="btn">
                        {{ __('Resend Verification Email') }}
                    </button>
                </div>
            </x-form.form>

            <x-form.form method="POST" action="{{ route('logout') }}" class="non-ajax mt-2">
                <button type="submit" class="btn-secondary">
                    {{ __('Logout') }}
                </button>
            </x-form.form>
        </div>
    </x-form.section-container>
@stop
