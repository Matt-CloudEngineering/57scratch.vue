
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
    	@php
    		$path = url('images/trev_avatar.jpg');
    	@endphp
      <img src="{{ $path }}" width="150" height="150">
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span> 
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
    	<a class="navbar-item" href="/home">Home</a>
    	<a class="navbar-item" href="/about">About</a>


      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Projects
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item" href='/projects/create'>
            Create
          </a>
          <a class="navbar-item" href='/projects'>
            List
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            Report an issue
          </a>
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a> | 
                    <a href="{{ url('/logout') }}">Logout</a>
                @else
                  <div class="buttons">
                    <a href="{{ route('register') }}"" class="button is-primary">
                      <strong>Sign up</strong>
                    </a>
                    @if (Route::has('register'))
                    <a href="{{ route('login') }}" class="button is-light">
                      Log in
                    </a>
                  </div>
                    @endif
                @endauth
            </div>
        @endif

      </div>
    </div>
  </div>
</nav>