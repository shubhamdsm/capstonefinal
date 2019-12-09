<!DOCTYPE>
<html>
<html lang="en">
<head>
  <title>Show users</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron">
  <h1>HElLO ADMIN!</h1>      
  <p>Manage your courses here.</p>
</div>



<div class="container">
    <div class="container">
    	<div class="col">
    		
    	</div>
    </div>

    
    	<div class="col-xs-3" style="text-align: center;">

    	<div class="list-group">
    		<a href="capp_view.php" class="list-group-item ">My course</a>
    		<a href="capp_insert_course.php" class="list-group-item ">Add courses</a>
    		<a href="capp_user_view.php" class="list-group-item active">View users</a>
    		<a href="capp_delete_course.php" class="list-group-item ">delete courses</a>
    		
      
    	</div>
    </div>

<div class="container">
  <h2>Hover Rows</h2>    
  <table class="table table-hover">
    <thead >
      <tr>
        <th>user_id</th>
        <th>user_name</th>
        <th>email</th>
		<th>date</th>
      </tr>
    </thead>
	<?php
$con=mysqli_connect("localhost","root","","cap");
$query1= "select *from user";
$result1 = mysqli_query($con,$query1);
while($roe = mysqli_fetch_array($result1))
{
?>

    <tbody>
      <tr>
	   <td><?php echo $roe['id']; ?></td>
        <td><?php echo $roe['username']; ?></td>
        <td><?php echo $roe['email']; ?></td>
        <td><?php echo $roe['date']; ?></td>
      </tr>
    </tbody>
<?php } ?>
  </table>
</div>

</body>
</html>