<!DOCTYPE html>

<html lang="en">
<head>
  <title>Insert courses</title>
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
    		<a href="capp_insert_course.php" class="list-group-item insert">Add courses</a>
    		<a href="capp_user_view.php" class="list-group-item ">View users</a>
    		<a href="capp_delete_course.php" class="list-group-item ">delete courses</a>
      
    	</div>
    </div>
	
	
	
	
	

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="cap_insert_courses1.php" method="POST">
    <div class="form-group">
      <label for="ins_name">institute name:</label>
      <input type="text" class="form-control" id="ins_name" placeholder="institute name" name="ins_name">
    </div>
    <div class="form-group">
      <label for="course_category">course category:</label>
      <input type="text" class="form-control" id="course_category" placeholder="course category" name="course_category">
    </div>
     <div class="form-group">
      <label for="course_name">course name:</label>
      <input type="text" class="form-control" id="course_name" placeholder="course name" name="course_name">
    </div>
     <div class="form-group">
      <label for="loaction">loaction:</label>
      <input type="text" class="form-control" id="loaction" placeholder="loaction" name="location">
    </div>
     <div class="form-group">
      <label for="ins_link">institute link:</label>
      <input type="text" class="form-control" id="ins_link" placeholder="institute link" name="ins_link">
    </div>
    <button type="submit" id="submit" name="submit" onclick="add_course()" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
