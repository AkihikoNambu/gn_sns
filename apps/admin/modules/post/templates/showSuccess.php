<?php
// auto-generated by sfPropelCrud
// date: 2014/08/17 22:12:27
?>
<table>
<tbody>
<tr>
<th>User: </th>
<td><?php echo $post->getUserId() ?></td>
</tr>
<tr>
<th>Title: </th>
<td><?php echo $post->getTitle() ?></td>
</tr>
<tr>
<th>Image: </th>
<td><?php echo $post->getImage() ?></td>
</tr>
<tr>
<th>Body: </th>
<td><?php echo $post->getBody() ?></td>
</tr>
<tr>
<th>Category: </th>
<td><?php echo $post->getCategory() ?></td>
</tr>
<tr>
<th>Created at: </th>
<td><?php echo $post->getCreatedAt() ?></td>
</tr>
<tr>
<th>Updated at: </th>
<td><?php echo $post->getUpdatedAt() ?></td>
</tr>
<tr>
<th>Id: </th>
<td><?php echo $post->getId() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('edit', 'post/edit?id='.$post->getId()) ?>
&nbsp;<?php echo link_to('list', 'post/list') ?>