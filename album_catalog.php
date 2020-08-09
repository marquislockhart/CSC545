<?php
require 'db.php';
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Album Catalog</title>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'><link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/8.3.0/nouislider.min.css'>

<link rel="stylesheet" href="css/album_catalog.css">

</head>
<body>

<section class="header">

  <div class="page-flows">
    <span class="flow">
      <i class="ion-chevron-left"></i>
    </span>

    <span class="flow">
      <i class="ion-chevron-right disabled"></i>
    </span>
  </div>

  <div class="search">
    <input type="text" placeholder="Search" />
  </div>

  <div class="user">
    <div class="user__notifications">
      <i class="ion-android-notifications"></i>
    </div>

    <div class="user__inbox">
      <i class="ion-archive"></i>
    </div>

    <div class="user__info">
      <span class="user__info__img">
        <img src="img/pikaburger.jpg" alt="Profile Picture" class="img-responsive" />
      </span>

      <span class="user__info__name">
          <span class="first">Art Gallery</span>
          <span class="last">Admin</span>
      </span>
    </div>

    <div class="user__actions">
      <div class="dropdown">

        <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          <i class="ion-chevron-down"></i>
        </button>

        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
          <li><a href="register.php">Register</a></li>
          <li><a href="add_new_art.php">Add Art</a></li>
          <li><a href="userdatabase.php">User Database</a></li>
          <li><a href="#">Log Out</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="content">
  <div class="content__left">
    <section class="navigation">

        <!-- Main -->
        <div class="navigation__list">
          <div class="navigation__list__header"
               role="button"
               data-toggle="collapse"
               href="#main"
               aria-expanded="true"
               aria-controls="main">
            Main
          </div>

          <div class="collapse in" id="main">
            <a href="index.php" class="navigation__list__item">
              <i class="ion-ios-browsers"></i>
              <span>Home</span>
            </a>

            <a href="#" class="navigation__list__item">
              <i class="ion-person-stalker"></i>
              <span>Art Gallery ( All )</span>
            </a>

        <!-- Your Art -->
        <div class="navigation__list">
          <div class="navigation__list__header"
               role="button"
               data-toggle="collapse"
               href="#yourMusic"
               aria-expanded="true"
               aria-controls="yourMusic">
            Your Art
          </div>

          <div class="collapse in" id="yourMusic">

            <a href="album_catalog.php" class="navigation__list__item">
              <i class="ion-ios-musical-notes"></i>
              <span>Art</span>
            </a>

            <a href="artist_catalog.php" class="navigation__list__item">
              <i class="ion-person"></i>
              <span>Artists</span>
            </a>
          </div>
        </div> 


        <!-- new art -->
        <div class="navigation__list">
          <div class="navigation__list__header"
               role="button"
               data-toggle="collapse"
               href="#playlists"
               aria-expanded="true"
               aria-controls="playlists">
            Added Today
          </div>

          <div class="collapse in" id="playlists">
            <a href="#" class="navigation__list__item">
              <i class="ion-ios-musical-notes"></i>
              <span>New!!</span>
            </a>
          </div>
        </div>
      </section>

      <section class="playing">
      <div class="playing__art">
        <img src="img/mfa.jpg" alt="organizers" />
      </div>

      <div class="playing__song">
        <a class="playing__song__name">Art Gallery from </a>
        <a class="playing__song__artist">Boston Museum of Fine Arts</a>
      </div>

      <div class="playing__add">
        <i class="ion-checkmark"></i>
      </div>
    </section>
  </div>

  <div class="content__middle">
      <div class="artist__header">
        <div class="artist__info">
            <div class="artist__info__name">Art Catalog</div>
          </div>
        </div>
      <div class="artist__content">
              <div class="overview__albums">
                <div class="overview__albums__head">
                  <span class="section-title">Work</span>
                  <span class="view-type">
                    <i class="fa fa-list list active"></i>
                    <i class="fa fa-th-large card"></i>
                  </span>
                </div>

          <div role="tabpanel" class="tab-pane" id="related-artists">
            <div class="media-cards">
              <?php
              $sql = "SELECT * FROM albums
              ORDER BY `albums`.`name` ASC";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  echo "
                  <div class='media-card'>
                    <div class='media-card__image' style='background-image: url(albumView.php?id=".$row['id'].");'>
                      <i class='ion-ios-play'></i>
                    </div>

                    <a class='media-card__footer'>".$row['name']."</a>
                    </div>";
                  }
                }
                ?>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>


    </div>
  </div>
</section>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/8.3.0/nouislider.min.js'></script><script  src="./script.js"></script>

</body>
</html>
