<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Teacher</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
					<a href="index.php" class="button">Teacher</a>		
				<div id="navbar"> Attendance:
					<a href="module.php" class="button">Module</a>
					<a href="class.php" class="button">Class</a>
				</div>			
			</div>
		</div>
	</nav>
	<table>
		<script>
			$(document).ready(function(){
		$("button").click(function(){
			$.get("module.php", function(data, status){
				$("#test").html(data);
				alert(status);
			});
		});
	})
		</script>


