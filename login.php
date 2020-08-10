<?php
require 'db.php';
?>
<link rel="stylesheet" href="css/home.css">

<html>
<body>
<style>
h1 {text-align: center;}
p {text-align: center;}
div {text-align: center;}
</style>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<h1>Login</h1>



<div>
<form action="home.php" method="post">
  <label for="user_name">Username:</label><br>
  <input type="text" id="username" name="user_name"><br>
  <label for="pwd">Password:</label><br>
  <input type="password" id="pwd" name="pwd"><br>
  <input type="submit">
</div>


</body>
</html>
