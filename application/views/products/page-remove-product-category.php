<?php $this->load->view('common/master-detail-header'); ?>
<div class="panel page form-page add-user">
	<header class="header">
		<h2 class="title">
			<i class="fa fa-user-plus"></i>
			&nbsp;Remove product from <?php echo ucwords(strtolower($category->name)); ?>
			category
			<?php if(isset($message)): ?>
					<br/>
					<span class="alert alert-danger">
						<?php echo $message?>
					</span>
			<?php endif; ?>
		</h2>
	</header>
	<span class="clearfix"></span>
	<hr class="divider"/>
	<section class="content">
		<div class="panel panel-panel panel-danger">
			<div class="panel-heading">
				<i class="fa fa-warning"></i>&nbsp;Remove product from category permanently
			</div>
			<div class="panel-body">
				<div class="message">
					<p>
						Are you sure you want to proceed?
					</p>
				</div>
				<hr class="divider"/>
				<div class="col-md-12">
					<a class="btn btn-default btn-cancel" href="<?php echo base_url("dashboard/products/$user->id"); ?>">
						Cancel
					</a>
					<a class="btn btn-danger btn-proceed" href="<?php echo base_url("dashboard/removeproductfromcategory/$user->id/$product->id/$category->id/?usr_ok=true"); ?>">
						Proceed
					</a>
				</div>
			</div>
		</div>
	</section>
</div>
<?php $this->load->view('common/master-detail-footer'); ?>