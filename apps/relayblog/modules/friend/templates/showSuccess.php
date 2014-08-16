<!-- PAGE | BLOG -->
    <div class="pages page-blog-list" id="page-blog-list">
        <div class="container">
            <!-- Header -->
            <header>
                <h4 class="line-divider">friend</h4>
                <h1>Meet Friends
                    <!-- ここにタイトル、つまりユーザーのfirstnameとlastnameを挿入 -->
                    <?php //echo $friend_info->getFirstName() ?> <?php //echo $friend_info->getLastName() ?>
                </h1>
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
                        <?php echo image_tag('/'.sfConfig::get('sf_upload_dir_name').'/'.$friend->getImage()) ?>
                        
                        <!-- Blog title -->
                        <h5>

                            <!-- <br/> -->
                            <small>Posted At <?php echo $friend->getCreatedAt() ?>
                            	 	<!-- ここはユーザーのタイプ -->
                                    <?php //echo $friend_info->getUserType() ?>
                            	 	 <!-- <a href="#">Photography</a></small> -->
                        </h5>
                        
                        <!-- Blog post description -->
                        <?php echo $friend->getBody() ?>
                        <hr />
                    </article>
                    <!-- End Article -->
                    
                    <!-- Friend comments -->
                    <!-- commentにもページャ的なものが必要 -->
                    <div class="comments">
                        <?php echo $comment_number ?> comments
                    </div>
                    <div class="comments-details">
                        <?php foreach ($friend_comments as $friend_comment): ?>
                        <?php $comment_user = $friend_comment->getUser() ?>
                            <div class="media">
                                <div class="pull-left">
                                    <!-- セッション情報から投稿者の情報を取得する -->
                                    <!-- 投稿者の画像表示 -->

                                    <?php echo image_tag('/'.sfConfig::get('sf_upload_dir_name').'/'.$comment_user->getImage(), array('class'=>'commentuser-image')) ?>
                                    <!-- <img src="http://placehold.it/60x60" width="60"/> -->
                                </div> 
                                <div class="media-body">
                                    <div class="comments-post-info">
                                        <small>
                                            <!-- 投稿者の名前を表示 -->
                                            <!-- <a href="#">Akihiko Nambu</a> -->
                                            
                                            <?php echo $comment_user->getUserName() ?>
                                            <?php echo $friend_comment->getCreatedAt() ?>, </small>
                                    </div>
                                    <p>
                                        <?php echo $friend_comment->getBody() ?>
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
                                    <!-- friendのcommentアクションに渡す -->
                                    <?php echo form_tag('friend/comment') ?>
                                    <!-- コメントと同時にそのブログのidを取得し一緒に保存する -->
                                    <?php echo object_input_hidden_tag($friend, 'getId') ?>
                                    <?php echo textarea_tag('body', '', array('size' => '100x2')) ?><br/>
                                    <?php echo submit_tag('Post a comment', array('class'=>'btn btn-primary')) ?>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Blog Write comment -->
                </div>
                <div class="span4 blog-list-right">
                    <!-- Latest friend posts block -->
                    <div class="block">
                        <h6>Lates friend posts</h6>
                        <ul class="simple-link-list">
                            <?php foreach ($lates_friends as $lates_friend): ?>
                            <li>
                                <!-- タイトルとしてユーザーのfirstname, lastnameを表示し、記事へのリンクを貼る -->
                                <?php //echo link_to($lates_friend->getTitle(), 'friend/show?id='.$lates_friend->getId()) ?>
                                <?php echo $lates_friend->getTitle() ?>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                    
                    <!-- Tags -->
                    <!-- <div class="block">
                        <h6>Other Topics</h6>
                        <nav class="submenu">
                            <ul>
                                <li>
                                    <a href="./blog.html" class="active">All</a>
                                </li>
                                <li>
                                    <a href="./blog.html">Participants</a>
                                </li>
                                <li>
                                    <a href="./blog.html">Organaizers</a>
                                </li>
                                <li>
                                    <a href="./blog.html">Lectureres</a>
                                </li> -->
                                <!-- <li>
                                    <a href="./blog.html">Photography</a>
                                </li>
                                <li>
                                    <a href="./blog.html">Other</a>
                                </li> -->
                            <!-- </ul>
                        </nav>
                    </div> -->
                    
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
