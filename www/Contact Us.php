<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".btn".click(function(){
				$(".input, .area").val("");
		})
		})
	</script>
</head>
<body>
	<div class="container">
		<p>Contact Us</p>
<div class="login">
<input type="text" class="input" placeholder="Your Name">
<input type="text" class="input" placeholder="Your Email Address">
</div>
<div class="subject">
	<input type="text" class="input" placeholder="Subject">
</div>
<div class="msg">
	<textarea class="area" placeholder="Leave a Message"></textarea>
</div>
<div class="btn">send Message</div>
</body>
</html>