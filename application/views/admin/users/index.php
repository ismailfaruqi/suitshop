<div class="container">
	<div class="row">
		<!-- <div class="span3">
			<nav class="main-nav">
				<ul class="nav nav-tabs nav-stacked">
					<li><a href="#">Product List <i class="icon-chevron-right"></i></a></li>
					<li><a href="#">Content management <i class="icon-chevron-right"></i></a></li>
					<li><a href="#">Register New User <i class="icon-chevron-right"></i></a></li>
				</ul>
			</nav>
		</div> -->
		<div class="span12">
			<div class="body">
				<ul class="breadcrumb">
					<li>
						<a href="#">Dashboard</a> <span class="divider">/</span>
					</li>
					<li>
						Users
					</li>
				</ul>
				
				<div class="row">
					<div class="span12">
						<a href="<?php echo site_url('admin/users/add') ?>" class="btn btn-success pull-right">Add User</a>
					</div>
				</div>

				<hr>
					
				<table class="table table-striped table-bordered product-list">
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Action</th>
					</tr>
					<?php foreach ($users as $user): ?>
						<tr>
							<td><?php echo $user->id ?></td>
							<td><?php echo $user->username ?></td>
							<td>
								<a href="<?php echo site_url('admin/users/edit/' . $user->id) ?>" class="btn btn-mini btn-block">Edit</a>
								<a href="<?php echo site_url('admin/users/destroy/' . $user->id) ?>" class="btn btn-danger btn-mini">Delete</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</table>

				<div class="pagination pagination-centered pagination-small">
					<ul>
						<li><a href="#">prev</a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">next</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>