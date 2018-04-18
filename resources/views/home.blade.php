@extends('layouts.site')

@section('content')
<!-- Preloader Gif -->
<table class="doc-loader">
    <tr>
        <td>
            <img src="images/loader.gif" alt="Loading..."/>
        </td>
    </tr>
</table>

<!-- Menu -->
<div class="menu-wrapper center-relative">
    <nav id="header-main-menu">
        <div class="mob-menu">MENU</div>
        <ul class="main-menu sm sm-clean">
            <li><a href="#home">{!! trans('menu.home') !!}</a></li>
            <li><a href="#about">{!! trans('menu.about') !!}</a></li>
            <li><a href="#services">{!! trans('menu.services') !!}</a></li>
            <li><a href="#portfolio">{!! trans('menu.portfolio') !!}</a></li>
            <li><a href="#testimonials">{!! trans('menu.testimonials') !!}</a></li>
            <li><a href="#prices">{!! trans('menu.prices') !!}</a></li>
            {{--<li><a href="#video">Video</a></li>
            <li><a href="#skills">Skills</a></li>--}}
            <li><a href="#contact">{!! trans('menu.contact') !!}</a></li>
        </ul>
    </nav>
</div>

<!-- Home -->
<div id="home" class="section intro-page" style="background-image:url(/images/bgs/{{rand(2, 5)}}.jpg);">
    <div class="block content-1170 center-relative center-text">
        <img class="top-logo" src="images/annagrafie-03.png" alt="Boxus"/>
        <br>
        <h1 class="big-title" style="color: #ff00ff">{!! trans('titles.intro') !!}</h1>
        <p class="title-desc">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <a rel="alternate" hreflang="{{ $localeCode }}"
                   href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" class="aLang">
                    {{ $properties['native'] }}
                </a>
            @endforeach
        </p>
    </div>
</div>

<!-- About -->
<div id="about" class="section">
    <div class="block content-1170 center-relative">
        <div class="section-title-holder left">
            <h2 class="entry-title">{!! trans('titles.about') !!}</h2>
        </div>
        <div class="section-content-holder right">
            <div class="content-wrapper">
                <div class="one_half ">
                    <span style="color: #e54b76;"><strong>{!! trans('descriptions.about.part.one') !!}</strong></span><br><br>
                    <h4 class="member-name">Anna Reisch</h4>
                    <p class="member-position">{!! trans('descriptions.photographer') !!}</p>
                </div>
                <div class="one_half last ">
                    {!! trans('descriptions.about.part.two') !!}
                    {{--
                                                <span style="color: #e54b76;"><strong>2003-2006 ·</strong></span> <span style="color:#727190;"><em>Per Set Web Site</em></span><br>
                                                <span style="color: #e54b76;"><strong>2006-2010 ·</strong></span> <span style="color:#727190;"><em>Setera Donec EstNunc</em></span><br>
                                                <span style="color: #e54b76;"><strong>2010-2013 ·</strong></span> <span style="color:#727190;"><em>Studio Labore Tempor</em></span><br>
                                                <span style="color: #e54b76;"><strong>2013-2016 ·</strong></span> <span style="color:#727190;"><em>Magna Ipsum Amet</em></span><br>
                    --}}
                </div>
                <div class="clear"></div>
            </div>

            <div class="full-width ">
                <script>
                    var team1_speed = "500";
                    var team1_auto = "false";
                    var team1_hover = "true";
                </script>
                <div class="image-slider-wrapper relative team team1">
                    <a id="team1_next" class="image_slider_next" href="#"></a>
                    <div class="caroufredsel_wrapper">
                        <ul id="team1" class="image-slider slides">
                            <li>
                                <div class="member-content-holder">
                                    <div class="member-content">
                                        {!! trans('descriptions.about.part.three') !!}<br>
                                    </div>
                                </div>
                                <div class="member-image-holder" style="padding-top: 20px">
                                    <img src="images/anna_reisch.jpg" alt="">
                                </div>
                                <div class="clear"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
                <br>
                <div class="content-wrapper" style="padding-top: 60px; padding-bottom: 40px;">
                    <p style="line-height: 20px; padding-bottom: 30px;">
                        <span style="color: #e54b76;"><strong>{!! trans('descriptions.about.languages') !!}</strong></span>
                    </p>
                    <br>
                    <div class="progress_bar ">
                        <div class="progress_bar_field_holder" style="width:95%;">
                            <div class="progress_bar_title" style="color: #55B286">Deutsch</div>
                            {{--<div class="progress_bar_percent_text" style="color: #55B286">301%</div>--}}
                            <div class="progress_bar_field_perecent" style="background-color:#32DB8A;"></div>
                        </div>
                    </div>
                    <div class="progress_bar ">
                        <div class="progress_bar_field_holder" style="width:85%;">
                            <div class="progress_bar_title" style="color: #E3A536">français </div>
                            {{--<div class="progress_bar_percent_text" style="color: #E3A536">300 CHF</div>--}}
                            <div class="progress_bar_field_perecent" style="background-color:#FFBB42;"></div>
                        </div>
                    </div>
                    <div class="progress_bar ">
                        <div class="progress_bar_field_holder" style="width:90%;">
                            <div class="progress_bar_title" style="color: #B24564">English</div>
                            {{--<div class="progress_bar_percent_text" style="color: #B24564">360 CHF</div>--}}
                            <div class="progress_bar_field_perecent" style="background-color:#E74C78;"></div>
                        </div>
                    </div>
                    <div class="progress_bar ">
                        <div class="progress_bar_field_holder" style="width:99%;">
                            <div class="progress_bar_title" style="color: #468ac7">українська</div>
                            {{--<div class="progress_bar_percent_text" style="color: #468ac7">160 CHF</div>--}}
                            <div class="progress_bar_field_perecent" style="background-color:#4C9EE7;"></div>
                        </div>
                    </div>
                </div>
            </div>   <!-- end full-width div -->

        </div>
        <div class="clear"></div>
    </div>
