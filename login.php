<?php require "includes/header.php"; ?>

<?php require "config.php"; ?>

<?php


// check for the submit


// take the data and perform query


// execute the query


// fetch the data


// check for the row count


// and use the password_verify function


// if sesssion is unsetgo back to index
if (isset($_SESSION['username'])) {
  header("Location: index.php");
}


if (isset($_POST['submit'])) {
  //
  if ($_POST['email'] == '' or $_POST['password'] == '') {
    //
    echo "some input are empty";
  } else {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $login = $conn->query("SELECT * FROM users WHERE email = '$email'");

    $login->execute();

    $data = $login->fetch(PDO::FETCH_ASSOC);

    if ($login->rowCount() > 0) {
      //
      if (password_verify($password, $data['mypassword'])) {

        $_SESSION['username'] = $data['username'];
        $_SESSION['email'] = $data['email'];

        header("Location: index.php");
      } else {
        echo "email or password is wrong";
      }
    } else {
      echo "email or password is wrong";
    }
  }
}

?>
<div class="grid">
 <div></div>
 <div>

  <article>
   <hgroup>
    <h1>Login</h1>
    <h2>Please login here</h2>
   </hgroup>

   <form method="POST" action="login.php">
    <!-- <img class="mb-4 text-center" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->

    <div>
     <input name="email" type="email" class="form-control" placeholder="Email address" autocomplete="email">

    </div>

    <div>
     <input name="password" type="password" class="form-control" placeholder="Password" autocomplete="current-password">

    </div>

    <button name="submit" class="contrast" type="submit">Sign in</button>
    <h6>Don't have an account <a href="register.php">Create your account</a></h6>
   </form>
  </article>

 </div>
 <div></div>
</div>
<?php require "includes/footer.php"; ?>