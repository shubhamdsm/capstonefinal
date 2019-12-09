<?php

$conn = mysqli_connect("localhost","root","","cap") or die ("unable to connect");

$cheks = implode("','", $_POST['checkbox']);
$sql = "delete from course_details where =  course_id in ('$cheks')";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));



?>