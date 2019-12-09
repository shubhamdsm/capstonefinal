 <?php
$con = mysqli_connect("localhost","root","","cap") or die ("unable to connect");


function login()
{
	if(isset($_POST['login'])){ // Fetching variables of the form which travels in URL
global $con;
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$query1 = " select * from registration";
	$log = mysqli_query($con,$query1);
	while ($row_log=mysqli_fetch_array($log))
	{
	if($user == $row_log['username']  && $pass == $row_log['password'])
	    {
	echo "wellcome". $row_log['fullname'];
	    }	
    }
	                          }
}

//----------------------------------register------------------------------


function registration()
{	
if(isset($_POST['register']))
{  */                              // Fetching variables of the form which travels in URL
$name = 'abc';  //$_POST['Fullname'];
$username = 'klksla';  //$_POST['username'];
$email = 'ferg@gmail.com';   //$_POST['email'];
$pswrd = 'abcde';   //$_POST['password'];
$new_pswrd ='abcde';  //$_POST['new_password'];
if($username !='' || $email !='' || $pswrd !='' || $name !='' )
{
	if($pswrd == $new_pswrd  && ($pswrd>8 && $pswrd <16))
	{
                                    //Insert Query of SQL                 
global $con;
$query = "insert into registration"."(fullname, email, username, password)"."values ('$name', '$email', '$username', '$pswrd')";
mysqli_query($con,$query);
echo "query inserted";
    }
	else{
		echo "enter correct password";
	}
}
else{
		echo "some fields are empty";
	}

else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
} 
//------------------------------------------search--------------------------------------------
/*function Search()
{
	if(isset($_POST['search']))
	{global $con;
		$item = $_POST['item'];
		$query_search = " select * from courses";
		$search_result = mysqli_query($con,$query_search);
	while ($row_search=mysqli_fetch_array($search_result))
	{
	if($item == $row_search['coursename'])
	    {
	echo "wellcome". $row_search['course_link'];
	    }	
    }
	}
}*/
//------------------------------------------------ADD COURSES-------------------------------
function add_course()
{    global $con;
	$ins_name = $_POST['ins_name'];
	$course_name = $_POST['course_name'];
	$course_category = $_POST['course_category'];
	$location = $_POST['location'];
	$ins_link = $_POST['ins_link'];
$query = "insert into course_details"."(institute_name, course_category, course_name, location,institute_link)"."values ('$ins_name', '$course_name', '$course_category', '$location','$ins_link')";
$result = mysqli_query($con,$query);
}


//-----------------------------------------DELETE COURSES-------------------------------
function delete_course()
{
	 global $con;
	$ins_name = $_POST['ins_name'];
	$course_name = $_POST['course_name'];
	$query = "delete from course_details where institute_name = $ins_name AND course_name = $course_name";
	$result = mysqli_query($con,$query);
	
}

//--------------------------------------------COURSES DETAILS-------------------------------
function details()
{global $con;
$query = "select * from course_details";

	$result = mysqli_query($con,$query);
}


?>
