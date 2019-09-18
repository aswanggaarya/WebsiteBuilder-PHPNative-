<?php
 include 'koneksi.php';
 if (isset($_POST['btnforgot'])) 
 {
  $email = $_POST['email'];
  $cek = mysqli_query($koneksi, "SELECT email FROM users WHERE email = '$email' ");
  if (mysqli_num_rows($cek) === 1 ) 
  {
   $password   = $_POST['password'];
   $repassword = $_POST['repassword'];
   if($password != $repassword)
   {
    ?>
     <script>
      alert("Password does not match");
      window.location.href = 'forgot.php';
     </script>
    <?php
   }else
   {
    $pwd = password_hash($password, PASSWORD_DEFAULT);
    $sql = mysqli_query($koneksi, "UPDATE users SET password = '$pwd' WHERE email = '$email' ");
    if ($sql) 
    {
     ?>
      <script>
       alert("Password has been updated");
       window.location.href = 'login.php';
      </script>
     <?php
    }else
    {
     ?>
      <script>
       alert("Password failed updated");
       window.location.href = 'forgot.php';
      </script>
     <?php
    }
   }
  }else
  {
   ?>
    <script>
     alert("Make sure the email you entered is correct!");
     window.location.href = 'forgot.php';
    </script>
   <?php
  }
 }
?>