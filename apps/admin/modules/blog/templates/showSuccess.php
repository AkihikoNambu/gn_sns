
<?php use_helper('Text'); ?>

<table>
    <tbody>
		<tr>
			<th>User: </th>
			<td><?php echo $blog->getUserId() ?></td>
		</tr>
		<tr>
			<th>Title: </th>
			<td><?php echo $blog->getTitle() ?></td>
		</tr>
		<tr>
			<th>Image: </th>
			<td><?php echo $blog->getImage() ?></td>
		</tr>
		<tr>
			<th>Body: </th>
			<td><?php echo $blog->getBody() ?></td>
		</tr>
		<tr>
			<th>Created at: </th>
			<td><?php echo $blog->getCreatedAt() ?></td>
		</tr>
		<tr>
			<th>Updated at: </th>
			<td><?php echo $blog->getUpdatedAt() ?></td>
		</tr>
		<tr>
			<th>Id: </th>
			<td><?php echo $blog->getId() ?></td>
		</tr>
	</tbody>
</table>
<hr />

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
      <?php foreach ($blog_comments as $blog_comment): ?>
      <tr>
          <td><?php echo $blog_comment->getUserId() ?></td>
          <td><?php echo simple_format_text($blog_comment->getBody()) ?></td>
          <td><?php echo $blog_comment->getCreatedAt() ?></td>
          <td><?php echo $blog_comment->getUpdatedAt() ?></td>
          <td><?php echo $blog_comment->getId() ?></td>
      </tr>
      <br /><br />
      <?php endforeach; ?>
    </tbody>
  </table>
<hr />


<?php echo link_to('edit', 'blog/edit?id='.$blog->getId()) ?>
&nbsp;<?php echo link_to('list', 'blog/list') ?>
