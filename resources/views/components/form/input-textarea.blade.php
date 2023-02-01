@props(['disabled' => false, 'id' => '', 'label' => false, 'externalClass' => '', 'value' => ''])

<div class= "form-group {{$externalClass}}">
    @if ($label !== false)
        <label for={{$id}}>{{$label}}</label>
    @endif

    <textarea id='{{$id}}' {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control']) !!} rows="5">{{ $value }}</textarea>
    <div class="validate"></div>
</div>
