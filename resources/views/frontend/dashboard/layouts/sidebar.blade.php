<style>
      .dashboard_sidebar {
        background-color: #006400; /* Deep green */
        color: white;
        padding: 15px;
        border-radiu`s: 5px;
    }

    .dashboard_sidebar .close_icon {
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
        margin-bottom: 20px;
    }
    .dashboard_sidebar .dash_logo {
        display: block;
        margin-bottom: 30px;
    }
    .dashboard_sidebar .dashboard_link {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .dashboard_sidebar .dashboard_link li {
        margin-bottom: 15px;
    }

    .dashboard_sidebar .dashboard_link a {
        color: white;
        text-decoration: none;
        display: flex;
        align-items: center;
        padding: 10px 15px;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .dashboard_sidebar .dashboard_link a i {
        margin-right: 10px;
    }

    .dashboard_sidebar .dashboard_link a:hover {
        background-color: #004d00; /* Darker green for hover */
    }

    .dashboard_sidebar .dashboard_link a.active {
        background-color: #004d00;
    }

    .dashboard_sidebar form {
        margin: 0;
    }

    .dashboard_sidebar form a {
        color: white;
        text-decoration: none;
        display: flex;
        align-items: center;
        padding: 10px 15px;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .dashboard_sidebar form a:hover {
        background-color: #004d00;
    }

    .dashboard_sidebar form a i {
        margin-right: 10px;
    }

</style>

<div class="dashboard_sidebar" style="background-color: #006400;">
  <span class="close_icon">
    <i class="far fa-bars dash_bar"></i>
    <i class="far fa-times dash_close"></i>
  </span>
  <a href="{{url('/')}}" class="dash_logo"><img src="{{asset($logoSetting->logo)}}" alt="logo" class="img-fluid"></a>
  <ul class="dashboard_link">
    <li><a class="{{setActive(['user.dashboard'])}}" href="{{route('user.dashboard')}}"><i class="fas fa-tachometer"></i>Dashboard</a></li>
    {{-- <li><a class="{{setActive(['user.messages.index'])}}" href="{{route('user.messages.index')}}"><i class="fas fa-tachometer"></i>Messages</a></li> --}}
    <li><a class="" href="{{url('/')}}"><i class="fas fa-home"></i>Go To Home Page</a></li>
    <li><a class="{{setActive(['user.orders.*'])}}" href="{{route('user.orders.index')}}"><i class="fas fa-list-ul"></i> Orders</a></li>
    <li><a class="{{setActive(['user.review.*'])}}" href="{{route('user.review.index')}}"><i class="far fa-star"></i> Reviews</a></li>
    <li><a class="{{setActive(['user.profile'])}}" href="{{route('user.profile')}}"><i class="far fa-user"></i> My Profile</a></li>
    <li><a class="{{setActive(['user.address.*'])}}" href="{{route('user.address.index')}}"><i class="fal fa-gift-card"></i> Addresses</a></li>
      <form method="POST" action="{{ route('logout') }}">
          @csrf
          <a href="{{route('logout')}}" onclick="event.preventDefault();
          this.closest('form').submit();"><i class="far fa-sign-out-alt"></i> Log out</a>
      </form>
  </ul>
</div>

