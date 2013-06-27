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
						<a href="<?php echo site_url('admin/products') ?>">Products</a>
					</li>
				</ul>
				
				<div class="row">
					<div class="span12">
						<a href="<?php echo site_url('admin/products/add') ?>" class="btn btn-success pull-right">Add Item</a>
					</div>
				</div>

				<hr>
					
				<table class="table table-striped table-bordered product-list">
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Images</th>
						<th>Description</th>
						<th>Price</th>
						<th>Stock</th>
						<th>Action</th>
					</tr>
					<?php foreach ($products as $product): ?>
						<tr>
							<td><?php echo $product->id ?></td>
							<td>
								<?php echo $product->name ?>
								<?php if ($product->is_featured): ?>
									<div>
										<span class="label-success label">Featured</span>
									</div>
								<?php endif; ?>
							</td>
							<td><img src="<?php echo $product->image_url() ?>" width="200" alt=""></td>
							<td><?php echo $product->description ?></td>
							<td><?php echo $product->price ?></td>
							<td>1</td>
							<td>
								<a href="<?php echo site_url('admin/products/edit/' . $product->id) ?>" class="btn btn-mini btn-block">edit</a>
								<a href="<?php echo site_url('admin/products/destroy/' . $product->id) ?>" class="btn btn-danger btn-mini">delete</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</table>

				<!-- <div class="pagination pagination-centered pagination-small">
					<ul>
						<li><a href="#">prev</a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">next</a></li>
					</ul>
				</div> -->
				<?php echo admin_pagination(new Product) ?>
			</div>
		</div>
	</div>
</div>