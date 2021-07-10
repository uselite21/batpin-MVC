<?php require APPROOT . '/views/includes/head.php'; ?>

<body style="background-image: url('<?= URLROOT ?>/public/img/banner.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">

<?php require APPROOT . '/views/includes/navigation.php';?>


<!-- Main Content -->
<div class="container text-white d-flex" style="font-family: 'Carrois Gothic SC', sans-serif; height: 50vh">
  <div class="col-md-9 align-self-center ">
    <h1 class="" style="filter: drop-shadow(5px 4px 5px grey);" >
      <br>Batpin merupakan sistem autentikasi menggunakan MVC
      <br><br>Muhammad Irvine F M
      <br>185150301111045
    </h1><br>
    <a href="<?= URLROOT?>/users/login"  class="btn btn-lg btn-success text-light" style="background-color: #49be25;border: none;">Sign In</a>
    &nbsp; Or &nbsp; 
    <a href="<?= URLROOT?>/users/register"  class="btn btn-lg btn-info" style="background-color: #ebe534;border: none">Sign Up</a>
  </div>
</div>
