<!-- PAGE | BLOG -->
    <div class="pages page-blog-list" id="page-blog-list">
        <div class="container">
            <!-- Header -->
            <header>
                <h4 class="line-divider">Diary</h4>
                <!-- <h1>Leaders Relay Diary</h1> -->
                <h1><?php echo $blog->getTitle() ?></h1>
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
                        <?php echo image_tag('/'.sfConfig::get('sf_upload_dir_name').'/'.$blog->getImage()) ?>
                        
                        <!-- Blog title -->
                        <h5>
                            <?php echo $blog->getTitle() ?><br/>
                            <small>Posted By Admin, Written By <a href="#"><?php echo $blog->getUserId() ?></a>,
                            	 <?php echo $blog->getCreatedAt() ?>
                            	 		<!-- ここにリレータイトルを入れたい！！ -->
                            	 	 <!-- <a href="#">Photography</a> -->
                                    </small>
                        </h5>
                        
                        <!-- Blog post description -->
                        <?php echo $blog->getBody() ?>
                        <hr />
						<?php //echo link_to('edit', 'blog/edit?id='.$blog->getId()) ?>
						&nbsp;<?php //echo link_to('list', 'blog/list') ?>
                        
                    </article>
                    <!-- End Article -->
                                        
                    <!-- Blog comments -->
                    <div class="comments">
                        <?php echo $comment_number ?> comments
                    </div>
                    <div class="comments-details">
                        <?php foreach ($blog_comments as $blog_comment): ?>
                        <?php $comment_user = $blog_comment->getUser() ?>
                            <div class="media">
                                <div class="pull-left">
                                    <!-- セッション情報から投稿者情報を取得 -->
                                    <?php echo image_tag('/'.sfConfig::get('sf_upload_dir_name').'/'.$comment_user->getImage(), array('class'=>'commentuser-image')) ?>
                                    <!-- <img src="http://placehold.it/60x60" width="60"/> -->
                                </div> 
                                <div class="media-body">
                                    <div class="comments-post-info">
                                        <small><a href="#">
                                            <?php echo $comment_user->getUserName() ?>
                                        </a> <?php echo $blog_comment->getCreatedAt() ?></small>
                                    </div>
                                       <p>
                                        <?php echo $blog_comment->getBody() ?>
                                       </p>    
                                </div>
                            </div>
                        <?php endforeach; ?>
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
                                <?php use_helper('Object') ?>
                                <!-- blogのcommentアクションに渡す -->
                                <?php echo form_tag('blog/comment') ?>
                                <!-- コメントと同時にそのブログのidを取得し一緒に保存する -->
                                <?php echo object_input_hidden_tag($blog, 'getId') ?>
                                <?php echo textarea_tag('body', '', array('size' => '100x2')) ?><br/>
                                <?php echo submit_tag('Post a comment', array('class'=>'btn btn-primary')) ?>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Blog Write comment -->


                </div>
                <!-- 最新記事を載せる５件まで -->
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
                        <h6>Topics</h6>
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
