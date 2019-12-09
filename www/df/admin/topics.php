<?php include('common/header.php'); ?>
<?php
	$result=get_topics();
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
			<div class="panel-heading">Topics <span class="badge"><?php echo $result['totalResult']; ?></span> <a href="add-topic.php" class="pull-right white-text">Add <i class="fa fa-long-arrow-right"></i></a></div>
			<div class="panel-body">
				<table class="table table-bordered table-striped">
					<tr>
						<th>Title</th>
						<th>Created By</th>
						<th>Time</th>
						<th>Action</th>
					</tr>
					<?php
						if($result['totalResult']>0){
							foreach($result['allData'] as $data){
								?>
								<tr>
									<th><?php echo $data['title']; ?></th>
									<td>Admin</td>
									<td><?php echo $data['add_time']; ?></td>
									<td>
										<span>
											<a href="edit-topic.php?topicid=<?php echo $data['topic_id']; ?>&title=<?php echo $data['title']; ?>"><i class="fa fa-pencil"></i></a>&nbsp;
											<a href="delete-topic.php?topicid=<?php echo $data['topic_id']; ?>&title=<?php echo $data['title']; ?>" class="text-danger" onclick="return confirm('Are you sure to delete this?')"><i class="fa fa-times"></i></a>
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