
<?php use_helper('Text'); ?>

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

<div style='margin-left: 20px'>
  <table>
    <thead>
      <tr>
        <th>User</th>
        <th>Body</th>
        <th>Created at</th>
        <th>Updated at</th>
        <th>Id</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($friend_comments as $friend_comment): ?>
      <tr>
          <td><?php echo $friend_comment->getUserId() ?></td>
          <td><?php echo simple_format_text($friend_comment->getBody()) ?></td>
          <td><?php echo $friend_comment->getCreatedAt() ?></td>
          <td><?php echo $friend_comment->getUpdatedAt() ?></td>
          <td><?php echo $friend_comment->getId() ?></td>
      </tr>
      <br /><br />
      <?php endforeach; ?>
    </tbody>
  </table>
<hr />
