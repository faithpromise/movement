@extends('layout-base')

@section('content')

    <div id="top" class="Layout">

        <!--
          |--------------------------------------
          | Nav
          |--------------------------------------
        -->

        <div class="Nav">
            <div class="Nav-container">
                <a class="Nav-logo">
                    <svg>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-logo-mark"></use>
                    </svg>
                </a>
                <ul class="Nav-menu Nav-menu--desktop">
                    <li class="Nav-item">
                        <a class="Nav-link" href="/about">About</a>
                    </li>
                    <li class="Nav-item">
                        <a class="Nav-link" href="#speakers">Speakers</a>
                    </li>
                    <li class="Nav-item">
                        <a class="Nav-link" href="/schedule">Schedule</a>
                    </li>
                    <li class="Nav-item">
                        <a class="Nav-link Nav-link--button" href="#">Register</a><!-- TODO: Link -->
                    </li>
                </ul>

                <ul class="Nav-menu Nav-menu--mobile">
                    <li class="Nav-item">
                        <a class="Nav-link">Register</a>
                    </li>
                    <li class="Nav-item">
                            <span class="Nav-toggle">
                                <svg role="img" class="SocialIcon">
                                    <use xlink:href="#icon-menu"></use>
                                </svg>
                            </span>
                    </li>
                </ul>

            </div>
        </div>


    @yield('page')


    <!--
          |--------------------------------------
          | Countdown
          |--------------------------------------
        -->

        <div class="Countdown">
            <div class="Countdown-container">
                <h2 class="Countdown-title"><span class="nowrap">Countdown to</span>
                    <span class="nowrap">Movement 18</span></h2>
                <div class="Countdown-clock">
                    <div class="Countdown-slot">
                        <span id="countdown_days" class="Countdown-digit">74</span>
                        <span class="Countdown-label">DAYS</span>
                    </div>
                    <div class="Countdown-slot">
                        <span id="countdown_hours" class="Countdown-digit">05</span>
                        <span class="Countdown-label">HRS</span>
                    </div>
                    <div class="Countdown-slot">
                        <span id="countdown_minutes" class="Countdown-digit">29</span>
                        <span class="Countdown-label">MIN</span>
                    </div>
                    <div class="Countdown-slot">
                        <span id="countdown_seconds" class="Countdown-digit">29</span>
                        <span class="Countdown-label">SEC</span>
                    </div>
                </div>
            </div>
        </div>


        <!--
          |--------------------------------------
          | Footer
          |--------------------------------------
        -->

        <div class="Footer">
            <div class="Footer-container">
                <ul class="Footer-buttons">
                    <li>
                        <a href="#">Register Now</a><!-- TODO: Link -->
                    </li>
                    <li>
                        <a href="/contact">Contact Us</a>
                    </li>
                </ul>
                <div class="Footer-social">
                    @include('_social')
                </div>
            </div>
        </div>

    </div>

@endsection