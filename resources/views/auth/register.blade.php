@extends('layouts.default')

@section('extra_css')
    <link href="/assets/css/register_edit.css" rel="stylesheet">
@stop

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <x-breadcrumb>
        @if (isset($user))
            {{ 'Your profile, ' . $user->username }}
        @else
            {{ __('Register') }}
        @endif
    </x-breadcrumb><!-- End Breadcrumbs -->
    <x-form.section-container>
        <!-- Validation Errors -->
        <div class="row mt-5 col-lg-8 mx-auto">
            <x-form.form method="POST" laravelMethod="{{ isset($user) ? 'PUT' : '' }}"  action="{{ isset($user) ? route('users.update', $user->id) : route('register') }}" class="non-ajax" enctype="multipart/form-data">

                <!-- Privacy and Terms -->
                <strong>Please answer all the questions below. It will help you to get the best search results. <a class="badge badge-info" style="cursor: pointer; background-color: #aaa;" data-bs-toggle="modal" data-bs-target="#help-modal"> Need help with registration please click here </a></strong>
                

                <!-- Profile Image -->
                <div class= "form-group mt-3">
                    <p style="margin-bottom: 8px;">Please upload your own picture or any picture that showcases your personality (Max 2MB)</p>
                    <label for="user-avatar-upload" style="cursor: pointer; width:fit-content">
                        <div class="profile-full image-area">
                            <img id="user-avatar-img" src={{ isset($user) ? asset($user->picture_profile) : "/assets/img/user_profile_img.png" }} alt="profile_image" class="img-thumbnail">
                        </div>
                    </label>
                    @if (!isset($user))
                        <input type="file" name="picture_profile" class="form-control-file btn" id="user-avatar-upload" accept="image/.jpg,.jpeg,.png,.gif" ' data-msg="Upload an image">
                    @else
                        <input type="file" name="picture_profile" class="form-control-file btn" id="user-avatar-upload" accept="image/.jpg,.jpeg,.png,.gif">
                    @endif
                    <div class="validate"></div>
                </div>

                <!-- Username -->
                @if (!isset($user))
                    <x-form.input-text externalClass='mt-3' label="Choose a name you like to be known in the community (required)" id="username" name="username" value="{{ old('username', '') }}" autofocus type="text" data-rule="required" data-msg="Enter your username"/>
                @endif

                <x-form.input-text externalClass='mt-3' class="date" name="dob" placeholder="" label="Date of Birth(Required) Type in this format MM-DD-YYYY" value="{{ old('dob', $user->dob ?? '') }}" data-rule="required"  data-msg="Enter your date of birth"/>

                <!-- Email Address -->
                <x-form.input-email externalClass='mt-3' placeholder="" label="Email (required)" value="{{ old('email', $user->email ?? '') }}"/>

                <!-- Home City, where you live -->
                <x-form.input-text externalClass='mt-3' id="city-home-numbeo" placeholder="" label="In which city do you live now?" value="{{ old('city_home') }}" data-msg="Type and pick your home City"/>
                <input type="hidden" name="city_home_numbeo" id="city-home-numbeo-id" value="{{ old('city_home_numbeo') }}">
                
                <!-- Destination cities -->
                <div class= "form-group mt-3" >
                    <label for='destination-cities'>Destination city you like to move or retire?</label>
                    <select class="select-multiple form-select" id="destination-cities" name="destinationCities[]" multiple style="height: 44px;" data-msg="Type and pick at least a destination city">
                        @if (old('destinationCities'))
                            @foreach (old('destinationCities') as $destinationCity)
                                <option value="{{$destinationCity}}" selected></option>
                            @endforeach
                        @endif
                    </select>
                    <div class="validate"></div>
                </div>

                <!-- Monthly budget -->
                <div class="form-group mt-3">
                    <label for="budget-range">Your monthly budget</label>
                    <select id="budget-range" class="form-control mb-2 mt-2" name="budget_range">
                        <option value="">Select your monthly budget range</option>
                        @foreach ($budgetRanges as $budgetRange)
                            @if ((isset($user) && $user->budget_range_id == $budgetRange->id) || (old('budget_range') == $budgetRange->id))
                                <option value="{{ $budgetRange->id }}" selected>{{ $budgetRange->range }}</option>
                            @else
                                <option value="{{ $budgetRange->id }}">{{ $budgetRange->range }}</option>
                            @endif
                        @endforeach
                    </select>
                    <div class="validate"></div>
                </div>

                <!-- Gender -->
                <div class="form-group mt-3">
                    <label for="gender">Your gender?</label>
                    <select id="gender" class="form-control mb-2 mt-2" name="gender">
                        @foreach ($genders as $gender)
                            @if ((isset($user) && $user->gender_id == $gender->id) || (old('gender') == $gender->id))
                                <option value="{{ $gender->id }}" selected>{{ $gender->name }}</option>
                            @else
                                <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    <div class="validate"></div>
                </div>

                <!-- Hobbies -->
                <div class= "form-group mt-3" >
                    <label for='hobbies'>Search and select your hobbies or interests (Up to 10)</label>
                    <select class="select-multiple form-select" id="hobbies" name="hobbies[]" multiple style="height: 44px;" data-msg="Type and pick at least a hobby">
                        @if (old('hobbies'))
                            @foreach (old('hobbies') as $hobby)
                                <option value="{{$hobby}}" selected></option>
                            @endforeach
                        @endif
                    </select>
                    <div class="validate"></div>
                </div>

                <!-- Languages -->
                <div class= "form-group mt-3" >
                    <label for='languages'>Search languages you speak</label>
                    <select class="select-multiple form-select" id="languages" name="languages[]" multiple style="height: 44px;" data-msg="Type and pick at least a language">
                        @if (old('languages'))
                            @foreach (old('languages') as $language)
                                <option value="{{$language}}" selected></option>
                                @endforeach
                        @endif
                    </select>
                    <div class="validate"></div>
                </div>

                <!-- Plans -->
                @if (!isset($user))
                    <div class="form-group mt-3">
                        <label class="mb-2">Choose the subscription plan to start a new cool life (Required)</label>
                        @foreach ($plans as $plan)
                            <x-form.input-radio label="{{$plan->name}}: {{$plan->description}}{{ $plan->monthlyAmount == 0 ? ' (no credit card required)' : ''}}." name="plan_price" value="{{$plan->price_id}}" class="{{ $plan->monthlyAmount == 0 ? 'free-plan-checkbox' : 'paid-plan-checkbox'}}" checked='{{ $loop->first }}'/>
                        @endforeach

                        {{-- Stripe element --}}
                        <div id="stripe-card-elements" class="card">
                            <div class="card-body">
                                <x-form.input-text id="card-holder-name" type="text" placeholder="Card name (required)"/>
                                <div class="form-group sr-combo-inputs-row">
                                    <!-- Stripe Elements Placeholder -->
                                    <div class="sr-input sr-card-element" id="card-element"></div>
                                </div>
                                <div id="card-errors" class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none">
                                    <strong></strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

                                <button type="button" id="card-button" class="btn btn-secondary disabled" data-secret="{{ $intent->client_secret }}">
                                    <span id="spinning-validate" class="spinner-border spinner-border-sm" role="status" aria-hidden="true" style="display:none;"></span>
                                    Validate Card
                                </button>
                                <div id="validate-card-warning" class="validate" style="display: block;">In order to register you need to validate your card</div>
                                <input type="hidden" name="paymentMethod" id="payment-method">
                                <input id="coupon" name="stripePromotionCode" class="form-control" type="text" placeholder="Do you have a coupon? Enter coupon code here">
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Receive emails -->
                <div class="form-group mt-3">
                    <label class="mb-2">Do you like to receive emails with discounts, gifts, updates and news from our community?</label>
                    <div class="form-check form-check-inline">
                        <input id='radio-button-receive-emails-yes' name="receive_emails" class="form-check-input" type="radio" @if (old('receive_emails',$user->receive_emails ?? 1) == 1) checked @endif value="1">
                        <label class="form-check-label" for=radio-button-receive-emails-yes>
                            Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input id='radio-button-receive-emails-no' name="receive_emails" class="form-check-input" type="radio" @if (old('receive_emails',$user->receive_emails ?? 1) == 0) checked @endif value="0">
                        <label class="form-check-label" for=radio-button-receive-emails-no>
                            No
                        </label>
                    </div>
                </div>

                <!-- Info -->
                <x-form.input-textarea externalClass='mt-3' label="Tell a little bit about yourself ( what do you like us and other users to know about you )" id="info" name="info" value="{{ old('info', $user->info ?? '') }}" />

                <!-- Privacy and Terms -->
                @if (!isset($user))
                    <div class="form-group mt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="terms-use-privacy-agreement" id="terms-use-privacy-agreement" data-rule="checked" data-msg="In order to register you need to agree the terms of use and privacy policy">
                            <label class="form-check-label" for="terms-use-privacy-agreement">
                                By registering at retireonmybudget.com you agree on <a href="/terms-use">terms of use</a> and our <a href="/privacy-policy">privacy</a> statements
                            </label>
                            <div class="validate"></div>
                        </div>
                    </div>
                @endif

                <!-- Password -->
                <x-form.input-password externalClass='mt-3' placeholder="" label="{{ isset($user) ? 'Change Password' : 'Password' }} . Minimun length 8 characters {{ isset($user) ? '' : '(required)' }}" datarule='{{ isset($user) ? false : true }}'/>

                <!-- Confirm Password -->
                <x-form.input-password externalClass='mt-3' placeholder="" label="Confirm {{ isset($user) ? 'new' : '' }} Password {{ isset($user) ? '' : '(required)' }}" name="password_confirmation" id="password_confirmation" datarule='{{ isset($user) ? false : true }}'/>

                <div class="flex items-center justify-end mt-4">
                    @if (isset($user))
                        <a class="ml-4 btn btn-secondary cancel-btn" href="/" role="button">Cancel</a>
                    @else
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                    @endif

                    <button type="submit" id="submit-btn" class="ml-4 btn">
                        @if (isset($user))
                            {{ __('Save changes') }}
                        @else
                            {{ __('Register') }}
                        @endif
                    </button>
                </div>
            </x-form.form>
        </div>
    </x-form.section-container>
    <!-- Modal -->
    <div class="modal" id="help-modal" tabindex="-1">
        <div class="modal-dialog" style="max-width: 1024px;">
            <div class="modal-content">
                <iframe class="help-video" style="height: 600px;" src="https://www.youtube.com/embed/WT52jyHFuZs?enablejsapi=1&version=3&playerapiid=ytplayer"></iframe>
            </div>
        </div>
    </div>
