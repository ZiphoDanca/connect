<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Stacked - Free CSS Template</title>
<!--
Stacked Template
http://www.templatemo.com/tm-505-stacked
-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <nav class="nav">
          <div class="burger">
            <div class="burger__patty"></div>
          </div>

          <ul class="nav__list">

              <li class="dropdown">
                  {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
                      {{--<center>--}}
                          {{--<img src="img/Profile.jpg" class="img-circle" style="height: 100px;width: 100px"/>--}}
                          {{--<br/>--}}
                      {{--</center>--}}
                  {{--</a>--}}

                  {{--<ul class="nav navbar-nav navbar-right">--}}
                      <!-- Authentication Links -->
                      @guest
                  <li class="nav__item">
                          <a href="{{ route('login') }}" class="nav__link c-yellow scrolly"><img src="img/login.png" alt=""></a>
                  </li>
                  <li class="nav__item">
                      <a href="{{ route('register') }}" class="nav__link c-yellow scrolly"><img src="img/register.png" alt="">
                      </a>
                   </li>
                          {{--<li style="width: auto"><a class="glyphicon-log-in" href="{{ route('login') }}">Login</a></li>--}}
{{--                          <li><a href="{{ route('register') }}">Register</a></li>--}}
                          @else
                              <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                      <center>
                                          <img src="img/Profile.jpg" class="img-circle" style="height: 100px;width: 100px"/>
                                          <br/>
{{--                                          {{ Auth::user()->name }}--}}
                                      </center>
                                  </a>

                                  <ul class="dropdown-menu">
                                      <li>
                                          <a href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                              Logout
                                          </a>

                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                              {{ csrf_field() }}
                                          </form>
                                      </li>
                                  </ul>
                              </li>
                              @endguest
                  {{--</ul>--}}
              </li>

              {{--<li class="nav__item">--}}
                  {{--<a href="#2" class="nav__link c-yellow scrolly"><img src="img/login.png" alt=""></a>--}}
              {{--</li>--}}
              {{--<li class="nav__item">--}}
                  {{--<a href="#2" class="nav__link c-yellow scrolly"><img src="img/register.png" alt="">--}}
                  {{--</a>--}}
              {{--</li>--}}
                      <li class="nav__item">
                          <a href="{{ url('homepage') }}" class="nav__link c-blue"><img src="img/home-icon.png" alt=""></a>
                      </li>
              <li class="nav__item">
                  <a href="#2" class="nav__link c-yellow scrolly"><img src="img/map.png" alt="">
                  </a>
              </li>
              <li class="nav__item">
                  <a href="#2" class="nav__link c-yellow scrolly"><img src="img/chat.png" alt="">
                  </a>
              </li>
            <li class="nav__item">
              <a href="#2" class="nav__link c-yellow scrolly"><img src="img/about-icon.png" alt=""></a>
            </li>
            <li class="nav__item">
              <a href="#3" class="nav__link c-red"><img src="img/projects-icon.png" alt=""></a>
            </li>
            <li class="nav__item">
              <a href="#4" class="nav__link c-green"><img src="img/contact-icon.png" alt=""></a>
            </li>
          </ul>
        </nav>


            @yield('content')
        <section class="panel b-blue" id="1">
            <article class="panel__wrapper">
                <div class="panel__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="home-content">
                                    <div class="home-heading">
                                        <h1><em>Connect+</em> connecting people</h1>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="home-box-content">
                                                <div class="left-text">
                                                    <h4><em>Connect+</em></h4>
                                                    <p>
                                                        Connect+ is the new easiest way to connect with people around this digital world. Connect+ also aims to promote events.
                                                        Promote businesses to reach out many customers. Sell and buy within members. Connect+ is the greatest platform for everyone. </p>
                                                    <div class="primary-button">
                                                    <a href="#2">Discover More</a>
                                                    </div>
                                                </div>
                                                <div class="right-image">
                                                    <img src="img/right-home-image.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="footer">
                                    <p>Copyright &copy; 2017 Connect+
                                        | Designed by <a href="http://www.facebook.com/zipho.danca" target="_parent">Zipho Danca</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
        </section>
        {{--<section class="panel b-yellow" id="2">--}}
          {{--<article class="panel__wrapper">--}}
            {{--<div class="panel__content">--}}
              {{--<div class="container">--}}
                {{--<div class="row">--}}
                  {{--<div class="col-md-8 col-md-offset-2">--}}
                    {{--<div class="about-content">--}}
                      {{--<div class="heading">--}}
                        {{--<h4>About us</h4>--}}
                      {{--</div>--}}
                      {{--<div class="row">--}}
                        {{--<div class="col-md-12">--}}
                          {{--<div class="about-box-content">--}}
                            {{--<img src="img/about-image.png" alt="">--}}
                          {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-7 col-md-offset-5">--}}
                          {{--<div class="about-box-text">--}}
                            {{--<h4>Curabitur varius sapien</h4>--}}
                            {{--<p>Nulla vel accumsan dui. Aliquam tincidunt elit elit, nec iaculis neque interdum dictum. Donec venenatis quam enim, eu mattis arcu rhoncus id. Ut ac urna tellus.</p>--}}
                            {{--<div class="primary-button">--}}
                              {{--<a href="#3">Discover More</a>--}}
                            {{--</div>--}}
                          {{--</div>--}}
                        {{--</div>--}}
                      {{--</div>--}}
                    {{--</div>--}}
                  {{--</div>--}}
                {{--</div>--}}
              {{--</div>--}}
            {{--</div>--}}
          {{--</article>--}}
        {{--</section>--}}
        {{--<section class="panel b-red" id="3">--}}
          {{--<article class="panel__wrapper">--}}
            {{--<div class="panel__content">--}}
              {{--<div class="container">--}}
                {{--<div class="row">--}}
                  {{--<div class="col-md-8 col-md-offset-2">--}}
                    {{--<div class="projects-content">--}}
                      {{--<div class="heading">--}}
                        {{--<h4>Recent Projects</h4>--}}
                      {{--</div>--}}
                      {{--<div class="row">--}}
                        {{--<div class="col-md-12">--}}
                          {{--<div class="owl-carousel owl-theme projects-container">--}}
                            {{--<div>--}}
                              {{--<div class="project-item">--}}
                                {{--<a href="img/project-item-01.jpg" data-lightbox="image-1"><img src="img/project-item-01.jpg" alt=""></a>--}}
                                {{--<div class="text-content">--}}
                                  {{--<h4>Best Design</h4>--}}
                                  {{--<p>Lorem ipsum dolor, adipis scing elit etiam ante vehicula, aliquam mauris in, luctus neque.</p>--}}
                                  {{--<div class="primary-button">--}}
                                    {{--<a href="#">Discover More</a>--}}
                                  {{--</div>--}}
                                {{--</div>--}}
                              {{--</div>--}}
                            {{--</div>--}}
                            {{--<div>--}}
                              {{--<div class="project-item">--}}
                                {{--<a href="img/project-item-02.jpg" data-lightbox="image-1"><img src="img/project-item-02.jpg" alt=""></a>--}}
                                {{--<div class="text-content">--}}
                                  {{--<h4>Creative Pen</h4>--}}
                                  {{--<p>Lorem ipsum dolor, adipis scing elit etiam ante vehicula, aliquam mauris in, luctus neque.</p>--}}
                                  {{--<div class="primary-button">--}}
                                    {{--<a href="#">Discover More</a>--}}
                                  {{--</div>--}}
                                {{--</div>--}}
                              {{--</div>--}}
                            {{--</div>--}}
                            {{--<div>--}}
                              {{--<div class="project-item">--}}
                                {{--<a href="img/project-item-03.jpg" data-lightbox="image-1"><img src="img/project-item-03.jpg" alt=""></a>--}}
                                {{--<div class="text-content">--}}
                                  {{--<h4>Nice Capture</h4>--}}
                                  {{--<p>Lorem ipsum dolor, adipis scing elit etiam ante vehicula, aliquam mauris in, luctus neque.</p>--}}
                                  {{--<div class="primary-button">--}}
                                    {{--<a href="#">Discover More</a>--}}
                                  {{--</div>--}}
                                {{--</div>--}}
                              {{--</div>--}}
                            {{--</div>--}}
                            {{--<div>--}}
                              {{--<div class="project-item">--}}
                                {{--<a href="img/project-item-04.jpg" data-lightbox="image-1"><img src="img/project-item-04.jpg" alt=""></a>--}}
                                {{--<div class="text-content">--}}
                                  {{--<h4>This Moment</h4>--}}
                                  {{--<p>Lorem ipsum dolor sit amet, adipis scing elit etiam sit amet ante vehicula, aliquam mauris in, luctus neque.</p>--}}
                                  {{--<div class="primary-button">--}}
                                    {{--<a href="#">Discover More</a>--}}
                                  {{--</div>--}}
                                {{--</div>--}}
                              {{--</div>--}}
                            {{--</div>--}}
                            {{--<div>--}}
                              {{--<div class="project-item">--}}
                                {{--<a href="img/project-item-05.jpg" data-lightbox="image-1"><img src="img/project-item-05.jpg" alt=""></a>--}}
                                {{--<div class="text-content">--}}
                                  {{--<h4>Artwork</h4>--}}
                                  {{--<p>Lorem ipsum dolor, adipis scing elit etiam ante vehicula, aliquam mauris in, luctus neque.</p>--}}
                                  {{--<div class="primary-button">--}}
                                    {{--<a href="#">Discover More</a>--}}
                                  {{--</div>--}}
                                {{--</div>--}}
                              {{--</div>--}}
                            {{--</div>--}}
                            {{--<div>--}}
                              {{--<div class="project-item">--}}
                                {{--<a href="img/project-item-06.jpg" data-lightbox="image-1"><img src="img/project-item-06.jpg" alt=""></a>--}}
                                {{--<div class="text-content">--}}
                                  {{--<h4>Item Sixth</h4>--}}
                                  {{--<p>Lorem ipsum dolor, adipis scing elit etiam ante vehicula, aliquam mauris in, luctus neque.</p>--}}
                                  {{--<div class="primary-button">--}}
                                    {{--<a href="#">Discover More</a>--}}
                                  {{--</div>--}}
                                {{--</div>--}}
                              {{--</div>--}}
                            {{--</div>--}}
                            {{--<div>--}}
                              {{--<div class="project-item">--}}
                                {{--<a href="img/project-item-07.jpg" data-lightbox="image-1"><img src="img/project-item-07.jpg" alt=""></a>--}}
                                {{--<div class="text-content">--}}
                                  {{--<h4>Last Item</h4>--}}
                                  {{--<p>Lorem ipsum dolor, adipis scing elit etiam ante vehicula, aliquam mauris in, luctus neque.</p>--}}
                                  {{--<div class="primary-button">--}}
                                    {{--<a href="#">Discover More</a>--}}
                                  {{--</div>--}}
                                {{--</div>--}}
                              {{--</div>--}}
                            {{--</div>--}}
                          {{--</div>--}}
                        {{--</div>--}}
                      {{--</div>--}}
                    {{--</div>--}}
                  {{--</div>--}}
                {{--</div>--}}
              {{--</div>--}}
            {{--</div>--}}
          {{--</article>--}}
        {{--</section>--}}
        {{--<section class="panel b-green" id="4">--}}
          {{--<article class="panel__wrapper">--}}
            {{--<div class="panel__content">--}}
              {{--<div class="container">--}}
                {{--<div class="row">--}}
                  {{--<div class="col-md-8 col-md-offset-2">--}}
                    {{--<div class="contact-content">--}}
                      {{--<div class="heading">--}}
                        {{--<h4>Contact us</h4>--}}
                      {{--</div>--}}
                      {{--<div class="row">--}}
                        {{--<div class="col-md-10">--}}
                          {{--<div class="contat-form">--}}
                            {{--<form id="contact" action="" method="post">--}}
                              {{--<fieldset>--}}
                                {{--<input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">--}}
                              {{--</fieldset>--}}
                              {{--<fieldset>--}}
                                {{--<input name="email" type="email" class="form-control" id="email" placeholder="Email" required="">--}}
                              {{--</fieldset>--}}
                              {{--<fieldset>--}}
                                {{--<textarea name="message" rows="6" class="form-control" id="message" placeholder="Message" required=""></textarea>--}}
                              {{--</fieldset>--}}
                              {{--<fieldset>--}}
                                {{--<button type="submit" id="form-submit" class="btn">Send Message</button>--}}
                              {{--</fieldset>--}}
                            {{--</form>--}}
                          {{--</div>--}}
                        {{--</div>--}}
                      {{--</div>--}}
                    {{--</div>--}}
                  {{--</div>--}}
                  {{--<div class="col-md-12">--}}
                    {{--<div class="footer">--}}
                      {{--<p>Copyright &copy; 2017 Your Company--}}
                      {{--| Designed by <a href="http://www.templatemo.com" target="_parent">templatemo</a></p>--}}
                    {{--</div>--}}
                  {{--</div>--}}
                {{--</div>--}}
              {{--</div>--}}
            {{--</div>--}}
          {{--</article>--}}
        {{--</section>--}}
      

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
