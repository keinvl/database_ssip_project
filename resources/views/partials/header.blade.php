<header class="header">
    <div class="container">
        <div class="header__inner">
            <img src="{{ asset('img/Logo.png') }}" alt="PallPaws" class="logo" />
            <nav class="nav">
                <ul class="nav__list">
                    <li class="nav__item"><a href="{{ url('/') }}" class="nav__link">Home</a></li>
                    <li class="nav__item"><a href="{{ url('/care') }}" class="nav__link">Pet Care</a></li>
                    <li class="nav__item"><a href="{{ url('/blog') }}" class="nav__link">Blog</a></li>
                    <li class="nav__item"><a href="{{ url('/shop') }}" class="nav__link">Shop</a></li>
                    <li class="nav__item"><a href="{{ url('/contactus') }}" class="nav__link">Contact Us</a></li>
                </ul>
            </nav>
            <div class="header-action">
                <!-- Tombol Logout jika sudah login -->
                @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn header-action__btn">Log out</button>
                    </form>
                @endauth
            </div>
        </div>
    </div>
</header>