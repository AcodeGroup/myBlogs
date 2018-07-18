<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8 ]> <html class="ie8"> <![endif]-->
<!--[if IE 9 ]> <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html> <!--<![endif]-->

<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Blog Archive</title>

  <!-- Allow HTML5 elements to be styled in IE8, use Selectivizr for IE8 -->
  <!--[if (lte IE 8)]>
    <script type="text/javascript" src="javascripts/html5shiv-printshiv.js"></script>
    <script type="text/javascript" src="javascripts/selectivizr.js"></script>
  <![endif]-->

  <!-- Included Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Chivo:400,400italic' rel='stylesheet' type='text/css'>

  <!-- Includ  CSS Files -->

  <!-- Includ Icon Font CSS Styles -->
  <link href="{{asset('assets/stylesheets/general_foundicons.css')}}" media="screen" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/stylesheets/social_foundicons.css')}}" media="screen" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="{{asset('assets/stylesheets/jquery-ui-1.9.1.css')}}">
  <link rel="stylesheet" href="{{asset('assets/stylesheets/footable-0.1.css')}}">
  <link rel="stylesheet" href="{{asset('assets/stylesheets/footable.sortable-0.1.css')}}">
  <link rel="stylesheet" href="{{asset('assets/stylesheets/black/adorable-all.css')}}">

</head>

