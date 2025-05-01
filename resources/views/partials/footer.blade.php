<footer class="footer">
    <div class="container">
        <div class="footer__body">
            <div class="footer__left">
                <!-- Logo -->
                <img src="{{ asset('img/Logo.png') }}" alt="PallPaws" class="logo" />
                
                <!-- Form -->
                <form class="footer__form" action="#" method="post">
                    <input type="email" name="email" id="email" placeholder="Enter your email" />
                    <button type="submit">
                        <span class="review__control footer__btn">
                            <svg class="footer__arrow" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.125 10.9985H16.875" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11.25 5.37354L16.875 10.9985L11.25 16.6235" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </button>
                </form>

                <!-- Social -->
                <h3 class="social__head">Follow Us</h3>
                <div class="social">
                    <a href="#!" class="social__icon">
                        <img src="{{ asset('img/social-01.svg') }}" alt="" />
                    </a>
                    <a href="#!" class="social__icon">
                        <img src="{{ asset('img/social-02.svg') }}" alt="" />
                    </a>
                    <a href="#!" class="social__icon">
                        <img src="{{ asset('img/social-03.svg') }}" alt="" />
                    </a>
                    <a href="#!" class="social__icon">
                        <img src="{{ asset('img/social-04.svg') }}" alt="" />
                    </a>
                </div>
            </div>

            <div class="footer__right">
                <div class="footer__info">
                    <!-- list 1 -->
                    <div class="footer__item">
                        <h3 class="footer__title">Explore</h3>
                        <ul class="footer__list">
                            <li class="footer__link"><a href="{{ url('/') }}">Home</a></li>
                            <li class="footer__link"><a href="{{ url('/care') }}">Pet Care</a></li>
                            <li class="footer__link"><a href="{{ url('/blog') }}">Blog</a></li>
                            <li class="footer__link"><a href="{{ url('/shop') }}">Shop</a></li>
                            <li class="footer__link"><a href="{{ url('/contact') }}">Contact Us</a></li>
                        </ul>
                    </div>

                    <!-- list 2 -->
                    <div class="footer__item">
                        <h3 class="footer__title">Useful links</h3>
                        <ul class="footer__list">
                            <li class="footer__link"><a href="#!">FAQs</a></li>
                            <li class="footer__link"><a href="#!">Fun Facts</a></li>
                            <li class="footer__link"><a href="#!">Privacy Policy</a></li>
                            <li class="footer__link"><a href="#!">Terms of Use</a></li>
                            <li class="footer__link"><a href="#!">Site Map</a></li>
                        </ul>
                    </div>

                    <!-- list 3 -->
                    <div class="footer__item">
                        <h3 class="footer__title">Contact Info</h3>
                        <ul class="footer__list">
                            <li class="footer__link"><a href="#!">pallpaws@gmail.com</a></li>
                            <li class="footer__link"><a href="#!">0897389409832</a></li>
                            <li class="footer__link"><a href="#!">President University, Cikarang, Indonesia</a></li>
                        </ul>
                    </div>

                    <!-- list 4 -->
                    <div class="footer__item">
                        <h3 class="footer__title">Opening Time</h3>
                        <ul class="footer__list">
                            <li class="footer__link"><a href="#!">Mon – Fri : 07.00 am – 20.00 pm</a></li>
                            <li class="footer__link"><a href="#!">Saturday : 09.00 am – 20.00 pm</a></li>
                            <li class="footer__link"><a href="#!">Sunday: We are Closed</a></li>
                        </ul>
                    </div>
                </div>

                <p class="copy-right">
                    Copyright @2024 Group1 IT4<br/>
                    President University
                </p>
            </div>
        </div>
    </div>
</footer>