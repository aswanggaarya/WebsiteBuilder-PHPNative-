<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Forgot Password | DnD</title>
    <link rel="icon" href="img/logo.png">
  </head>
  <body>
    

    <section id="login" class="login">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <a href="login.php" class="btn btn-primary" role="button" style="border-radius: 24px;"><b>Back</b></a>
          </div>
          <div class="col-md-4 text-center">
            <h3>Trouble Logging In?</h3>
            <p>Enter your email to get back</p>
            <p style="margin-top: -5%;">into your account.</p>
            <form action="proses-reset.php" method="post">
              <input type="text" name="email" class="form-control" placeholder="Email">
              <input type="password" name="password" class="form-control" placeholder="New Password">
              <input type="password" name="repassword" class="form-control" placeholder="Confirm New Password">
              <!-- <p style="color: #828282; margin-left: 4%;" class="text-left">Remember Me <input type="checkbox" id="myCheck" onclick="myFunction()"></p> -->
              <!-- <a href="#" class="btn btn-primary" role="button" style="margin-left: 2%;">Sign Up</a> -->
              <button type="submit" class="btn btn-primary" name="btnforgot" style="margin-left: 2%; border-radius: 24px;">Send</button>
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