<?php use_helper('Object') ?>

<!-- 一つ目の引数は飛ばしたいaction -->
<?php echo form_tag('blog/update', 'multipart=true') ?>

<?php echo object_input_hidden_tag($blog, 'getId') ?>
<?php //echo input_hidden_tag('oya_id', $sf_params->get('oya_id')) ?>

<br/>
<table>
<tbody> 
<tr>
  <th>User:</th>
  <td><?php echo object_select_tag($blog, 'getUserId', array (
  'related_class' => 'User',
  'include_blank' => true,
)) ?></td>
</tr>
<tr>
  <th>Title:</th>
  <td>
  <?php echo object_input_tag($blog, 'getTitle', array (
  'size' => 50,
)) ?>
</td>
</tr>
<tr>
  <th>Image:</th>
  <td><?php echo input_file_tag('file') ?></td>
</tr>
<tr>
  <th>Body:</th>
  <td>
  <?php echo object_textarea_tag($blog, 'getBody', array (
  'size' => '30x3',
)) ?>
</td>
</tr>
</tbody>
</table>
<hr />
<?php echo submit_tag('save') ?>
<?php if ($blog->getId()): ?>
  &nbsp;<?php echo link_to('delete', 'blog/delete?id='.$blog->getId(), 'post=true&confirm=Are you sure?') ?>
  &nbsp;<?php echo link_to('cancel', 'blog/show?id='.$blog->getId()) ?>
<?php else: ?>
  &nbsp;<?php echo link_to('cancel', 'blog/list') ?>
<?php endif; ?>
</form>