@stop
@section('scripts')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    @if (isset($stripepk))
        <script src="https://js.stripe.com/v3/"></script>
    @endif
    <script defer type="text/javascript">
        @if (isset($stripepk))
            var cardValidated = false;
        @endif
        $(document).ready(function () {
            // displayHobbies();
            displayOneToManyFields();
            displayNumbeoCities();
            @if(isset($stripepk))
                setupAlertCardDismissBehavior();
                setupStripeElements(@json($stripepk));
                freePlanCheckBoxBehavior();
            @endif
            //upload profile picture
            $(function () {
                $('#user-avatar-upload').on('change', function () {
                    readURL(input);
                });
            })
            var input = document.getElementById( 'user-avatar-upload' );

            $('.date').datepicker({ 
                maxDate: "-10Y",
                dateFormat: 'mm-dd-yy',
                showAnim: 'show'
            });  

            var help_modal = new bootstrap.Modal(document.getElementById('help-modal'), {
                keyboard: false
            });
        });

        $("#help-modal").on('hidden.bs.modal', function(){
            $('.help-video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
        });




        function displayOneToManyFields() {
            var dataToDisplay = [];

            //hobbies
            var userHobbies = [];
            @if(isset($userHobbies))
                userHobbies = @json($userHobbies);
            @endif
            var hobbiesForSelect2 = {data:@json($hobbies), element:$('#hobbies'), placeholder:"Search your hobbies and interests (Up to 10)", userData:userHobbies};
            dataToDisplay.push(hobbiesForSelect2);

            //languages
            var userLanguages = [];
            @if(isset($userLanguages))
                userLanguages = @json($userLanguages);
            @endif
            var languagesForSelect2 = {data:@json($languages), element:$('#languages'), placeholder:"", userData:userLanguages};
            dataToDisplay.push(languagesForSelect2);

            //destination cities
            var userDestinationCities = []
            @if(isset($userDestinationCities))
                let preUserDestinationCities =@json($userDestinationCities);
                preUserDestinationCities.forEach(city => {
                    userDestinationCities.push(JSON.stringify(city));
                });
            @endif
            var destinationCities = prepareDestinationCitiesToSelect2(@json($destinationCities))
            var destinationCitiesForSelect2 = {data:destinationCities, element:$('#destination-cities'), placeholder:"Type and pick your destination cities (Up to 10)", userData:userDestinationCities};

            dataToDisplay.push(destinationCitiesForSelect2);

            dataToDisplay.forEach(dataForSelect2 => {
                displayFieldsWithMultiselect2(dataForSelect2);
            });
        }

        function displayFieldsWithMultiselect2(dataForSelect2){
            var data = $.map(dataForSelect2.data, function (obj) {
                obj.text = obj.text || obj.name;

                return obj;
            })
            var prevSelectedData = $(dataForSelect2.element).val();
            $(dataForSelect2.element).empty();
            $(dataForSelect2.element).select2({
                allowClear: true,
                multiple: true,
                minimumInputLength: 2,
                maximumSelectionLength: 10,
                placeholder: {
                    id: "",
                    placeholder: dataForSelect2.placeholder
                },
                data: data,
                width: 'resolve',
                language: {
                    searching: function () {
                        return "Searching...";
                    }
                }
            });
            if(prevSelectedData.length > 0){
                $(dataForSelect2.element).val(prevSelectedData);
                $(dataForSelect2.element).trigger('change');
            }else{
                if(dataForSelect2.userData.length > 0){
                    $(dataForSelect2.element).val(dataForSelect2.userData);
                    $(dataForSelect2.element).trigger('change');
                }
            }
        }

        function prepareDestinationCitiesToSelect2(destinationCities) {
            var citiesFormattedForSelect2 = [];
            destinationCities.forEach(city => {
                let label =  city.name + ", " + city.country;
                citiesFormattedForSelect2.push({'id': JSON.stringify(city),
                'text': label});
            });
            return citiesFormattedForSelect2;
        }

        //city numbeo
        function displayNumbeoCities() {
            var array = @json($home_cities);
            var cities_search = [];

            for (var i = array.length - 1; i >= 0; i--) {
                let cityFields = getCityObjectFromServer(array[i]);
                cities_search.push({ value: cityFields, label: array[i].name + ", " + array[i].country})
            }

            @if(isset($homeCity) && $homeCity['external_db_type'] == "numbeo")
                if( $("#city-home-numbeo").val() == "" && $( "#city-home-numbeo-id" ).val() == "" ){
                    let city = @json($homeCity);
                    let cityFields = getCityObjectFromServer(city);
                    let label =  city.name + ", " + city.country;

                    $( "#city-home-numbeo" ).val(label);
                    $( "#city-home-numbeo-id" ).val(cityFields);
                }
            @endif

            setUpAutocomplete(cities_search);
        }

        function getCityObjectFromServer(cityJson) {
            var cityFormatted = ""
            var preCityFormatted = { "external_db_id": cityJson.external_db_id,
                    "external_db_type": cityJson.external_db_type,
                    "name": cityJson.name,
                    "country": cityJson.country};
            let lat = '';
            if(cityJson.lat_decimal != undefined){
                lat = cityJson.lat_decimal
            }
            preCityFormatted.lat_decimal = lat;

            let lon = '';
            if(cityJson.long_decimal != undefined){
                lon = cityJson.long_decimal
            }
            preCityFormatted.long_decimal = lon;

            cityFormatted = JSON.stringify(preCityFormatted);
            return cityFormatted;
        }

        function setUpAutocomplete(cities_search) {
            $( "#city-home-numbeo" ).autocomplete({
                minLength: 2,
                source: cities_search,
                focus: function( event, ui ) {
                    $( "#city-home-numbeo" ).val( ui.item.label );
                    return false;
                },
                select: function( event, ui ) {
                    $( "#city-home-numbeo" ).val( ui.item.label );
                    $( "#city-home-numbeo-id" ).val( ui.item.value );
                    return false;
                },
                change: function( event, ui ){
                    if($( "#city-home-numbeo" ).val() === ""){
                        $( "#city-home-numbeo-id" ).val("");
                    }
                }
            })
        }

        @if(isset($stripepk))
            //Payment------------------------------------------------
            function setupAlertCardDismissBehavior(){
                $('#card-errors').on('close.bs.alert', function (event) {
                    event.preventDefault();
                    $(this).hide();
                });
            }

            // Set up Stripe.js and Elements to use in checkout form
            function setupStripeElements($stripepk) {
                var stripe = Stripe($stripepk);
                var elements = stripe.elements();
                var style = {
                    base: {
                    color: "#32325d",
                    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                    fontSmoothing: "antialiased",
                    fontSize: "16px",
                    "::placeholder": {
                        color: "#aab7c4"
                    }
                    },
                    invalid: {
                    color: "#fa755a",
                    iconColor: "#fa755a"
                    }
                };

                var cardElement = elements.create("card", { style: style });
                cardElement.mount("#card-element");

                var cardHolderName = document.getElementById('card-holder-name');
                var cardButton = document.getElementById('card-button');
                var clientSecret = cardButton.dataset.secret;

                cardElement.addEventListener('change', (event) => {
                    cardButton.classList.remove("disabled");
                });

                cardHolderName.addEventListener('input', evt => {
                    const value = cardHolderName.value.trim();
                    if (value) {
                        cardButton.classList.remove("disabled");
                    } else {
                        cardButton.classList.add("disabled");
                    }
                });

                cardButton.addEventListener('click', async (e) => {
                    var submitButton = document.getElementById('submit-btn');
                    submitButton.disabled = true;
                    cardButton.classList.add("disabled");
                    $("#spinning-validate").show()
                    var { setupIntent, error } = await stripe.confirmCardSetup(
                        clientSecret, {
                            payment_method: {
                                card: cardElement,
                                billing_details: { name: cardHolderName.value }
                            }
                        }
                    );
                    var flashErrorElement = document.getElementById('card-errors');
                    showStripeResponse(error, flashErrorElement, cardButton);
                    if(!error){
                        submitButton.disabled = false;
                        document.getElementById('payment-method').value = setupIntent.payment_method;
                        document.getElementById('validate-card-warning').style.display = "none";
                        cardValidated = true;
                    }else{
                        submitButton.disabled = true;
                        document.getElementById('payment-method').value = '';
                        document.getElementById('validate-card-warning').style.display = "block";
                        cardValidated = false;
                        cardButton.classList.remove("disabled");
                    }
                });
            }

            function showStripeResponse(error, flashErrorElement, cardButton) {
                var message;
                if (error) {
                    message = error.message;
                }else{
                    message = "The card has been verified successfully";
                }
                $(flashErrorElement).find("strong").text(message);
                setClassFlashMessage(flashErrorElement, error);

                $("#spinning-validate").hide();
                $(flashErrorElement).show();
            }

            function setClassFlashMessage(flashErrorElement, error){
                if(error){
                    $(flashErrorElement).removeClass("alert-success");
                    $(flashErrorElement).addClass("alert-danger");
                }else{
                    $(flashErrorElement).removeClass("alert-danger");
                    $(flashErrorElement).addClass("alert-success");
                }
            }

            function freePlanCheckBoxBehavior(){
                if ($('.free-plan-checkbox').is(':checked')) {
                    $('#stripe-card-elements').hide("fast");
                }
                $('.free-plan-checkbox').on('change', function() {
                    if($(this).is(":checked")) {
                        $('#stripe-card-elements').hide("fast");
                        $('#submit-btn').attr("disabled", false);
                    }
                });
                $('.paid-plan-checkbox').on('change', function() {
                    if($(this).is(":checked")) {
                        $('#stripe-card-elements').show("fast");
                        if(!cardValidated){
                            $('#submit-btn').attr("disabled", true);
                        }
                    }
                });
            }
        @endif

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#user-avatar-img')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@stop
