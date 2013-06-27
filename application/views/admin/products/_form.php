<div class="container">
	<div class="row">
		<div class="span12">
			<div class="body">
				<ul class="breadcrumb">
					<li>
						<a href="#">Dashboard</a> <span class="divider">/</span>
					</li>
					<li><a href="<?php echo site_url('admin/products') ?>">Products</a> <span class="divider">/</span></li>
					<li>
						<?php echo $action ?> Product
					</li>
				</ul>
				<h2><?php echo $form_title ?></h2>
				<hr>
				<div class="alert alert-error">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, enim, placeat libero neque nam deserunt at fuga dolor asperiores provident molestias quam temporibus commodi dignissimos modi quod eveniet aut magni.</strong>
				</div>
				<form method="POST" action="<?php echo $form_action ?>" enctype="multipart/form-data" class="form-horizontal form-edit-product">
					<div class="control-group">
						<label class="control-label" for="inputName">Product Name</label>
				    	<div class="controls">
				      		<input name="product[name]" value="<?php echo $product->name ?>" type="text" id="inputName" class="input-block-level">
				      		<div class="text-error"><?php if ($product->errors) echo $product->errors->on('name') ?></div>
				    	</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputName">Price</label>
				    	<div class="controls">
				      		<input name="product[price]" value="<?php echo $product->price ?>" type="text" id="inputName" class="input-block-level">
				      		<div class="text-error"><?php if ($product->errors) echo $product->errors->on('price') ?></div>
				    	</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputDesc">Description</label>
				    	<div class="controls">
				      		<textarea name="product[description]" id="inputDesc" cols="30" rows="10" class="input-block-level"></textarea>
				    	</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputDesc">Product Image</label>
				    	<div class="controls">
				    		<?php if ($product->image_url()): ?>
				    			<img class="img-polaroid" src="<?php echo $product->image_url() ?>" width="200" alt="">
				    		<?php endif; ?>
				    		<div>
				    			<input name="product_image" type="file" id="inputName" class="input-block-level">	
				    		</div>				      		
				    	</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputDesc">Featured?</label>
				    	<div class="controls">
				      		<?php 
				              	$options = array('0' => 'No', '1' => 'Yes');
				              	echo form_dropdown('product[is_featured]', $options, $product->is_featured);
				            ?>
				    	</div>
					</div>
					<div class="control-group pull-right">
						<a href="<?php echo site_url('admin/products') ?>" class="btn">Cancel</a>
						<input type="submit" value="Submit" class="btn btn-success">
					</div>
				</form>
			</div>
		</div>
	</div>	