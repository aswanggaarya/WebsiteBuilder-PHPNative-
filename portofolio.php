<?php include 'koneksi.php'; session_start(); include 'ceksession.php';?> 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Portfolio | DnD</title>
    <link rel="icon" href="img/logo.png">
  </head>
  <body>
    <section id="blog" class="blog">
      <div class="container">
        <div class="row">
          <div class="col-lg">
            <p class="text-right" style="margin-top: 3%; font-size: 15px;"><?php echo $_SESSION['email']; ?><a href="logout.php" style="font-size: 15px;"> | Log Out</a></p>
            <p class="text-left" style="margin-top: 1%; font-size: 18px; color: #1184F0;">Portfolio</p>
            <p class="text-center" style="color: #1184F0; font-size: 23px; margin-top: 2%;">Pick the website template you like</p>
          </div>
        </div>
        <div class="row" style="margin-top: 8%;">
          <div class="col-md-6">
            <img src="img/portofolio.jpg" style="width: 85%;"><br>
            <a href="tem/portfolio/index.html" style="margin-top: 1%;">View</a>
            <a href="tinypo.php" style="margin-top: 1%; margin-left: 4%;">Edit</a>
          </div>
        </div>
        <div class="row">
          <div class="col-lg">
            <p class="text-right" style="margin-top: 5%;"><a href="company.php">Company Profile ></a><a href="blog.php" style="margin-left: 2%;">Blog ></p>
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