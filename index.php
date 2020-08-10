<html>
<body>

<form action="welcome.php" method="post">
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="pwd">Password:</label><br>
  <input type="password" id="pwd" name="pwd"><br>
  <label for="num">select 10 for artist and 20 for customer:</label><br>
  <select id="num" name="roleid">
    <option value=10>10</option>
    <option value=20>20</option>
  </select><br>
  <label for="email">E-mail:</label><br>
  <input type="email" id="email" name="emailadd"><br>
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">last name:</label><br>
  <input type="text" id="lname" name="lname"><br>
  <label for="bdate">Birth date:</label><br>
  <input type="date" id="bdate" name="bdate"><br>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label><br>
  <label for="phone">Enter a phone number:</label><br><br>
  <input type="number" id="phone" name="phone" placeholder="2033908353"><br><br>
<input type="submit">
</form>

</body>
</html>