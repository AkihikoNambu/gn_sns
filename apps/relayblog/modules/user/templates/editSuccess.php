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
            <?php echo form_tag('user/edit', 'multipart=true') ?>
            <tr class="form-row0">
                <th>Property</th>
                <th>Your infomation</th>
                <th>modification</th>
            </tr>
			<tr class="form-row1">
				<th>UserName: </th>
				<td><?php echo $subscriber->getUserName() ?></td>
                <td><?php echo input_tag('user_name',$subscriber->getUserName())?></td>
			</tr>
			<tr class="form-row2">
				<th>FirstName: </th>
				<td><?php echo $subscriber->getFirstName() ?></td>
                <td><?php echo input_tag('first_name',$subscriber->getFirstName())?></td>
			</tr>
			<tr class="form-row1">
				<th>MiddleName: </th>
				<td><?php echo $subscriber->getMiddleName() ?></td>
                <td><?php echo input_tag('middle_name',$subscriber->getMiddleName())?></td>
			</tr>
			<tr class="form-row2">
				<th>LastName: </th>
				<td><?php echo $subscriber->getLastName() ?></td>
                <td><?php echo input_tag('last_name',$subscriber->getLastName())?></td>
			</tr>
            <tr class="form-row1">
                <th>Nationality: </th>
                <td><?php echo $subscriber->getNationality() ?></td>
                <td><?php echo input_tag('nationality',$subscriber->getNationality())?></td>
            </tr>
            <tr class="form-row2">
                <th>Place of residence: </th>
                <td><?php //echo $subscriber->getPlaceOfResidence() ?></td>
                <td><?php //echo input_tag('place_of_residence',$subscriber->getPlaceOfResidence())?></td>
            </tr>
			<tr class="form-row1">
				<th>e-mail: </th>
				<td><?php echo $subscriber->getEmail() ?></td>
                <td><?php echo input_tag('email',$subscriber->getEmail())?></td>
			</tr>
			<tr class="form-row2">
				<th>Facebook: </th>
				<td><?php echo $subscriber->getfacebookUrl() ?></td>
                <td><?php echo input_tag('facebook_url',$subscriber->getFacebookUrl())?></td>
            </tr>
			<tr class="form-row1">
                <th>Image</th>
                <td><?php if(!$subscriber->getImage()): ?>
                 <!-- // == 'Null'): ?> -->
                        No Image
                    <?php else: ?>
                        <?php echo image_tag('/'.sfConfig::get('sf_upload_dir_name').'/'.$subscriber->getImage(),'alt=foo size=200x100') ?>
                    <?php endif ?>
                </td>
                <td>
                    <?php echo input_file_tag('file') ?>   
                </td>
            </tr>
            <tr class = "form-row2">
                <th>Self Introduction</th>
                <td><?php echo $subscriber->getSelfIntroduction() ?></td>
                <td><?php echo textarea_tag('self_introduction', $subscriber->getSelfIntroduction())?></td>
            </tr>
            <tr class="form-row">
                <th></th>
                <td></td>
                <td class="submit-button"><?php echo submit_tag('SUBMIT') ?></td>
            </tr>

        </form>
		</table>
	</div>
</div>

<div class = 'contribution_infomation'>
	<div id = 'contribution_blog'>
		
	</div>
	<div id = 'contribution_friend'>
		
	</div>
</div>
</body>
</html>


