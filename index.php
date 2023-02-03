<html>
<head>
	<title>Login</title>
	<link rel="icon" type="image/png" href="images/icon/logokursus.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

<div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
	  <form class="border shadow p-3 rounded"
      	      action="login.php" 
      	      method="post" 
      	      style="width: 450px;">
      	      <h1 class="text-center p-3">Halaman Login</h1>

<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

	<div class="mb-3">
		    <label class="form-label">User name</label>
		    <input class="form-control" 
		           type="text" name="uname" 
		           id="username">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Password</label>
		    <input type="password" 
		           name="password" 
		           class="form-control">
		  </div>

		  <div class="container-login100-form-btn m-t-32">
					<p>
						<strong>Belum Memiliki Akun?</strong> <a href="registrasi.php">Sign-Up</a></p></div>
		  <button name="submit" type="submit" 
		          class="btn btn-success">LOGIN</button>
		</form>
      </div>
</form>
</form>
</div>
</body>
</html>
