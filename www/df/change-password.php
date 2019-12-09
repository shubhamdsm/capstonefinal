<?php include('common/header.php'); ?>
			<!-- Content Start -->
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-success">
						<div class="panel-heading">User Profile</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3">
									<?php include('user-left-side.php'); ?>
								</div>
								<!-- Left User Sidebar -->
								<div class="col-md-9">
									<?php
										if(isset($_POST['changePass'])){
											$new=$_POST['pwd'];
											$cnew=$_POST['cpwd'];
											if($new==$cnew){
												$res=change_password($new);
												if($res['bool']){
													echo _success('Password has been changes');
												}
											}else{
												echo _warning('Please enter same password!!');
											}
										}
									?>
									<form action="" method="post">
										<table class="table table-bordered">
											<tr>
												<th>New Password</th>
												<td><input type="password" name="pwd" class="form-control" /></td>
											</tr>
											<tr>
												<th>Confirm New Password</th>
												<td><input type="password" name="cpwd" class="form-control" /></td>
											</tr>
											<tr>
												<td colspan="2" align="right">
													<input type="submit" name="changePass" class="btn btn-warning" value="Update" />
												</td>
											</tr>
										</table>
									</form>
								</div>
							</div>
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
