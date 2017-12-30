
<!-- navbar start-->
<nav>
  <div class="container">
  <div class="row">
    <a class="navbar-brand" href="<?php

      if(isset($_SESSION['login']) && !empty($_SESSION['login'])){
          echo "index-profile.php";
      }
        else{
          echo "index.php";
        }

       ?>"><img src="img/paradise-small.png" alt="Paradise Hotel & Resort"></a>
    <ul class="navbar-right">
      <li class="index-link"><a href="<?php

      if(isset($_SESSION['login']) && !empty($_SESSION['login'])){
          echo "index-profile.php";
      }
        else{
          echo "index.php";
        }

       ?>">Home</a></li>
      <li class="rooms-link"><a href="rooms.php">Rooms</a></li>
      <li class="restaurant-link"><a href=#">Restaurant</a></li>
      <li class="gallery-link"><a href="#">Gallery</a></li>
      <li class="contact-link"><a href="#">Contact</a></li>
    </ul>
 </div><!-- /.container -->
 </div>
</nav>
<!-- navbar end-->
