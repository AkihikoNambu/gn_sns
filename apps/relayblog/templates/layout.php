 <!-- NAVIGATION -->
    <nav class="fixed-top" id="navigation">
        <div class="container">
            <div class="row-fluid">
                <div class="span12 center">
                    <!-- LOGO -->
                    <a class="brand pull-left" href="./">
                        <?php echo image_tag('logo.png') ?>
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
                        <li><?php echo link_to('login', 'user/login') ?></li>
                        <!-- <li><a href="#page-clients">Sponsors</a></li>
                        <li><a href="#page-contact">Contact</a></li> -->
                        <?php if ($sf_user->isAuthenticated()): ?>
                          <li><?php echo link_to('Logout', 'login/logout') ?></li>
                          <li><?php echo link_to($sf_user->getAttribute('user_name', '', 'subscriber').' profile', 'user/profile') ?></li>
                        <?php else: ?>
                          <li><?php echo link_to('Login', 'login/login') ?></li>
                        <?php endif ?>

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