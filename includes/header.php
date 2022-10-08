<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description" content="">
 <meta name="author" content="Gterrell">
 <title>Login area</title>


 <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">


 <div class="container">
  <nav>

   <a class="navbar-brand" href="#">Login & Register</a>

   <ul class="navbar>
     <li class=" nav-item">
    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
    </li>

    <?php if (!isset($_SESSION['username'])) : ?>

    <li>
     <a class="nav-link" href="login.php">Login</a>
    </li>
    <li class="nav-item">
     <a class="nav-link" href="register.php">Register</a>
    </li>

    <?php else : ?>

    <li>
     <a href="#">Username: <?php echo $_SESSION['username']; ?> </a>
    </li>
    <li>
     <a href="logout.php">Logout</a>
    </li>

    <?php endif; ?>

   </ul>
  </nav>
 </div>