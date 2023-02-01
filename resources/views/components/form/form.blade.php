@props(['laravelMethod' => ''])

<form {!! $attributes->merge(['class' => 'php-email-form']) !!}>
    @if ($laravelMethod != '')
        @method($laravelMethod)
    @endif
    @csrf
    {{ $slot }}
</form>
