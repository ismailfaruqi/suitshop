<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
	<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/normalize.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/admin.css">

	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script src="<?php echo base_url() ?>/assets/js/HTML5Shiv.js"></script>
	<![endif]-->
</head>
<body>
	<!-- <header class="main-header">
		<div class="container">
			<div class="navbar">
				<div class="navbar-inner">
					<a href="#" class="brand">Suit Shop CMS</a>
					<ul class="nav pull-right">
						<li><a href="#">Product List</a></li>
						<li><a href="#">Content Management</a></li>
						<li><a href="#">Register</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello, Admin<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-user"></i> Profile</a></li>
								<li><a href="#"><i class="icon-cog"></i> Change Password</a></li>
								<li class="divider"></li>
								<li><a href="#"><i class="icon-lock"></i> Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header> -->

	

	<!-- <div class="container">
		<div class="row">
			<div class="span3">
				<nav class="main-nav">
					<ul class="nav nav-tabs nav-stacked">
						<li><a href="#">Product List <i class="icon-chevron-right"></i></a></li>
						<li><a href="#">Content management <i class="icon-chevron-right"></i></a></li>
						<li><a href="#">Register New User <i class="icon-chevron-right"></i></a></li>
					</ul>
				</nav>
					
			</div>
			<div class="span12">
				<div class="body">
					<h2>Welcome to Dashboard</h2>
					<p>Select menu above to manage your content</p>
					<hr>
					<h4>Last updated items</h4>
					<table class="table table-striped table-bordered last-update">
						<tr>
							<th>#</th>
							<th>Images</th>
							<th>Last Update</th>
							<th>Updated by</th>
						</tr>
						<tr>
							<td>1</td>
							<td><img src="<?php echo base_url() ?>/assets/img/admin/product-1-small.jpg" alt=""></td>
							<td><time>June 18, 2013</time></td>
							<td>Admin</td>
						</tr>
						<tr>
							<td>2</td>
							<td><img src="<?php echo base_url() ?>/assets/img/admin/product-3-small.jpg" alt=""></td>
							<td><time>June 16, 2013</time></td>
							<td>John</td>
						</tr>
						<tr>
							<td>3</td>
							<td><img src="<?php echo base_url() ?>/assets/img/admin/product-4-small.jpg" alt=""></td>
							<td><time>June 15, 2013</time></td>
							<td>Hancock</td>
						</tr>
					</table>
				</div>
			</div>
		</div> -->
<!-- 
		<footer>
			<div class="row">
				<div class="span12">
					<hr>
					<p>&copy; 2013 - Suit Shop</p>
				</div>
			</div>
		</footer>
	</div> -->

	<!-- Header -->
	<header class="main-header">
		<div class="container">
			<div class="navbar">
			  <div class="navbar-inner">
			    <a class="brand" href="#">Suit Shop CMS</a>
			    <ul class="nav pull-right">
			      <li><a href="<?php echo site_url() ?>"><i class="icon-home"></i> Front Page</a></li>
			      <li class="dropdown">
			      		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Contents <b class="caret"></b></a>
			      		<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel2">
			      			<li><a href="<?php echo site_url('admin/products') ?>">Products</a></li>
			      			<li><a href="<?php echo site_url('admin/categories') ?>">Categories</a></li>
			      			<li><a href="<?php echo site_url('admin/users') ?>">Users</a></li>
			      		</ul>
			      </li>
			      <li class="dropdown">
					  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Hello, Admin <b class="caret"></b></a>
					  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
					    <li><a href="#"><i class="icon-user"></i> Profile</a></li>
					    <li><a href="#"><i class="icon-cog"></i> Change Password</a></li>
					    <li class="divider"></li>
					    <li><a href="#"><i class="icon-lock"></i> Log Out</a></li>
					  </ul>
			      </li>
			    </ul>
			  </div>
			</div>
		</div>
		
	</header>

	<!-- Contnet -->
	<?php $this->load->view($body) ?>

	<!-- Footer -->
	<footer class="container">
		<hr>
		<div class="row">
			<div class="span12">
				<p>&copy; 2013 - SuitShop</p>
			</div>
		</div>
	</footer>
	
	<script>window.jQuery || document.write('<script src="<?php echo base_url() ?>/assets/js/jquery-1.10.1.min.js"><\/script>')</script>
	<script src="<?php echo base_url() ?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/admin.js"></script>
</body>
</html>