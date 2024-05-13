<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header("location: login.php");
}


?>


<!doctype html>
<html lang="en">

<head>
  <!-- old -->
  <!-- Required meta tags -->
  <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NewsHub</title>
  <link rel="stylesheet" href="jstyle.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
  <!-- odd -->
  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">The Global</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      
     
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome " . $_SESSION['username'] ?></a>
      </li>
  </ul>
  </div>


  </div>
</nav> -->
  <!-- old end -->
  <!-- Button trigger modal -->

  <nav>
    <div class="main-nav container flex">
      <a href="#" onclick="reload()" class="company-logo">
        <img src="cover2.png" alt="company logo">
      </a>
      <div class="nav-links">

        <ul class="flex">

          <li class="hover-link nav-item" id="world cup" onclick="onNavItemClick('world cup')">WORLD Cup</li>
          <li class="hover-link nav-item" id="finance" onclick="onNavItemClick('finance')">Finance</li>
          <li class="hover-link nav-item" id="politics" onclick="onNavItemClick('politics')">Politics</li>

        </ul>

      </div>
      <div class="search-bar flex">
        <input id="search-text" type="text" class="news-input" placeholder="Search!">
        <button id="search-button" class="search-button">Search</button>

        <!-- <a class=pop href="register.php">SIGN UP<a />
          <a href="login.php">SIGN IN<a /> -->
        <a href="logout.php">LOG OUT</a>
      
      </div>
     
      <div class="navbar-collapse collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png">
              <?php echo "Welcome " . $_SESSION['username'] ?>
            </a>
          </li>
        </ul>
      </div>

    </div>


  </nav>


  <main>
    <div class="cards-container container flex" id="cards-container">
    </div>
  </main>

  <template id="template-news-card">
    <div class="card">
      <div class="card-header">
        <img src="https://via.placeholder.com/400x200" alt="news-image" id="news-img">
      </div>
      <div class="card-content">
        <h3 id="news-title">This is the Title</h3>
        <h6 class="news-source" id="news-source">End Gadget 26/08/2023</h6>
        <p class="news-desc" id="news-desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae saepe
          quis voluptatum quisquam vitae doloremque facilis molestias quae ratione cumque!</p>
      </div>
    </div>
  </template>
  <div class="container mt-4">
    <h3>
      <?php echo "Welcome " . $_SESSION['username'] ?>! You can now use this website
    </h3>
    <hr>

  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
    <script src="jscript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
  </body>

</html>