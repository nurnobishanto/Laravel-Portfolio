<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="description" content="Name of your web site">
    <meta name="author" content="Marketify">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>{{ setting('my.name') }} | {{ setting('my.tagline') }}</title>

    <!-- STYLES -->
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('front') }}/css/plugins.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front') }}/css/dark.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front') }}/css/style.css" />
    <!--[if lt IE 9]> <script type="text/javascript" src="js/modernizr.custom.js"></script> <![endif]-->
    <!-- /STYLES -->

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2908437793326427"
            crossorigin="anonymous"></script>

</head>

<body class="{{ setting('theme.mode') }}">

    <!-- PRELOADER -->
    <div id="preloader">
        <div class="loader_line"></div>
    </div>
    <!-- /PRELOADER -->

    <!-- WRAPPER ALL -->
    <div class="dizme_tm_all_wrap" data-magic-cursor="show">

        <!-- MOBILE MENU -->
        <div class="dizme_tm_mobile_menu">
            <div class="mobile_menu_inner">
                <div class="mobile_in">
                    <div class="logo">
                        @if (strlen(setting('my.logo') > 5))
                            <a href="#"><img src="{{ asset('front') }}/img/logo/logo.png"
                                    alt="{{ setting('my.name') }}" /></a>
                        @else
                            <a class="text-decoration-none" href="#">
                                <h4>{{ setting('my.name') }}</h4>
                            </a>
                        @endif

                    </div>
                    <div class="trigger">
                        <div class="hamburger hamburger--slider">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown">
                <div class="dropdown_inner">
                    <ul class="anchor_nav">
                        <li class="current"><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#service">Service</a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li class="download_cv"><a href="{{ setting('my.cvurl') }}" download><span>Download
                                    CV</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /MOBILE MENU -->

        <!-- HEADER -->
        <div class="dizme_tm_header">
            <div class="container">
                <div class="inner">
                    <div class="logo">
                        @if (strlen(setting('my.logo') > 5))
                            <a href="#"><img src="{{ asset('front') }}/img/logo/logo.png"
                                    alt="{{ setting('my.name') }}" /></a>
                        @else
                            <a class="text-decoration-none" href="#">
                                <h4>{{ setting('my.name') }}</h4>
                            </a>
                        @endif
                    </div>
                    <div class="menu">
                        <ul class="anchor_nav">
                            <li class="current"><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#service">Service</a></li>
                            <li><a href="#blog">Blog</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li class="download_cv"><a href="{{setting('my.cv') }}" download><span>Download
                                        CV</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /HEADER -->

        <!-- HERO -->
        <div class="dizme_tm_section" id="home">
            <div class="dizme_tm_hero">
                @if (setting('theme.mode') == 'dark')
                    <div class="background" data-img-url="{{ asset('front') }}/img/slider/2.jpg"></div>
                @else
                    <div class="background" data-img-url="{{ asset('front') }}/img/slider/1.jpg"></div>
                @endif

                <div class="container">
                    <div class="content">
                        <div class="details">
                            <div class="hello">
                                <h3 class="orangeText">Hello, I'm</h3>
                            </div>
                            <div class="name">
                                <h3>{{ setting('my.name') }}</h3>
                            </div>
                            <div class="job">
                                <p>A <span class="greenText">{{setting('my.position')}}</span> From <span class="purpleText">{{setting('my.country')}}</span></p>
                            </div>
                            <div class="text">
                                <p>{{setting('my.shortbio') }}</p>
                            </div>
                            <div class="button">
                                <div class="dizme_tm_button">
                                    <a class="anchor" href="#about"><span>About Me</span></a>
                                </div>
                                <div class="social">
                                    <ul>
                                        @if(setting('my.github'))
                                            <li><a href="#"><i class="icon-github-3"></i></a></li>
                                        @endif
                                        @if(setting('my.linkedin'))
                                            <li><a href="#"><i class="icon-linkedin-1"></i></a></li>
                                        @endif
                                        @if(setting('my.facebook'))
                                            <li><a href="#"><i class="icon-facebook-1"></i></a></li>
                                        @endif
                                        @if(setting('my.twitter'))
                                            <li><a href="#"><i class="icon-twitter-1"></i></a></li>
                                        @endif
                                        @if(setting('my.youtube'))
                                            <li><a href="#"><i class="icon-youtube-1"></i></a></li>
                                        @endif
                                        @if(setting('my.instagram'))
                                            <li><a href="#"><i class="icon-instagram-1"></i></a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="avatar">
                            <div class="image">
                                <img src="{{ asset('storage') }}/{{setting('my.photo.1')}}" alt="{{ setting('my.name') }}" />
                                <span class="skills illustrator anim_moveBottom"><img class="svg"
                                        src="{{ asset('front') }}/img/svg/skills/illustrator.svg"
                                        alt="" /></span>
                                <span class="skills photoshop anim_moveBottom"><img class="svg"
                                        src="{{ asset('front') }}/img/svg/skills/photoshop.svg"
                                        alt="" /></span>
                                <span class="skills figma anim_moveBottom"><img class="svg"
                                        src="{{ asset('front') }}/img/svg/skills/figma.svg" alt="" /></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dizme_tm_down">
                    <a class="anchor" href="#about">
                        <svg width="26px" height="100%" viewBox="0 0 247 390" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
                            <path id="wheel" d="M123.359,79.775l0,72.843"
                                style="fill:none;stroke:#000;stroke-width:20px;" />
                            <path id="mouse"
                                d="M236.717,123.359c0,-62.565 -50.794,-113.359 -113.358,-113.359c-62.565,0 -113.359,50.794 -113.359,113.359l0,143.237c0,62.565 50.794,113.359 113.359,113.359c62.564,0 113.358,-50.794 113.358,-113.359l0,-143.237Z"
                                style="fill:none;stroke:#000;stroke-width:20px;" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <!-- HERO -->

        <!-- PROCESS -->
        <div class="dizme_tm_section">
            <div class="dizme_tm_process">
                <div class="container">
                    <div class="list">
                        <ul>
                            <li class="wow fadeInUp" data-wow-duration="1s">
                                <div class="list_inner">
                                    <div class="icon">
                                        <span>
                                            <img class="brush"
                                                src="{{ asset('front') }}/img/brushes/process/{{ setting('theme.mode') }}/1.png"
                                                alt="" />
                                            <img class="svg"
                                                src="{{ asset('front') }}/img/svg/process/{{ setting('theme.mode') }}/target.svg"
                                                alt="" />
                                        </span>
                                    </div>
                                    <div class="title">
                                        <h3>Pixel Perfect</h3>
                                    </div>
                                    <div class="text">
                                        <p>Most common methods for designing websites that work well on desktop is
                                            responsive and adaptive design.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                                <div class="list_inner">
                                    <div class="icon">
                                        <span>
                                            <img class="brush"
                                                src="{{ asset('front') }}/img/brushes/process/{{ setting('theme.mode') }}/2.png"
                                                alt="" />
                                            <img class="svg"
                                                src="{{ asset('front') }}/img/svg/process/{{ setting('theme.mode') }}/brush.svg"
                                                alt="" />
                                        </span>
                                    </div>
                                    <div class="title">
                                        <h3>High Quality</h3>
                                    </div>
                                    <div class="text">
                                        <p>Most common methods for designing websites that work well on desktop is
                                            responsive and adaptive design.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                                <div class="list_inner">
                                    <div class="icon">
                                        <span>
                                            <img class="brush"
                                                src="{{ asset('front') }}/img/brushes/process/{{ setting('theme.mode') }}/3.png"
                                                alt="" />
                                            <img class="svg"
                                                src="{{ asset('front') }}/img/svg/process/{{ setting('theme.mode') }}/energy.svg"
                                                alt="" />
                                        </span>
                                    </div>
                                    <div class="title">
                                        <h3>Awesome Idea</h3>
                                    </div>
                                    <div class="text">
                                        <p>Most common methods for designing websites that work well on desktop is
                                            responsive and adaptive design</p>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /PROCESS -->

        <!-- ABOUT -->
        <div class="dizme_tm_section" id="about">
            <div class="dizme_tm_about">
                <div class="container">
                    <div class="wrapper">
                        <div class="left">
                            <div class="image">
                                <img src="{{ asset('storage') }}/{{setting('my.photo.2')}}" alt="{{ setting('my.name') }}" />
                                <div class="numbers year">
                                    <div class="wrapper">
                                        <h3><span class="dizme_tm_counter" data-from="0" data-to="{{setting('year.succsess')}}"
                                                data-speed="2000">0</span></h3>
                                        <span class="name">Years of<br />Success</span>
                                    </div>
                                </div>
                                <div class="numbers project">
                                    <div class="wrapper">
                                        <h3><span class="dizme_tm_counter" data-from="0" data-to="{{setting('total.project')}}"
                                                data-speed="2000">0</span>+</h3>
                                        <span class="name">Total<br />Projects</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="title wow fadeInUp" data-wow-duration="1s">
                                <span>I'm a {{setting('my.position')}}</span>
                                <h3>{{setting('about.head')}}</h3>
                            </div>
                            <div class="text wow fadeInUp" data-wow-duration="1s">
                                <p>{{setting('my.about') }}</p>
                            </div>
                            <div class="dizme_tm_button wow fadeInUp" data-wow-duration="1s">
                                <a class="anchor" href="#contact"><span>Hire Me</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="brush_1 wow fadeInLeft" data-wow-duration="1s"><img
                        src="{{ asset('front') }}/img/brushes/about/1.png" alt="" /></div>
                <div class="brush_2 wow fadeInRight" data-wow-duration="1s"><img
                        src="{{ asset('front') }}/img/brushes/about/2.png" alt="" /></div>
            </div>
        </div>
        <!-- /ABOUT -->

        <!-- PORTFOLIO -->
        <div class="dizme_tm_section" id="portfolio">
            <div class="dizme_tm_portfolio">
                <div class="container">
                    <div class="dizme_tm_main_title" data-align="center">
                        <span>Portfolio</span>
                        <h3>My Amazing Works</h3>
                    </div>
                    <div class="portfolio_filter">
                        <ul>
                            <li><a href="#" class="current" data-filter="*">All</a></li>
                            @foreach($p_cats as $cat)
                                <li><a href="#" data-filter=".{{$cat->name}}">{{$cat->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="dizme_tm_portfolio_titles"></div>
                    <div class="portfolio_list wow fadeInUp" data-wow-duration="1s">
                        <ul class="gallery_zoom grid">
                            @foreach($portfolios as $portfolio)

                                @if($portfolio->type =="youtube")
                                    <li class="{{$portfolio->category->name}} grid-item">
                                        <div class="inner">
                                            <div class="entry dizme_tm_portfolio_animation_wrap" data-title="{{$portfolio->title}}"
                                                 data-category="{{$portfolio->category->name}}">
                                                <a class="popup-youtube" href="{{$portfolio->url}}">
                                                    <img src="{{ asset('storage/'.$portfolio->image) }}" alt="{{$portfolio->title}}" />
                                                    <div class="main"
                                                         data-img-url="{{ asset('storage/'.$portfolio->image) }}"></div>
                                                </a>
                                            </div>
                                            <div class="mobile_title">
                                                <h3>{{$portfolio->title}}</h3>
                                                <span>{{$portfolio->category->name}}</span>
                                            </div>
                                        </div>
                                    </li>
                                @elseif($portfolio->type =="vimeo")
                                <li class="{{$portfolio->category->name}} grid-item">
                                    <div class="inner">
                                        <div class="entry dizme_tm_portfolio_animation_wrap" data-title="Ave Bottle"
                                             data-category="{{$portfolio->category->name}}">
                                            <a class="popup-vimeo" href="{{$portfolio->url}}">
                                                <img src="{{ asset('front') }}/img/thumbs/42-34.jpg" alt="" />
                                                <div class="main"
                                                     data-img-url="{{ asset('front') }}/img/portfolio/2.jpg"></div>
                                            </a>
                                        </div>
                                        <div class="mobile_title">
                                            <h3>{{$portfolio->title}}</h3>
                                            <span>{{$portfolio->category->name}}</span>
                                        </div>
                                    </div>
                                </li>
                                @elseif($portfolio->type =="soundcloud")
                                <li class="{{$portfolio->category->name}} grid-item">
                                    <div class="inner">
                                        <div class="entry dizme_tm_portfolio_animation_wrap" data-title="Magic Art"
                                             data-category="{{$portfolio->category->name}}">
                                            <a class="soundcloude_link mfp-iframe audio"
                                               href="{{$portfolio->url}}">
                                                <img src="{{ asset('front') }}/img/thumbs/42-56.jpg" alt="" />
                                                <div class="main"
                                                     data-img-url="{{ asset('front') }}/img/portfolio/3.jpg"></div>
                                            </a>
                                        </div>
                                        <div class="mobile_title">
                                            <h3>{{$portfolio->title}}</h3>
                                            <span>{{$portfolio->category->name}}</span>
                                        </div>
                                    </div>
                                </li>
                                @elseif($portfolio->type =="popup")
                                <li class="{{$portfolio->category->name}} grid-item">
                                    <div class="inner">
                                        <div class="entry dizme_tm_portfolio_animation_wrap" data-title="Scott Felix"
                                             data-category="{{$portfolio->category->name}}">
                                            <a class="zoom" href="{{ asset('front') }}/img/portfolio/5.jpg">
                                                <img src="{{ asset('front') }}/img/thumbs/42-56.jpg" alt="" />
                                                <div class="main"
                                                     data-img-url="{{ asset('front') }}/img/portfolio/5.jpg"></div>
                                            </a>
                                        </div>
                                        <div class="mobile_title">
                                            <h3>{{$portfolio->title}}</h3>
                                            <span>{{$portfolio->category->name}}</span>
                                        </div>
                                    </div>
                                </li>
                                @else
                                <li class="{{$portfolio->category->name}} grid-item">
                                    <div class="inner">
                                        <div class="entry dizme_tm_portfolio_animation_wrap" data-title="Global Evolution"
                                             data-category="{{$portfolio->category->name}}">
                                            <a class="portfolio_popup" href="#">
                                                <img src="{{ asset('front') }}/img/thumbs/42-34.jpg" alt="" />
                                                <div class="main"
                                                     data-img-url="{{ asset($portfolio->image) }}"></div>
                                            </a>
                                        </div>
                                        <div class="mobile_title">
                                            <h3>{{$portfolio->title}}</h3>
                                            <span>{{$portfolio->category->name}}</span>
                                        </div>

                                        <div class="hidden_content">
                                            <div class="popup_details">
                                                <div class="main_details">
                                                    <div class="textbox">
                                                        {{$portfolio->details}}
                                                    </div>
                                                    <div class="detailbox">
                                                        <ul>
                                                            <li>
                                                                <span class="first">Client</span>
                                                                <span>{{$portfolio->client}}</span>
                                                            </li>
                                                            <li>
                                                                <span class="first">Category</span>
                                                                <span><a href="#">{{$portfolio->category->name}}</a></span>
                                                            </li>
                                                            <li>
                                                                <span class="first">Date</span>
                                                                <span>{{$portfolio->date}}</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="additional_images">
                                                    <ul>
                                                        <li>
                                                            <div class="list_inner">
                                                                <div class="my_image">
                                                                    <img src="{{ asset('front') }}/img/thumbs/4-2.jpg"
                                                                         alt="" />
                                                                    <div class="main"
                                                                         data-img-url="{{ asset('front') }}/img/portfolio/1.jpg">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="list_inner">
                                                                <div class="my_image">
                                                                    <img src="{{ asset('front') }}/img/thumbs/4-2.jpg"
                                                                         alt="" />
                                                                    <div class="main"
                                                                         data-img-url="{{ asset('front') }}/img/portfolio/2.jpg">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="list_inner">
                                                                <div class="my_image">
                                                                    <img src="{{ asset('front') }}/img/thumbs/4-2.jpg"
                                                                         alt="" />
                                                                    <div class="main"
                                                                         data-img-url="{{ asset('front') }}/img/portfolio/3.jpg">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                @endif
                            @endforeach

                        </ul>
                    </div>
                </div>
                <div class="brush_1 wow zoomIn" data-wow-duration="1s"><img
                        src="{{ asset('front') }}/img/brushes/portfolio/1.png" alt="" /></div>
                <div class="brush_2 wow fadeInRight" data-wow-duration="1s"><img
                        src="{{ asset('front') }}/img/brushes/portfolio/2.png" alt="" /></div>
            </div>
        </div>
        <!-- /PORTFOLIO -->

        <!-- SKILLS -->
        <div class="dizme_tm_section">
            <div class="dizme_tm_skills">
                <div class="container">
                    <div class="wrapper">
                        <div class="left">
                            <div class="dizme_tm_main_title wow fadeInUp" data-wow-duration="1s" data-align="left">
                                <span>Development is Life</span>
                                <h3>I Develop Skills Regularly to Keep Me Update</h3>

                            </div>
                            <div class="dodo_progress wow fadeInUp" data-wow-duration="1s">
                                @foreach($skills as $skill)
                                    <div class="progress_inner" data-value="{{$skill->value}}" data-color="{{$skill->color}}">
                                    <span><span class="label">{{$skill->name}}</span><span
                                            class="number">{{$skill->value}}%</span></span>
                                        <div class="background">
                                            <div class="bar">
                                                <div class="bar_in"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="right">
                            <img src="{{ asset('storage') }}/{{setting('my.photo.3')}}" alt="{{ setting('my.name') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /SKILLS -->

        <!-- SERVICES -->
        <div class="dizme_tm_section" id="service">
            <div class="dizme_tm_services">
                <div class="container">
                    <div class="dizme_tm_main_title" data-align="center">
                        <span>Services</span>
                        <h3>What I Do for Clients</h3>
                        <p>Most common methods for designing websites that work well on desktop is responsive and
                            adaptive design</p>
                    </div>
                    <div class="service_list">
                        <ul>
                            <li class="wow fadeInLeft" data-wow-duration="1s">
                                <div class="list_inner tilt-effect">
                                    <span class="icon">
                                        <img class="svg" src="{{ asset('front') }}/img/svg/service/anchor.svg"
                                            alt="" />
                                        <img class="back" src="{{ asset('front') }}/img/brushes/service/{{setting('theme.mode')}}/1.png"
                                            alt="" />
                                    </span>
                                    <div class="title">
                                        <h3>Creative Design</h3>
                                        <span class="price">Starts from <span>$99</span></span>
                                    </div>
                                    <div class="text">
                                        <p>Web design refers to the design of websites that are displayed on the
                                            internet. It usually refers to the user experience aspects of website
                                            development</p>
                                    </div>
                                    <a class="dizme_tm_full_link" href="#"></a>
                                    <img class="popup_service_image" src="{{ asset('front') }}/img/service/1.jpg"
                                        alt="" />
                                    <div class="service_hidden_details">
                                        <div class="service_popup_informations">
                                            <div class="descriptions">
                                                <p>Dizme is a leading web design agency with an award-winning design
                                                    team that creates innovative, effective websites that capture your
                                                    brand, improve your conversion rates, and maximize your revenue to
                                                    help grow your business and achieve your goals.</p>
                                                <p>In today’s digital world, your website is the first interaction
                                                    consumers have with your business. That's why almost 95 percent of a
                                                    user’s first impression relates to web design. It’s also why web
                                                    design services can have an immense impact on your company’s bottom
                                                    line.</p>
                                                <p>That’s why more companies are not only reevaluating their website’s
                                                    design but also partnering with Kura, the web design agency that’s
                                                    driven more than $2.4 billion in revenue for its clients. With over
                                                    50 web design awards under our belt, we're confident we can design a
                                                    custom website that drives sales for your unique business.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                                <div class="list_inner tilt-effect">
                                    <span class="icon">
                                        <img class="svg" src="{{ asset('front') }}/img/svg/service/physics.svg"
                                            alt="" />
                                        <img class="back" src="{{ asset('front') }}/img/brushes/service/{{setting('theme.mode')}}/2.png"
                                            alt="" />
                                    </span>
                                    <div class="title">
                                        <h3>Graphic Design</h3>
                                        <span class="price">Starts from <span>$199</span></span>
                                    </div>
                                    <div class="text">
                                        <p>Web design refers to the design of websites that are displayed on the
                                            internet. It usually refers to the user experience aspects of website
                                            development</p>
                                    </div>
                                    <a class="dizme_tm_full_link" href="#"></a>
                                    <img class="popup_service_image" src="{{ asset('front') }}/img/service/{{setting('theme.mode')}}/2.jpg"
                                        alt="" />
                                    <div class="service_hidden_details">
                                        <div class="service_popup_informations">
                                            <div class="descriptions">
                                                <p>Dizme is a leading web design agency with an award-winning design
                                                    team that creates innovative, effective websites that capture your
                                                    brand, improve your conversion rates, and maximize your revenue to
                                                    help grow your business and achieve your goals.</p>
                                                <p>In today’s digital world, your website is the first interaction
                                                    consumers have with your business. That's why almost 95 percent of a
                                                    user’s first impression relates to web design. It’s also why web
                                                    design services can have an immense impact on your company’s bottom
                                                    line.</p>
                                                <p>That’s why more companies are not only reevaluating their website’s
                                                    design but also partnering with Kura, the web design agency that’s
                                                    driven more than $2.4 billion in revenue for its clients. With over
                                                    50 web design awards under our belt, we're confident we can design a
                                                    custom website that drives sales for your unique business.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="1s">
                                <div class="list_inner tilt-effect">
                                    <span class="icon">
                                        <img class="svg" src="{{ asset('front') }}/img/svg/service/contact.svg"
                                            alt="" />
                                        <img class="back" src="{{ asset('front') }}/img/brushes/service/{{setting('theme.mode')}}/3.png"
                                            alt="" />
                                    </span>
                                    <div class="title">
                                        <h3>UI/UX Design</h3>
                                        <span class="price">Starts from <span>$299</span></span>
                                    </div>
                                    <div class="text">
                                        <p>Web design refers to the design of websites that are displayed on the
                                            internet. It usually refers to the user experience aspects of website
                                            development</p>
                                    </div>
                                    <a class="dizme_tm_full_link" href="#"></a>
                                    <img class="popup_service_image" src="{{ asset('front') }}/img/service/3.jpg"
                                        alt="" />
                                    <div class="service_hidden_details">
                                        <div class="service_popup_informations">
                                            <div class="descriptions">
                                                <p>Dizme is a leading web design agency with an award-winning design
                                                    team that creates innovative, effective websites that capture your
                                                    brand, improve your conversion rates, and maximize your revenue to
                                                    help grow your business and achieve your goals.</p>
                                                <p>In today’s digital world, your website is the first interaction
                                                    consumers have with your business. That's why almost 95 percent of a
                                                    user’s first impression relates to web design. It’s also why web
                                                    design services can have an immense impact on your company’s bottom
                                                    line.</p>
                                                <p>That’s why more companies are not only reevaluating their website’s
                                                    design but also partnering with Kura, the web design agency that’s
                                                    driven more than $2.4 billion in revenue for its clients. With over
                                                    50 web design awards under our belt, we're confident we can design a
                                                    custom website that drives sales for your unique business.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                                <div class="list_inner tilt-effect">
                                    <span class="icon">
                                        <img class="svg" src="{{ asset('front') }}/img/svg/service/web.svg"
                                            alt="" />
                                        <img class="back" src="{{ asset('front') }}/img/brushes/service/{{setting('theme.mode')}}/4.png"
                                            alt="" />
                                    </span>
                                    <div class="title">
                                        <h3>Web Design</h3>
                                        <span class="price">Starts from <span>$399</span></span>
                                    </div>
                                    <div class="text">
                                        <p>Web design refers to the design of websites that are displayed on the
                                            internet. It usually refers to the user experience aspects of website
                                            development</p>
                                    </div>
                                    <a class="dizme_tm_full_link" href="#"></a>
                                    <img class="popup_service_image" src="{{ asset('front') }}/img/service/4.jpg"
                                        alt="" />
                                    <div class="service_hidden_details">
                                        <div class="service_popup_informations">
                                            <div class="descriptions">
                                                <p>Dizme is a leading web design agency with an award-winning design
                                                    team that creates innovative, effective websites that capture your
                                                    brand, improve your conversion rates, and maximize your revenue to
                                                    help grow your business and achieve your goals.</p>
                                                <p>In today’s digital world, your website is the first interaction
                                                    consumers have with your business. That's why almost 95 percent of a
                                                    user’s first impression relates to web design. It’s also why web
                                                    design services can have an immense impact on your company’s bottom
                                                    line.</p>
                                                <p>That’s why more companies are not only reevaluating their website’s
                                                    design but also partnering with Kura, the web design agency that’s
                                                    driven more than $2.4 billion in revenue for its clients. With over
                                                    50 web design awards under our belt, we're confident we can design a
                                                    custom website that drives sales for your unique business.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="brush_1 wow fadeInLeft" data-wow-duration="1s"><img
                        src="{{ asset('front') }}/img/brushes/service/{{setting('theme.mode')}}/5.png" alt="" /></div>
                <div class="brush_2 wow zoomIn" data-wow-duration="1s"><img
                        src="{{ asset('front') }}/img/brushes/service/{{setting('theme.mode')}}/6.png" alt="" /></div>
            </div>
        </div>
        <!-- /SERVICES -->

        <!-- TESTIMONIALS -->
        <div class="dizme_tm_section">
            <div class="dizme_tm_testimonials">
                <div class="dizme_tm_main_title" data-align="center">
                    <span>Testimonials</span>
                    <h3>What My Clients Say</h3>
                    <p>Most common methods for designing websites that work well on desktop is responsive and adaptive
                        design</p>
                </div>
                <div class="list_wrapper">
                    <div class="total">
                        <div class="in">
                            <ul class="owl-carousel owl-theme">
                                <li>
                                    <div class="icon">
                                        <img class="svg" src="{{ asset('front') }}/img/svg/testimonials/quote.svg"
                                            alt="" />
                                    </div>
                                    <div class="text">
                                        <p>I rarely like to write reviews, but the Marketify team truly deserve a
                                            standing ovation for their customer support, customisation and most
                                            importantly, friendliness and professionalism. Many thanks once again for
                                            everything and hope that I get to deal with you again in the near future.
                                        </p>
                                    </div>
                                    <div class="short">
                                        <div class="image">
                                            <div class="main"
                                                data-img-url="{{ asset('front') }}/img/testimonials/4.jpg"></div>
                                        </div>
                                        <div class="detail">
                                            <h3>Mike Anderson</h3>
                                            <span>Vivaco Studio</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img class="svg" src="{{ asset('front') }}/img/svg/testimonials/quote.svg"
                                            alt="" />
                                    </div>
                                    <div class="text">
                                        <p>Really the Code Quality, Customer Support, and design are awesome and its
                                            good support they are giving. They give an instant solution to our needs.
                                            Really awesome. I will strongly recommend to my friends. Simply amazing team
                                            and amazing theme! Thank you from United States of America!</p>
                                    </div>
                                    <div class="short">
                                        <div class="image">
                                            <div class="main"
                                                data-img-url="{{ asset('front') }}/img/testimonials/3.jpg"></div>
                                        </div>
                                        <div class="detail">
                                            <h3>Keita Smith</h3>
                                            <span>ABC Group</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img class="svg" src="{{ asset('front') }}/img/svg/testimonials/quote.svg"
                                            alt="" />
                                    </div>
                                    <div class="text">
                                        <p>Loved the template design, documentation, customizability and the customer
                                            support from Marketify team! I am a noob in programming with very little
                                            knowledge about coding but the Marketify team helped me to launch my resume
                                            website successfully. Much recommended!</p>
                                    </div>
                                    <div class="short">
                                        <div class="image">
                                            <div class="main"
                                                data-img-url="{{ asset('front') }}/img/testimonials/6.jpg"></div>
                                        </div>
                                        <div class="detail">
                                            <h3>Alan Walker</h3>
                                            <span>Web Designer</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="left_details">
                            <div class="det_image one wow fadeIn" data-wow-duration="1s"
                                data-img-url="{{ asset('front') }}/img/testimonials/2.jpg"></div>
                            <div class="det_image two wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s"
                                data-img-url="{{ asset('front') }}/img/testimonials/1.jpg"></div>
                            <div class="det_image three wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s"
                                data-img-url="{{ asset('front') }}/img/testimonials/3.jpg"></div>
                            <div class="det_image four wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s"
                                data-img-url="{{ asset('front') }}/img/testimonials/4.jpg"></div>
                            <span class="circle green animPulse"></span>
                            <span class="circle yellow animPulse"></span>
                            <span class="circle border animPulse"></span>
                        </div>
                        <div class="right_details">
                            <div class="det_image one wow fadeIn" data-wow-duration="1s"
                                data-img-url="{{ asset('front') }}/img/testimonials/5.jpg"></div>
                            <div class="det_image two wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s"
                                data-img-url="{{ asset('front') }}/img/testimonials/6.jpg"></div>
                            <div class="det_image three wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s"
                                data-img-url="{{ asset('front') }}/img/testimonials/7.jpg"></div>
                            <span class="circle yellow animPulse"></span>
                            <span class="circle purple animPulse"></span>
                            <span class="circle border animPulse"></span>
                        </div>
                    </div>
                </div>
                <div class="brush_1 wow fadeInRight" data-wow-duration="1s"><img
                        src="{{ asset('front') }}/img/brushes/testimonials/1.png" alt="" /></div>
            </div>
        </div>
        <!-- /TESTIMONIALS -->

        <!-- PARTNERS -->
        <div class="dizme_tm_section">
            <div class="dizme_tm_partners">
                <div class="container">
                    <div class="partners_inner">
                        <ul>
                            <li class="wow fadeIn" data-wow-duration="1s">
                                <div class="list_inner">
                                    <img src="{{ asset('front') }}/img/partners/dark/1.png" alt="" />
                                    <a class="dizme_tm_full_link" a href="#"></a>
                                </div>
                            </li>
                            <li class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                <div class="list_inner">
                                    <img src="{{ asset('front') }}/img/partners/dark/2.png" alt="" />
                                    <a class="dizme_tm_full_link" a href="#"></a>
                                </div>
                            </li>
                            <li class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                <div class="list_inner">
                                    <img src="{{ asset('front') }}/img/partners/dark/3.png" alt="" />
                                    <a class="dizme_tm_full_link" a href="#"></a>
                                </div>
                            </li>
                            <li class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                                <div class="list_inner">
                                    <img src="{{ asset('front') }}/img/partners/dark/4.png" alt="" />
                                    <a class="dizme_tm_full_link" a href="#"></a>
                                </div>
                            </li>
                            <li class="wow fadeIn" data-wow-duration="1s">
                                <div class="list_inner">
                                    <img src="{{ asset('front') }}/img/partners/dark/5.png" alt="" />
                                    <a class="dizme_tm_full_link" a href="#"></a>
                                </div>
                            </li>
                            <li class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                <div class="list_inner">
                                    <img src="{{ asset('front') }}/img/partners/dark/6.png" alt="" />
                                    <a class="dizme_tm_full_link" a href="#"></a>
                                </div>
                            </li>
                            <li class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                <div class="list_inner">
                                    <img src="{{ asset('front') }}/img/partners/dark/7.png" alt="" />
                                    <a class="dizme_tm_full_link" a href="#"></a>
                                </div>
                            </li>
                            <li class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                                <div class="list_inner">
                                    <img src="{{ asset('front') }}/img/partners/dark/8.png" alt="" />
                                    <a class="dizme_tm_full_link" a href="#"></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="brush_1 wow fadeInLeft" data-wow-duration="1s"><img
                        src="{{ asset('front') }}/img/brushes/partners/1.png" alt="" /></div>
            </div>
        </div>
        <!-- /PARTNERS -->

        <!-- NEWS -->
        <div class="dizme_tm_section" id="blog">
            <div class="dizme_tm_news">
                <div class="container">
                    <div class="dizme_tm_main_title" data-align="center">
                        <span>From My Blog</span>
                        <h3>Our Recent Updates, Blog, Tips, Tricks &amp; More</h3>
                    </div>
                    <div class="news_list">
                        <ul>
                            <li class="wow fadeInUp" data-wow-duration="1s">
                                <div class="list_inner">
                                    <div class="image">
                                        <img src="{{ asset('front') }}/img/thumbs/42-29.jpg" alt="" />
                                        <div class="main" data-img-url="{{ asset('front') }}/img/news/1.jpg"></div>
                                        <div class="date">
                                            <h3>23</h3>
                                            <span>Dec</span>
                                        </div>
                                        <a class="dizme_tm_full_link" href="#"></a>
                                    </div>
                                    <div class="details">
                                        <span class="category"><a href="#">Web Development</a></span>
                                        <h3 class="title"><a href="#">Jim Morisson Says when the musics over
                                                turn off the light</a></h3>
                                    </div>

                                    <div class="news_hidden_details">
                                        <div class="news_popup_informations">
                                            <div class="text">
                                                <p>Dizme is a leading web design agency with an award-winning design
                                                    team that creates innovative, effective websites that capture your
                                                    brand, improve your conversion rates, and maximize your revenue to
                                                    help grow your business and achieve your goals.</p>
                                                <p>In today’s digital world, your website is the first interaction
                                                    consumers have with your business. That's why almost 95 percent of a
                                                    user’s first impression relates to web design. It’s also why web
                                                    design services can have an immense impact on your company’s bottom
                                                    line.</p>
                                                <p>That’s why more companies are not only reevaluating their website’s
                                                    design but also partnering with Kura, the web design agency that’s
                                                    driven more than $2.4 billion in revenue for its clients. With over
                                                    50 web design awards under our belt, we're confident we can design a
                                                    custom website that drives sales for your unique business.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                                <div class="list_inner">
                                    <div class="image">
                                        <img src="{{ asset('front') }}/img/thumbs/42-29.jpg" alt="" />
                                        <div class="main" data-img-url="{{ asset('front') }}/img/news/2.jpg"></div>
                                        <div class="date">
                                            <h3>23</h3>
                                            <span>Dec</span>
                                        </div>
                                        <a class="dizme_tm_full_link" href="#"></a>
                                    </div>
                                    <div class="details">
                                        <span class="category"><a href="#">Branding</a></span>
                                        <h3 class="title"><a href="#">How to be appreciated for your hard work
                                                as a developer</a></h3>
                                    </div>

                                    <div class="news_hidden_details">
                                        <div class="news_popup_informations">
                                            <div class="text">
                                                <p>Dizme is a leading web design agency with an award-winning design
                                                    team that creates innovative, effective websites that capture your
                                                    brand, improve your conversion rates, and maximize your revenue to
                                                    help grow your business and achieve your goals.</p>
                                                <p>In today’s digital world, your website is the first interaction
                                                    consumers have with your business. That's why almost 95 percent of a
                                                    user’s first impression relates to web design. It’s also why web
                                                    design services can have an immense impact on your company’s bottom
                                                    line.</p>
                                                <p>That’s why more companies are not only reevaluating their website’s
                                                    design but also partnering with Kura, the web design agency that’s
                                                    driven more than $2.4 billion in revenue for its clients. With over
                                                    50 web design awards under our belt, we're confident we can design a
                                                    custom website that drives sales for your unique business.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                                <div class="list_inner">
                                    <div class="image">
                                        <img src="{{ asset('front') }}/img/thumbs/42-29.jpg" alt="" />
                                        <div class="main" data-img-url="{{ asset('front') }}/img/news/3.jpg">
                                        </div>
                                        <div class="date">
                                            <h3>23</h3>
                                            <span>Dec</span>
                                        </div>
                                        <a class="dizme_tm_full_link" href="#"></a>
                                    </div>
                                    <div class="details">
                                        <span class="category"><a href="#">Social Media</a></span>
                                        <h3 class="title"><a href="#">How designers and developers can
                                                collaborate better</a></h3>
                                    </div>

                                    <div class="news_hidden_details">
                                        <div class="news_popup_informations">
                                            <div class="text">
                                                <p>Dizme is a leading web design agency with an award-winning design
                                                    team that creates innovative, effective websites that capture your
                                                    brand, improve your conversion rates, and maximize your revenue to
                                                    help grow your business and achieve your goals.</p>
                                                <p>In today’s digital world, your website is the first interaction
                                                    consumers have with your business. That's why almost 95 percent of a
                                                    user’s first impression relates to web design. It’s also why web
                                                    design services can have an immense impact on your company’s bottom
                                                    line.</p>
                                                <p>That’s why more companies are not only reevaluating their website’s
                                                    design but also partnering with Kura, the web design agency that’s
                                                    driven more than $2.4 billion in revenue for its clients. With over
                                                    50 web design awards under our belt, we're confident we can design a
                                                    custom website that drives sales for your unique business.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="brush_1 wow zoomIn" data-wow-duration="1s"><img
                        src="{{ asset('front') }}/img/brushes/news/1.png" alt="" /></div>
                <div class="brush_2 wow zoomIn" data-wow-duration="1s"><img
                        src="{{ asset('front') }}/img/brushes/news/2.png" alt="" /></div>
            </div>
        </div>
        <!-- /NEWS -->

        <!-- SUBSCRIBE -->
        <div class="dizme_tm_section">
            <div class="dizme_tm_subscribe">
                <div class="container">
                    <div class="inner">
                        <div class="background">
                            <div class="dots" data-img-url="{{ asset('front') }}/img/subscribe/dots.jpg"></div>
                            <div class="overlay"></div>
                        </div>
                        <div class="content">
                            <div class="left wow fadeInLeft" data-wow-duration="1s">
                                <span class="subtitle">Subscribe Now</span>
                                <h3 class="title">Get My Newsletter</h3>
                                <p class="text">Get latest news, updates, tips and trics in your inbox</p>
                            </div>
                            <div class="right wow fadeInRight" data-wow-duration="1s">
                                <div class="field">
                                    <input type="text" placeholder="Your email here">
                                    <input type="submit" value="Send Now" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /SUBSCRIBE -->

        <!-- CONTACT -->
        <div class="dizme_tm_section" id="contact">
            <div class="dizme_tm_contact">
                <div class="container">
                    <div class="dizme_tm_main_title" data-align="center">
                        <span>Contact Me</span>
                        <h3>I Want To Hear From You</h3>
                        <p>Please fill out the form on this section to contact with me. Or call between 9:00 a.m. and
                            8:00 p.m. ET, Monday through Friday</p>
                    </div>
                    <div class="contact_inner">
                        <div class="left wow fadeInLeft" data-wow-duration="1s">
                            <ul>
                                <li>
                                    <div class="list_inner">
                                        <div class="icon orangeBackground">
                                            <i class="icon-location orangeText"></i>
                                        </div>
                                        <div class="short">
                                            <h3>Address</h3>
                                            <span>20, Somewhere in world</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list_inner">
                                        <div class="icon greenBackground">
                                            <i class="icon-mail-1 greenText"></i>
                                        </div>
                                        <div class="short">
                                            <h3>Email</h3>
                                            <span><a href="#">hello@dizme.com</a></span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list_inner">
                                        <div class="icon purpleBackground">
                                            <i class="icon-phone purpleText"></i>
                                        </div>
                                        <div class="short">
                                            <h3>Phone</h3>
                                            <span>+123 456 7890</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="right wow fadeInRight" data-wow-duration="1s">
                            <div class="fields">
                                <form action="/" method="post" class="contact_form" id="contact_form"
                                    autocomplete="off">
                                    <div class="returnmessage"
                                        data-success="Your message has been received, We will contact you soon."></div>
                                    <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                                    <div class="input_list">
                                        <ul>
                                            <li><input id="name" type="text" placeholder="Your Name" /></li>
                                            <li><input id="email" type="text" placeholder="Your Email" /></li>
                                            <li><input id="phone" type="number" placeholder="Your Phone" /></li>
                                            <li><input id="subject" type="text" placeholder="Subject" /></li>
                                        </ul>
                                    </div>
                                    <div class="message_area">
                                        <textarea id="message" placeholder="Write your message here"></textarea>
                                    </div>
                                    <div class="dizme_tm_button">
                                        <a id="send_message" href="#"><span>Submit Now</span></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="brush_2 wow fadeInRight" data-wow-duration="1s"><img
                                src="{{ asset('front') }}/img/brushes/contact/2.png" alt="" /></div>
                    </div>
                    <div class="dizme_tm_map wow fadeInUp" data-wow-duration="1s">
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe width="100%" height="375" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                                    href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon"></a><br>
                                <style>
                                    .mapouter {
                                        position: relative;
                                        text-align: right;
                                        height: 375px;
                                        width: 100%;
                                    }
                                </style><a href="https://www.embedgooglemap.net">how to add google map</a>
                                <style>
                                    .gmap_canvas {
                                        overflow: hidden;
                                        background: none !important;
                                        height: 375px;
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>

                        <!-- Get your API here https://www.embedgooglemap.net -->
                    </div>

                </div>
                <div class="brush_1 wow fadeInLeft" data-wow-duration="1s"><img
                        src="{{ asset('front') }}/img/brushes/contact/1.png" alt="" /></div>
            </div>
        </div>
        <!-- /CONTACT -->

        <!-- COPYRIGHT -->
        <div class="dizme_tm_section">
            <div class="dizme_tm_copyright">
                <div class="container">
                    <div class="inner">
                        <div class="left wow fadeInLeft" data-wow-duration="1s">
                            <p>{{setting('copyright.text')}}</p>
                        </div>
                        <div class="right wow fadeInRight" data-wow-duration="1s">
                            <ul>
                                <li><a href="#">Terms &amp; Condition</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /COPYRIGHT -->

        <!-- CURSOR -->
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>
        <!-- /CURSOR -->

        <!-- TOTOP -->
        <div class="progressbar">
            <a href="#"><span class="text">To Top</span></a>
            <span class="line"></span>
        </div>
        <!-- /TOTOP -->

    </div>
    <!-- / WRAPPER ALL -->

    <!-- SCRIPTS -->
    <script src="{{ asset('front') }}/js/jquery.js"></script>
    <!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->
    <script src="{{ asset('front') }}/js/plugins.js"></script>
    <script src="{{ asset('front') }}/js/init.js"></script>
    <!-- /SCRIPTS -->

</body>

</html>
