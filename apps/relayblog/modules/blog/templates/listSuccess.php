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
                        <li><a href="#page-blog">Blog</a></li>
                        <li><a href="#page-work">Reports</a></li>
                        <li><a href="#page-clients">Sponsors</a></li>
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
                      <?php foreach ($blog_pager->getResults() as $blog): ?>
                        <!-- Blog image -->
                        <!-- <a href="blog_1.html"> -->
                            <?php echo image_tag('/'.sfConfig::get('sf_upload_dir_name').'/'.$blog->getImage()) ?>
                        <!-- </a> -->
                        
                        <!-- Blog title -->
                        <h5>
                            <?php echo $blog->getTitle() ?>
                            
                            <br/>
                            <small>Written By <a href="#"><?php echo $blog->getUserId() ?></a>, 
                                <?php echo $blog->getCreatedAt() ?>　<?php echo link_to($blog->getId(), 'blog/show?id='.$blog->getId()) ?> </small>
                        </h5>
                        
                        <!-- Blog post description -->
                        <?php echo $blog->getBody() ?>
                        
                        <!-- Blog read more -->
                        <div class="read-more">
                            <?php echo link_to(
                                  'Read More...',
                                  'blog/show?id='.$blog->getId()) ?>
                            <!-- <a href="blog_1.html">Read More...</a> -->
                        </div>
                        
                        <!-- Blog comments -->
                        <div class="comments">
                            <!-- comment数のカウントを入れること！今は便宜上4 commentsになっている -->
                            <?php echo count($blog_comments) ?>
                            <?php //echo link_to('4 comments', 'blog/show?id='.$blog->getId()) ?>
                        </div>
                        <br>
                        <br>
                        <br>
                        <?php endforeach; ?>
                    </article>

                <!-- ページャ -->
                    <div class="pagination center">
                        <?php if ($blog_pager->haveToPaginate()): ?>
                            <ul>
                                <li><?php echo link_to('&laquo;', 'blog/list?page=1') ?></li>
                                <li><?php echo link_to('&lt;', 'blog/list?page='.$blog_pager->getPreviousPage()) ?>
                         
                                <?php foreach ($blog_pager->getLinks() as $page): ?>
                                    <li><?php echo link_to_unless($page == $blog_pager->getPage(), $page, 'blog/list?page='.$page) ?></li>
                                    <li><?php echo ($page != $blog_pager->getCurrentMaxLink()) ? '-' : '' ?></li>
                                <?php endforeach; ?>
                         
                                <li><?php echo link_to('&gt;', 'blog/list?page='.$blog_pager->getNextPage()) ?></li>
                                <li><?php echo link_to('&raquo;', 'blog/list?page='.$blog_pager->getLastPage()) ?></li>
                            </ul>
                        <?php endif; ?>
                        <!-- <ul>
                            <li><a href="#">Prev</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">Next</a></li>
                        </ul> -->
                    </div>
                </div>
                <div class="span4 blog-list-right">
                    <!-- Latest blog posts block -->
                    <div class="block">
                        <h6>Lates blog posts</h6>
                        <ul class="simple-link-list">
                            <?php foreach ($lates_blogs as $lates_blog): ?>
                            <li>
                                <?php echo link_to($lates_blog->getTitle(), 'blog/show?id='.$lates_blog->getId()) ?> <?php echo $lates_blog->getCreatedAt() ?>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                    <!-- topicリスト -->
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
                </div>
              </div>
        </div>

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
