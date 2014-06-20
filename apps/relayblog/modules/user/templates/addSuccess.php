<?php use_helper('Validation') ?>

<?php echo form_tag('user/add') ?>

	<fieldset>
		<div class="form-row">
		    <label for="user_name">user_name:</label> 
		    <?php echo form_error('user_name') ?>
		    <?php echo input_tag('user_name') ?>
	    </div>
	 
	    <div class="form-row">
		    <label for="password">password:</label>
		    <?php echo form_error('password ') ?>
		    <?php echo input_password_tag('password') ?>
	    </div>

	</fieldset> 


	<div class="submit-row">
	    <?php echo submit_tag('save it') ?>
	</div>
</form>