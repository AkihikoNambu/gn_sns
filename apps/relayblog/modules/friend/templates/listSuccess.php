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
    <nav class="fixed-top fixed-visable" id="navigation">
        <div class="container">
            <div class="row-fluid">
                <div class="span12 center">
                    <!-- LOGO -->
                    <a class="brand pull-left" href="./">
                        <?php echo image_tag('gnlf003.jpg', array("width"=>"81", "height"=>"27")) ?>
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
                        <li><a href="#page-blog">Diary</a></li>
                        <li><a href="#page-work">Reports</a></li>
                        <li><a href="#page-clients">Sponsors</a></li>
                    </ul>
                    <!-- END MAIN MENU -->
                    
                    <!-- SOCIAL ICONS -->
                    <div class="social-icons hover-big pull-right">
                        <!-- <a href="https://www.facebook.com/groups/151692711639352/" target="_blank" class="sicon-facebook"><i>Facebook</i></a>
                        <a href="#" class="sicon-twitter"><i>Twitter</i></a> -->
                        <?php echo image_tag('arimura3.jpg', array('width'=>'41', 'height'=>'42', 'class'=>'user_icon')) ?>
                    </div>
                    <!-- END SOCIAL ICONS -->
            </div>
        </div>
    </nav>
    <!-- END NAVIGATION -->
    <!-- PAGE | ABOUT -->
    <div class="pages page-about" id="page-about">
        <div class="container">
            <!-- Header -->
            <header>
                <h4 class="line-divider">Friends</h4>
                <h1>Meet Friends</h1>
                <div class="row">
                    <div class="span8 offset2">
                        <p>
                            3 yrs have passed since the GNLF conference. How are they doing?<br>Let's meet friends, and keep in touch !! 
                        </p>
                    </div>
                </div>
                <!-- Sub menu -->
                <nav class="submenu">
                    <ul>
                        <li>
                            <a href="./pages/blog/blog.html">All</a>
                        </li>
                        <li>
                            <a href="./pages/blog/blog.html">Participant</a>
                        </li>
                        <li>
                            <a href="./pages/blog/blog.html">Lecturer</a>
                        </li>
                        <li>
                            <a href="./pages/blog/blog.html">Organizer</a>
                        </li>
                        <li>
                            <a href="./pages/blog/blog.html">Partner</a>
                        </li>
                    </ul>
                </nav>
            </header>
            <!-- End Header -->
            
            <!-- Article -->
            <article>
                <!-- List of people and description with their contact details which are visable on hover -->
                <ul class="thumbnails about-items">
                    <?php foreach ($friends as $friend): ?>
                    <li class="span4 center">
                         <div class="item">
                            <!-- Team member image -->
                            <!-- <img class="img-circle" src="http://placehold.it/280x280" alt="Treble"> -->
                            <?php echo image_tag('/'.sfConfig::get('sf_upload_dir_name').'/'.$friend->getImage(), 
                            array('class'=>'img-circle')) ?>
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
                            <?php echo $friend->getTitle() ?><br/>
                            <small>
                                <?php echo $friend->getCreatedAt() ?>
                                <?php //echo link_to($friend->getCreatedAt(), 'friend/show?id='.$friend->getId()) ?>
                                <?php //echo $friend->getUserId() ?>
                            </small>
                        </h5>
                        <!-- Team member short info -->
                        <p class="smallFontBy08">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.
                            <?php //echo $friend->getBody() ?>
                        </p>
                        <div class="page-blog">
                            <div class="read-more">
                                <?php echo link_to(
                                       'Read More...',
                                       'friend/show?id='.$friend->getId()) ?>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
                </ul>
            </article>
            <!-- End Article -->
            <!-- Footer -->
            <!-- <footer>
                <div class="show-more-cube">

                     <a href="friend/list" data-destination="plugin-filter-elements" data-insert="appendTo" data-action="remove">
                        <span>Meet<br/>More</span>
                    </a>
                </div>
            </footer> -->
            <!-- End footer -->
        </div>
    </div>

    <!-- ページャ -->
    <div class="pagination center">
        <ul>
            <li><a href="#">Prev</a></li>
            <li class="active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">Next</a></li>
        </ul>
    </div>
 
    <!-- JQUERY -->
    <?php use_javascript('jquery-1.10.2.min.js') ?>
    
    
    <!-- TWITTER BOOTSTRAP -->
    <?php use_javascript('bootstrap/bootstrap.min.js') ?>
    <!--[if lt IE 9]>
        <script src="assets/js/bootstrap/html5shiv.js"></script>
    <![endif]-->
    
    
    <!-- PLUGINS -->

    <?php use_javascript('plugins/jquery.bxslider.min.js') ?>
    <?php use_javascript('plugins/jquery.centralized.min.js') ?>
    <?php use_javascript('plugins/jquery.fixedonlater.min.js') ?>
    <?php use_javascript('plugins/jquery.hashloader.min.js') ?>
    <?php use_javascript('plugins/jquery.mixitup.min.js') ?>
    <?php use_javascript('plugins/jquery.nav.min.js') ?>
    <?php use_javascript('plugins/jquery.parallax-1.1.3.min.js') ?>
    <?php use_javascript('plugins/jquery.responsivevideos.min.js') ?>
    <?php use_javascript('plugins/jquery.scrollTo.min.js') ?>
    <?php use_javascript('plugins/jquery.tweet.min.js') ?>
    <?php use_javascript('plugins/jquery.tweetCarousel.min.js') ?>
    
    <!-- INITIALIZE -->
    <?php use_javascript('application/application.min.js') ?>
    
    
    
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
