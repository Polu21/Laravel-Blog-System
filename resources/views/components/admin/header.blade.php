<div class="navbar-menu container-fluid header-row common-padd-lt-rt">
    <div class="logo">
    <a href="{{ route("dashboard.index") }}"><img src="{{ asset('assets/frontend/images/logo.png') }}" alt=""></a>
    </div>
    <div class="hdr-rt">
    <div class="main-menu">
        <div class="nav_close" onclick="menu_close()">
        <i class="far fa-times-circle"></i>
        </div>
        <ul>
        <li><a href="{{ route("dashboard.index") }}">Homepage</a></li>
        <li class="current-menu-item"><a href="{{ route("blog.index") }}">Articles</a></li>
        {{-- <li class="current-menu-item"><a href="{{ route("user.register") }}">Register/login</a></li> --}}
        @if (Auth::check())
        <li class="current-menu-item"><a href="{{ route("profile") }}">
            <img src="{{ asset('assets/frontend/images/user-profile-icon-free-vector.jpg') }}" width="50" height="50">Hi {{ auth()->user()->name }}</a>
        </li>
        @endif
        </ul>
    </div>
    <div onclick="menu_open()" class="nav_btn">
        <i class="fas fa-bars"></i>
    </div>
    </div>
</div>

