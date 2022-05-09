<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ApoteKrw</title>
  <link rel="icon" href="assets/mondo icon.png" type="image/png">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">

</head>

<!-- Navbar -->

<body>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top  py-6">
        <div class="container">
        <a class="navbar-brand" href="" id="brand">
            <i class="bi bi-heart-pulse" width="60px" height="50px" class="d-inline-block align-text-top"> ApoteKrw</i>
            <a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav justify-content-end flex-fill">
                <li class="nav-item" id="navItem">
                    <a class="nav-link p-3" aria-current="page" href="index.php?page=home">Home</a>
                </li>
                <li class="nav-item" id="navItem">
                    <a class="nav-link p-3" href="">List Obat</a>
                </li>
                <li class="nav-item" id="navItem">
                    <a class="nav-link p-3 " href="">About</a>
                </li>
                <li class="nav-item">
                <a class="btn btn-primary py-3 px-3" href="index.php?page=login" role="button" id="iconlog"><i class="px-2 bi bi-person-circle"></i>Login</a>
                </li>
            </div>
        </div>
        </div>
    </nav>
<!-- Main menu -->
    <div class="container mt-4">
    <?php 
        include "menu.php";
    ?>
    </div>

    <footer class="bs-footer text-center text-white">
    <div class="container-fluid" id="footer">
      <div class="text-center pt-1"></div>
      <p>Made by Ragnarok medical care .inc.</p>
    </div>
  </footer>

  <!-- js -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>
</html>