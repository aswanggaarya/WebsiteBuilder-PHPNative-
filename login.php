<?php  
  session_start();
  include 'koneksi.php';

  if ( isset($_POST["btnlogin"]) ) {
    
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email'");

    // cek username
    if ( mysqli_num_rows($result) === 1 ) {
      
      // cek password
      $row = mysqli_fetch_assoc($result);
      if ( password_verify($password, $row["password"]) ) {
        if ( $row["level"] == "user" ) {
          // set session
          $_SESSION['email'] = $email;
          header("Location: lets.php");
          exit;  
        } elseif ( $row["level"] == "admin") {
          $_SESSION['email'] = $email;
          header("Location: admin.php");
          exit;
        }
        
      }

    }

    $error = true;

  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Log In | DnD</title>
    <link rel="icon" href="img/logo.png">
  </head>
  <body>
    
    <?php if ( isset($error) ) : ?>
        <div class='alert alert-danger'>Email / password is wrong</div>
    <?php endif; ?>

    <section id="login" class="login">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <a href="index.php" class="btn btn-primary" role="button" style="border-radius: 24px;"><b>Back</b></a>
          </div>
          <div class="col-md-4 text-center">
            <h3>Log In</h3>
            <p>New to DnD? <a href="signup.php">Sign Up</a></p>
            <form method="post">
              <input type="text" name="email" class="form-control" placeholder="Email">
              <input type="password" name="password" class="form-control" placeholder="Password">
              <!-- <p style="color: #828282; margin-left: 4%;" class="text-left">Remember Me <input type="checkbox" id="myCheck" onclick="myFunction()"></p> -->
              <!-- <a href="#" class="btn btn-primary" role="button" style="margin-left: 2%;">Sign Up</a> -->
              <button type="submit" class="btn btn-primary" name="btnlogin" style="margin-left: 2%; border-radius: 24px;">Log In</button>
            </form>
            <p style="margin-top: 2%; margin-left: 2%;"><a href="forgot.php">Forgot Password?</a></p>
          </div>  
        </div>
      </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>