<?php
// values of 'art_work' table
if (count($_FILES) > 0) {
    if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
        require_once "db.php";
				$artwork_id = $conn->real_escape_string(trim($_POST["artwork_id"]));
				$artist_id = $conn->real_escape_string(trim($_POST["artist_id"]));
				$artwork_title = $_POST["artwork_title"];
				$description = $_POST["description"];
				$imgData = addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
				$imageProperties = getimageSize($_FILES['userImage']['tmp_name']);

				$sql = "insert into art_work (artwork_id, artist_id, artwork_title, description, imageType ,imageData) values ('$artwork_id', '$artist_id', '$artwork_title', '$description', '{$imageProperties['mime']}', '{$imgData}')";
				if($conn->query($sql)===TRUE){
					header( "location: art_catalog.php");
				}
				else{
					echo "<br/>";
					echo "Error accessing database: " . $conn->error;
				}
            }
            
		}
?>
