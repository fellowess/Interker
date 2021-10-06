<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto"><a href="{{url('/')}}"><span>Interker-Wein</span> Kft</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="{{Request::is('/') ? 'active': ''}}"><a href="{{url('/')}}">
                        {{__('home.home')}}
                </a></li>

                {{--<li class="drop-down"><a href="">About</a>
                    <ul>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="testimonials.html">Testimonials</a></li>
                        <li class="drop-down"><a href="#">Deep Drop Down</a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>--}}
                <li><a href="">
                        {{__('home.about')}}
                </a></li>
                <li><a href="">
                        {{__('home.services')}}
                </a></li>
                <li class="{{Request::is('portfolio') ? 'active': ''}}"><a href="{{route('portfolio')}}">
                        {{__('home.portfolio')}}
                </a></li>
                <li class="{{Request::is('stores') ? 'active': ''}}"><a href="">
                        {{__('home.stores')}}
                    </a></li>
                <li class="{{Request::is('contact') ? 'active': ''}}"><a href="{{route('contact')}}">
                        {{__('home.contact')}}
                </a></li>

                <li class="drop-down"><a href=""><span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}</a>
                    <ul>
                        @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                                <li><a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </li>
            </ul>
        </nav><!-- .nav-menu -->

        <div class="header-social-links">
            <a href="https://www.facebook.com/pages/category/Shopping---Retail/Interker-Wein-Kft-Eger-108768950769264/" title="Facebook" target="_blank" class="facebook"><i class="icofont-facebook"></i></a>
            <a href="https://aranyoldalak.hu/interker-wein-kft13.htm" title="Aranyoldalak" target="_blank" class="arany_oldalak"><i class="icofont-address-book"></i></a>
            <a href="https://goo.gl/maps/JTWdQS4ADHrws9ji7" title="{{__('home.google_business')}}" target="_blank" class="google_map"><i class="icofont-ui-map"></i></a>
        </div>

    </div>
</header><!-- End Header -->
