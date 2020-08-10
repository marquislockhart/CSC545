<?php
    require_once "db.php";
    if(isset($_GET['artwork_id'])) {
      $sql = "SELECT imageType,imageData FROM art_work WHERE artwork_id=" . $_GET['artwork_id'];
      $result = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($conn));
      $row = mysqli_fetch_array($result);
      header("Content-type: " . $row["imageType"]);
      echo $row["imageData"];
    }
?>
