<?php include 'koneksi.php'; session_start(); include 'ceksession.php';?> 
<?php 
	include 'koneksi.php'; require 'functions.php';

	if ( isset($_POST["submit"])) {
		if ( tambah($_POST) > 0) {
			echo "
				<script>
					alert('Berhasil diubah!');
					document.location.href = 'tinyco1.php';
				</script>";
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

    <title>Edit Company | DnD</title>
    <link rel="icon" href="img/logo.png">
  </head>
  <body>
  		<section class="edit" id="edit">
  			<div class="container">
        		<div class="row">
        			<div class="col-lg">
        				<p class="text-center" style="color: #1184F0; font-size: 23px; margin-top: 2%;">Change the website to your heart's content</p>
        			</div>
        		</div>
        	</div>

        	<div class="container">
        		<div class="row">
        			<div class="col-lg text-center" style="margin-top: 2%;">
			        	<form action="" method="post">
				    		<?php  
				                $sql = "SELECT `isi` FROM `template` WHERE id_tem = 5";
								$result = $koneksi->query($sql);
				                if ($result->num_rows > 0) {

								    while($row = $result->fetch_assoc()) {
								         echo "<textarea class='tinymce' name='ubah'>";
								         echo  $row['isi'];
				              			 echo "</textarea>";
								    }
								} else {
								    echo "0 results";
								}
								$koneksi->close();
				        	?>
				        	<a href="portofolio.php"><button type="button" class="btn btn-link" style="margin-top: 2%;">Back</button></a>
        					<button type="submit" name="submit" class="btn btn-info" style="margin-top: 2%;">Save</button>
			        	</form>
        			</div>
        		</div>	
        	</div>
        </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="plugin/tinymce/tinymce.min.js"></script>
	<script type="text/javascript" src="plugin/tinymce/init-tinymce.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>