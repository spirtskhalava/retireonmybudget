<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   @include('includes.head')
   @yield('extra_css')
</head>
<body>
  <header id="header" class="fixed-top">
    @include('includes.header')
  </header>

  @include('includes.flash-message')

  @yield('content')

  <div id="chat-overlay" class="row"></div>

  <audio id="chat-alert-sound" style="display: none" muted="muted">
      <source src="{{ asset('sound/facebook_chat.mp3') }}" />
  </audio>

  @if (!Auth::guest())
  <input type="hidden" id="current_user" value="{{ \Auth::user()->id }}" />
  @endif

  @include('includes.footer')

  @yield('scripts')
</body>
</html>
