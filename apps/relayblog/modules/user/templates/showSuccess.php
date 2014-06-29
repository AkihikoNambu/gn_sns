<div class = 'user_infomation'>	
	<div id = 'add_infomation'>
		<table>
			<tr>
				<th>UserName: </th>
				<td><?php echo $subscriber->getUserName() ?></td>
			</tr>
			<tr>
				<th>FirstName: </th>
				<td><?php echo $subscriber->getFirstName() ?></td>
			</tr>
			<tr>
				<th>MiddleName: </th>
				<td><?php echo $subscriber->getMiddleName() ?></td>
			</tr>
			<tr>
				<th>LastName: </th>
				<td><?php echo $subscriber->getLastName() ?></td>
			</tr>
			<tr>
				<th>e-mail: </th>
				<td><?php echo $subscriber->getEmail() ?></td>
			</tr>
			<tr>
				<th>Facebook: </th>
				<td><?php echo $subscriber->getfacebookUrl() ?></td>
			</tr>
		</table>
	</div>
	<div id = 'user_image'>
		<?php if($subscriber->getImage() != 'Null'): ?>
			<h3>No Image</h3>
		<?php else: ?>
			<?php echo $subscriber->getImage() ?>
		<?php endif ?>
	</div>
</div>

<div class = 'contribution_infomation'>
	<div id = 'contribution_blog'>
		<h4>Your contributed blog.</h4>
		<?php echo $subscriber->getBlog() ?>
	</div>
	<div id = 'contribution_friend'>
		<h4>Your contriguted infomation of Meet Friends.</h4>
	<div>
</div>