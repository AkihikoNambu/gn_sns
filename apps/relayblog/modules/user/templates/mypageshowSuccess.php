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

<div class = 'user_infomation'>	
	<div id = 'add_infomation'>
		<table>
			<tr>
				<th>UserName: </th>
				<td><?php echo $user->getUserName() ?></td>
			</tr>
			<tr>
				<th>FirstName: </th>
				<td><?php echo $user->getFirstName() ?></td>
			</tr>
			<tr>
				<th>MiddleName: </th>
				<td><?php echo $user->getMiddleName() ?></td>
			</tr>
			<tr>
				<th>LastName: </th>
				<td><?php echo $user->getLastName() ?></td>
			</tr>
			<tr>
				<th>e-mail: </th>
				<td><?php echo $user->getEmail() ?></td>
			</tr>
		</table>
	</div>
	<div id = 'user_image'>
		<?php if($user->getImage() != 'Null'): ?>
			<h3>No Image</h3>
		<?php else: ?>
			<?php echo $user->getImage() ?>
		<?php endif ?>
	</div>
</div>

<div class = 'contribution_infomation'>
	<div id = 'contribution_blog'>
		<h4>Your contributed blog.</h4>
		<?php echo $user->getBlog() ?>
	</div>
	<div id = 'contribution_friend'>
		<h4>Your contriguted infomation of Meet Friends.</h4>
	<div>
</div>


<!-- PAGE | BLOG -->
    <div class="pages page-blog-list" id="page-blog-list">
        <div class="container">
            <div class="row-fluid">
                <div class="span8 blog-details">
                    <!-- Article -->
                    <article>
                        <!-- Profile image -->
                        <?php if($user->getImage() != 'Null'): ?>
							<h3>No Image</h3>
						<?php else: ?>
							<?php echo $user->getImage() ?>
						<?php endif ?>
                        <!-- self introduction -->
                        <?php echo $user->getSelfintroduction() ?>
                        <hr />
						<?php //echo link_to('edit', 'blog/edit?id='.$blog->getId()) ?>
						&nbsp;<?php //echo link_to('list', 'blog/list') ?>
                        
                    </article>
                    <!-- End Article -->
                    
                    <!-- Mypage comments -->
                    <!-- <div class="comments">
                    
                    <!-- End Blog comments -->

                    
                    

                </div>
                <div class="span4 blog-list-right">
                    <!-- Latest blog posts block -->
                    <div class="block">
                        <h6>Lates blog posts</h6>
                        <ul class="simple-link-list">
                            <table>
								<tr>
									<th>UserName: </th>
									<td><?php echo $user->getUserName() ?></td>
								</tr>
								<tr>
									<th>FirstName: </th>
									<td><?php echo $user->getFirstName() ?></td>
								</tr>
								<tr>
									<th>MiddleName: </th>
									<td><?php echo $user->getMiddleName() ?></td>
								</tr>
								<tr>
									<th>LastName: </th>
									<td><?php echo $user->getLastName() ?></td>
								</tr>
								<tr>
									<th>e-mail: </th>
									<td><?php echo $user->getEmail() ?></td>
								</tr>
							</table>
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
