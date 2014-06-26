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
    
    <!-- PAGE | LOGIN FORM -->
    <div class="pages white paralax page-welcome" id="page-welcome">
        <div class="overlay"></div>
        <!-- Centralized content -->
        <div class="centralized">
            <div class="container">
                <div class="row-fluid">
                    <div class="span12 center">
                        <div class="line-divider" id="welcome-messages">
                          <h2>GLOBAL NEXTLEADERS FORUM</h2>
                        </div>
                        <div class="line-divider" id="welcome-messages">
                           <!--  <ul class="slides">
                                <li>
                                    <h1>GLOBAL<br>NEXTLEADERS<br>FORUM</h1>
                                </li>
                                <li>
                                    <h1>Alumni&Alumnae<br>International<br>Community</h1>
                                </li>
                            </ul> -->
                            <?php echo form_tag('user/adminuserlogin') ?>
                            <?php use_helper('Validation')?> 
                            <fieldset>
                            <p>*please login by your username and password.</p>
                            <div class="form-row">
                              <?php echo form_error('user_name')?>
                              <label for="user_name">UserName:</label>
                              <?php echo input_tag('user_name', $sf_params->get('user_name')) ?>
                            </div>
                           
                            <div class="form-row">
                              <?php echo form_error('password')?>
                              <label for="password">Password:</label>
                              <?php echo input_password_tag('password') ?>
                            </div>
                           
                            </fieldset>
                           
                            <?php //echo input_hidden_tag('referer', $sf_request->getAttribute('referer')) ?>
                            <?php echo submit_tag('Login') ?>
                          </form>
                        </div>
                        <!-- <div class="social-icons sicon-white bordered">
                            <a href="https://www.facebook.com/groups/151692711639352/" class="sicon-facebook" target=_blank><i>Facebook</i></a>
                            <a href="#" class="sicon-twitter"><i>Twitter</i></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE | Welcome -->
