<?php

$con = mysqli_connect("localhost","root","","cap") or die ("unable to connect");

$cheks = implode("','", $_POST['checkbox']);
$sql = "UPDATE FOOD SET `options` = 'DISABLE' WHERE F_ID in ('$cheks')";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

header('Location: delete_food_items.php');
$conn->close();


?>