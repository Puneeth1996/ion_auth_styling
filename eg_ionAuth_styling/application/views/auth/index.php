<!-- Fontfaces CSS-->
<link href="<?php echo base_url(); ?>assets/admin/css/font-face.css" rel="stylesheet" media="all">
<link href="<?php echo base_url(); ?>assets/admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
<link href="<?php echo base_url(); ?>assets/admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
<link href="<?php echo base_url(); ?>assets/admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

<!-- Bootstrap CSS-->
<link href="<?php echo base_url(); ?>assets/admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

<!-- Vendor CSS-->
<link href="<?php echo base_url(); ?>assets/admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
<link href="<?php echo base_url(); ?>assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
<link href="<?php echo base_url(); ?>assets/admin/vendor/wow/animate.css" rel="stylesheet" media="all">
<link href="<?php echo base_url(); ?>assets/admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
<link href="<?php echo base_url(); ?>assets/admin/vendor/slick/slick.css" rel="stylesheet" media="all">
<link href="<?php echo base_url(); ?>assets/admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
<link href="<?php echo base_url(); ?>assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
<link href="<?php echo base_url(); ?>assets/admin/vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

<!-- Main CSS-->
<link href="<?php echo base_url(); ?>assets/admin/css/theme.css" rel="stylesheet" media="all">
<link href="<?php echo base_url(); ?>assets/admin/css/myStyle.css" rel="stylesheet" media="all">



<h1><?php echo lang('index_heading');?></h1>
<p><?php echo lang('index_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<table cellpadding=0 cellspacing=10>
	<tr>
		<th><?php echo lang('index_fname_th');?></th>
		<th><?php echo lang('index_lname_th');?></th>
		<th><?php echo lang('index_email_th');?></th>
		<th><?php echo lang('index_groups_th');?></th>
		<th><?php echo lang('index_status_th');?></th>
		<th><?php echo lang('index_action_th');?></th>
	</tr>
	<?php foreach ($users as $user):?>
		<tr>
            <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
			<td>
				<?php foreach ($user->groups as $group):?>
					<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
                <?php endforeach?>
			</td>
			<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
			<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
		</tr>
	<?php endforeach;?>
</table>

<p><?php echo anchor('auth/create_user', lang('index_create_user_link'))?> | <?php echo anchor('auth/create_group', lang('index_create_group_link'))?></p>