</div>

<!-- Services -->
<div id="services" class="section">
    <div class="block content-1170 center-relative">
        <div class="section-title-holder right">
            <h2 class="entry-title">{!! trans('titles.services') !!}</h2>
        </div>
        <div class="section-content-holder left">
            <div class="content-wrapper">
                <script>
                    var slider1_speed = "500";
                    var slider1_auto = "false";
                    var slider1_hover = "true";
                </script>
                <div class="image-slider-wrapper relative service slider1">
                    <a id="slider1_next" class="image_slider_next" href="#"></a>

                    <ul id="slider1" class="image-slider slides">
                        <li>
                            <div class="service-holder ">
                                <img src="demo-images/icon_01.png" alt="">
                                <div class="service-content-holder">
                                    <div class="service-title">{!! trans('titles.services.portrait') !!}</div>
                                    <div class="service-content">
                                        {!! trans('descriptions.services.portrait') !!}<br/>
                                    </div>
                                </div>
                            </div>
                            <div class="service-holder ">
                                <img src="demo-images/icon_01.png" alt="">
                                <div class="service-content-holder">
                                    <div class="service-title">{!! trans('titles.services.children') !!}</div>
                                    <div class="service-content">
                                        {!! trans('descriptions.services.children') !!}<br/>
                                    </div>
                                </div>
                            </div>
                            <div class="service-holder ">
                                <img src="demo-images/icon_01.png" alt="">
                                <div class="service-content-holder">
                                    <div class="service-title">{!! trans('titles.services.birthday') !!}</div>
                                    <div class="service-content">
                                        {!! trans('descriptions.services.birthday') !!}<br/>
                                    </div>
                                </div>
                            </div>
                            <div class="service-holder ">
                                <img src="demo-images/icon_01.png" alt="">
                                <div class="service-content-holder">
                                    <div class="service-title">{!! trans('titles.services.family') !!}</div>
                                    <div class="service-content">
                                        {!! trans('descriptions.services.family') !!}<br/>
                                    </div>
                                </div>
                            </div>
                            <div class="service-holder ">
                                <img src="demo-images/icon_01.png" alt="">
                                <div class="service-content-holder">
                                    <div class="service-title">{!! trans('titles.services.parties') !!}</div>
                                    <div class="service-content">
                                        {!! trans('descriptions.services.parties') !!}<br/>
                                    </div>
                                </div>
                            </div>
                            <div class="service-holder ">
                                <img src="demo-images/icon_01.png" alt="">
                                <div class="service-content-holder">
                                    <div class="service-title">{!! trans('titles.services.lovestory') !!}</div>
                                    <div class="service-content">
                                        {!! trans('descriptions.services.lovestory') !!}<br/>
                                    </div>
                                </div>
                            </div>
                            <div class="service-holder ">
                                <img src="demo-images/icon_01.png" alt="">
                                <div class="service-content-holder">
                                    <div class="service-title">{!! trans('titles.services.present') !!}</div>
                                    <div class="service-content">
                                        {!! trans('descriptions.services.present') !!}<br/>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <br><br>
                <p style="color: #4C9EE7;">{!! trans('descriptions.services.place') !!}</p>

            </div>
        </div>
        <div class='clear'></div>
    </div>
