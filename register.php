<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="initial-scale=1, shrink-to-fit=no, width=device-width" name="viewport">

    <!-- CSS -->
    <!-- Add Material font (Roboto) and Material icon as needed -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i|Roboto+Mono:300,400,700|Roboto+Slab:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Add Material CSS, replace Bootstrap CSS -->
    <link href="css/material.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style-login-reg.css">
  </head>
  <body>
  	<section class="login-inner">
	    <div class="login-middle">
	      <div class="login-details">
	      	<img src="lib/img/face.jpg" class="profile-img-card">
   		 		<form>
   		 		<div class="form-group">
   		 			<label for="uname">Nama Pengguna:</label>
   		 			<input type="text" name="uname" class="form-control" placeholder="Masukkan username">
   		 		</div>
   		 		<div class="form-group">
   		 			<label>Nama anda:</label>
   		 			<input type="text" name="name" class="form-control" placeholder="Masukkan nama anda">
   		 			<small class="form-text text-muted">Nama anda akan ditampilkan dalam beberapa kategori saja</small>
   		 		</div>
			  <div class="form-group">
				    <label for="InputUname">Email address</label>
				    <input type="email" class="form-control" placeholder="Masukkan email">
				    <small id="emailHelp" class="form-text text-muted">Kami tidak akan memberitahukan email anda pada siapapun.</small>
				</div>
				<div class="form-group">
					<label>Nomor telepon/ponsel:</label>
					<input type="text" name="telp" class="form-control">					
				</div>
			  <div class="form-group">
			    <label for="InputPassword">Password</label>
			    <input type="password" class="form-control" placeholder="Masukkan kata sandi">
			  </div>
			  <div class="form-group">
			  	<div class="custom-control custom-checkbox">
  				<input type="checkbox" class="custom-control-input form-control" id="checked">
  				<label class="custom-control-label" for="customCheck1">Saya setuju dengan <a href="#"> Syarat dan Ketentuan</a> yang telah ditentukan</label>
				</div>
			  </div>
			  <button type="submit" class="btn btn-primary btn-lg btn-block">DAFTAR</button>
				</form>
			</div>
		</div>
	</section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Then Material JavaScript on top of Bootstrap JavaScript -->
    <script src="js/material.min.js"></script>
  </body>
</html>