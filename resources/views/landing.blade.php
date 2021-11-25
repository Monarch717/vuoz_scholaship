<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <title>VUOZ</title>
    <meta name="description" content="">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Template Basic Images Start -->
    <meta property="og:image" content="path/to/image.jpg')}}">
    <link rel="icon" href="{{asset('assets/img/favicon-red.png')}}">
    <link rel="apple-touch-icon" sizes="180x180"
          href="{{asset('assets/landing_assets/img/favicon/apple-touch-icon-180x180.png')}}">
    <!-- Template Basic Images End -->

    <!-- Custom Browsers Color Start -->
    <meta name="theme-color" content="#000">
    <!-- Custom Browsers Color End -->

    <link rel="stylesheet" href="{{asset('assets/landing_assets/css/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/landing_assets/css/custom.css')}}">

    <!-- Load google font
    ================================================== -->
    <script type="text/javascript">
        WebFontConfig = {
            google: {families: ['Catamaran:300,400,600,700', 'Raleway:100,700', 'Roboto:700,900']}
        };
        (function () {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>
    <!-- Load other scripts
    ================================================== -->
    <script type="text/javascript">
        var _html = document.documentElement;
        _html.className = _html.className.replace("no-js", "{{asset('assets/landing_assets/js')}}");
    </script>

    <style>.preloader {
            width: 100%;
            height: 100%;
            position: fixed;
            background-color: #fff;
            z-index: 9999;
        }</style>

</head>

<body>

<div class="preloader"></div>

<div class="wrapper">

    {{--    Message sent Alert--}}
    @if(session()->has('errors'))
        <div class="message_alert">
            {{ session('errors')->first('msg') }}
        </div>
    @endif
    {{--    Message sent alert end--}}
    <header class="header">
        <a href="/" class="logo">
            <img src="{{asset('assets/img/logo/red_logo.png')}}" width="200">
        </a>

        <ul class="menu">
            <li class="menu__item">
                <a href="#about" class="menu__link">ABOUT</a>
            </li>
            <li class="menu__item">
                <a href="#services" class="menu__link">SERVICES</a>
            </li>
            <li class="menu__item">
                <a href="#faq" class="menu__link">FAQ</a>
            </li>
            <li class="menu__item">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSfo7MqimNpbB63yybZR6Lz3VKa-JaHwA3KpPQX94QEGKXVriQ/viewform"
                   target="_blank" class="menu__link">JOIN US</a>
            </li>
        </ul>

        <div class="header__right">

            <div class="sign-in-wrap">
                <a href="/scholar/overview" class="btn-sign-in">Go to tracker</a>
            </div>
        </div>

        <div class="btn-menu">
            <div class="one"></div>
            <div class="two"></div>
            <div class="three"></div>
        </div>
    </header>

    <div class="fixed-menu">
        <div class="fixed-menu__header">
            <a href="#" class="logo">
                <img src="{{asset('assets/img/logo/red_logo.png')}}" width="200">
            </a>

            <div class="btn-close">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px"
                     y="0px" viewBox="0 0 47.971 47.971" style="enable-background:new 0 0 47.971 47.971;"
                     xml:space="preserve" width="512px" height="512px">
							<path
                                d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88   c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242   C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879   s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"
                                fill="#006DF0"/></svg>
            </div>
        </div>

        <div class="fixed-menu__content">

            <ul class="mob-menu">
                <li class="mob-menu__item">
                    <a href="#about" class="mob-menu__link">About</a>
                </li>
                <li class="mob-menu__item">
                    <a href="#services" class="mob-menu__link">Services</a>
                </li>

                <li class="mob-menu__item">
                    <a href="#faq" class="mob-menu__link">FAQ</a>
                </li>
            </ul>

            <div class="btn-wrap">
                <a href="/scholar/overview" class="btn-sign-in">Go to tracker</a>
            </div>

        </div>
    </div>

    <section class="promo">
        <div class="container">
            <div class="row">
                <div class="col-12 promo__content">
                    <h1> LET'S IMPROVE YOUR WIN RATE!</h1>
                    <p>
                        Learn from the proven coaches at Vuoz, the leading coaching platform for Junior to Mid-Level
                        Axie Infinity's scholars. Our certified Vouz Experts are experience coaches recognized for their
                        success in the world of NFT Games. Start your journey and unlock your achievements.
                    </p>
                    <ul class="social-list">
                        <li class="social-list__item">

                            <a href="https://twitter.com/vuoz_io" class="social-list__link" target="_blank">
                                <img class="fontello-icon" src="{{asset('assets/landing_assets/img/twitter.png')}}"/>

                            </a>
                        </li>
                        <li class="social-list__item">
                            <a href="https://www.facebook.com/vuoz.io/" class="social-list__link" target="_blank">
                                <img class="fontello-icon" src="{{asset('assets/landing_assets/img/facebook.png')}}"/>

                            </a>
                        </li>
                        <li class="social-list__item">
                            <a href="https://discord.gg/6yYm93badB" class="social-list__link" target="_blank">
                                <img class="fontello-icon" src="{{asset('assets/landing_assets/img/discord.png')}}"/>

                            </a>
                        </li>
                        <li class="social-list__item">
                            <a href="https://medium.com/vuoz" class="social-list__link" target="_blank">
                                <img class="fontello-icon" src="{{asset('assets/landing_assets/img/medium.png')}}"/>

                            </a>
                        </li>
                        <li class="social-list__item">
                            <a href="https://instagram.com/vuoz.io" class="social-list__link" target="_blank">
                                <img class="fontello-icon" src="{{asset('assets/landing_assets/img/instagram.png')}}"/>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <img src="{{asset('assets/landing_assets/img/landing_1.png')}}" alt="" class="promo__img" width="500">

        </div>
    </section>

    <section class="economy">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-4">

                    <a data-jarallax-element="-40"
                       href="https://www.youtube.com/watch?v=OcWsGWXtIm8"
                       class="economy__video-btn video-btn popup-youtube">
                        <img src="{{asset('assets/landing_assets/img/video-btn.png')}}" alt="">
                    </a>

                    <div class="economy__block">
                        <div class="economy__block-content">
                            <div
                                class="section-header section-header--white section-header--tire section-header--small-margin">
                                <h4>VUOZ DASHBOARD FEATURES</h4>
                            </div>
                            <ul>
                                <li>
                                    <span>Login</span> access to the platform (with restricted moduels)
                                </li>
                                <li>
                                    <span>Player profile</span> Personal Info (edit, image upload)
                                </li>
                                <li>
                                    <span>Input function</span> (SLP daily record)
                                </li>
                                <li>
                                    <span>Access</span> to watch game replays
                                </li>
                                <li>
                                    <span>Access</span> to Public Ronin API(if required)
                                </li>
                                <li>
                                    <span>Access</span> to Manager-specific tasks for bonus rewards (Highest achievers)
                                </li>
                                <li>
                                    <span>Access</span> to edit Ronin Wallet recipient
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{asset('assets/landing_assets/img/video-bg.png')}}" alt="" class="economy__bg">
    </section>

    <section class="section about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div
                        class="section-header section-header--animated section-header--tire section-header--small-margin">
                        <h4>About VUOZ</h4>
                        <h2>As you orbit around Axie Infinity and within, you have to realize that Axie Infinity is
                        </h2>
                    </div>
                    <div class="about__animated-content">
                        <ul>
                            <li>
                                Not just a video game you play for fun, it's a <b>journey</b>
                            </li>
                            <li>A mean to a sustainable and/or side <b>income</b></li>
                            <li><b>Challenge</b> your mental strength, resilience & energy (pun intended)</li>
                            <li>Learn to be a part of <b>community</b> and contribute (Very useful to help you get some
                                experience on a working environment for the younger fellows
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 align-items-center">
                    <img src="{{asset('assets/landing_assets/img/landing_2.png')}}" class="about__img img-responsive"
                         alt="">
                </div>
            </div>
        </div>
        <img src="{{asset('assets/landing_assets/img/about-bg.png')}}" data-jarallax-element="40" alt=""
             class="about__bg">
    </section>

    <section class="section faq" id="faq">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-header section-header--center section-header--medium-margin">
                        <h4>FAQ</h4>
                        <h2>HOW TO VUOZ YOUR SKILLS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">

                    <ul class="accordion">
                        <li>
                            <a>OFFLINE SKILLS ASSESSMENT</a>
                            <p>
                                Start your journey with a evaluation of your gaming skills from a Vuoz Expert and
                                receive a personalized plan to improve via Telegram/Whatsapp.
                                <br/>
                                Rate: USD15 per Gameplay Review
                            </p>
                        </li>
                        <li>
                            <a>LIVE ONE TO ONE COACHING</a>
                            <p>
                                Step into a live, one-on-one 60-minute coaching session designed to help you improve
                                your win rate in the Axie Infinity.
                                <br/>
                                USD40 per person for 60 minutes
                            </p>
                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </section>
    <section class="section section--no-pad-bot services" id="services">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div
                        class="section-header section-header--animated section-header--center section-header--medium-margin">
                        <h4>Awesome services</h4>
                        <h2>Why you need VUOZ?</h2>
                    </div>

                    <div class="services__items">
                        <div class="services__left">
                            <div class="service">
                                <div class="service__bg"
                                     style="background-color: #e91e63; box-shadow: 0 0 51px #e91e63; box-shadow: 0 0 51px #e91e63;"></div>
                                <img src="{{asset('assets/landing_assets/img/service-icon-1.svg')}}" alt="">
                                <div class="service__title">
                                    SLP Farming
                                </div>
                            </div>
                            <div data-aos-delay="200" class="service">
                                <div class="service__bg"
                                     style="background-color: #fa8936; background-image: linear-gradient(-234deg, #ea9d64 0%, #fa8936 100%); box-shadow: 0 0 51px rgba(250, 137, 54, 0.74);"></div>
                                <img src="{{asset('assets/landing_assets/img/service-icon-2.svg')}}" alt="">
                                <div class="service__title">
                                    Dashboard App
                                </div>
                            </div>
                        </div>
                        <div class="services__right">
                            <div class="service">
                                <div class="service__bg"
                                     style="background-image: linear-gradient(-234deg, #6ae472 0%, #4bc253 100%); box-shadow: 0 0 51px rgba(75, 194, 83, 0.74);"></div>
                                <img src="{{asset('assets/landing_assets/img/service-icon-3.svg')}}" alt="">
                                <div class="service__title">
                                    Blockchain Payment
                                </div>
                            </div>
                            <div class="service">
                                <div class="service__bg"
                                     style="background-color: #0090d5; background-image: linear-gradient(-234deg, #29aceb 0%, #0090d5 100%); box-shadow: 0 0 51px rgba(0, 144, 213, 0.74);"></div>
                                <img src="{{asset('assets/landing_assets/img/service-icon-4.svg')}}" alt="">
                                <div class="service__title">
                                    Exchange
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{asset('assets/landing_assets/img/services-bg1.png')}}" alt="" class="services__bg">
        <img src="{{asset('assets/landing_assets/img/services-bg-1.png')}}" class="services__cosmos" alt="">
    </section>

    <section class="news section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-header section-header--center section-header--small-margin">
                        <h4>In the world</h4>
                        <h2>TESTIMONIALS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">

                    <div class="news-carousel owl-carousel">
                        <a href="" class="news-carousel__item">
                            <div class="news-carousel__item-body">
                                <div class="news-carousel__item-subtitle">Player</div>
                                <h3 class="news-carousel__item-title">
                                    Finally Understood The Best Strategy
                                </h3>
                                <p>
                                    "Without properly understanding the game mechanics, I bought multiple Axies thinking
                                    I'd get better results in Arena, but I was so wrong. Thanks to VUOZ, I finally
                                    understood the best strategy from team building, game mechanics and strategy! Good
                                    job guys!"
                                </p>
                                <div class="news-carousel__item-data">
                                    November, 15 2021
                                </div>
                            </div>
                        </a>

                        <a href="" class="news-carousel__item">
                            <div class="news-carousel__item-body">
                                <div class="news-carousel__item-subtitle">Scholar</div>
                                <h3 class="news-carousel__item-title">
                                    The right tools
                                </h3>
                                <p>
                                    "I got to know Axie Infinity from YouTube and did not understand anything about the
                                    game. Thanks to this coaching service, I am well-informed in making sure I have the
                                    right tools and the right state of mind"
                                </p>
                                <div class="news-carousel__item-data">
                                    November, 20 2021
                                </div>
                            </div>
                        </a>

                        <a href="" class="news-carousel__item">
                            <div class="news-carousel__item-body">
                                <div class="news-carousel__item-subtitle">Scholar</div>
                                <h3 class="news-carousel__item-title">
                                    Earn More SLPs!
                                </h3>
                                <p>
                                    "Never played a game like this before but I'm a scholar looking to optimise my
                                    earnings. After 3 sessions, I'm much better at the game and managed to earn more
                                    SLPs!"
                                </p>
                                <div class="news-carousel__item-data">
                                    November, 22 2021
                                </div>
                            </div>
                        </a>

                        <a href="" class="news-carousel__item">
                            <div class="news-carousel__item-body">
                                <div class="news-carousel__item-subtitle">Scholar</div>
                                <h3 class="news-carousel__item-title">
                                    Earn More SLPs!
                                </h3>
                                <p>
                                    "Never played a game like this before but I'm a scholar looking to optimise my
                                    earnings. After 3 sessions, I'm much better at the game and managed to earn more
                                    SLPs!"
                                </p>
                                <div class="news-carousel__item-data">
                                    November, 19 2021
                                </div>
                            </div>
                        </a>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="section contact">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-header section-header--center section-header--medium-margin">
                        <h4>Contact us</h4>
                        <h2>Get in Touch</h2>
                    </div>
                    <form action="{{route('landing.contact')}}" class="form contact-form" method="post"
                    >
                        @csrf
                        <input type="text" name="name" class="form__input" placeholder="Name" required>
                        <input type="email" name="email" class="form__input" placeholder="Email" required>
                        <textarea name="message" class="form__textarea" placeholder="Message" required></textarea>
                        <button type="submit" class="form__btn btn btn--uppercase btn--orange"><span>Send message</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <img src="{{asset('assets/landing_assets/img/subscribe-bg.png')}}" class="contact-bg" alt="">
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <a href="" class="logo">
                        <img
                            src="{{asset('assets/img/logo/red_logo.png')}}" alt="" width="200">

                    </a>
                    <div class="copyright">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        , VUOZ
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="social-block">
                        <div class="social-block__title">
                            Stay connected:
                        </div>

                        <ul class="social-list">
                            <li class="social-list__item">

                                <a href="https://twitter.com/vuoz_io" class="social-list__link" target="_blank">
                                    <img class="fontello-icon"
                                         src="{{asset('assets/landing_assets/img/twitter.png')}}"/>

                                </a>
                            </li>
                            <li class="social-list__item">
                                <a href="https://www.facebook.com/vuoz.io/" class="social-list__link" target="_blank">
                                    <img class="fontello-icon"
                                         src="{{asset('assets/landing_assets/img/facebook.png')}}"/>

                                </a>
                            </li>
                            <li class="social-list__item">
                                <a href="https://discord.gg/6yYm93badB" class="social-list__link" target="_blank">
                                    <img class="fontello-icon"
                                         src="{{asset('assets/landing_assets/img/discord.png')}}"/>

                                </a>
                            </li>
                            <li class="social-list__item">
                                <a href="https://medium.com/vuoz" class="social-list__link" target="_blank">
                                    <img class="fontello-icon" src="{{asset('assets/landing_assets/img/medium.png')}}"/>

                                </a>
                            </li>
                            <li class="social-list__item">
                                <a href="https://instagram.com/vuoz.io" class="social-list__link" target="_blank">
                                    <img class="fontello-icon"
                                         src="{{asset('assets/landing_assets/img/instagram.png')}}"/>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <form action="{{route('landing.subscribe')}}" class="form subscribe" method="post">
                        @csrf
                        <div class="form__title">Subscribe</div>
                        <div class="form__row">
                            <input type="email" name="subscribe_email" class="form__input" placeholder="Email">
                            <button type="submit" class="form__btn btn btn--uppercase btn--orange btn--small"><span>Send</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </footer>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{asset('assets/landing_assets/js/jquery-2.2.4.min.js')}}"><\/script>')</script>

<script src="{{asset('assets/landing_assets/js/scripts.min.js')}}"></script>

</body>
</html>