</div>

<!-- Portfolio -->
<div id="portfolio" class="portfolio section">
    <div class="block content-1170 center-relative">
        <div class="section-title-holder left" style="background-color: #75568C;">
            <h2 class="entry-title">{!! trans('titles.portfolio.portrait') !!}</h2>
        </div>
        <div class="section-content-holder portfolio-holder right">
            <div class="grid" id="portfolio-grid">
                <div class="grid-sizer"></div>
                <div class="grid-item element-item p_one">
                    <a data-rel="prettyPhoto[gallery1]" href="images/portfolio/portrait/p5.jpg">
                        <img src="images/portfolio/portrait/p5.jpg" alt="">
                        <div class="portfolio-text-holder">
                            <div class="portfolio-text-wrapper">
                                <p class="portfolio-type">
                                    <img src="images/icon-ra.svg">
                                </p>
                                <p class="portfolio-text">{!! trans('titles.portfolio.portrait') !!}</p>
                                <p class="portfolio-sec-text">Teenager joy</p>
                        </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item element-item p_one_half">
                    <a data-rel="prettyPhoto[gallery1]" href="images/portfolio/portrait/p3.jpg">
                        <img src="images/portfolio/portrait/p3.jpg" alt="">
                        <div class="portfolio-text-holder">
                            <div class="portfolio-text-wrapper">
                                <p class="portfolio-type">
                                    <img src="images/icon-ra.svg">
                                </p>
                                <p class="portfolio-text">{!! trans('titles.portfolio.portrait') !!}</p>
                                <p class="portfolio-sec-text">Stefan Reisch, German football star</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item element-item p_one_half">
                    <a data-rel="prettyPhoto[gallery1]" href="images/portfolio/portrait/p1.jpg">
                        <img src="images/portfolio/portrait/p1.jpg" alt="">
                        <div class="portfolio-text-holder">
                            <div class="portfolio-text-wrapper">
                                <p class="portfolio-type">
                                    <img src="images/icon-ra.svg">
                                </p>
                                <p class="portfolio-text">{!! trans('titles.portfolio.portrait') !!}</p>
                                <p class="portfolio-sec-text">Warm glance in winter</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item element-item p_one">
                    <a data-rel="prettyPhoto[gallery1]" href="images/portfolio/portrait/p2.jpg">
                        <img src="images/portfolio/portrait/p2.jpg" alt="">
                        <div class="portfolio-text-holder">
                            <div class="portfolio-text-wrapper">
                                <p class="portfolio-type">
                                    <img src="images/icon-ra.svg">
                                </p>
                                <p class="portfolio-text">{!! trans('titles.portfolio.portrait') !!}</p>
                                <p class="portfolio-sec-text">Catch this if you can</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item element-item p_one_half">
                    <a data-rel="prettyPhoto[gallery1]" href="images/portfolio/portrait/p6.jpg">
                        <img src="images/portfolio/portrait/p6.jpg" alt="">
                        <div class="portfolio-text-holder">
                            <div class="portfolio-text-wrapper">
                                <p class="portfolio-type">
                                    <img src="images/icon-ra.svg">
                                </p>
                                <p class="portfolio-text">{!! trans('titles.portfolio.portrait') !!}</p>
                                <p class="portfolio-sec-text">A man, a friend, a husband</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item element-item p_one_half">
                    <a data-rel="prettyPhoto[gallery1]" href="images/portfolio/portrait/p4.jpg">
                        <img src="images/portfolio/portrait/p4.jpg" alt="">
                        <div class="portfolio-text-holder">
                            <div class="portfolio-text-wrapper">
                                <p class="portfolio-type">
                                    <img src="images/icon-ra.svg">
                                </p>
                                <p class="portfolio-text">{!! trans('titles.portfolio.portrait') !!}</p>
                                <p class="portfolio-sec-text">Unfading beauty</p>
                            </div>
                        </div>
                    </a>
                </div>


            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>

