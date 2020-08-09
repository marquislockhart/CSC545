<?php
require 'db.php';
?>
<link rel="stylesheet" href="css/home.css">

<div class='gallery'>
  <h1>Art Gallery</h1>
  <div class='row'>
  <?php
  $sql = "SELECT * FROM art_work
  # add inner join to display name of artist instead of actual artist_id
  ORDER BY `art_work`.`artwork_title` ASC";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          echo "
          <div class='thumbnail'>
            <div class='photoContainer'>
                <a href='art_view.php?artwork_id=".$row['artwork_id']."'>
                    <img src='get_image.php?artwork_id=".$row['artwork_id'].";'/>
                <div class='photoInfo'>
                    <h3>".$row['artwork_title']."</h3>
                    <span class='paintingDate'>".$row['artist_id']."</span>
                </div>          
                </a>
            </div>
        </div>";
    }
}
?>
</div>
  
