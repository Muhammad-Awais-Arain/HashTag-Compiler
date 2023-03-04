<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>SignUp for HashTag Compiler</title>
	<link rel = "icon" href = "logo.png"  type = "image/x-icon">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #343a40;">
		<header class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="guest.html" method="_POST" action="ide.html"><img src="ani.gif" width="50" class="rounded-circle"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span ></span>
      <span ></span>
      <span ></span>
  </button>
      <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent" style="z-index: 1;">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="guest.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"  href="register.php">Register</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactus.html">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.html">About Us</a>
        </li>
       </ul>
      
    </div>
      

  </div>
</nav>
    </header>
	<div class="dev">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Enter Username</label>
			<input type="text" placeholder="Enter Username" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" placeholder="Enter Email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Enter Password</label>
			<input type="password" placeholder="********" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2" placeholder="********">
		</div>
		<div class="d-flex justify-content-center">
			        <button type="submit" class="btn btn-outline-success" name="reg_user" >Sign Up</button>
		</div>
		<div class="pd" style="text-align: center;"><p>
			Already having an account? <br> <a href="login.php">Login Here!</a> OR 			<a href="guest.html">
				Continue as a guest!
			</a>
		</p>
</div>

	</form>
</body>
</html>
