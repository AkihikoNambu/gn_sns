<?php use_helper('Validation') ?>

<?php echo form_tag('user/add') ?>

	<fieldset>
		<div class="form-row">
		    <?php# echo form_error('user_name')?>
		    <label for="user_name">user_name:</label>
		    <?php echo input_tag('user_name') ?>
	    </div>
	 
	    <div class="form-row">
		    <?php #echo form_error('password')?>
		    <label for="password">password:</label>
		    <?php echo input_password_tag('password') ?>
	    </div>

	</fieldset> 


	<div class="submit-row">
	    <?php echo submit_tag('save it') ?>
	</div>
</form>