<div id="portfolio1" class="portfolio section" style="background-image: url('images/ag-bg.png')">
    <div class="block content-1170 center-relative">
        <div class="section-title-holder right">
            <h2 class="entry-title">{!! trans('titles.portfolio.children') !!}</h2>
        </div>
        <div class="section-content-holder portfolio-holder left">
            <div class="grid" id="portfolio-grid">
                <div class="grid-sizer"></div>
                <div class="grid-item element-item p_one">
                    <a data-rel="prettyPhoto[gallery1]" href="images/portfolio/children/k2.jpg">
                        <img src="images/portfolio/children/k2.jpg" alt="">
                        <div class="portfolio-text-holder">
                            <div class="portfolio-text-wrapper">
                                <p class="portfolio-type">
                                    <img src="images/icon-ra.svg">
                                </p>
                                <p class="portfolio-text">{!! trans('titles.portfolio.children') !!}</p>
                                <p class="portfolio-sec-text">Lucie, my beloved daughter</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item element-item p_one_half">
                    <a data-rel="prettyPhoto[gallery1]" href="images/portfolio/children/k5.jpg">
                        <img src="images/portfolio/children/k5.jpg" alt="">
                        <div class="portfolio-text-holder">
                            <div class="portfolio-text-wrapper">
                                <p class="portfolio-type">
                                    <img src="images/icon-ra.svg">
                                </p>
                                <p class="portfolio-text">{!! trans('titles.portfolio.children') !!}</p>
                                <p class="portfolio-sec-text">Eyes, eyes, eyes</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item element-item p_one_half">
                    <a data-rel="prettyPhoto[gallery1]" href="images/portfolio/children/k8.jpg">
                        <img src="images/portfolio/children/k8.jpg" alt="">
                        <div class="portfolio-text-holder">
                            <div class="portfolio-text-wrapper">
                                <p class="portfolio-type">
                                    <img src="images/icon-ra.svg">
                                </p>
                                <p class="portfolio-text">{!! trans('titles.portfolio.children') !!}</p>
                                <p class="portfolio-sec-text">My favorite toy</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item element-item p_one">
                    <a data-rel="prettyPhoto[gallery1]" href="images/portfolio/children/k1.jpg">
                        <img src="images/portfolio/children/k1.jpg" alt="">
                        <div class="portfolio-text-holder">
                            <div class="portfolio-text-wrapper">
                                <p class="portfolio-type">
                                    <img src="images/icon-ra.svg">
                                </p>
                                <p class="portfolio-text">{!! trans('titles.portfolio.children') !!}</p>
                                <p class="portfolio-sec-text">Spring adornment</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item element-item p_one_half">
                    <a data-rel="prettyPhoto[gallery1]" href="images/portfolio/children/k7.jpg">
                        <img src="images/portfolio/children/k7.jpg" alt="">
                        <div class="portfolio-text-holder">
                            <div class="portfolio-text-wrapper">
                                <p class="portfolio-type">
                                    <img src="images/icon-ra.svg">
                                </p>
                                <p class="portfolio-text">{!! trans('titles.portfolio.children') !!}</p>
                                <p class="portfolio-sec-text">Yoga style</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item element-item p_one_half">
                    <a data-rel="prettyPhoto[gallery1]" href="images/portfolio/children/k6.jpg">
                        <img src="images/portfolio/children/k6.jpg" alt="">
                        <div class="portfolio-text-holder">
                            <div class="portfolio-text-wrapper">
                                <p class="portfolio-type">
                                    <img src="images/icon-ra.svg">
                                </p>
                                <p class="portfolio-text">{!! trans('titles.portfolio.children') !!}</p>
                                <p class="portfolio-sec-text">Let's rock!</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item element-item p_one">
                    <a data-rel="prettyPhoto[gallery1]" href="images/portfolio/children/k3.jpg">
                        <img src="images/portfolio/children/k3.jpg" alt="">
                        <div class="portfolio-text-holder">
                            <div class="portfolio-text-wrapper">
                                <p class="portfolio-type">
                                    <img src="images/icon-ra.svg">
                                </p>
                                <p class="portfolio-text">{!! trans('titles.portfolio.children') !!}</p>
                                <p class="portfolio-sec-text">Sm i l i ng the world</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>

