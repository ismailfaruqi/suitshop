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
						Categories
					</li>
				</ul>
				
				<div class="row">
					<div class="span12">
						<a href="#" class="btn btn-success pull-right">Add Item</a>
					</div>
				</div>

				<hr>
					
				<table class="table table-striped table-bordered product-list">
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Action</th>
					</tr>
					<?php foreach ($categories as $category): ?>
						<tr>
							<td><?php echo $category->id ?></td>
							<td><?php echo $category->name ?></td>
							<td>
								<button class="btn btn-mini btn-block">edit</button>
								<button class="btn btn-danger btn-mini">delete</button>
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