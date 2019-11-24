<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{ route('admin.dashboard')}}">
      <img class="navbar-brand-full" src="{{ asset('images/logo-rect.png')}}" style="width:150px;" alt="Search Nepal">
      <img class="navbar-brand-minimized" src="" style="width:50px;"  alt="UPVC">
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav d-md-down-none">
      <li class="nav-item px-3"></li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item px-3">
          <b>Hello, {{ Auth::user()->name }}</b>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          @if(Auth::user()->image)
            <img class="img-avatar" src="{{ asset('/uploads/admins/'.Auth::user()->image)}}" alt="User DP">
          @else
            <img class="img-avatar" src="{{ asset('images/avatar_f.png')}}" alt="User DP">
          @endif
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-header text-center">
            <strong>Settings</strong>
          </div>
          <a class="dropdown-item" href="#">
            <i class="fa fa-user"></i> Profile</a>
          <a class="dropdown-item" href="#">
            <i class="fa fa-wrench"></i> Settings</a>
          <a class="dropdown-item" href="#">
            <i class="fa fa-usd"></i> Payments
            <span class="badge badge-secondary">42</span>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('logout')}}">
            <i class="fa fa-lock"></i> Logout</a>
        </div>
      </li>
    </ul>
  </header>
