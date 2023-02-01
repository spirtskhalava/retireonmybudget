  <div class="container d-flex align-items-center">

    <h1 class="logo me-auto">
      <a href="/" class="page-title">
        <span style="color: #86007d;">R</span>
        <span style="color: #0000f9;">e</span>
        <span style="color: #008018;">t</span>
        <span style="color: rgb(212 212 10);">i</span>
        <span style="color: #ffa52c;">r</span>
        <span style="color: #ff0018;">e</span>
        <span class="page-title-second" style="color: #333;">on my <b>budget</b></span>
      </a>
    </h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/subscription-plans">Subscription Plans</a></li>
        <li><a href="/compare">Compare</a></li>
        <li><a href="/cool-people">Cool People Like You</a></li>
        <li><a href="/experts">Local Expert</a></li>
        <li><a href="/about-us">About Us</a></li>
        @if (Auth::guest())
          <li class="drop-down"><a>Login / Register</a>
            <ul>
              <li><a href="/login">Login</a></li>
              <li><a href="/register">Register</a></li>
            </ul>
          </li>
        @else
            <li class="drop-down"><a>Hello {{ Auth::user()->username }}</a>
                <ul>
                  <li><a href="{{ URL::to('users/' . Auth::id()) . '/edit' }}">Edit profile</a></li>
                  <li><a href="{{ route('ManageSubscriptionFromStripe') }}">Manage your subsciption</a></li>
                  <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('header').querySelector('.logout-form').submit();">
                        Logout
                    </a>
                    <form class="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                  </li>
                </ul>
            </li>
        @endif
      </ul>
    </nav><!-- .nav-menu -->
  </div>
