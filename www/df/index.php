<?php include('common/header.php'); ?>
<?php
	$result=get_topics();
?>
			<!-- Content Start -->
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-success">
						<div class="panel-heading">Topics <span class="badge"><?php echo $result['totalResult']; ?></span></div>
						<div class="panel-body">
							<table class="table table-bordered table-striped">
								<tr>
									<th>Topic Title</th>
									<th>Threads</th>
								</tr>
								<?php
									if($result['totalResult']>0){
										foreach($result['allData'] as $data){
											$threads=count_total_threads($data['topic_id']);
											// _t($threads);
								?>
								<tr>
									<td><a href="threads.php?topicid=<?php echo $data['topic_id']; ?>&title=<?php echo $data['title']; ?>"><?php echo $data['title']; ?></a></td>
									<td><a href="threads.php?topicid=<?php echo $data['topic_id']; ?>&title=<?php echo $data['title']; ?>"><?php echo $threads['total']; ?></a></td>
								</tr>
							<?php } }else{ ?>
							<tr>
								<td colspan="2"><?php echo _warning('No Data Found'); ?></td>
							</tr>
							<?php } ?>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- Content End -->
<?php include('common/footer.php'); ?>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
