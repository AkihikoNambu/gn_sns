<?php
// auto-generated by sfPropelCrud
// date: 2014/05/27 02:02:23
?>
<table>
<tbody>
<tr>
<th>User: </th>
<td><?php echo $friend->getUserId() ?></td>
</tr>
<tr>
<th>Image: </th>
<td><?php echo $friend->getImage() ?></td>
</tr>
<tr>
<th>Body: </th>
<td><?php echo $friend->getBody() ?></td>
</tr>
<tr>
<th>Created at: </th>
<td><?php echo $friend->getCreatedAt() ?></td>
</tr>
<tr>
<th>Updated at: </th>
<td><?php echo $friend->getUpdatedAt() ?></td>
</tr>
<tr>
<th>Id: </th>
<td><?php echo $friend->getId() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('edit', 'friend/edit?id='.$friend->getId()) ?>
&nbsp;<?php echo link_to('list', 'friend/list') ?>
