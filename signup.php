<?php 
  include 'koneksi.php';
  include 'functions.php'; 

  if ( isset($_POST["btnsignup"])) {
    if ( registrasi($_POST) > 0 ) {
      echo "<link rel='icon' href='img/logo.png'><div class='alert alert-success'>Sign up success</div>";
      echo "<meta http-equiv='refresh' content='2;url=login.php'>";
    } else {
      echo mysqli_error($koneksi);
    }
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
    <title>Sign Up | DnD</title>
    <link rel="icon" href="img/logo.png">
  </head>
  <body>
    
    <section id="signup" class="signup">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <a href="index.php" class="btn btn-primary" role="button" style="border-radius: 24px;"><b>Back</b></a>
          </div>
          <div class="col-md-4 text-center">
            <h3>Sign Up</h3>
            <p>Already have a DnD account? <a href="login.php">Log In</a></p>
            <form method="post">
              <input type="text" name="nama" class="form-control" placeholder="Name">
              <input type="text" name="email" class="form-control" placeholder="Email">
              <input type="password"  name="password" class="form-control" placeholder="Password">
              <input type="password"  name="password1" class="form-control" placeholder="Confirmation Password">
              <button type="submit" name="btnsignup" class="btn btn-primary" style="margin-left: 2%; border-radius: 24px;">Sign Up</button>
            </form>
            
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