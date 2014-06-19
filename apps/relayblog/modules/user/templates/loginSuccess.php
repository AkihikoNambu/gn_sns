<?php echo form_tag('user/login') ?>
<?php use_helper('Validation')?> 
  <fieldset>
 
  <div class="form-row">
    <?php echo form_error('user_name')?>
    <label for="user_name">user_name:</label>
    <?php echo input_tag('user_name', $sf_params->get('user_name')) ?>
  </div>
 
  <div class="form-row">
    <?php echo form_error('password')?>
    <label for="password">password:</label>
    <?php echo input_password_tag('password') ?>
  </div>
 
  </fieldset>
 
  <?php echo input_hidden_tag('referer', $sf_request->getAttribute('referer')) ?>
  <?php echo submit_tag('Login') ?>
 
</form>