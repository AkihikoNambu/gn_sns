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

<?php use_helper('Validation') ?>


    <!-- PAGE | CONTACT -->
    <div class="pages black-bg white page-contact" id="page-contact">
        <div class="container">
            <!-- Header -->
            <header>
                <h4 class="line-divider">Sign Up</h4>
                <h1>Welcome!</h1>
                <div class="row">
                    <div class="span8 offset2">
                        <p>
                            Here is the GNLF community site!! Please sign up first!
                            <br/>
                            This site is for only GNLF-related-people. 
                        </p>
                    </div>
                </div>
            </header>
            <!-- End Header -->
            
            <!-- Start Article -->
            <article>
                <div class="row-fluid">

                    <!-- Contact information -->
                    <div class="span5 offset1">
                        <h5>How sign up</h5>
                        <!-- <div class="media">
                            <div class="social-icons sicon-white pull-left">
                                <a href="#" class="sicon-phone"><i>Phone</i></a>
                            </div> 
                            <div class="media-body smallFontBy08">
                                (+1) 502 964-0393 | (+1) 502 964-0393 (FAX)
                            </div>
                        </div> -->
                        <div class="media">
                            <!-- <div class="social-icons sicon-white pull-left">
                                <a href="#" class="sicon-place"><i>Location</i></a>
                            </div>  -->
                            <div class="media-body smallFontBy08">
                                1. アカウント申請。本ページ
                            </div>
                        </div>
                        <div class="media">
                            <!-- <div class="social-icons sicon-white pull-left">
                                <a href="#" class="sicon-mail"><i>email</i></a>
                            </div>  -->
                            <div class="media-body smallFontBy08">
                                2. 管理者がアカウント申請者を審査。 
                            </div>
                        </div>
                        <div class="media">
                            <!-- <div class="social-icons sicon-white pull-left">
                                <a href="#" class="sicon-clock"><i>Time zone</i></a>
                            </div>  -->
                            <div class="media-body smallFontBy08">
                                3. アカウント申請承認
                            </div>
                        </div>
                        <div class="media">
                            <!-- <div class="social-icons sicon-white pull-left">
                                <a href="#" class="sicon-clock"><i>Time zone</i></a>
                            </div>  -->
                            <div class="media-body smallFontBy08">
                                4. 申請承認メールを受け取り。
                            </div>
                        </div>
                        <div class="media">
                            <!-- <div class="social-icons sicon-white pull-left">
                                <a href="#" class="sicon-clock"><i>Time zone</i></a>
                            </div>  -->
                            <div class="media-body smallFontBy08">
                                5. 申請時のユーザー名、パスワードでログイン。
                            </div>
                        </div>
                        <div class="media">
                            <!-- <div class="social-icons sicon-white pull-left">
                                <a href="#" class="sicon-clock"><i>Time zone</i></a>
                            </div>  -->
                            <div class="media-body smallFontBy08">
                                6. 無事ログインできたらユーザー登録完了。</br>アカウントの情報を編集し充実させましょう！！
                            </div>
                        </div>
                        <div class="media">
                            <!-- <div class="social-icons sicon-white pull-left">
                                <a href="#" class="sicon-clock"><i>Time zone</i></a>
                            </div>  -->
                            <div class="media-body smallFontBy08">
                                7. いっぱいサイトに訪れて、仲間と交流しましょう！！
                            </div>
                        </div>
                        <br/>
                        <br/>
                        
                        <!-- <h5>Get social</h5>
                        <div class="social-icons sicon-white bordered">
                            <a href="https://www.facebook.com/groups/151692711639352/" target="_blank" class="sicon-facebook"><i>Facebook</i></a>
                            <a href="#" class="sicon-twitter"><i>Twitter</i></a> -->
                            <!-- <a href="#" class="sicon-linkedin"><i>LinkedIn</i></a>
                            <a href="#" class="sicon-youtube"><i>Youtube</i></a>
                            <a href="#" class="sicon-pinterest"><i>Pinterest</i></a> -->
                        <!-- </div> -->
                    </div>
                    <!-- End Contact information -->
                     <!-- twitter -->
                    <div class="span6">
                        <h5>who you are</h5>
                        <?php echo form_tag('user/add') ?>
	
						<!-- <fieldset> -->
							<?php echo input_hidden_tag('certification', '0') ?>
							<div class="form-row">
							    <!-- <label for="user_name">user_name:</label>  -->
							    <?php echo form_error('user_name') ?>
							    <?php echo input_tag('user_name', 'User Name') ?>
						    </div>
						    <div class="form-row">
							    <!-- <label for="user_name">first name:</label>  -->
							    <?php echo form_error('first_name') ?>
							    <?php echo input_tag('first_name', 'First Name') ?>
						    </div>
						    <div class="form-row">
							    <!-- <label for="user_name">middle_name:</label>  -->
							    <?php echo form_error('middle_name') ?>
							    <?php echo input_tag('middle_name', 'Middle Name') ?>
						    </div>
						    <div class="form-row">
							    <!-- <label for="user_name">last_name:</label>  -->
							    <?php echo form_error('last_name') ?>
							    <?php echo input_tag('last_name', 'Last Name') ?>
						    </div>
						    <div class="form-row">
							    <!-- <label for="user_name">e-mail:</label>  -->
							    <?php echo form_error('e-mail') ?>
							    <?php echo input_tag('email', 'e-mail') ?>
						    </div>
						    <div class="form-row">
							    <!-- <label for="user_name">your facebook url:</label>  -->
							    <?php echo form_error('facebook') ?>
							    <?php echo input_tag('facebook_url', 'facebook url') ?>
						    </div>
						    <!-- <div class="form-row">
							    <label for="user_name">participation year:</label> --> 
							    <?php //echo form_error('user_name') ?>
							    <?php //echo input_select_tag('year') ?>
						    <!-- </div> -->
						    <div class="form-row">
							    <label for="password">password:</label>
							    <?php echo form_error('password ') ?>
							    <?php echo input_password_tag('password') ?>
						    </div>

						<!-- </fieldset>  -->


						<div class="submit-row">
						    <?php echo submit_tag('apply') ?>
						</div>
						</form>
                        <!-- <form>
                            <input type="text" class="span12" placeholder="Title" required="required">
                            <input type="email" class="span12" placeholder="Email" required="required">
                            <textarea rows="10" class="span12" required="required"></textarea>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form> -->
                    </div>
                    <!-- End Contact form -->
                </div>
            </article>
            <!-- End Article -->
            <!-- <hr/>
            <footer>
               <p> © 2014 GLOBAL NEXTLEADERS FORUM</p>
            </fotter> -->
        </div>
        
        <!-- Background map image -->
        <div id="map-image">
            <!-- 大きさ指定は第２引数でクラスを作ってcssで指定する。 -->
            <?php echo image_tag('pages/contact/q_bck.jpg', array('class'=>'map-image-image')) ?>
        </div>
    </div>
    <!-- END PAGE | CONTACT -->
  </body>
</html>