<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- META DATA -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    
    <meta name="description" content="Treble theme - One Page Responsive Theme - Gridelicious.net">
    <title>Global Nextleaders Forum</title>

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/images/ico/favicon.png">
                                   
    
    <!-- GOOGLE WEB FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,700,600,300,800' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <!-- NAVIGATION -->
    <!-- NAVIGATION -->
    <nav class="fixed-top" id="navigation">
        <div class="container">
            <div class="row-fluid">
                <div class="span12 center">
                    <!-- LOGO -->
                    <a class="brand pull-left" href="./">
                        <?php echo image_tag('gnlf003.jpg', array("width"=>"90", "height"=>"30")) ?>
                    </a>
                    <!-- END LOGO -->

                    <!-- MOBILE MENU BUTTON -->
                    <div class="mobile-menu" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </div>
                    <!-- END MOBILE MENU BUTTON -->
                    
                    <!-- MAIN MENU -->
                    <ul id="main-menu" class="nav-collapse collapse">
                        <li><a href="#page-welcome">Home</a></li>
                        <li><a href="#page-about">Friends</a></li>
                        <li><a href="#page-blog">Blog</a></li>
                        <li><a href="#page-work">Reports</a></li>
                        <!-- <li><a href="#page-clients">Sponsors</a></li>-->
                        <li><a href="#page-contact">Login</a></li> 
                    </ul>
                    <!-- END MAIN MENU -->
                    
                    <!-- SOCIAL ICONS -->
                    <div class="social-icons hover-big pull-right">
                        <a href="https://www.facebook.com/groups/151692711639352/" target="_blank" class="sicon-facebook"><i>Facebook</i></a>
                        <a href="#" class="sicon-twitter"><i>Twitter</i></a>
                    </div>
                    <!-- END SOCIAL ICONS -->
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAVIGATION -->
    
    <!-- PAGE | WELCOME -->
    <div class="pages white paralax page-welcome" id="page-welcome">
        <div class="overlay"></div>
        <!-- Centralized content -->
        <div class="centralized">
            <div class="container">
                <div class="row-fluid">
                    <div class="span12 center">
                        <!-- Animated logo -->
                        <div class="logo">
                            <div class="scrollNormal">
                                <a href="#page-about">
                                    <?php echo image_tag('pages/welcome/logo2_welcome.png') ?>
                                    
                                </a>
                            </div>
                            <div class="scrollDown">
                                <a href="#page-about">
                                    <?php echo image_tag('pages/welcome/logo2_welcome.png') ?>
                                    
                                </a>
                            </div> 
                        </div>
                        
                        <div class="line-divider" id="welcome-messages">
                            <ul class="slides">
                                <li>
                                    <h1>GLOBAL<br>NEXTLEADERS<br>FORUM</h1>
                                </li>
                                <li>
                                    <h1>Alumni&Alumnae<br>International<br>Community</h1>
                                </li>
                            </ul>
                        </div>
                        <p>knowledge, experience, and human networks</p>
                        <div class="social-icons sicon-white bordered">
                            <a href="https://www.facebook.com/groups/151692711639352/" class="sicon-facebook" target=_blank><i>Facebook</i></a>
                            <a href="#" class="sicon-twitter"><i>Twitter</i></a>
                            <!-- <a href="#" class="sicon-linkedin"><i>LinkedIn</i></a>
                            <a href="#" class="sicon-youtube"><i>Youtube</i></a>
                            <a href="#" class="sicon-pinterest"><i>Pinterest</i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE | Welcome -->
    
    

    <!-- PAGE | ABOUT -->
    <div class="pages page-about" id="page-about">
        <div class="container">
            <!-- Header -->
            <header>
                <h4 class="line-divider">Friends</h4>
                <h1>Meet Friends</h1>
                <?php if ($sf_user->isAuthenticated()): ?>
                  <li><?php echo link_to('Logout', 'user/logout') ?></li>
                  <li><?php echo link_to($sf_user->getAttribute('nickname', '', 'subscriber'))?></li>
                <?php else: ?>
                  <li><?php echo link_to('Login', 'user/login') ?></li>
                <?php endif ?>

                <div class="row">
                    <div class="span8 offset2">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </div>
            </header>
            <!-- End Header -->
            
            <!-- Article -->
            <article>
                <!-- List of people and description with their contact details which are visable on hover -->
                <ul class="thumbnails about-items">
                    <li class="span4 center">
                         <div class="item">
                            <!-- Team member image -->
                            <img class="img-circle" src="http://placehold.it/280x280" alt="Treble">
                            
                            <!-- Team memeber details, activated on hover -->
                            <div class="about-overlay img-circle">
                                <div class="social-icons sicon-white">
                                    <a href="#" class="sicon-facebook"><i>Facebook</i></a>
                                    <a href="#" class="sicon-twitter"><i>Twitter</i></a>
                                    <a href="#" class="sicon-linkedin"><i>LinkedIn</i></a>
                                    <!-- <a href="#" class="sicon-youtube"><i>Youtube</i></a> -->
                                    <a href="#" class="sicon-pinterest"><i>Pinterest</i></a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Team member name and function -->
                        <h5>
                            <a href="./pages/blog/blog_1.html">Yusuke Morishita<br/>
                            <small>Creative director</small></a>
                        </h5>
                        
                        <!-- Team member short info -->
                        <!-- <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p> -->
                    </li>
                    <li class="span4 center">
                        <div class="item">
                            <img class="img-circle" src="http://placehold.it/280x280" alt="Treble">
                            <div class="about-overlay img-circle">
                                <div class="social-icons sicon-white">
                                    <a href="#" class="sicon-facebook"><i>Facebook</i></a>
                                    <a href="#" class="sicon-twitter"><i>Twitter</i></a>
                                    <a href="#" class="sicon-linkedin"><i>LinkedIn</i></a>
                                    <!-- <a href="#" class="sicon-youtube"><i>Youtube</i></a> -->
                                    <a href="#" class="sicon-pinterest"><i>Pinterest</i></a>
                                </div>
                            </div>
                        </div>
                        
                        <h5>
                            <a href="./pages/blog/blog_2.html">Kanjiro Tabuchi<br/>
                            <small>Creative director</small></a>
                        </h5>
                        <!-- <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p> -->
                    </li>
                    <li class="span4 center">
                        <div class="item">
                            <img class="img-circle" src="http://placehold.it/280x280" alt="Treble">
                            <div class="about-overlay img-circle">
                                <div class="social-icons sicon-white">
                                    <a href="#" class="sicon-facebook"><i>Facebook</i></a>
                                    <a href="#" class="sicon-twitter"><i>Twitter</i></a>
                                    <a href="#" class="sicon-linkedin"><i>LinkedIn</i></a>
                                    <!-- <a href="#" class="sicon-youtube"><i>Youtube</i></a> -->
                                    <a href="#" class="sicon-pinterest"><i>Pinterest</i></a>
                                </div>
                            </div>
                        </div>
                        
                        <h5>
                            <a href="./pages/blog/blog_3.html">Naosuke Mukoyama<br/>
                            <small>Creative director</small></a>
                        </h5>
                        <!-- <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p> -->
                    </li>
                    <!-- <li class="span4 center">
                        <div class="item">
                            <img class="img-circle" src="http://placehold.it/280x280" alt="Treble">
                            <div class="about-overlay img-circle">
                                <div class="social-icons sicon-white">
                                    <a href="#" class="sicon-facebook"><i>Facebook</i></a>
                                    <a href="#" class="sicon-twitter"><i>Twitter</i></a>
                                    <a href="#" class="sicon-linkedin"><i>LinkedIn</i></a>
                                    <a href="#" class="sicon-youtube"><i>Youtube</i></a>
                                    <a href="#" class="sicon-pinterest"><i>Pinterest</i></a>
                                </div>
                            </div>
                        </div>
                        
                        <h5>
                            Joanna doe<br/>
                            <small>Creative director</small>
                        </h5>
                        <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                    </li>
                    <li class="span4 center">
                         <div class="item">
                            <img class="img-circle" src="http://placehold.it/280x280" alt="Treble">
                            <div class="about-overlay img-circle">
                                <div class="social-icons sicon-white">
                                    <a href="#" class="sicon-facebook"><i>Facebook</i></a>
                                    <a href="#" class="sicon-twitter"><i>Twitter</i></a>
                                    <a href="#" class="sicon-linkedin"><i>LinkedIn</i></a>
                                    <a href="#" class="sicon-youtube"><i>Youtube</i></a>
                                    <a href="#" class="sicon-pinterest"><i>Pinterest</i></a>
                                </div>
                            </div>
                        </div>
                        
                        <h5>
                            Joanna doe<br/>
                            <small>Creative director</small>
                        </h5>
                        <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                    </li>
                    <li class="span4 center">
                         <div class="item">
                            <img class="img-circle" src="http://placehold.it/280x280" alt="Treble">
                            <div class="about-overlay img-circle">
                                <div class="social-icons sicon-white">
                                    <a href="#" class="sicon-facebook"><i>Facebook</i></a>
                                    <a href="#" class="sicon-twitter"><i>Twitter</i></a>
                                    <a href="#" class="sicon-linkedin"><i>LinkedIn</i></a>
                                    <a href="#" class="sicon-youtube"><i>Youtube</i></a>
                                    <a href="#" class="sicon-pinterest"><i>Pinterest</i></a>
                                </div>
                            </div>
                        </div>
                        
                        <h5>
                            Joanna doe<br/>
                            <small>Creative director</small>
                        </h5>
                        <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                    </li> -->
                </ul>
            </article>
            <!-- End Article -->
            <!-- Footer -->
            <footer>
                <div class="show-more-cube">

                     <a href="friend/list" data-destination="plugin-filter-elements" data-insert="appendTo" data-action="remove">
                        <span>Meet<br/>More</span>
                    </a>
                </div>
            </footer>
            <!-- End footer -->
        </div>
    </div>
    <!-- END PAGE | ABOUT -->
    
    <!-- PAGE | BLOG -->
    <div class="pages page-blog" id="page-blog">
        <div class="container">
            <!-- Header -->
            <header>
                <h4 class="line-divider">Blog</h4>
                <h1>World Relay Blog</h1>
                <div class="row">
                    <div class="span8 offset2">
                        <div class="input-append">
                          <input class="span5" id="appendedInputButton" type="text" placeholder="Search Blog">
                          <button class="btn btn-primary sicon-search sicon-white" type="button"><i>Search</i></button>
                        </div>
                    </div>
                </div>
                
                <!-- Sub menu -->
                <nav class="submenu">
                    <ul>
                        <li>
                            <a href="./pages/blog/blog.html">All</a>
                        </li>
                        <li>
                            <a href="./pages/blog/blog.html">Technology</a>
                        </li>
                        <li>
                            <a href="./pages/blog/blog.html">Design</a>
                        </li>
                        <li>
                            <a href="./pages/blog/blog.html">Future trends</a>
                        </li>
                        <li>
                            <a href="./pages/blog/blog.html">Photography</a>
                        </li>
                        <li>
                            <a href="./pages/blog/blog.html">Other</a>
                        </li>
                    </ul>
                </nav>
            </header>
            <!-- End Header -->
            
            <!-- Article -->
            <article>
                <!-- Blog articles -->
                <ul class="thumbnails">
                    <!-- Blog post -->
                    <li class="span4">
                    
                        <!-- Blog image -->
                        <a href="./pages/blog/blog_1.html">
                            <img src="http://placehold.it/390x300" alt="Treble">
                        </a>
                        
                        <!-- Blog title -->
                        <h5>
                            <a href="./pages/blog/blog_1.html">Traditional Festival<br/>
                            <small>April 10, 2013</small></a>
                        </h5>
                        
                        <!-- Blog post description -->
                        <p class="smallFontBy08">how is it performed? Who and how
                            many people join it? When was it born? How has it taken over for a long time?</p>
                        
                        <!-- Blog read more -->
                        <div class="read-more">
                            <a href="./pages/blog/blog_1.html">Read More...</a>
                        </div>
                    </li>
                    <li class="span4">
                        <a href="./pages/blog/blog_2.html">
                            <img src="http://placehold.it/390x300" alt="Treble">
                        </a>
                        <h5>
                            <a href="./pages/blog/blog_2.html">club activities<br/>
                            <small>April 10, 2013</small></a>
                        </h5>
                        <p class="smallFontBy08">What club activities do you do other than GNLF? When did you start it and why?</p>
                        <div class="read-more">
                            <a href="./pages/blog/blog_2.html">Read More...</a>
                        </div>
                    </li>
                    <li class="span4">
                        <a href="./pages/blog/blog_3.html">
                            <img src="http://placehold.it/390x300" alt="Treble">
                        </a>
                        <h5>
                            <a href="./pages/blog/blog_3.html">traditional food<br/>
                            <small>April 10, 2013</small></a>
                        </h5>
                        <p class="smallFontBy08">What is the traditional/national food in your country? What is it and how is it cooked?
                            Why has it become the national food in your country?</p>
                        <div class="read-more">
                            <a href="./pages/blog/blog_3.html">Read More...</a>
                        </div>
                    </li>
                    <!-- <li class="span4">
                        <a href="./pages/blog/blog_4.html">
                            <img src="http://placehold.it/390x300" alt="Treble">
                        </a>
                        <h5>
                            Blog Post Title<br/>
                            <small>April 10, 2013</small>
                        </h5>
                        <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                        <div class="read-more">
                            <a href="./pages/blog/blog_4.html">Read More...</a>
                        </div>
                    </li>
                    <li class="span4">
                        <a href="./pages/blog/blog_5.html">
                            <img src="http://placehold.it/390x300" alt="Treble">
                        </a>
                        <h5>
                            Blog Post Title<br/>
                            <small>April 10, 2013</small>
                        </h5>
                        <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                        <div class="read-more">
                            <a href="./pages/blog/blog_5.html">Read More...</a>
                        </div>
                    </li>
                    <li class="span4">
                        <a href="./pages/blog/blog_6.html">
                            <img src="http://placehold.it/390x300" alt="Treble">
                        </a>
                        <h5>
                            Blog Post Title<br/>
                            <small>April 10, 2013</small>
                        </h5>
                        <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                        <div class="read-more">
                            <a href="./pages/blog/blog_6.html">Read More...</a>
                        </div>
                    </li> -->
                </ul>
            </article>
            <!-- End Article -->
    
            <!-- Footer -->
            <footer>
                <!-- More blog posts -->
                <div class="show-more-cube">
                    <a href="blog/list"><span>Read<br/>More</span></a>
                </div>
            </footer>
            <!-- End Footer -->
        </div>
    </div>
    <!-- END PAGE | BLOG -->

     <!-- PAGE | WORK -->
    <div class="pages page-work" id="page-work">
        <div class="container">
            <!-- Header -->
            <header>
                <h4 class="line-divider">Reports</h4>
                <h1>Conference Reports</h1>
                <!-- Short desciption about Work in general -->
                <div class="row">
                    <div class="span8 offset2">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                        </p>
                    </div>
                </div>
                    
                <!-- Sub menu -->
                <!-- 
                Params: 
                    plugin-filter: Defines links for filtering.
                -->
                <nav class="submenu">
                    <ul>
                        <li>
                            <a href="#" class="plugin-filter active" data-filter="all">All</a>
                        </li>
                        <li>
                            <a href="#" class="plugin-filter" data-filter="typography">2013</a>
                        </li>
                        <li>
                            <a href="#" class="plugin-filter" data-filter="illustration">2012</a>
                        </li>
                        <li>
                            <a href="#" class="plugin-filter" data-filter="branding">2011</a>
                        </li>
                        <!-- <li>
                            <a href="#" class="plugin-filter" data-filter="photography">Photography</a>
                        </li> -->
                    </ul>
                </nav>
            </header>
            <!-- End Header -->
                
            <!-- Article -->
            <article>
                <!-- Portfolio items
                    Params: 
                        plugin-filter-elements: Defines items for filtering, each item has class which defines filter value.
                        portfolio-items: Customise portfolio items for hover effect.
                -->
                <ul class="thumbnails plugin-filter-elements portfolio-items">
                    <li class="span4 mix illustration branding">
                        <a href="#report/show/id/1" data-destination="portfolio-items" data-insert="before">
                            <!-- Portfolio image -->
                            <?php echo image_tag('pages/conference/2011.jpg') ?>
                            
                            <!-- Portfolio name, activated on hover -->
                            <div class="portfolio-overlay">
                                <h4>2013 JAPAN</h4>
                            </div>
                        </a>
                    </li>
                    <li class="span4 mix branding typography illustration">
                        <a href="#pages/portfolio/project_2.html" data-destination="portfolio-items" data-insert="before">
                            <?php echo image_tag('pages/conference/2011.jpg') ?>
                            <div class="portfolio-overlay">
                                <h4>2012 TUNISIA</h4>
                            </div>
                        </a>
                    </li>
                    <li class="span4 mix photography illustration">
                        <a href="#pages/portfolio/project_3.html" data-destination="portfolio-items" data-insert="before">
                            <?php echo image_tag('pages/conference/2011.jpg') ?>
                            <div class="portfolio-overlay">
                                <h4>2011 JAPAN</h4>
                            </div>
                        </a>
                    </li>
                    <!-- <li class="span4 mix photography">
                        <a href="#pages/portfolio/project_4.html" data-destination="portfolio-items" data-insert="before">
                            <img src="http://placehold.it/390x300" alt="Treble">
                            <div class="portfolio-overlay">
                                <h4>Avatar</h4>
                            </div>
                        </a>
                    </li>
                    <li class="span4 mix photography typography branding">
                        <a href="#pages/portfolio/project_5.html" data-destination="portfolio-items" data-insert="before">
                            <img src="http://placehold.it/390x300" alt="Treble">
                            <div class="portfolio-overlay">
                                <h4>A Brighter Horizon</h4>
                            </div>
                        </a>
                    </li>
                    <li class="span4 mix photography">
                        <a href="#pages/portfolio/project_6.html" data-destination="portfolio-items" data-insert="before">
                            <img src="http://placehold.it/390x300" alt="Treble">
                            <div class="portfolio-overlay">
                                <h4>The Travelers</h4>
                            </div>
                        </a>
                    </li>
                    <li class="span4 mix illustration branding typography">
                        <a href="#pages/portfolio/project_7.html" data-destination="portfolio-items" data-insert="before">
                            <img src="http://placehold.it/390x300" alt="Treble">
                            <div class="portfolio-overlay">
                                <h4>Tron 3</h4>
                            </div>
                        </a>
                    </li>
                    <li class="span4 mix photography illustration">
                        <a href="#pages/portfolio/project_8.html" data-destination="portfolio-items" data-insert="before">
                            <img src="http://placehold.it/390x300" alt="Treble">
                            <div class="portfolio-overlay">
                                <h4>Vimeo Staff Picke - Rio</h4>
                            </div>
                        </a>
                    </li>
                    <li class="span4 mix illustration branding">
                        <a href="#pages/portfolio/project_9.html" data-destination="portfolio-items" data-insert="before">
                            <img src="http://placehold.it/390x300" alt="Treble">
                            <div class="portfolio-overlay">
                                <h4>Adobe Family. 1882</h4>
                            </div>
                        </a>
                    </li> -->
                </ul>
            </article>
            <!-- End Article -->
            
            <!-- Footer -->
            <footer>
                <div class="show-more-cube">
                     <a href="#pages/portfolio/readmore.html" data-destination="plugin-filter-elements" data-insert="appendTo" data-action="remove">
                        <span>Show<br/>More</span>
                    </a>
                </div>
            </footer>
            <!-- End footer -->
        </div>
    </div>
    <!-- END PAGE | WORK -->

    <!-- PAGE | SPONSOR -->
    <div class="pages page-clients" id="page-clients">
        <div class="container">
        <!-- Header -->
            <header>
                <h4 class="line-divider">sponsors</h4>
                <!-- Short desciption about Work in general -->
                <div class="row">
                    <div class="span8 offset2">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                        </p>
                    </div>
                </div>
                    
                <!-- Sub menu -->
                <!-- 
                Params: 
                    plugin-filter: Defines links for filtering.
                -->
                <!-- <nav class="submenu">
                    <ul>
                        <li>
                            <a href="#" class="plugin-filter active" data-filter="all">All</a>
                        </li>
                        <li>
                            <a href="#" class="plugin-filter" data-filter="typography">2013</a>
                        </li>
                        <li>
                            <a href="#" class="plugin-filter" data-filter="illustration">2012</a>
                        </li>
                        <li>
                            <a href="#" class="plugin-filter" data-filter="branding">2011</a>
                        </li>
                        <li>
                            <a href="#" class="plugin-filter" data-filter="photography">Photography</a>
                        </li>
                    </ul>
                </nav> -->
            </header>
            <!-- End Header -->
            <!-- end header -->
            <!-- Client logos -->
            <div class="row-fluid">
                <div class="span2 center">
                    <!-- <a href="http://www.mitsubishicorp.com/global/" target="_blank"> -->
                        <?php echo image_tag('pages/sponsor/mitsubishi.jpg') ?>
                        <!-- <img src="../../../../../web/images/pages/sponsor/mitsubishi.jpg" > -->
                    <!-- </a> -->
                </div>
                <div class="span2 center">
                    <img src="http://placehold.it/180x70" alt="Treble">
                </div>
                <div class="span2 center">
                    <img src="http://placehold.it/180x70" alt="Treble">
                </div>
                <div class="span2 center">
                    <img src="http://placehold.it/180x70" alt="Treble">
                </div>
                <div class="span2 center">
                    <img src="http://placehold.it/180x70" alt="Treble">
                </div>
                <div class="span2 center">
                    <img src="http://placehold.it/180x70" alt="Treble">
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE | CLIENTS -->
        <!-- PAGE | CONTACT -->
    <div class="pages black-bg white page-contact" id="page-contact">
        <div class="container">
            <!-- Header -->
            <header>
                <h4 class="line-divider">information</h4>
                <?php if ($sf_user->isAuthenticated()): ?>
                  <h1><?php echo link_to('Logout', 'user/logout') ?></h1>
                  <h1><?php echo link_to($sf_user->getAttribute('nickname', '', 'subscriber'))?></h1>
                <?php else: ?>
                  <h1><?php echo link_to('Login', 'user/login') ?></h1>
                <?php endif ?>
            </header>
            <!-- End Header -->
            
            <!-- Start Article -->
            <article>
                <div class="row-fluid">

                    <!-- Contact information -->
                    <div class="span5 offset1">
                        <h5>Meet Us</h5>
                        <div class="media">
                            <div class="social-icons sicon-white pull-left">
                                <a href="#" class="sicon-phone"><i>Phone</i></a>
                            </div> 
                            <div class="media-body smallFontBy08">
                                (+1) 502 964-0393 | (+1) 502 964-0393 (FAX)
                            </div>
                        </div>
                        <div class="media">
                            <div class="social-icons sicon-white pull-left">
                                <a href="#" class="sicon-place"><i>Location</i></a>
                            </div> 
                            <div class="media-body smallFontBy08">
                                1095 Columbus Ave., San Francisco, CA 94133
                            </div>
                        </div>
                        <div class="media">
                            <div class="social-icons sicon-white pull-left">
                                <a href="#" class="sicon-mail"><i>email</i></a>
                            </div> 
                            <div class="media-body smallFontBy08">
                                mail@crollify.com
                            </div>
                        </div>
                        <div class="media">
                            <div class="social-icons sicon-white pull-left">
                                <a href="#" class="sicon-clock"><i>Time zone</i></a>
                            </div> 
                            <div class="media-body smallFontBy08">
                                UTC / GMT -5
                            </div>
                        </div>
                        <br/>
                        <br/>
                        <br/>
                        <h5>Get social</h5>
                        <div class="social-icons sicon-white bordered">
                            <a href="https://www.facebook.com/groups/151692711639352/" target="_blank" class="sicon-facebook"><i>Facebook</i></a>
                            <a href="#" class="sicon-twitter"><i>Twitter</i></a>
                            <!-- <a href="#" class="sicon-linkedin"><i>LinkedIn</i></a>
                            <a href="#" class="sicon-youtube"><i>Youtube</i></a>
                            <a href="#" class="sicon-pinterest"><i>Pinterest</i></a> -->
                        </div>
                    </div>
                    <!-- End Contact information -->
                     <!-- twitter -->
                    <div class="span6">
                        <h5>Pick up</h5>
                            <a class="twitter-timeline"  href="https://twitter.com/mate0rich"  data-widget-id="464081249691136001">tweet from @mate0rich</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                        <!-- <h5>Drop Us A Line</h5>
                        <form>
                            <input type="text" class="span12" placeholder="Title" required="required">
                            <input type="email" class="span12" placeholder="Email" required="required">
                            <textarea rows="10" class="span12" required="required"></textarea>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form> -->
                    </div>
                    <!-- End Contact form -->
                </div>
            </article>
            <!-- End Article -->
            
        </div>
        
        <!-- Background map image -->
        <div id="map-image">
            <!-- 大きさ指定は第２引数でクラスを作ってcssで指定する。 -->
            <?php echo image_tag('pages/contact/q_bck.jpg', array('class'=>'map-image-image')) ?>
        </div>
    </div>
    <!-- END PAGE | CONTACT -->
    
  
    
    
    <!-- GOOGLE ANALYTICS -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-44061294-1', 'gridelicious.net');
        ga('send', 'pageview');
    </script>
  </body>
</html>