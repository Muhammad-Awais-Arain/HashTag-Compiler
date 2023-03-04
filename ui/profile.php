<?php 
    session_start(); //starting the session, to use and store data in session variable

    //if the session variable is empty, this means the user is yet to login
    //user will be sent to 'login.php' page to allow the user to login
    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You have to log in first";
        header('location: login.php');
    }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HashTag Compiler</title>
    <link rel = "icon" href = "logo.png"  type = "image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/profile.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body style="background-color: #343a40; ">

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
                      <a class="nav-link active" href="profile.php"><img src="user.png" width="30" class="rounded-circle"><?php echo $_SESSION['username']; ?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="ide.php">Home</a>
                    </li>
                
                    <li class="nav-item">
                      <a class="nav-link" href="contactus.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?logout='1'">Logout</a>
                    </li>
                   </ul> 
                </div>
              </div>
        </nav>
    </header>   
    <div class="container mt-5">
       <div class="row d-flex justify-content-center">
        <div class="col-md-7">
            <div class="card p-3 py-4">
                <div class="text-center"> <img src="user.png" width="100" class="rounded-circle"> </div>
                <div class="text-center mt-3"> <span class="bg-secondary p-1 px-4 rounded text-white">User Name:</span>
                    <h2 class="mt-2 mb-0"><?php echo $_SESSION['username']; ?></h2><br>
                     <button class="btn btn-outline-primary px-4" onclick="location.href='ide.php'">Lets Compile?</button>
                     <button class="btn btn-primary px-4 ms-3" onclick="location.href='showcode.php'">View saved codes</button>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
</body>
</html>
