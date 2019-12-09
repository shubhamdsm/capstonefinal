<?php
$con = mysqli_connect('localhost','root','','cap') or die("unable to connect");
function add_course()
{    global $con;
	$ins_name = $_POST['ins_name'];
	$course_name = $_POST['course_name'];
	$course_category = $_POST['course_category'];
	$location = $_POST['location'];
	$ins_link = $_POST['ins_link'];
$query = "insert into course_details"."(institute_name, course_category, course_name, location,institute_link)"."values ('$ins_name', '$course_name', '$course_category', '$location','$ins_link')";
mysqli_query($con,$query);
}

function delete_course()
{
	 global $con;
	$ins_name = $_POST['ins_name'];
	$course_name = $_POST['course_name'];
	$query = "delete from course_details where institute_name = $ins_name AND course_name = $course_name";
	mysqli_query($con,$query);
	
}
function details()
{global $con;
$query = "select * from course_details";

	mysqli_query($con,$query);
}






?>