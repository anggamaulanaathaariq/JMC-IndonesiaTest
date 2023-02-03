<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="images/icon/logokursus.png">
	<title>Registrasi</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
	  <form class="border shadow p-3 rounded"
	  action="signup-check.php"
      	      method="post" 
      	      style="width: 450px;">
<h1 class="text-center p-3">Halaman Registrasi</h1>

<form action="signup-check.php" method="post">

<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
 		<div class="mb-3">
		    <label class="form-label">Name</label>
		    <?php if (isset($_GET['name'])) { ?>
		    <input type="text" 
		           name="nama" 
				   value="<?php echo $_GET['name']; ?>">
          <?php }
		  else{ ?>
               <input type="text" 
                      name="name" 
					  class="form-control" 
					  >
          <?php }?>
		</div>
		<div class="mb-3">
		    <label class="form-label">Username</label>
				   <?php if (isset($_GET['uname'])) { ?>
		    <input type="text" 
		           name="uname" 
				   value="<?php echo $_GET['uname']; ?>">
          <?php }
		  else{ ?>
               <input type="text" 
                      name="uname" 
					  class="form-control"
                      >
          <?php }?>
		</div>
	
		<div class="mb-3">
		    <label for="password" 
		           class="form-label">Password</label>
		    <input type="password" 
		           name="password" 
		           class="form-control" 
		           id="password" />
		  </div>

		  <div class="mb-3">
		    <label for="re_password" 
		           class="form-label">Re-Password</label>
		    <input type="password" 
		           name="re_password" 
		           class="form-control" 
		           id="password" />
		  </div>
		  
		  <div class="container-login100-form-btn m-t-32">
		  <p><strong>Sudah mempunyai akun, Silahkan</strong> <a href="login.php">Login</a></p></div>	
		  <button name="submit" type="submit" 
		          class="btn btn-success">REGISTRASI</button>
				</form>
			</body>
		</html>
