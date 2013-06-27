<div class="container">
	<div class="row">
		<div class="span12">
			<div class="body">
				<ul class="breadcrumb">
					<li>
						<a href="#">Dashboard</a> <span class="divider">/</span>
					</li>
					<li><a href="<?php echo site_url('admin/users') ?>">Users</a> <span class="divider">/</span></li>
					<li>
						<?php echo ucfirst($this->uri->segment(3)) ?> Users
					</li>
				</ul>
				<h2><?php echo $form_title ?></h2>
				<hr>
				<div class="alert alert-error">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, enim, placeat libero neque nam deserunt at fuga dolor asperiores provident molestias quam temporibus commodi dignissimos modi quod eveniet aut magni.</strong>
				</div>
				<form class="form-horizontal form-edit-product" method="POST" action="<?php echo $form_action ?>">
					<div class="control-group">
						<label class="control-label" for="inputName">Name</label>
				    	<div class="controls">
				      		<input name="user[username]" value="<?php echo $user->username ?>" type="text" id="inputName" class="input-block-level">
				    	</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputName">Facebook ID</label>
				    	<div class="controls">
				      		<input name="user[facebook_id]" value="<?php echo $user->facebook_id ?>" type="text" id="inputName" class="input-block-level">
				    	</div>
					</div>
					<div class="control-group pull-right">
						<a href="<?php echo site_url('admin/users') ?>" class="btn">Cancel</a>
						<input type="submit" value="Update" class="btn btn-success">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>