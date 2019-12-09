<?php include 'dbh.php';
if (isset($_POST['login'])) {
    if (empty($_POST['username'])) {
        $errors['username'] = 'Username or email required';
    }
    if (empty($_POST['password'])) {
        $errors['password'] = 'Password required';
    }
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (count($errors) === 0) {
        $query = "SELECT * FROM users WHERE username=? OR email=? LIMIT 1";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ss', $username, $password);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) { // if password matches
                $stmt->close();
                    
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['message'] = 'You are logged in!';
                    $_SESSION['type'] = 'alert-success';
                    header("location: index.php");
                    exit(0);
                    
            } 
            else 
            { // if password does not match
                $errors['login_fail'] = "Wrong username / password";
            }
        } 
        else
            {
            $_SESSION['message'] = "Database error. Login failed!";
            $_SESSION['type'] = "alert-danger";
            }
    }
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css">
<title>Sign In</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	body{
		color: #fff;
		background-image: url("images/mountain.png");
		position: relative;
    	background-attachment: fixed;
    	background-position: center;
    	background-repeat: no-repeat;
		background-size: cover;
		min-height: 100%;
		font-family: 'Roboto', sans-serif;
	}
    .form-control{
		height: 40px;
		box-shadow: none;
		color: #969fa4;
	}
	.form-control:focus{
		border-color: #5cb85c;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 400px;
		margin: 0 auto;
		padding: 30px 0;
	}
	.signup-form h2{
		color: #636363;
        margin: 0 0 15px;
		position: relative;
		text-align: center;
    }
	.signup-form h2:before, .signup-form h2:after{
		content: "";
		height: 2px;
		width: 30%;
		background: #d4d4d4;
		position: absolute;
		top: 50%;
		z-index: 2;
	}	
	.signup-form h2:before{
		left: 0;
	}
	.signup-form h2:after{
		right: 0;
	}
    .signup-form .hint-text{
		color: #999;
		margin-bottom: 30px;
		text-align: center;
	}
    .signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: beige;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.signup-form .btn{        
        font-size: 16px;
        font-weight: bold;		
		min-width: 140px;
        outline: none !important;
    }
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}    	
    .signup-form a{
		color: #fff;
		text-decoration: underline;
	}
    .signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color: #5cb85c;
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
	}  
</style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Offline Training Hub</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Institutes.html">Institute</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Courses.html">Courses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Instructor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="About Us.html">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Contact.php">Contact Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Account</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="login.php">Login</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="signup.php">Register</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Admin\admin.html">Admin</a>
      </li>
      
    </ul>
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-light my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="signup-form">
    <form action="" method="post">
		<h2>Sign In</h2>
		<p class="hint-text">Welcome to Login page</p>
				<?php if (count($errors) > 0): ?>
			  		<div class="alert alert-danger">
			    		<?php foreach ($errors as $error): ?>
			    		<li>
			    		  <?php echo $error; ?>
			    		</li>
			    	<?php endforeach;?>
			 		 </div>
					<?php endif;?>
        <div class="form-group">
		
        		<div class="form-group">
        			<input type="text" name="username" class="form-control" placeholder="Username Or Email" required="required">
        		</div>
				<div class="form-group">
            	<input type="password" class="form-control" name="password" placeholder="Password" required="required">
        		</div>
		
				<div class="form-group">
            		<button type="submit" name="login"class="btn btn-success btn-lg btn-block">Log In</button>
        		</div>
    </form>
	
<div class="modal-footer">
				<a href="forgot-password.php">Forgot Password?</a>
			</div>
			<div class="text-center">New User? <a href="signup.php">Sign Up</a></div>
</div>
</body>
</html>                          