<body class="inner">
  <div class="page-wrapper">
    <div id="page-content">
      <header id="top">
        <div class="otw-row otw-collapse">
          <div>
            <div id="otw-site-title">
              <h1>Adorable</h1>
              <a href="#"><img src="images/adorable-logo-white.png" title="Adorable" alt=""/></a>
            </div>
            <div id="otw-site-slogan">A great theme</div>
          </div>
          <div class="menu-wrapper">
            <nav id="language-menu">
              <ul class="otw-language-menu">
                <li class="active"><a href="#">EN</a></li>
                <li><a href="#">DE</a></li>
                <li><a href="#">FR</a></li>
              </ul>
            </nav>
            <nav id="primary">
              <ul class="otw-primary-menu hide-for-small">
                <li>
                  <a href="#">
                    Home
                  </a>
                </li>
                <li>
                  <a href="#">
                    Category
                  </a>
                  <ul>
                    <li>
                      <a href="features-typography.html">
                        Typography
                        <span class="subtitle">typography</span>
                      </a>
                    </li>
                    <li>
                      <a href="features-widgets.html">
                        Widgets
                        <span class="subtitle">all widgets</span>
                      </a>
                    </li>
                    <li>
                      <a href="features-grid.html">
                        Grid example
                        <span class="subtitle">powerful grid</span>
                      </a>
                    </li>
                    <li>
                      <a href="features-page-single.html">
                        Single Page
                        <span class="subtitle">with sidebar</span>
                      </a>
                      <ul>
                        <li>
                          <a href="features-page-single.html">
                            Single Page
                            <span class="subtitle">with sidebar</span>
                          </a>
                        </li>
                        <li>
                          <a href="features-page-single.html">
                            Single Page
                            <span class="subtitle">with sidebar</span>
                          </a>
                        </li>
                        <li>
                          <a href="features-page-single.html">
                            Single Page
                            <span class="subtitle">with sidebar</span>
                          </a>
                        </li>
                      </ul>
                    </li>                    <li>
                      <a href="features-404.html">
                        Error page
                        <span class="subtitle">not found</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#">
                    About<span class="sub-menus"></span>

                  </a>

                <li class="active">
                </li>

              </ul>
            </nav>
          </div>
        </div>
      </header>

      <div class="page-title-wrapper fixed-width">
        <div class="otw-row page-title">
          <div class="otw-nineteen otw-columns">
            <h1>Blog Archive</h1>
            <h2 class="subheader">A Subhead Title</h2>
          </div>
          <div class="otw-five otw-columns">
            <form action="#" method="get" role="search" class="searchform">
                <input type="search" onblur="if (this.value == '') {this.value = 'Search in site';}" onfocus="if (this.value == 'Search in site') {this.value = '';}" value="Search in site" name="s" class="search-input">
                <input type="submit" title="Search" name="submit" class="search-submit double-rounded" value="Search">
            </form>
          </div>
        </div>
        <div class="otw-row">
          <div id="breadcrumb" class="otw-twentyfour otw-columns">
            <a href="#">Home</a><span class="breadcrumb-sepreator"> &raquo; </span><a title="" href="#">Category</a><span class="breadcrumb-sepreator"> &raquo; </span><span class="">Post Title</span>
          </div>
        </div>
      </div>

      <div class="otw-row main-content">

          @yield('content')
        <div class="otw-six otw-columns otw-right-sidebar-section">
          <div class="otw-widget-categories otw-widget-list">
            <h3 class="widget-title">Categories</h3>
            <ul class="otw-list">
              <li><a href="#">With sidebar on the right</a></li>
              <li><a href="#">With sidebar on the left</a></li>
              <li><a href="#">With two sidebars</a></li>
              <li><a href="#">Two sidebars on the right</a></li>
              <li><a href="#">Two sidebars on the left</a></li>
            </ul>
          </div>
          <div class="otw-widget-archives otw-widget-list">
            <h3 class="widget-title">Archives</h3>
            <ul class="otw-list">
              <li><a href="#">With sidebar on the right</a></li>
              <li class="active"><a href="#">With sidebar on the left</a></li>
              <li><a href="#">With two sidebars</a></li>
              <li><a href="#">Two sidebars on the right</a></li>
              <li><a href="#">Two sidebars on the left</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="otw-row">
        <div class="otw-twentyfour otw-columns">
          <div class="otw-sc-divider scroll-top">
            <a href="#top" class="dot center">top</a>
          </div>
        </div>
      </div>
    </div>

    <div id="footer-contact-area-wrapper">
      <div class="otw-row">
        <div class="otw-twentyfour otw-columns">
          <div class="footer-contact-area">If you want immediate assistance on an issue, please contact us at <span class="accent">0800 123 123</span> - toll free 24/7
          </div>
        </div>
      </div>
    </div>

    <footer id="page-footer">
      <div class="otw-row footer-blocks">
        <div class="otw-six otw-columns">
          <div class="otw-sc-recent-comments otw-widget-list">
            <h3 class="widget-title">Our services</h3>
            <ul class="otw-list">
              <li><a href="#">Classic Animation</a></li>
              <li><a href="#">3D Animation</a></li>
              <li class="active"><a href="#">Illustration</a></li>
              <li><a href="#">UI design</a></li>
              <li><a href="#">Motion design</a></li>
              <li><a href="#">Documentary filmmaking</a></li>
            </ul>
          </div>
        </div>
        <div class="otw-six otw-columns">
          <div class="otw-widget-flickr">
            <h3 class="widget-title">Flickr Stream</h3>
            <div class="image-list animate-on-hover tiny-loupe">
              <a class="image" href="#"><img src="http://placehold.it/60x60/" alt=""></a>
              <a class="image" href="#"><img src="http://placehold.it/60x60/" alt=""></a>
              <a class="image" href="#"><img src="http://placehold.it/60x60/" alt=""></a>
              <a class="image" href="#"><img src="http://placehold.it/60x60/" alt=""></a>
              <a class="image" href="#"><img src="http://placehold.it/60x60/" alt=""></a>
              <a class="image" href="#"><img src="http://placehold.it/60x60/" alt=""></a>
            </div>
            <a href="#" class="more">More photos...</a>
          </div>
        </div>
        <div class="otw-six otw-columns">
          <div class="otw-widget-blog-latest animate-on-hover tiny-loupe">
            <h3 class="widget-title">Latest Posts</h3>
            <div class="widget-row">
              <a href="#" class="image">
                <img alt="" src="http://placehold.it/70x70/">
              <span class="shadow-overlay hide-for-small"></span><span class="link-overlay hide-for-small"></span></a>
              <h4><a href="#">Title post One</a></h4>
              <p>Short description with a little more text</p>
            </div>
            <div class="widget-row">
              <a href="#" class="image">
                <img alt="" src="http://placehold.it/70x70/">
              <span class="shadow-overlay hide-for-small"></span><span class="link-overlay hide-for-small"></span></a>
              <h4><a href="#">Title post Two</a></h4>
              <p>Short description with a little more text</p>
            </div>
            <div class="widget-row">
              <a href="#" class="image">
                <img alt="" src="http://placehold.it/70x70/">
              <span class="shadow-overlay hide-for-small"></span><span class="link-overlay hide-for-small"></span></a>
              <h4><a href="#">Title post Three</a></h4>
              <p>Short description with a little more text</p>
            </div>
          </div>
        </div>
        <div class="otw-six otw-columns">
          <div class="footer-contact">
            <h3 class="widget-title">Contact Us</h3>
              <form method="post" id="footerContactForm" action="#">
                <div class="field-name-wrapper">
                  <input type="text" class="txt requiredField" onblur="if (this.value == '') {this.value = 'Your name';}" onfocus="if (this.value == 'Your name') {this.value = '';}" value="Your name" id="contactName" name="contactName">
                </div>

                <div class="field-email-wrapper">
                  <input type="text" class="txt requiredField email" onblur="if (this.value == '') {this.value = 'Your email';}" onfocus="if (this.value == 'Your email') {this.value = '';}" value="Your email" id="email" name="email">
                </div>

                <div class="field-comment-field-wrapper">
                  <textarea class="requiredField" cols="20" rows="5" name="comments" onblur="if (this.value == '') {this.value = 'Your message';}" onfocus="if (this.value == 'Your message') {this.value = '';}">Your message</textarea>
                </div>
                <button type="submit" class="otw-button small radius">Submit</button>
                <div class="map-link">
                  <a href="#">view map &raquo;</a>
                </div>
              </form>
          </div>
        </div>
      </div>
      <div class="otw-row copyright">
        <div class="otw-twelve otw-columns">
          <ul id="footer-menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
        <div class="otw-twelve otw-columns text-right">
          <a href="#"><img src="images/adorable-logo-white.png" title="Adorable" alt=""/></a>
          by <a href="http://otwthemes.com">OTWthemes</a> &copy; 2013 All rights reserved.
        </div>
      </div>
    </footer>
  </div>

  <!-- jQuery and jQuery UI -->
  <script type="text/javascript" src="{{asset('assets/javascripts/jquery-1.8.3.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/javascripts/jquery-ui-1.9.1.min.js')}}"></script>

  <!-- jQuery Superfish Menus + HoverIntent -->
  <script type="text/javascript" src="{{asset('assets/javascripts/hoverIntent.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/javascripts/superfish.js')}}"></script>

  <!-- Responsive Tables -->
  <script type="text/javascript" src="{{asset('assets/javascripts/footable-0.1.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/javascripts/footable.sortable.js')}}"></script>

  <!-- Responsive Navigation Menu -->
  <script type="text/javascript" src="{{asset('assets/javascripts/tinynav.js')}}"></script>

  <!-- Filterable Items -->
  <script type="text/javascript" src="{{asset('assets/javascripts/jquery.quicksand.js')}}"></script>

  <!-- Custom Theme JS -->
  <script type="text/javascript" src="{{asset('assets/javascripts/adorable.js')}}"></script>

</body>
</html>