<div id="portfolio2" class="portfolio section">
    <div class="block content-1170 center-relative">
        <div class="section-title-holder left" style="background-color: #968278;">
            <h2 class="entry-title">{!! trans('titles.portfolio.family') !!}</h2>
        </div>
        <div class="section-content-holder portfolio-holder right">
            <div class="grid" id="portfolio-grid">
                <div class="grid-sizer"></div>
                <div class="grid-item element-item p_one">
                    <a data-rel="prettyPhoto[gallery1]" href="images/portfolio/family/f3.jpg">
                        <img src="images/portfolio/family/f3.jpg" alt="">
                        <div class="portfolio-text-holder">
                            <div class="portfolio-text-wrapper">
                                <p class="portfolio-type">
                                    <img src="images/icon-ra.svg">
                                </p>
                                <p class="portfolio-text">{!! trans('titles.portfolio.family') !!}</p>
                                <p class="portfolio-sec-text">Double kiss</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item element-item p_one_half">
                    <a data-rel="prettyPhoto[gallery1]" href="images/portfolio/family/f6.jpg">
                        <img src="images/portfolio/family/f6.jpg" alt="">
                        <div class="portfolio-text-holder">
                            <div class="portfolio-text-wrapper">
                                <p class="portfolio-type">
                                    <img src="images/icon-ra.svg">
                                </p>
                                <p class="portfolio-text">{!! trans('titles.portfolio.family') !!}</p>
                                <p class="portfolio-sec-text">Tesla for kids</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item element-item p_one_half">
                    <a data-rel="prettyPhoto[gallery1]" href="images/portfolio/family/f1.jpg">
                        <img src="images/portfolio/family/f1.jpg" alt="">
                        <div class="portfolio-text-holder">
                            <div class="portfolio-text-wrapper">
                                <p class="portfolio-type">
                                    <img src="images/icon-ra.svg">
                                </p>
                                <p class="portfolio-text">{!! trans('titles.portfolio.family') !!}</p>
                                <p class="portfolio-sec-text">True friends</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item element-item p_one">
                    <a data-rel="prettyPhoto[gallery1]" href="images/portfolio/family/f2.jpg">
                        <img src="images/portfolio/family/f2.jpg" alt="">
                        <div class="portfolio-text-holder">
                            <div class="portfolio-text-wrapper">
                                <p class="portfolio-type">
                                    <img src="images/icon-ra.svg">
                                </p>
                                <p class="portfolio-text">{!! trans('titles.portfolio.family') !!}</p>
                                <p class="portfolio-sec-text">Three sisters</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item element-item p_one_half">
                    <a data-rel="prettyPhoto[gallery1]" href="images/portfolio/family/f4.jpg">
                        <img src="images/portfolio/family/f4.jpg" alt="">
                        <div class="portfolio-text-holder">
                            <div class="portfolio-text-wrapper">
                                <p class="portfolio-type">
                                    <img src="images/icon-ra.svg">
                                </p>
                                <p class="portfolio-text">{!! trans('titles.portfolio.family') !!}</p>
                                <p class="portfolio-sec-text">I'm with you</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item element-item p_one_half">
                    <a data-rel="prettyPhoto[gallery1]" href="images/portfolio/family/f5.jpg">
                        <img src="images/portfolio/family/f5.jpg" alt="">
                        <div class="portfolio-text-holder">
                            <div class="portfolio-text-wrapper">
                                <p class="portfolio-type">
                                    <img src="images/icon-ra.svg">
                                </p>
                                <p class="portfolio-text">{!! trans('titles.portfolio.family') !!}</p>
                                <p class="portfolio-sec-text">You are not alone</p>
                            </div>
                        </div>
                    </a>
                </div>


            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>

