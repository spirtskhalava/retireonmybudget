@props(['disabled' => false, 'placeholder' => 'Your email', 'label' => false, 'externalClass' => ''])

<div class= "form-group {{$externalClass}}" >
    @if ($label !== false)
        <label for="email">{{$label}}</label>
    @endif

    <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control']) !!} placeholder = '{{  $placeholder }}' type="email" name="email" id="email"  data-rule="email" data-msg="Please enter a valid email" />
    <div class="validate"></div>
</div>
