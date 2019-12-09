<!DOCTYPE>
<html>
<html lang="en">
<head>
  <title>COURSES</title>
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
    		<a href="capp_view.php" class="list-group-item active">My course</a>
    		<a href="capp_insert_course.php" class="list-group-item ">Add courses</a>
    		<a href="capp_user_view.php" class="list-group-item ">View users</a>
    		<a href="capp_delete_course.php" class="list-group-item ">delete courses</a>
   
      
    	</div>
    </div>
	
	
	<div class="container">
  <h2>Hover Rows</h2>    
  <table class="table table-hover">
    <thead >
      <tr>
	    <th>course_id</th>
        <th>institute_name</th>
        <th>course_category</th>
        <th>course_name</th>
		<th>location</th>
		<th>institute_link</th>
      </tr>
    </thead>



<?php
$conn=mysqli_connect("localhost","root","","cap");
$query= "select *from course_details";
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))
{
?>
  <tbody>
    <tr>
	<td><?php echo $row['course_id']; ?></td>
        <td><?php echo $row['institute_name']; ?></td>
        <td><?php echo $row['course_category']; ?></td>
        <td><?php echo $row['course_name']; ?></td>
		<td><?php echo $row['location']; ?></td>
		<td><?php echo $row['institute_link']; ?></td>
    </tr>
  </tbody>
  
  <?php } ?>
  </table>

</body>
</html>