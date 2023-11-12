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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HashTag Compiler</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel = "icon" href = "logo.png"  type = "image/x-icon">
<link rel="stylesheet" href="style.css" />

    
</head>
<body class="home">
       <div class="alert alert-primary alert-dismissible text-center" id="showingsave" role="alert" style="display: none">
      Code saved <?php echo $_SESSION['username']; ?>! </div>
      <div class="alert alert-danger alert-dismissible text-center" id="dom" role="alert" style="display: none">
      Cleared </div>
      <div class="alert alert-success alert-dismissible text-center" id="exec" role="alert" style="display: none">
      Code successfully executed. </div>

    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
      <a class="navbar-brand" href="ide.php" method="_POST" action="ide.html"><img src="ani.gif" width="50" class="rounded-circle"></a>
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
          <a class="nav-link active" href="ide.php">Home</a>
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
    
    <div class="control-panel"  style="background-color: #212529; color:white;">
        Select Language:
        &nbsp; &nbsp;
        <select id="languages" class="languages" onchange="changeLanguage()">
           <option value="text"> Text </option>
            <option value="c"> C </option>
            <option value="cpp"> C++ </option>
            <option value="php"> PHP </option>
            <option value="python"> Python </option>
            <option value="node"> Node JS </option>
            
        </select>
        Change Theme:
        &nbsp; &nbsp;
        <select id="theme" class="theme" onchange="changetheme()">
            <option value="gruvbox"> Gruvbox </option>
            <option value="Dawn"> Dawn </option>
            <option value="Terminal"> Terminal </option>
            <option value="Twilight"> Twilight </option>
            <option value="Pastel Dark"> Pastel Dark </option>
            <option value="Monokai"> Monokai </option>

        </select>
    </div>
    <div class="editor" id="editor" style=" height: 300px;"></div>

    <div class="button-container" style="background-color: #212529; text-align: right;">
        <button type="button" class="btn btn-warning" onclick="undo()">Undo</button>
        <button type="button" class="btn btn-warning" onclick="redo()">Redo</button>
        <button type="button" class="btn btn-primary" onclick="cutCode()">Cut</button>
        <button type="button" class="btn btn-primary" onclick="copyCode()">Copy</button>
        <button type="button" class="btn btn-primary" onclick="pasteCode()">Paste</button>
        <button type="button" class="btn btn-primary" onclick="selectAll()">Select All</button>

        <button type="button" class="btn btn-outline-danger" onclick="clearCode()">Clear</button>
        <button type="button" class="btn btn-outline-primary" onclick="saveCode()">Save Code</button>
        <button type="button" class="btn btn-outline-success" onclick="executeCode()">Run</button>   
    </div>

    <div class="output" style=" width: 100%; height: 197px;">
    <textarea readonly class="show" id="show" placeholder="Output:" style="background-color: #1D2021; width: 100%; height: 195px; color: white;"></textarea>
    </div>
	  <script src="lib/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="lib/ace.js"></script>
    <script src="lib/ext-language_tools.js"></script>
    <script src="lib/ext-elastic_tabstops_lite.js"></script>
    <script src="lib/ext-error_marker.js"></script>
    <script src="lib/ext-spellcheck.js"></script>
    <script src="lib/ext-beautify.js"></script>
    <script src="ide.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>