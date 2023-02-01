@props(['disabled' => false, 'placeholder' => 'Password', 'label' => false, 'id' => 'password', 'externalClass' => '', 'datarule' => true])

<div class= "form-group {{$externalClass}}">
    @if ($label !== false)
        <label for={{$id}}>{{$label}}</label>
    @endif

    <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control']) !!} placeholder = '{{  $placeholder }}' type="password" name="password" id={{$id}} autocomplete="current-password" @if ($datarule != false) data-rule="minlen:8" data-msg="Password must have at least 8 characters" @endif/>
    <div class="validate"></div>
</div>
