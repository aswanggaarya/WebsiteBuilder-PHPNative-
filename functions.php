<?php  
	include 'koneksi.php';

	function registrasi($data){
		global $koneksi;

		// agar semua stringmasuk semua
		$nama = strtolower(stripslashes($data["nama"]));
		$email = mysqli_real_escape_string($koneksi, $data["email"]);
		$password = mysqli_real_escape_string($koneksi, $data["password"]);
		$password1 = mysqli_real_escape_string($koneksi, $data["password1"]);
		
		// akun udah ada?
		$result = mysqli_query($koneksi, "SELECT email FROM users WHERE email = '$email'");
		if ( mysqli_fetch_assoc($result) ) {
			echo "<link rel='icon' href='img/logo.png'><div class='alert alert-danger'>This email has been registered</div>";
			return false;
		}

		//konfirmasi password
		if ( $password !== $password1 ) {
			echo "<link rel='icon' href='img/logo.png'><div class='alert alert-danger'>Password does not match</div>";
			return false;
		}

		// enkripsi password
		$password = password_hash($password, PASSWORD_DEFAULT);

		// tambah user
		mysqli_query($koneksi, "INSERT INTO users (nama, email, password, level) VALUES ('$nama', '$email', '$password', 'user')");

		// untuk menghasilkan angka 1 jika berhasil, -1 gagal
		return mysqli_affected_rows($koneksi);
	};

	function add($data){
		global $koneksi;

		$kategori = $data["kategori"];
		$tem = $data["tem"];
		$nama = $data["nama"];

		// tambah template
		$query = "INSERT INTO template VALUES ('', '$kategori', '$tem', '$nama')";
		mysqli_query($koneksi, $query);

		// untuk menghasilkan angka 1 jika berhasil, -1 gagal
		return mysqli_affected_rows($koneksi);
	};
?>