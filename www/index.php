<!DOCTYPE html>
<html>
<head>
	<title>Offline Training Hub</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
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
       <li class="nav-item">
        <a class="nav-link" href="df/index.php">Discussion</a>
      </li>
      
      </li>
       <li class="nav-item">
        <a class="nav-link" href="cart/index.php">Cart</a>
      </li>
      


    </ul>
    
  </div>
</nav>
<!------imageslider----------->
<style>

.carousel-inner img {
  width: 100%;
  height: 100%;

}
</style>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/jose-aljovin-JZMdGltAHMo-unsplash.jpg">
    </div>
    <div class="carousel-item">
      <img src="images/neonbrand-1-aA2Fadydc-unsplash.jpg">
    </div>
    <div class="carousel-item">
      <img src="images/neonbrand-y_6rqStQBYQ-unsplash.jpg">
    </div>
    <div class="carousel-item">
      <img src="images/neonbrand-zFSo6bnZJTw-unsplash.jpg">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<!--Meet the team-->
<div class="container-fluid padding">
 <div class="row welcome text-center" >
   <div class="col-12">
     <h1 class="display-4">Meet the team</h1>

   </div>
   <hr>
 </div>

</div>


<!-----Cards-->
<div class="container-fluid padding">
 <div class="row padding" >
   <div class="col-md-4">
     <div class="card">
       <img class="card-img-top" src="images/shubham.jpg">
       <div class ="card-body">
         <h4 class="card-title">Shubham Yadav</h4>
         <p class="card-text">Web designer</p>
         <a href="#" class="btn btn-outline-secondary">See Profile</a>
       </div>
     </div>
   </div>
   <div class="col-md-4">
      <div class="card">
        <img class="card-img-top" src="images/shubham.jpg">
        <div class ="card-body">
          <h4 class="card-title">Amit Kumar</h4>
          <p class="card-text">Frontend developer</p>
          <a href="#" class="btn btn-outline-secondary">See Profile</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="images/shubham.jpg">
          <div class ="card-body">
            <h4 class="card-title">Suhail Siddiqui</h4>
            <p class="card-text">Backend developer</p>
            <a href="#" class="btn btn-outline-secondary">See Profile</a>
          </div>
        </div>
      </div>
 </div>
</div>


<!--footer-->
<section id="footer">
<div class="container">
<div class="row">
<div class="col-md-3">
<h1>Offline training hub</h1>
<p>Offline training hub ia an offline training provider based in india.We offeer multiple courses by multiple training institutes in your locality.With a primary focus on the overall development of the students. Training in various courses will help the students/candidates to get success in the field of highly competitive IT sector.</p>
</div> 
    
<div class="col-md-3">
<h1>Features</h1>
<p>resolve all issues</p>
<p>Free Consultation</p>
<p>Flexible Time</p>
<p>impart necessary skills</p>
</div> 
    
<div class="col-md-3">
<h1>Quick Contact</h1>
<p><i class="fa fa-phone-square"></i> +919631971455</p>
<p><i class="fa fa-envelope"></i>offlinetraininghub@gmail.com</p>
<p><i class="fa fa-home"></i> lovely professional university</p>
<p class="city"> Phagwara, India</p>
</div>
    
<div class="col-md-3">
<h1>Follow Us On</h1>
<p><i class="fa fa-facebook-official"></i> Facebook</p>
<p><i class="fa fa-youtube-play"></i> YouTube</p>
<p><i class="fa fa-linkedin"></i> Linkedin</p>
<p><i class="fa fa-twitter"></i> Twitter</p>
</div>    
</div>  <hr> 

<p class="copyright">@2019<i class="fa fa-heart-o"></i> by <a>all right reserved</a></p>
</div>    
</section>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="copyright-area text-center">
        <p>&copy; 2019, All Right Reserved </p>
      </div>
    </div>
  </div>
</div>
</div>
</footer>

</body>
</html>



 
