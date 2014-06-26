<?php use_helper('Object') ?>

<h2>管理者ページ</h2>

	<div>
		<h3>blog</h3>
		<ul style = "list-style:none;">
			<li><?php echo button_to('create','blog/create') ?></li>
			<li><?php echo button_to('list','blog/list') ?></li>
		</ul>
	</div>
	<div>
		<h3>Meet Friends</h3>
		<ul style = "list-style:none;">
			<li><?php echo button_to('create','friend/create') ?></li>
			<li><?php echo button_to('list','friend/list') ?></li>
		</ul>
	</div>
	<div>
		<h3>Report</h3>
		<ul style = "list-style:none;">
			<li><?php echo button_to('create','report/create') ?></li>
			<li><?php echo button_to('list','report/list') ?></li>
		</ul>
	</div>
	<div>
		<h3>User Approve</h3>
		<ul style = "list-style:none;">
			<li><?php echo button_to('approve','user/applicantlist') ?></li>
			<li><?php echo button_to('list','user/userlist') ?></li>
		</ul>
	</div>
	
	