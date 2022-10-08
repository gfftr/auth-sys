<?php require "includes/header.php"; ?>

<?php require "config.php" ?>

<?php
if (isset($_POST['submit'])) {
  if ($_POST['email'] == '' or $_POST['username'] == '' or  $_POST['username'] == '') {
    echo "some inputs are empty";
  } else {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $insert = $conn->prepare("
    INSERT INTO users (email, username, mypassword)
    VALUES (:email,:username, :mypassword)
    ");

    // execute
    $insert->execute([
      ':email' => $email,
      ':username' => $username,
      ':mypassword' => password_hash($password, PASSWORD_DEFAULT)
    ]);

    echo '<script>alert("Form submitted")</script>';
  }
}
?>

<div class="grid">
 <div>1</div>
 <div>

  <article>
   <hgroup>
    <h1>Register</h1>
    <h2>Create an account</h2>
   </hgroup>

   <form method="POST" action="register.php">


    <div>
     <input name="email" type="email" class="form-control" placeholder="Email address" autocomplete="email">

    </div>

    <div>
     <input name="username" type="text" class="form-control" placeholder="Username" autocomplete="username">

    </div>

    <div>
     <input name="password" type="password" class="form-control" placeholder="Password" autocomplete="current-password">

    </div>

    <button name="submit" class="contrast" type="submit">Register</button>
    <h6>Already have an account <a href="register.php">Login here</a></h6>

   </form>
  </article>

 </div>
 <div>3</div>
</div>
<?php require "includes/footer.php"; ?>