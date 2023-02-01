@extends('layouts.default')

@section('content')
    <div class="main-spacer">&nbsp;</div>
    <x-form.section-container>
        <div class="row mt-7 mx-auto">
            <div class="mb-4 text-sm text-gray-600">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </div>
        </div>

        <div class="row mt-5 col-md-5 mx-auto">

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <x-form.form class="non-ajax" method="POST" action="{{ route('password.confirm') }}">

                <!-- Password -->

                <x-form.input-password placeholder="" label="Password" />

                {{-- <div>
                    <x-label for="password" :value="__('Password')" />

                    <x-input id="password" class="block mt-1 w-full"z
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
                </div> --}}

                <x-button>
                    {{ __('Confirm') }}
                </x-button>
            </form>
        </div>
    </x-form.section-container>
@stop
