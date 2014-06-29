<!-- PAGE | BLOG -->
    <div class="pages page-blog-list" id="page-blog-list">
        <div class="container">
            <!-- Header -->
            
            <!-- End Header -->

            <div class="row-fluid">
                <div class="span8 blog-details">
                    <!-- Article -->
                    <article>
                        <!-- Blog image -->
                        <?php echo image_tag('/'.sfConfig::get('sf_upload_dir_name').'/'.$blog->getImage()) ?>
                        
                        <!-- Blog title -->
                        
                        
                        <!-- Blog post description -->
                        <?php echo $blog->getBody() ?>
                        <hr />
						<?php //echo link_to('edit', 'blog/edit?id='.$blog->getId()) ?>
						&nbsp;<?php //echo link_to('list', 'blog/list') ?>
                        
                    </article>
                    <!-- End Article -->
                    
                    

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
