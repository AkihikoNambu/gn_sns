<?php use_helper('Validation') ?>

<?php echo form_tag('user/add') ?>

	<fieldset>
		<div class="form-row">
		    <?php echo form_error('nickname')?>
		    <label for="nickname">nickname:</label>
		    <?php echo input_tag('nickname', $sf_params->get('nickname')) ?>
	    </div>
	 
	    <div class="form-row">
		    <?php echo form_error('password')?>
		    <label for="password">password:</label>
		    <?php echo input_password_tag('password') ?>
	    </div>

	</fieldset> 


	<div class="submit-row">
	    <?php echo submit_tag('save it') ?>
	</div>
</form>