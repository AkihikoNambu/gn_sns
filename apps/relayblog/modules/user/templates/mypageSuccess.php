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
<!-- PAGE | BLOG -->
    <div class="pages page-blog-list" id="page-blog-list">
        <div class="container">
            <!-- Header -->
            <header>
                <h4 class="line-divider"><?php echo $user->getUserName()?> Infomation</h4>
                <!-- <h1>Leaders Relay Diary</h1> -->
                <!-- <h1><?php //echo $user->getUserName() ?></h1> -->
                <!-- <div class="row">
                    <div class="span8 offset2">
                        <div class="input-append">
                          <input class="span5" id="appendedInputButton" type="text" placeholder="Search Blog">
                          <button class="btn btn-primary sicon-search sicon-white" type="button"><i>Search</i></button>
                        </div>
                    </div>
                </div> -->
            </header>
            <!-- End Header -->

            <div class="row-fluid">
                <div class="span8 blog-details">
                    <!-- Article -->
                    <article>
                        <!-- Blog image -->
                        <?php echo image_tag('/'.sfConfig::get('sf_upload_dir_name').'/'.$user->getImage(),'alt=foo size=200x100') ?>
                        
                        <!-- Blog title -->
                        <h6>
                            <u>self introduction</u>
                                    
                        </h6>
                        
                        <!-- Blog post description -->
                        <?php echo $user->getSelfIntroduction() ?>
                        <hr />
						<?php //echo link_to('edit', 'blog/edit?id='.$blog->getId()) ?>
						&nbsp;<?php //echo link_to('list', 'blog/list') ?>
                        
                    </article>
                    <!-- End Article -->
                                        
                    <!-- Blog comments -->
                    <!-- End Blog comments -->

                    
                    <!-- Blog Write comment -->
                    <!-- End Blog Write comment -->


                </div>
                <!-- 最新記事を載せる５件まで -->
                <div class="span4 blog-list-right">
                    <!-- Latest blog posts block -->
                    <div class="block">
                        <h6>Basic Information </h6>
                        <ul class="simple-link-list">
                            <li>
                                <?php echo $user->getFirstName() ?> <?php echo $user->getMiddleName() ?> <?php echo $user->getLastName() ?>
                            </li>
                            <li>
                               <?php echo $user->getNationality() ?>
                            </li>
                            <li>
                                <?php //echo $user->getPlaceOfResidence() ?>
                            </li>
                            <li>
                                <?php echo $user->getEmail() ?>
                            </li>
                            <div id ="edit">
                                <!-- sf_userはsession情報にいるuser情報を引張ってくる時の。 -->
                                <?php if($user->getUserName() == $sf_user->getSubscriber()->getUserName()): ?>
                                    <?php echo link_to('EDIT', 'user/edit') ?>
                                <?php endif ?>
                            </div>
                            
                        </ul>
                    </div>
                    
                    <!-- Tags -->
                    
                    
                    <!-- Twitter -->
                    <div class="block">
                    　
                    </div>
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
