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
        <li class="current-menu-item"><a href="{{ route("product.index") }}">Product</a></li>

        {{-- @if (Auth::check())
        <li class="current-menu-item"><a href="{{ route("login") }}">Login</a></li>
        @else
        <li class="current-menu-item"><a href="{{ route("register.index") }}">Register</a></li>
        @endif --}}
        @if (Auth::check())
            <li class="current-menu-item"><a href="{{ route("profile") }}">
                @if (auth()->user()->profile_image)
                <img src="{{ asset('upload/profileImages/' . auth()->user()->profile_image) }}"alt="" width="100" height="100" />
                @else
                    <img src="{{ asset('assets/frontend/images/user-profile-icon-free-vector.jpg') }}" width="50" height="50">Hi {{ auth()->user()->name }}</a>

                @endif
                Hi {{ auth()->user()->name }}</a>
            </li>
        @else
            <li class="current-menu-item"><a href="{{ route("login") }}">Login</a></li>
        @endif
        </ul>
    </div>
    <div onclick="menu_open()" class="nav_btn">
        <i class="fas fa-bars"></i>
    </div>
    </div>
</div>

