

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('/storage/logo/logo.png') }}" alt="" width="50" height="50" class="d-inline-block align-text-top">
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item p-2">
            <a class="nav-link {{ (request()->routeIs('home')) ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Dashboard</a>
          </li>
          <li class="nav-item p-2">
              <a class="nav-link {{ (request()->routeIs('cart')) ? 'active' : '' }}" href="{{ route('cart') }}">Cart</a>
          </li>
          @if (session()->has('user_session'))
            @if(Auth::user()->level == 'admin')
              <li class="nav-item dropdown p-2">
                <a class="nav-link dropdown-toggle {{ (request()->routeIs('gameList','addGame','updateGame','categoryList','addCategory','updateCategory')) ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Admin
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item {{ (request()->routeIs('gameList','addGame','updateGame')) ? 'active' : '' }}" href="{{ route('gameList') }}">Manage Game</a></li>
                  <li><a class="dropdown-item {{ (request()->routeIs('categoryList','addCategory','updateCategory')) ? 'active' : '' }}" href="{{ route('categoryList') }}">Manage Category</a></li>
                </ul>
              </li>
            @endif
          @endif
          
        </ul>

        @guest
          <li class="d-flex nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="profile" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Guest
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
            </ul>
          </li>
        @endguest
        
        @if (session()->has('user_session'))
          <li class="d-flex nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="profile" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                  @if(Auth::user()->level == 'admin' || Auth::user()->level == 'member')
                    <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                  @endif
              </ul>
          </li>
        @endif
      </div>
    </div>
  </nav>