<div id="portfolio3" class="portfolio section" style="background-image: url('images/ag-bg.png')">
    <div class="block content-1170 center-relative">
        <div class="section-title-holder right" style="background-color: #DD6B46;">
            <h2 class="entry-title">{!! trans('titles.portfolio.lovestory') !!}</h2>
        </div>
        <div class="section-content-holder portfolio-holder left">
            <div class="grid" id="portfolio-grid">
                <div class="grid-sizer"></div>
                <div class="grid-item element-item p_one">
                    <a data-rel="prettyPhoto[gallery1]" href="images/portfolio/love/el1.jpg">
                        <img src="images/portfolio/love/el1.jpg" alt="">
                        <div class="portfolio-text-holder">
                            <div class="portfolio-text-wrapper">
                                <p class="portfolio-type">
                                    <img src="images/icon-ra.svg">
                                </p>
                                <p class="portfolio-text">{!! trans('titles.portfolio.lovestory') !!}</p>
                                <p class="portfolio-sec-text">Painting on the wall</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item element-item p_one_half">
                    <a data-rel="prettyPhoto[gallery1]" href="images/portfolio/love/el2.jpg">
                        <img src="images/portfolio/love/el2.jpg" alt="">
                        <div class="portfolio-text-holder">
                            <div class="portfolio-text-wrapper">
                                <p class="portfolio-type">
                                    <img src="images/icon-ra.svg">
                                </p>
                                <p class="portfolio-text">{!! trans('titles.portfolio.lovestory') !!}</p>
                                <p class="portfolio-sec-text">Won't let you go</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item element-item p_one_half">
                    <a data-rel="prettyPhoto[gallery1]" href="images/portfolio/love/el3.jpg">
                        <img src="images/portfolio/love/el3.jpg" alt="">
                        <div class="portfolio-text-holder">
                            <div class="portfolio-text-wrapper">
                                <p class="portfolio-type">
                                    <img src="images/icon-ra.svg">
                                </p>
                                <p class="portfolio-text">{!! trans('titles.portfolio.lovestory') !!}</p>
                                <p class="portfolio-sec-text">The favourite flower</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid-item element-item p_one">
                    <a data-rel="prettyPhoto[gallery1]" href="images/portfolio/love/el4.jpg">
                        <img src="images/portfolio/love/el4.jpg" alt="">
                        <div class="portfolio-text-holder">
                            <div class="portfolio-text-wrapper">
                                <p class="portfolio-type">
                                    <img src="images/icon-ra.svg">
                                </p>
                                <p class="portfolio-text">{!! trans('titles.portfolio.lovestory') !!}</p>
                                <p class="portfolio-sec-text">Feel my heart</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>

