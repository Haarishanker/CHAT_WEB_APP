<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<body>
  <div class="wrapper">
    <section class="form login">
      <header><center>Free-Chat</center></header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <input type="email" name="email" placeholder="Enter your email" pattern="[a-z0-9._%+-]+@sece.ac.in" title="Ex. Username@sece.ac.in" required>
        </div>
        <div class="field input">
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Submit">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
    </section>
  </div>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>
</body>
</html>
