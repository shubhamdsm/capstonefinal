 <?php
$con = mysqli_connect("localhost","root","","cap") or die ("unable to connect");
	if(isset($_POST['login'])){ // Fetching variables of the form which travels in URL
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$query1 = " select * from adminlogin";
	$log = mysqli_query($con,$query1);
	while ($row_log=mysqli_fetch_array($log))
	{
	if($user == $row_log['username']  && $pass == $row_log['password'])
	    {
	echo "wellcome". $row_log['username'];
	    }	
	else
	{
	echo "wring email or password"
	}
    }
	                          }
							  ?>