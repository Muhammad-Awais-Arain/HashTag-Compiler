<?php 
  session_start(); //starting the session, to use and store data in session variable

  //if the session variable is empty, this means the user is yet to login
  //user will be sent to 'login.php' page to allow the user to login
  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: login.php');
  }

  // logout button will destroy the session, and will unset the session variables
  //user will be headed to 'login.php' after loggin out
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }

?>
<!DOCTYPE html>
<html>
<head>
  <title>HashTag Compiler</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="about.css" />
</head>
<body style="background-color: #343a40;">
<header class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
      <a class="navbar-brand" href="ide.php" method="_POST" action="ide.html"><img src="ani.gif" width="50px" class="rounded-circle"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span ></span>
      <span ></span>
      <span ></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent" style="z-index: 1;">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="profile.php"><img src="user.png" width="30" class="rounded-circle"><?php echo $_SESSION['username']; ?></a>
        </li>
        
    <li class="nav-item">
          <a class="nav-link" href="ide.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactus.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?logout='1'">Logout</a>
        </li>
       </ul>
      
    </div>
  </div>
</nav>
    </header>
<div class="about-section" style="background-color: #343a40;">
  <h1>About Us</h1>
  <p>Online compiler using Web-Based API.<p>
  <p>HashTag compiler is an online multi-language compiler.</p>
</div>

<h2 style="text-align:center; color:white;">Our Group</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="awais.jpg" alt="Awais">
      <div class="container">
        <h2>Muhammad Awais</h2>
        <p class="title">Group Leader</p>
        <p>A passionate Web developer and SQA.</p>
        <p><button class="button" onclick="location.href='https://muhammadawais49451.wordpress.com'">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="Hassan.jpg" alt="Hassan">
      <div class="container">
        <h2>Muhammad Hassan Saeed</h2>
        <p class="title">Group Member</p>
        <p>An intelligent UI/UX designer.</p>
        <p><button class="button" onclick="location.href='https://muhammadhassansaeed49479.wordpress.com/'">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="Danish.jpg" alt="Danish">
      <div class="container">
        <h2>Danish Aslam</h2>
        <p class="title">Group Member</p>
        <p>An animated graphics designer.</p>
        <p><button class="button" onclick="location.href='https://danishaslam49635.wordpress.com/'">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
