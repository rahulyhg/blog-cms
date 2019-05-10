<!--Display form validation errors-->
<?php echo validation_errors('<p class="alert alert-dismissable alert-danger">'); ?>
<form method="post" action="<?php echo base_url(); ?>admin/groups/add">
				  <div class="row">
				  <div class="col-md-6">
					<h1>Add User Group</h1>
				  </div>
					<div class="col-md-6">
						<div class="btn-group pull-right">
							<input type="submit" name="submit" id="page_submit" class="btn btn-info" value="Save" />
							<a href="<?php echo base_url(); ?>admin/groups" class="btn btn-danger">Close</a>
					</div>
				  </div>
				</div><!-- /.row -->
				<div class="row">
					<div class="col-lg-12">
						<ol class="breadcrumb">
					  <li><a href="<?php echo base_url(); ?>admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				  		<li><a href="<?php echo base_url(); ?>admin/groups"><i class="fa fa-pencil"></i> User Groups</a></li>
				  		<li class="active"><i class="fa fa-plus-square-o"></i> Add User Group</li>
					</ol>
					</div>  
				</div><!-- /.row -->
					<div class="row">
						<div class="col-lg-12">
							<div class="form-group">
								<label>Group Name</label>
								<input class="form-control" type="text" name="name" value="<?php echo set_value('name'); ?>" placeholder="Enter Group Name" />
							</div>							
							 
					</div><!-- /.row -->
			</form>