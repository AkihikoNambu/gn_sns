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
                        <?php echo image_tag('gnlf003.jpg', array("width"=>"78", "height"=>"26")) ?>
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
                        <li><a href="http://localhost:8888/gn_sns/relayblog_dev.php/">Home</a></li>
                        <li><a href="#page-about">Friends</a></li>
                        <li><a href="#page-blog">Diary</a></li>
                        <li><a href="#page-work">Reports</a></li>
                        <li><a href="#page-clients">Sponsors</a></li>
                        <!-- <li><a href="#page-clients">Sponsors</a></li>-->
                        <!-- <li><a href="#page-contact">Login</a></li>  -->
                    </ul>


                    <!-- END MAIN MENU -->
                    
                    <!-- SOCIAL ICONS -->
                    <div class="social-icons hover-big pull-right">
                        <?php echo link_to('logout', 'user/logout') ?>
                        
                        <!-- <a href="https://www.facebook.com/groups/151692711639352/" target="_blank" class="sicon-facebook"><i>Facebook</i></a>
                        <a href="#" class="sicon-twitter"><i>Twitter</i></a> -->
                        <?php echo image_tag('arimura3.jpg', array('width'=>'41', 'height'=>'42', 'class'=>'user_icon')) ?>
                    </div>
                    <!-- END SOCIAL ICONS -->
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAVIGATION -->
<div class = 'user_infomation'>	
	<div id = 'add_infomation'>
		<table>
			<tr>
				<th>UserName: </th>
				<td><?php echo $subscriber->getUserName() ?></td>
			</tr>
			<tr>
				<th>FirstName: </th>
				<td><?php echo $subscriber->getFirstName() ?></td>
			</tr>
			<tr>
				<th>MiddleName: </th>
				<td><?php echo $subscriber->getMiddleName() ?></td>
			</tr>
			<tr>
				<th>LastName: </th>
				<td><?php echo $subscriber->getLastName() ?></td>
			</tr>
			<tr>
				<th>e-mail: </th>
				<td><?php echo $subscriber->getEmail() ?></td>
			</tr>
			<tr>
				<th>Facebook: </th>
				<td><?php echo $subscriber->getfacebookUrl() ?></td>
			</tr>
		</table>
	</div>
	<div id = 'user_image'>
		<?php if($subscriber->getImage() != 'Null'): ?>
			<h3>No Image</h3>
		<?php else: ?>
			<?php echo $subscriber->getImage() ?>
		<?php endif ?>
	</div>
</div>

<div class = 'contribution_infomation'>
	<div id = 'contribution_blog'>
		<h4>Your contributed blog.</h4>
		<?php echo $subscriber->getBlog() ?>
	</div>
	<div id = 'contribution_friend'>
		<h4>Your contriguted infomation of Meet Friends.</h4>
	<div>
</div>

