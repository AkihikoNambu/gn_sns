<?php use_helper('Text') ?>

<h1>blog</h1>
<?php foreach ($parent_blogs as $blog): ?>
<table>
  <thead>
    <tr>
      <th>User</th>
      <th>Title</th>
      <th>Image</th>
      <th>Body</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Id</th>
    </tr>
  </thead>
  <tbody>
   <tr>

        <td><?php echo $blog->getUserId() ?></td>
        <td><?php echo $blog->getTitle() ?></td>
        <td><?php echo $blog->getImage() ?></td>
        <td><?php echo $blog->getBody() ?></td>
        <td><?php echo $blog->getCreatedAt() ?></td>
        <td><?php echo $blog->getUpdatedAt() ?></td>
        <td><?php echo link_to($blog->getId(), 'blog/show?id='.$blog->getId()) ?></td>
    </tr>
  </tbody>
</table>

<div align="right">
  <?php echo form_tag('blog/create') ?>
  <?php echo input_hidden_tag('oya_id', $blog->getId()) ?>
  <?php echo input_hidden_tag('oya_title', $blog->getTitle()) ?>
  <?php echo input_hidden_tag('oya_body', $blog->getBody()) ?>
  <?php echo submit_tag('返信') ?>
  </form>
</div>

<?php $th = 'threads'.$blog->getId() ?>

<div style='margin-left: 20px'>
  <table>
    <thead>
      <tr>
        <th>User</th>
        <th>Title</th>
        <th>Image</th>
        <th>Body</th>
        <th>Created at</th>
        <th>Updated at</th>
        <th>Id</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($$th as $reply): ?>
      <tr>
          <td><?php echo $reply->getUserId() ?></td>
          <td><?php echo $reply->getTitle() ?></td>
          <td><?php echo $reply->getImage() ?></td>
          <td><?php echo simple_format_text($reply->getBody()) ?></td>
          <td><?php echo $reply->getCreatedAt() ?></td>
          <td><?php echo $reply->getUpdatedAt() ?></td>
          <td><?php echo link_to($reply->getId(), 'blog/show?id='.$reply->getId()) ?></td>
      </tr>
      <br /><br />
      <?php endforeach; ?>
    </tbody>
  </table>
 
</div>

<hr>
<?php endforeach; ?>
<?php echo link_to ('create', 'blog/create') ?>