<!-- Testimonials -->
<div id="testimonials" class="section">
    <div class="block content-1170 center-relative">
        <div class="section-title-holder left" style="background-color: #249B92;">
            <h2 class="entry-title">{!! trans('titles.testimonials') !!}</h2>
        </div>
        <div class="section-content-holder right" style="background-color: rgb(34, 28, 90); color: #fff;">
            <div class="content-wrapper">
                <script> var text1_speed = "500";
                    var text1_auto = "false";
                    var text1_hover = "true";
                </script>
                <div class="text1 testimonial-slider-holder slider-holder">
                    <div class="caroufredsel_wrapper">
                        <ul id="text1" class="slides testimonial">
                            <li>
                                <div class="testimonial-content">
                                    <p class="testimonial-text">Vielen Dank Anna für das Super Fotoshooting. Hat Spass
                                        gemacht, und die Fotos sind wirklich Schön geworden, dein Talent hat mich 100%
                                        überzeugt.</p>
                                    <p class="testimonial-author">Herr Wagner</p>
                                </div>
                                <div class="clear">
                                </div>
                            </li>
                            <li style="width: 500px;">
                                <div class="testimonial-content">
                                    <p class="testimonial-text">
                                        Ideen sehr gut und professionell umgesetzt.Du bist simpathische Fotografin mit
                                        viel Humor, gutem Auge, warmes Herz Aufnahmen wirken toll!!!</p>
                                    <p class="testimonial-author">Natascha und Stefan</p>
                                </div>
                                <div class="clear"></div>
                            </li>
                            <li>
                                <div class="testimonial-content">
                                    <p class="testimonial-text">It was realy grate to spend this few hours with u! We r
                                        very exited with this warm, natural, full of joy,pictures! I realy like to
                                        repeat it again in one month around... Little kids are changing so fast... Thank
                                        u!</p>
                                    <p class="testimonial-author">Tania</p>
                                </div>
                                <div class="clear"></div>
                            </li>
                            <li>
                                <div class="testimonial-content">
                                    <p class="testimonial-text">Die Fotos sind wunderschön geworden, und sie sind die
                                        besten, die unsere Familie von jetzt an besitzt! Ich empfehle dich jedem, der
                                        ehrliche, warme und voller Gefühle Fotos haben möchte. Wir werden uns bestimmt
                                        wieder an dich für neue Fotos wenden!</p>
                                    <p class="testimonial-author">Lesja</p>
                                </div>
                                <div class="clear"></div>
                            </li>
                            <li>
                                <div class="testimonial-content">
                                    <p class="testimonial-text">Thank you very much for your nice photos. Would
                                        recommend to everybody! They are bright and so natural and real, merci beacoup!
                                        For certain, we'll ask you for the next shooting in summer!</p>
                                    <p class="testimonial-author">Polina</p>
                                </div>
                                <div class="clear"></div>
                            </li>
                        </ul>
                    </div>
                    <a id="text1_next" class="carousel_text_next" href="#"></a>
                    <div class="clear"></div>
                </div>

                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <br><br>
</div>

<!-- Prices -->
<div id="prices" class="section">
    <div class="block content-1170 center-relative">
        <div class="section-title-holder right">
            <h2 class="entry-title">{!! trans('titles.prices') !!}</h2>
        </div>
        <div class="section-content-holder left">
            <div class="content-wrapper">
                <div class="blog-holder block center-relative">
                    <article class="relative blog-item-holder center-relative">
                        <div class="session-title">
                            <span class="session-name" style="color: #32db89">S</span>
                        </div>
                        <div class="session-length">45 - 60<br>min</div>
                        <div class="session-details">
                            {!! trans('descriptions.sessions.es') !!}
                        </div>
                        <div class="session-price" style="color: #32db89">
                            180<br><span class="currency">CHF</span>
                        </div>
                        <div class="clear"></div>
                    </article>
                    <article class="relative blog-item-holder center-relative">
                        <div class="session-title">
                            <span class="session-name" style="color: #4C9EE7">M</span>
                        </div>
                        <div class="session-length">75 - 90<br>min</div>
                        <div class="session-details">
                            {!! trans('descriptions.sessions.em') !!}
                        </div>
                        <div class="session-price" style="color: #4C9EE7">
                            240<br><span class="currency">CHF</span>
                        </div>
                        <div class="clear"></div>
                    </article>
                    <article class="relative blog-item-holder center-relative">
                        <div class="session-title">
                            <span class="session-name" style="color: rgb(230, 75, 119)">L</span>
                        </div>
                        <div class="session-length">105 - 120<br>min</div>
                        <div class="session-details">
                            {!! trans('descriptions.sessions.el') !!}
                        </div>
                        <div class="session-price" style="color: rgb(230, 75, 119)">
                            300<br><span class="currency">CHF</span>
                        </div>
                        <div class="clear"></div>
                    </article>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>

