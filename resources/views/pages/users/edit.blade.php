@extends('layouts.default')

@section('content')

    <!-- ======= Stylesheets ======= -->
    <!-- ======= Breadcrumbs ======= -->
    <x-breadcrumb>
        {{ __('Register') }}
    </x-breadcrumb><!-- End Breadcrumbs -->

    <x-form.section-container>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="row mt-5 col-lg-8 mx-auto">
            <x-form.form method="POST" action="{{ route('register') }}" class="non-ajax">
                <!-- Username -->
                <x-form.input-text externalClass='mt-3' label="Username" id="username" name="username" :value="old('username')" autofocus type="text" data-rule="required" data-msg="Enter your username"/>

                <!-- Firstname -->
                <x-form.input-text externalClass='mt-3' label="First Name" id="firstname" name="firstname" :value="old('firstname')" type="text" data-rule="required" data-msg="Enter your First name"/>

                <!-- Lastname -->
                <x-form.input-text externalClass='mt-3' label="Last Name" id="lastname" name="lastname" :value="old('lastname')" type="text" data-rule="required" data-msg="Enter your Last name"/>

                <!-- Email Address -->
                <x-form.input-email externalClass='mt-3' placeholder="" label="Email" :value="old('email')"/>

                <!-- Phone -->
                <x-form.input-text externalClass='mt-3' label="Phone number" id="phoneNumber" name="phone" :value="old('phone')" type="text"/>

                <!-- Allow contact -->
                <div class="form-group mt-3">
                    <label>Are you interested to connect to other cool people with same interests, hobbies & budgets?</label>
                    <br>
                    <x-form.input-radio-inline label="Yes" id="radioButtonYes" name="connectWithUsers" value="1"/>
                    <x-form.input-radio-inline label="No" id="radioButtonNo" name="connectWithUsers" value="0" checked/>
                </div>

                <!-- Info -->
                <x-form.input-textarea externalClass='mt-3' label="Tell a little bit about yourself ( what do you like us and other users to know about you )" id="info" name="info" :value="old('info')" />

                <!-- Password -->
                <x-form.input-password externalClass='mt-3' placeholder="" label="Password" />

                <!-- Confirm Password -->
                <x-form.input-password externalClass='mt-3' placeholder="" label="Confirm Password"
                    name="password_confirmation"
                    id="password_confirmation"/>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-button class="ml-4">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </x-form.form>
        </div>
    </x-form.section-container>
@stop
@section('scripts')
    <script src="path/to/intlTelInput.js"></script>
    <script>
    var input = document.querySelector("#phoneNumber");
    window.intlTelInput(input, {
        // any initialisation options go here
    });
    </script>

@stop
