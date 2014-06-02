<?php
// auto-generated by sfPropelCrud
// date: 2014/05/27 02:02:23
?>
<?php use_helper('Object') ?>

<?php echo form_tag('friend/update', 'multipart=true') ?>

<?php echo object_input_hidden_tag($friend, 'getId') ?>

<table>
<tbody>
<tr>
  <th>User:</th>
  <td><?php echo object_select_tag($friend, 'getUserId', array (
  'related_class' => 'User',
  'include_blank' => true,
)) ?></td>
</tr>
<tr>
  <th>Image:</th>
  <td><?php echo input_file_tag('file') ?></td>
</tr>
<tr>
  <th>Body:</th>
  <td><?php echo object_textarea_tag($friend, 'getBody', array (
  'size' => '30x3',
)) ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo submit_tag('save') ?>
<?php if ($friend->getId()): ?>
  &nbsp;<?php echo link_to('delete', 'friend/delete?id='.$friend->getId(), 'post=true&confirm=Are you sure?') ?>
  &nbsp;<?php echo link_to('cancel', 'friend/show?id='.$friend->getId()) ?>
<?php else: ?>
  &nbsp;<?php echo link_to('cancel', 'friend/list') ?>
<?php endif; ?>
</form>