<!-- Contact -->
<div id="contact" class="section">
    <div class="block content-1170 center-relative">
        <div class="section-title-holder left">
            <h2 class="entry-title">{!! trans('titles.contact') !!}</h2>
        </div>
        <div class="section-content-holder right">
            <div class="content-wrapper">
                <div class="one_half ">
                    <p>{!! trans('descriptions.contact') !!}</p>
                    <br>
                    <p><strong><span style="color: #e64b77;">Email:</span></strong> <a href="mailto:anna.reisch@gmx.ch">anna.reisch@gmx.ch</a></p>
                    <br>
                    <p><strong><span style="color: #e64b77;">{!! trans('descriptions.contact.phone') !!}:</span></strong> +41762012260</p>
                    <br>
                    <p><strong><span style="color: #e64b77;">{!! trans('descriptions.contact.location.title') !!}:</span></strong> {!! trans('descriptions.contact.location') !!}</p>
                </div>
                <div class="one_half last">
                    <div class="contact-form">
                        <form id="contactForm">

                            <p><input id="name" type="text" name="your-name" placeholder="{!! trans('titles.name') !!}" required></p>
                            <p><input id="contact-email" type="email" name="your-email" placeholder="{!! trans('titles.email') !!}" required></p>
                            {{--<p><input id="subject" type="text" name="your-subject" placeholder="Subject"></p>--}}
                            <p><textarea id="message" name="your-message" placeholder="{!! trans('titles.message') !!}" required></textarea></p>
                            <p><input type="submit" value="{!! trans('titles.send') !!}"></p>
                            {{--<p><input type="submit" onClick="processContact()" value="{!! trans('titles.send') !!}"></p>--}}
                        </form>
                    </div>
                    <div id="ajaxLoader" style="text-align: center; display: none;">
                        <img src="images/ajax.gif" width="128" height="16" alt="Loading...">
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            {{--                    <div class="full-width">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4274.290564544589!2d-75.2952832049782!3d40.753669641460846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2srs!4v1444506658649" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>--}}
        </div>
        <div class="clear"></div>
    </div>
    <br>
</div>


<!-- Footer -->
<footer>
    <div class="footer content-1170 center-relative">
        <ul>
            <li class="copyright-footer">
                © 2018 All rights reserved | annagrafie.com</a>
            </li>
        </ul>
    </div>
</footer>


@endsection

@section('footer_scripts')


    <!--Load JavaScript-->
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type='text/javascript' src='/js/jquery.sticky-kit.min.js'></script>
    <script type='text/javascript' src='/js/jquery.smartmenus.min.js'></script>
    <script type='text/javascript' src='/js/jquery.sticky.js'></script>
    <script type='text/javascript' src='/js/jquery.dryMenu.js'></script>
    <script type='text/javascript' src='/js/isotope.pkgd.js'></script>
    <script type='text/javascript' src='/js/jquery.carouFredSel-6.2.0-packed.js'></script>
    <script type='text/javascript' src='/js/jquery.mousewheel.min.js'></script>
    <script type='text/javascript' src='/js/jquery.touchSwipe.min.js'></script>
    <script type='text/javascript' src='/js/jquery.easing.1.3.js'></script>
    <script type='text/javascript' src='/js/imagesloaded.pkgd.js'></script>
    <script type='text/javascript' src='/js/jquery.prettyPhoto.js'></script>
    {{--<script type='text/javascript' src='/js/main.js'></script>--}}

    @include('scripts.main')

@endsection

