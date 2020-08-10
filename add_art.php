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

<h1>Add New Art Piece</h1>

<div>

        <form name="frmImage" enctype="multipart/form-data" action = "art_values.php" method="post" class="frmImageUpload">
            Art (ID): <input type = "text" name = "artwork_id"><br>
            Artist(ID): <input type = "text" name = "artist_id"><br>
            Title of Art: <input type = "text" name = "artwork_title"><br>
            Description: <input type = "text" name = "description"><br>
            <label>Upload Image File:</label><br /> <input name="userImage"
                type="file" class="inputFile" />
            <input type = 'submit' value="Submit" class="btnSubmit"></input>
        </form>

</div>

<div>
<form action="home.php">
         <button type="submit">Go Back</button>
</div>
 
</body>
</html>
