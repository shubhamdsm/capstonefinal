<?php
$con = mysqli_connect("localhost","root","","cap") or die ("unable to connect");
if(isset($_POST['submit']))
{
$ins_name = $_POST['ins_name'];
	$course_name = $_POST['course_name'];
	$course_category = $_POST['course_category'];
	$location = $_POST['location'];
	$ins_link = $_POST['ins_link'];
$query = "insert into course_details(institute_name, course_category, course_name, location,institute_link) values ('$ins_name', '$course_name', '$course_category', '$location','$ins_link')";
$result = mysqli_query($con,$query);
}
header('Location: cap_insert_course.html');

?>