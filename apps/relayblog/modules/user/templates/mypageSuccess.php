
<!-- PAGE | mypage -->
    <div class="pages page-blog-list" id="page-blog-list">
        <div class="container">
            <!-- Header -->
            <header>

                <h4 class="line-divider"><?php echo $user->getUserName()?></h4>

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
                <div class="span4 blog-details">
                    <!-- Article -->
                    <article>
                        <!-- Blog image -->
                        <?php echo image_tag('/'.sfConfig::get('sf_upload_dir_name').'/'.$user->getImage(),'alt=foo size=200x100') ?>
                        
                        <!-- Blog title -->
                        <div id ="edit">
                                <!-- sf_userはsession情報にいるuser情報を引張ってくる時の。 -->
                                <?php if($user->getUserName() == $sf_user->getSubscriber()->getUserName()): ?>
                                    <?php echo link_to('EDIT', 'user/edit') ?>
                                <?php endif ?>
                            </div>
                        
                        <!-- Blog post description -->
                        
                        <hr />
                        <h6 class= "under-line-h6"><?php echo $user->getFirstName() ?> <?php echo $user->getMiddleName() ?> <?php echo $user->getLastName() ?></h6>
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
                        <h6>Basic Information</h6>
                        <ul class="simple-link-list">
                            <li>
                                <?php echo $user->getFirstName() ?> <?php echo $subscriber->getMiddleName() ?> <?php echo $subscriber->getLastName() ?>
                            </li>
                            <li>
                               <?php echo $user->getNationality() ?>
                            </li>
                            <li>
                                <?php //echo $subscriber->getPlaceOfResidence() ?>
                            </li>
                            <li>
                                <?php echo $user->getEmail() ?>
                            </li>
                            
                        </ul>
                    </div>
                    
                    <!-- Tags -->
                    
                    
                    <!-- Twitter -->
                    <div class="block">
                    　
                    </div>
                </div>
                <div class="span4 blog-list-right">
                    <!-- Latest blog posts block -->
                    <div class="block">
                        <h6>SELF INTRODUCTION</h6>
                        <ul class="simple-link-list">
                            <li>
                                <?php echo $user->getSelfIntroduction() ?>
                                
                            </li>
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
  
