@props(['disabled' => false, 'id' => false, 'label' => false, 'externalClass' => '', 'checked' => false])

<div class="form-check form-check-inline {{$externalClass}}">
    <input @if ($id !== false) id='{{$id}}'@endif {{ $disabled ? 'disabled' : '' }} {{ $checked ? 'checked' : '' }} {!! $attributes->merge(['class' => 'form-check-input']) !!} type="radio">
    @if ($label !== false)
        <label class="form-check-label" for={{$id}}>
            {{$label}}
        </label>
    @endif
</div>
