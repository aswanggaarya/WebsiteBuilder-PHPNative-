<?php include 'koneksi.php'; session_start(); include 'ceksession.php';?> 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Lets do it!</title>
    <link rel="icon" href="img/logo.png">
  </head>
  <body>
    
    <section id="lets" class="lets">
      <div class="container">
        <div class="row">
          <div class="col-md-4" style="padding-right: 20%;">

          </div>
          <div class="col-md-4 text-left">
            <p style="color: #1184F0; font-size: 23px; margin-top: 40%;">Pick the website template you like</p>
            <p style="color: #1184F0; font-size: 18px; margin-top: 20%; margin-left: 30%;"><a href="blog.php">Blog ></a></p>
            <p style="color: #1184F0; font-size: 18px; margin-top: 10%; margin-left: 30%;"><a href="company.php">Company Profile ></a></p>
            <p style="color: #1184F0; font-size: 18px; margin-top: 10%; margin-left: 30%;"><a href="portofolio.php">Portfolio ></a></p>

          </div>  
          <div class="col-md-4 text-right">
            <p style="margin-top: 10%; font-size: 15px;"><?php echo $_SESSION['email']; ?><a href="logout.php" style="font-size: 15px;"> | Log Out</a></p>   
          </div>
        </div>
      </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>