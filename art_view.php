<?php

$artwork_id = $_GET['artwork_id'];

// If ID is number
if( (int)$artwork_id == $artwork_id && (int)$artwork_id > 0 ) {
    $link = mysqli_connect('localhost','root','','artgallery');

	if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}

    $sql='SELECT * FROM art_work WHERE artwork_id=' .$artwork_id;

    $result = mysqli_query($link,$sql);
    $row = mysqli_fetch_array($result);

    echo "
    <link rel='stylesheet' href='css/art_view.css'>

<nav class='flex-nav'>
  <div class='container'>
    <div class='grid menu'>
      <div class='column-xs-8 column-md-6'>
        <p id='highlight'>CSC545 - Art Gallery</p>
      </div>
      <div class='column-xs-4 column-md-6'>
        <a href='#' class='toggle-nav'>Menu <i class='ion-navicon-round'></i></a>
        <ul>
          <li class='nav-item'><a href='register.php'>Logout</a></li>
          <li class='nav-item'><a href='home.php'>Home</a></li>
          
          <li class='nav-item'><a href='#'>Cart (0)</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<main>
  <div class='container'>
    <div class='grid second-nav'>
      <div class='column-xs-12'>
        <nav>
          <ol class='breadcrumb-list'>
            <li class='breadcrumb-item'><a href='#'>Home</a></li>
            <li class='breadcrumb-item'><a href='#'>Anime Art</a></li>
            <li class='breadcrumb-item active'>Art</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class='grid product'>
      <div class='column-xs-12 column-md-7'>
        <div class='product-gallery'>
          <div class='product-image'>
            <img class='active' src='get_image.php?artwork_id=".$row['artwork_id']."'>
          </div>
        </div>
      </div>
      <div class='column-xs-12 column-md-5'>
        <h1>".$row['artwork_title']."</h1>
        <h2>$19.99</h2>
        <div class='description'>
          <p>".$row['description']."</p>
        </div>
        <button class='add-to-cart'>Add To Cart</button>
      </div>
    </div>
    <div class='grid related-products'>
      <div class='column-xs-12'>
        <h3>You may also like</h3>
      </div>
      <div class='column-xs-12 column-md-4'>
        <img src='https://ae01.alicdn.com/kf/Hb29e735ce9a3449bb9616620582921ce3.jpg'>
        <h4>Succulent</h4>
        <p class='price'>$19.99</p>
      </div>
      <div class='column-xs-12 column-md-4'>
        <img src='https://pm1.narvii.com/7054/ce28de9f19597a08340c681f18d56c059487ca49r1-1678-1678v2_hq.jpg'>
        <h4>Terranium</h4>
        <p class='price'>$19.99</p>
      </div>
      <div class='column-xs-12 column-md-4'>
        <img src='https://ae01.alicdn.com/kf/HTB1i.7.z29TBuNjy1zbq6xpepXau/Black-Clover-Art-Silk-Fabric-Poster-Wall-Decor-12x18-20x30Inch.jpg'>
        <h4>Cactus</h4>
        <p class='price'>$19.99</p>
      </div>
    </div>
  </div>
</main>
<footer>
  <div class='grid'>
    <div class='column-xs-12'>
      <p class='copyright'> Art Gallery Project CSC545</p>
    </div>
  </div>
</footer>

<link rel='stylesheet' href='js/art_view.js'>";
}

else {
   echo 'Record NOT FOUND';
}
?>
