    <!-- PAGE | WORK -->
    <div class="pages page-work" id="page-work">
        <div class="container">
            <!-- Header -->
            <header>
                <h4 class="line-divider">Post</h4>
                <h1>GNLF POST</h1>
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
                            <a href="#" class="plugin-filter" data-filter="2014">POLITICS</a>
                        </li>
                        <li>
                            <a href="#" class="plugin-filter" data-filter="2013">ECONOMICS</a>
                        </li>
                        <li>
                            <a href="#" class="plugin-filter" data-filter="2012">INTERNATIONAL</a>
                        </li>
                        <li>
                            <a href="#" class="plugin-filter" data-filter="2011">BUSINESS</a>
                        </li>
                        <li>
                            <a href="#" class="plugin-filter" data-filter="2011">ENTERTAINMENT</a>
                        </li>
                        <br/>
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
                     <?php foreach ($posts as $post): ?>
                    <li class="span4 mix 2013">
                        <!-- 各個別のshowページに飛ばす -->
                        <!-- カテゴリー用のフィルターもかける -->
                        <a href="#report/show/id/1" data-destination="portfolio-items" data-insert="before">
                            <!-- Portfolio image -->
                            <!-- get imageをする -->
                            <?php echo image_tag('/'.sfConfig::get('sf_upload_dir_name').'/'.$post->getImage(), array('class'=>'post_images')) ?>
                            
                            <!-- Portfolio name, activated on hover -->
                            <div class="portfolio-overlay">
                            <!-- get title, get bodyの一部を表示 -->
                                <h4>2013 JAPAN</h4>
                            </div>
                        </a>
                    </li>
                <?php endforeach; ?>
                    <!-- <li class="span4 mix 2012">
                            <a href="#report/show/id/2" data-destination="portfolio-items" data-insert="before"> -->
                            <!-- Portfolio image -->
                            <?php //echo image_tag('pages/conference/2011.jpg') ?>
                           <!--  <div class="portfolio-overlay">
                                <h4>2012 TUNISIA</h4>
                            </div>
                        </a>
                    </li>
                    <li class="span4 mix 2011">
                        <a href="#pages/portfolio/project_3.html" data-destination="portfolio-items" data-insert="before"> -->
                            <?php echo image_tag('pages/conference/2011.jpg') ?>
                            <div class="portfolio-overlay">
                                <h4>2011 JAPAN</h4>
                            </div>
                        </a>
                    </li>
                    <!-- <li class="span4 mix 2014">
                        <a href="#pages/portfolio/project_4.html" data-destination="portfolio-items" data-insert="before">
                            <img src="http://placehold.it/390x300" alt="Treble">
                            <div class="portfolio-overlay">
                                <h4>Avatar</h4>
                            </div>
                        </a>
                    </li> -->
                </ul>
            </article>
            <!-- End Article -->
            
            <!-- Footer -->
            <footer>
                <div class="show-more-cube">
                    <!-- showmore用のテンプレートを作成 -->
                     <?php //echo link_to('Show'<br/>'More', '#report/showmore') ?>
                     <a href="#pages/portfolio/readmore.html" data-destination="plugin-filter-elements" data-insert="appendTo" data-action="remove">
                        <span>Show<br/>More</span>
                    </a>
                </div>
            </footer>
            <!-- End footer -->
        </div>
    </div>
    <!-- END PAGE | WORK -->

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