<?php $this->load->view('common/master-detail-header'); ?>
<div class="panel page products-management">
	<header class="header">
		<h1 class="title">
			<i class="fa fa-shopping-cart"></i>
			Add Product Image (<?php echo $product->name; ?>)
			<span class="btn-group pull-right">
				<a class="btn btn-primary" href="<?php echo base_url("dashboard/addproduct/$user->id"); ?>">
					Add Product
				</a>
				<a class="btn btn-success" href="<?php echo base_url("dashboard/products/$user->id"); ?>">
					All Products
				</a>
			</span>
		</h1>
	</header>
	<section class="content">
		<?php if(isset($message)): ?>
			<div class="container">
				<span class="alert alert-<?php echo (isset($type) ? $type : 'info')?>">
					<?php echo $message; ?>
				</span>
			</div>
		<?php endif; ?>
		<hr class="divider"/>
		<form class="form" method="post" enctype="multipart/form-data"  action="<?php echo base_url("dashboard/addproductimage/$user->id/$product->id"); ?>">
			<div class="row">
				<div class="form-group">
					<label class="form-label col-md-1">Select Image</label>
					<div class="col-md-8">
						<input class="form-control" type="file" name="item_image"/>
					</div>
				</div>
			</div>
			<div class="row">
				<br/>
				<div class="form-group">
					<div class="col-md-12">
						<input class="btn btn-success pull-right" name="usr_submit" value="Save Product" type="submit"/>
						<a class="btn btn-default pull-left" href="<?php echo base_url("dashboard/product/$user->id/$product->id/?type=success&msg=product saved sucessfully!"); ?>">
							Skip
						</a>
					</div>
				</div>
			</div>
		</form>
	</section>
</div>
<?php $this->load->view('common/master-detail-footer'); ?>