<?php use_helper('User') ?>


<div class="signedin_mark" id="mark_<?php echo $user->getId() ?>">
	<?php echo $User->getsignedinUser()?>
</div>


<?php echo link_to_user_signedin($sf_user) ?>