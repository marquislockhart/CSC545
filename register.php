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

<h1>Create an Account</h1>
<form action="login.php">
<p> Already have an account? <button type="submit">Log In</button> </p>
<form action="registrationphp.php" method="post">
<div>

  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="pwd">Password:</label><br>
  <input type="password" id="pwd" name="pwd"><br>
  <label for="num">Select Account Role:</label><br>
  <select id="num" name="roleid">
    <option value="10">Artist</option>
    <option value="20">Customer</option>
  </select><br>
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="emailadd"><br>
  <label for="fname">First Name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last Name:</label><br>
  <input type="text" id="lname" name="lname"><br>
  <label for="bdate">Birth Date:</label><br>
  <input type="date" id="bdate" name="bdate"><br>
  <label for="gender">Gender:</label><br>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label><br><br>
  <label for="phone">Phone Number:</label><br>
  <input type="number" id="phone" name="phone" placeholder="2033908353"><br><br>
  <input type="submit">
  </div>
</form>

<div>


</div>
 

</body>
</html>
