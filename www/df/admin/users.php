<?php include('common/header.php'); ?>
<?php
	$result=get_users();
	// _t($result);
?>
<!-- Content Start -->
<div class="row">
	<div class="col-md-12">
		<ul class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li>
		</ul>
	</div>
</div>

<div class="row">
	<div class="col-md-3">
		<?php include('common/left-sidebar.php'); ?>
	</div>
	<div class="col-md-9">
		<?php
		if(isset($_SESSION['flashMsg'])){
			echo _warning($_SESSION['flashMsg']);
			unset($_SESSION['flashMsg']);
		}
		?>
		<div class="panel panel-danger">
			<div class="panel-heading">Topics <span class="badge"><?php echo $result['totalResult']; ?></span></div>
			<div class="panel-body">
				<table class="table table-bordered table-striped">
					<tr>
						<th>Name</th>
						<th>Username</th>
						<th>Email</th>
						<th>Address</th>
						<th>Time</th>
						<th>Action</th>
					</tr>
					<?php
						if($result['totalResult']>0){
							foreach($result['allData'] as $data){
								?>
								<tr>
									<th><?php echo $data['fname']; ?></th>
									<th><?php echo $data['username']; ?></th>
									<th><?php echo $data['email']; ?></th>
									<th><?php echo $data['address']; ?></th>
									<td><?php echo $data['reg_time']; ?></td>
									<td>
										<span>
											<a href="delete-user.php?userid=<?php echo $data['user_id']; ?>" class="text-danger" onclick="return confirm('Are you sure to delete this?')"><i class="fa fa-times"></i></a>
										</span>
									</td>
								</tr>
								<?php
							}
						}else{
							?>
							<tr>
								<td colspan="4">
									<?php echo _warning('No Data Found'); ?>
								</td>
							</tr>
							<?php
						}
					?>
					
				</table>
			</div>
		</div>
	</div>
</div>
<!-- Content End -->
<?php include('common/footer.php'); ?>