!DOCTYPE html>
<html lang="en">
  <head>
    <!-- META DATA -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    
    <meta name="description" content="Treble theme - One Page Responsive Theme - Gridelicious.net">
    <title>Mypage</title>

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
                    <a class="brand pull-left" href="../../">
                        <img src="../../assets/images/logo.png" alt="Treble">
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
                        <li><a href="../../#page-welcome">Home</a></li>
                        <li><a href="../../#page-work">Work</a></li>
                        <li><a href="../../#page-features">Features</a></li>
                        <li><a href="../../#page-about">About</a></li>
                        <li><a href="../../#page-blog">Blog</a></li>
                        <li><a href="../../#page-contact">Contact</a></li>
                    </ul>
                    <!-- END MAIN MENU -->
                    
                    <!-- SOCIAL ICONS -->
                    <div class="social-icons hover-big pull-right">
                        <a href="#" class="sicon-facebook"><i>Facebook</i></a>
                        <a href="#" class="sicon-twitter"><i>Twitter</i></a>
                        <a href="#" class="sicon-linkedin"><i>LinkedIn</i></a>
                        <a href="#" class="sicon-youtube"><i>Youtube</i></a>
                        <a href="#" class="sicon-pinterest"><i>Pinterest</i></a>
                    </div>
                    <!-- END SOCIAL ICONS -->
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAVIGATION -->
<!-- PAGE | BLOG -->
    <div class="pages page-blog-list" id="page-blog-list">
        <div class="container">
            <!-- Header -->
            <header>
                <h4 class="line-divider">Diary</h4>
                <h1>Leaders Relay Diary</h1>
                <div class="row">
                    <div class="span8 offset2">
                        <div class="input-append">
                          <input class="span5" id="appendedInputButton" type="text" placeholder="Search Blog">
                          <button class="btn btn-primary sicon-search sicon-white" type="button"><i>Search</i></button>
                        </div>
                    </div>
                </div>
            </header>
            <!-- End Header -->

            <div class="row-fluid">
                <div class="span8 blog-details">
                    <!-- Article -->
                    <article>
                        <!-- Blog image -->
                        <?php echo image_tag('/'.sfConfig::get('sf_upload_dir_name').'/'.$blog->getImage()) ?>
                        
                        <!-- Blog title -->
                        <h5>
                            <?php echo $blog->getTitle() ?><br/>
                            <small>Posted By <a href="#"><?php echo $blog->getUserId() ?></a>,
                            	 <?php echo $blog->getCreatedAt() ?>　<?php echo $blog->getId() ?>
                            	 		<!-- ここにリレータイトルを入れたい！！ -->
                            	 	 <a href="#">Photography</a></small>
                        </h5>
                        
                        <!-- Blog post description -->
                        <?php echo $blog->getBody() ?>
                        <hr />
						<?php echo link_to('edit', 'blog/edit?id='.$blog->getId()) ?>
						&nbsp;<?php echo link_to('list', 'blog/list') ?>
                        
                    </article>
                    <!-- End Article -->
                    
                    <!-- Blog comments -->
                    <div class="comments">
                        <a href="#">4 comments</a>
                    </div>
                    <div class="comments-details">
                        <div class="media">
                            <div class="pull-left">
                                <img src="http://placehold.it/60x60" width="60"/>
                            </div> 
                            <div class="media-body">
                                <div class="comments-post-info">
                                    <small><a href="#">team member</a>, April 10, 2013, <a href="#write-replay">Reply</a></small>
                                </div>
                                   <p>
                                    かわいいですね。
                                   </p> 
                                
                                
                            </div>
                        </div>
                       <!--  <div class="media">
                            <div class="pull-left">
                                <img src="http://placehold.it/60x60" width="60"/>
                            </div> 
                            <div class="media-body">
                                <div class="comments-post-info">
                                    <small><a href="#">Team member</a>, April 10, 2013, <a href="#write-replay">Replay</a></small>
                                </div>
                                <p>
                                    Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
                                </p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img src="http://placehold.it/60x60" width="60"/>
                            </div> 
                            <div class="media-body">
                                <div class="comments-post-info">
                                    <small><a href="#">Team member</a>, April 10, 2013, <a href="#write-replay">Replay</a></small>
                                </div>
                                <p>
                                    Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
                                </p>
                                
                                <div class="media">
                                    <div class="pull-left">
                                        <img src="http://placehold.it/60x60" width="60"/>
                                    </div> 
                                    <div class="media-body">
                                        <div class="comments-post-info">
                                            <small><a href="#">Team member</a>, April 10, 2013, <a href="#write-replay">Replay</a></small>
                                        </div>
                                        Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. 
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <!-- End Blog comments -->
                    
                    <!-- Blog Write comment -->
                    <div class="write-comment" id="write-replay">
                        <h6>Drop a comment</h6>
                        <!-- <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                        </p> -->
                        <div class="row-fluid">
                            <div class="span8">
                                <form>
                                    <?php use_helper('Object') ?>
                                    <!-- <input type="text" class="span12" placeholder="Title">
                                    <input type="text" class="span12" placeholder="Email"> -->
                                    <!-- <textarea rows="5" class="span12"></textarea> -->
                                    <?php echo object_textarea_tag($blog_comment, 'getBody', array (
                                      'size' => '30x3',)) ?>
                                    <!-- <button type="submit" class="btn btn-primary">Post a comment</button> -->
                                    <?php echo submit_tag('Send') ?>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Blog Write comment -->
                </div>
                <div class="span4 blog-list-right">
                    <!-- Latest blog posts block -->
                    <div class="block">
                        <h6>Lates blog posts</h6>
                        <ul class="simple-link-list">
                            <li>
                                <a href="blog_1.html" class="active">Blog post title 1</a>
                            </li>
                            <li>
                                <a href="blog_2.html">Blog post title 2</a>
                            </li>
                            <li>
                                <a href="blog_3.html">Blog post title 3</a>
                            </li>
                            <li>
                                <a href="blog_4.html">Blog post title 4</a>
                            </li>
                            <li>
                                <a href="blog_5.html">Blog post title 5</a>
                            </li>
                            <li>
                                <a href="blog_6.html">Blog post title 6</a>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Tags -->
                    <div class="block">
                        <h6>Other Topics</h6>
                        <nav class="submenu">
                            <ul>
                                <li>
                                    <a href="./blog.html" class="active">All</a>
                                </li>
                                <li>
                                    <a href="./blog.html">Traditionl Food</a>
                                </li>
                                <li>
                                    <a href="./blog.html">Club Activeities</a>
                                </li>
                                <li>
                                    <a href="./blog.html">Traditional Festival</a>
                                </li>
                                <!-- <li>
                                    <a href="./blog.html">Photography</a>
                                </li>
                                <li>
                                    <a href="./blog.html">Other</a>
                                </li> -->
                            </ul>
                        </nav>
                    </div>
                    
                    <!-- Twitter -->
                    <!-- <div class="block">
                        <h6>Twitter</h6>
                        <div class="twitterfeed"></div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE | BLOG -->

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
