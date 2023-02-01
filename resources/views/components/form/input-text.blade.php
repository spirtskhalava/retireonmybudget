@props(['disabled' => false, 'id' => false, 'label' => false, 'externalClass' => ''])

<div class= "form-group {{$externalClass}}">
    @if ($label !== false)
        <label for={{$id}}>{{$label}}</label>
    @endif

    <input @if ($id !== false) id='{{$id}}'@endif {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control']) !!} />
    <div class="validate"></div>
</div>
