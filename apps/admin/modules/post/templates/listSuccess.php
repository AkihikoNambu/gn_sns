<?php
// auto-generated by sfPropelCrud
// date: 2014/08/17 22:12:27
?>
<h1>post</h1>

<table>
<thead>
<tr>
  <th>User</th>
  <th>Title</th>
  <th>Image</th>
  <th>Body</th>
  <th>Category</th>
  <th>Created at</th>
  <th>Updated at</th>
  <th>Id</th>
</tr>
</thead>
<tbody>
<?php foreach ($posts as $post): ?>
<tr>
    <td><?php echo $post->getUserId() ?></td>
      <td><?php echo $post->getTitle() ?></td>
      <td><?php echo $post->getImage() ?></td>
      <td><?php echo $post->getBody() ?></td>
      <td><?php echo $post->getCategory() ?></td>
      <td><?php echo $post->getCreatedAt() ?></td>
      <td><?php echo $post->getUpdatedAt() ?></td>
      <td><?php echo link_to($post->getId(), 'post/show?id='.$post->getId()) ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>

<?php echo link_to ('create', 'post/create') ?>
