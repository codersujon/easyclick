{{-- <nav class="navbar navbar-expand-lg main-navbar" style="background: #E8A629 !important; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
  
  <form class="form-inline mr-auto">
      <li class="nav-item">
          <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg" style="color: white;">
              <i class="fas fa-bars"></i>
          </a>
      </li>
  </form>
  <ul class="navbar-nav navbar-right">
      <li class="dropdown">
          <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user" style="color: white;">
              <img alt="image" src="{{asset(auth()->user()->image)}}" class="rounded-circle mr-1" style="width: 40px; height: 40px; object-fit: cover; border: 2px solid white;">
              <div class="d-sm-none d-lg-inline-block">Hi, {{auth()->user()->name}}</div>
          </a>
          <div class="dropdown-menu dropdown-menu-right" style="border-radius: 10px;">
              <a href="{{route('admin.profile')}}" class="dropdown-item has-icon">
                  <i class="far fa-user" style="color: #E8A629;"></i> Profile
              </a>
              <a href="{{route('admin.settings.index')}}" class="dropdown-item has-icon">
                  <i class="fas fa-cog" style="color: #E8A629;"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <!-- Authentication -->
              <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();" class="dropdown-item has-icon text-danger">
                      <i class="fas fa-sign-out-alt"></i> Logout
                  </a>
              </form>
          </div>
      </li>
  </ul>
</nav> --}}



<style>
    .navbar-nav .dropdown-menu {
      background: white;
    }
  
    .navbar-nav .dropdown-item {
      transition: background 0.3s, color 0.3s;
    }
  
    .navbar-nav .dropdown-item:hover {
      background: #2C3E50;
      color: white;
    }
  
    .navbar-nav .dropdown-item .has-icon i {
      transition: color 0.3s;
    }
  
    .navbar-nav .dropdown-item:hover .has-icon i {
      color: white;
    }
  </style>
















<nav class="navbar navbar-expand-lg main-navbar" style="background: #2C3E50 !important; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 10px 20px;">
    <form class="form-inline mr-auto">
      <li class="nav-item">
        <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg" style="color: white; font-size: 20px;">
          <i class="fas fa-bars"></i>
        </a>
      </li>
    </form>
    <ul class="navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user" style="color: white;">
          <img alt="image" src="{{ asset(auth()->user()->image) }}" class="rounded-circle mr-1" style="width: 40px; height: 40px; object-fit: cover; border: 2px solid white;">
          <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->name }}</div>
        </a>
        <div class="dropdown-menu dropdown-menu-right" style="border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
          <a href="{{ route('admin.profile') }}" class="dropdown-item has-icon">
            <i class="far fa-user" style="color: #E8A629; margin-right: 10px;"></i> Profile
          </a>
          <a href="{{ route('admin.settings.index') }}" class="dropdown-item has-icon">
            <i class="fas fa-cog" style="color: #E8A629; margin-right: 10px;"></i> Settings
          </a>
          <div class="dropdown-divider"></div>
          <!-- Authentication -->
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="dropdown-item has-icon text-danger">
              <i class="fas fa-sign-out-alt" style="margin-right: 10px;"></i> Logout
            </a>
          </form>
        </div>
      </li>
    </ul>
  </nav>