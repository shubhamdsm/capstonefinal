<?php include 'dbh.php';
error_reporting(0);
if (isset($_POST['post'])) {
    if (empty($_POST['username'])) {
        $errors['username'] = 'Username required';
    }
    if (empty($_POST['email'])) {
        $errors['email'] = 'Email required';
    }
    if (empty($_POST['text'])) {
        $errors['text'] = 'Password required';
    }
    }

    $username = $_POST['username'];
    $email = $_POST['email'];
    $text=$_POST['text'];

    if (count($errors) === 0) {
       $query = "INSERT INTO queries SET username=?, email=?,query=?;";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('sss', $username, $email, $text);
        $result = $stmt->execute();

        if ($result) {
            $user_id = $stmt->insert_id;
            $stmt->close();

            // TO DO: send verification email to user
            // sendVerificationEmail($email, $token);
            echo "<script type='text/javascript'>alert('submitted Successfully');</script>";
        } else {
            $_SESSION['error_msg'] = "Database error: Could not register user";
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
<title>Contact Us</title>
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
    .contact-form{
        width: 400px;
        margin: 0 auto;
        padding: 30px 0;
    }
    .contact-form h2{
        color: #636363;
        margin: 0 0 15px;
        position: relative;
        text-align: center;
    }

    .contact-form .hint-text{
        color: #999;
        margin-bottom: 30px;
        text-align: center;
    }
    .contact-form form{
        color: #999;
        border-radius: 3px;
        margin-bottom: 15px;
        background: beige;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .contact-form .form-group{
        margin-bottom: 20px;
    }
    .contact-form .btn{        
        font-size: 16px;
        font-weight: bold;      
        min-width: 140px;
        outline: none !important;
    }  
</style>
</head>
<body>
<!-------------------- Navbar------------->
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


<div class="contact-form">
    <form action="" method="post">
        <h2>Contacts</h2>
        <p class="hint-text">Send Your Query. We Will Get Back To You Soon.</p>
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
            <input type="text" class="form-control" name="username" placeholder="UserName" required="required" onBlur="checkUsernameAvailability()"  pattern="[a-zA-Z\s]+">
            <span id="username-availability-status" style="font-size:12px;"></span>         
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
        <div style="margin-bottom: 20px;">
            <textarea id="message" name="text" placeholder="Your Query" required style="width: auto;"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" name="post" class="btn btn-success btn-lg btn-block">Post</button>
        </div>
</div>

</body>
<?php include_once('footer.php');?>
</html>                          