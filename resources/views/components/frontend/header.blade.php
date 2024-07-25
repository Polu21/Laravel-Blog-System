<div class="navbar-menu container-fluid header-row common-padd-lt-rt">
    <div class="logo">
    <a href="{{ route("frontend.index") }}"><img src="{{ asset('assets/frontend/images/logo.png') }}" alt=""></a>
    </div>
    <div class="hdr-rt">
    <div class="main-menu">
        <div class="nav_close" onclick="menu_close()">
        <i class="far fa-times-circle"></i>
        </div>
        <ul>
        <li><a href="{{ route("frontend.index") }}">Homepage</a></li>
        <li class="current-menu-item"><a href="{{ route("blog.list") }}">Articles</a></li>
        <li class="current-menu-item"><a href="{{ route("product.index") }}">Product</a></li>
        @if (Auth::check())
        <li class="current-menu-item"><a href="{{ route("login") }}">Login</a></li>
        @else
        <li class="current-menu-item"><a href="{{ route("register.index") }}">Register</a></li>
        @endif
        <li class="current-menu-item"><a href="{{ route("contact") }}">Contact</a></li>
        </ul>
    </div>
    <div onclick="menu_open()" class="nav_btn">
        <i class="fas fa-bars"></i>
    </div>
    </div>
</div>

