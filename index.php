 <?php require "includes/header.php"; ?>
 <?php
  require "config.php";
  $data = $conn->query("SELECT * FROM tasks");

  ?>

 <div class="grid">
  <div></div>
  <div>

   <article>
    <h1>Login area </h1>
    <h5>Welcome <?php echo $_SESSION['username']; ?></h5>
    <form method="POST" action="insert.php" class="form-inline" id="user_form">
     <div class="form-group mx-sm-3 mb-2">
      <label for="inputPassword2" class="sr-only">create</label>
      <input name="mytask" type="text" class="form-control" id="task" placeholder="enter task">
     </div>
     <input type="submit" name="submit" class="btn btn-primary" value="Insert" />
    </form>
    <table class="table">

     <thead>
      <tr>
       <th>#</th>
       <th>Task Name</th>
       <th>delete</th>
       <th>update</th>
      </tr>
     </thead>


     <tbody>
      <?php while ($rows = $data->fetch(
              PDO::FETCH_OBJ
            )) : ?>

      <tr>
       <td><?php echo $rows->id; ?></td>
       <td><?php echo $rows->name; ?></td>
       <td><a href="delete.php?del_id=" class="btn btn-danger">delete</a></td>
       <td><a href="update.php?upd_id=" class="btn btn-warning">update</a></td>
      </tr>

      <?php endwhile; ?>

     </tbody>


    </table>
   </article>

   <!-- Main -->


  </div>
  <div></div>
 </div>




 <?php require "includes/footer.php"; ?>