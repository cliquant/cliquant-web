<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cliquanT</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="main.js"></script>
</head>
<body>
<div class="background"></div>
<div class="title">
  <a href="/lol.html" style="text-decoration: none;"><h1>Cliquant</h1></a>
  <h4><?php  echo $_SERVER['REMOTE_ADDR'];  ?></h4>
  <h3>down me if you can</h3>
</div>
</body>
<script>
console.log("<?php  echo $_SERVER['REMOTE_ADDR'];  ?>");
console.log("down me if you can");
</script>
</html>
