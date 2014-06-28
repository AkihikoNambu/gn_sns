    <!-- PAGE | BLOG -->
    <div class="pages page-blog-list" id="page-blog-list">
        <div class="container">
            <!-- Header -->
            <header>
                <h4 class="line-divider">Diary</h4>
                <h1>World Relay Diary</h1>
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
                      <?php foreach ($blog_pager->getResults() as $blog): ?>
                      <?php $writer = $blog->getUser() ?>
                        <!-- Blog image -->
                        <?php echo image_tag('/'.sfConfig::get('sf_upload_dir_name').'/'.$blog->getImage()) ?>
                        
                        <!-- Blog title -->
                        <h5>
                            <?php echo $blog->getTitle() ?>
                            <br/>
                            <!-- 本来はusernameを表示 -->
                            <small>Edited By Admin, Written By <?php echo link_to($writer->getUserName()) ?></a>, 
                                <?php echo $blog->getCreatedAt() ?></small>
                        </h5>
                        
                        <!-- Blog post description admin側で要約でも書くか -->
                        <?php //echo $blog->getSummary() ?>
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
                            <?php $comment_number = $blog->countBlogComments() ?>
                            <?php echo $comment_number ?>
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
                    </div>
                </div>
                <!-- <div class="span4 blog-list-right"> -->
                    <!-- Latest blog posts block -->
                    <!-- <div class="block">
                        <h6>Lates blog posts</h6>
                        <ul class="simple-link-list"> -->
                            <?php //foreach ($lates_blogs as $lates_blog): ?>
                            <!-- <li> -->
                                <?php //echo link_to($lates_blog->getTitle(), 'blog/show?id='.$lates_blog->getId()) ?> <?php //echo $lates_blog->getCreatedAt() ?>
                            <!-- </li> -->
                        <?php //endforeach; ?>
                        <!-- </ul>
                    </div> -->
                    <!-- topicリスト -->
                    <!-- <div class="block">
                        <h6>Topics</h6> -->
                        <!-- ここに連載済み、連載中のテーマをリストアップする -->
                        <!-- <nav class="submenu">
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
                            </ul>
                        </nav> -->
                    <!-- </div> -->
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
