<?php include('server.php');
  /*session_start();*/ //starting the session, to use and store data in session variable

  //if the session variable is empty, this means the user is yet to login
  //user will be sent to 'login.php' page to allow the user to login
  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: login.php');
  }
  $db = mysqli_connect('localhost', 'root', '', 'registration');
  $username=$_SESSION['username'];

    $sql="SELECT code, language FROM savecode WHERE username='$username'";
    $data=mysqli_query($db, $sql);

?>
<!DOCTYPE html>
<html>
<head>
  <title>HashTag Compiler</title>
    <link rel = "icon" href = "logo.png"  type = "image/x-icon">
    <!-- <link rel="stylesheet" href="css/profile.css" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>




    <style type="text/css">
   /* .element {
  width: 100%;

  animation: pulse 5s infinite;
}

@keyframes pulse {
  0% {
    background-color: #001F3F;
  }
  100% {
    background-color: #FF4136;
  }
}
*/
html,
body {
  height: 100%;
}

      .mid{
        width:100%;
    height:auto;
    display: flex;
      justify-content: center;

  }
  table{
    margin: 0 auto; /* or margin: 0 auto 0 auto */
    width: 100%;
  height: 100%;
  border: 5px solid;
  border-color: #57a958;
  display: inline-block;

  }
  th, td{
    width: 100%;
    border: 1px solid;
    color: white;
  }
  .heading{
    text-align: center;
  }
a:link {
  color: red;
}

/* visited link */
a:visited {
  color: green;
}

/* mouse over link */
a:hover {
  color: hotpink;
}

/* selected link */
a:active {
  color: blue;
}

    </style>
</head>

<body class="element" style="background-color: #343a40;">
         <div class="alert alert-success alert-dismissible text-center" id="codecopied" role="alert" style="display: none">
      Code Copied <?php echo $_SESSION['username']; ?>! </div>
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
    <h3 class="heading" style="color:white;"><a href="profile.php"><?php echo $_SESSION['username']; ?>'s</a> saved codes</h3>
<div class="mid">

  <?php

  if ($data->num_rows > 0) {
  // output data of each row
 echo "<table>";
         echo "<tr>";
          //  echo "<th>Username </th>";
            echo "<th>Code</th>";
            echo "<th>Copy Code</th>";
            echo "<th>Language</th>";
         echo "</tr>";

  while($row = $data->fetch_assoc()) {
    echo "<tr>";
         //   echo "<td> $row[username]</td>";
            echo "<td> $row[code]</td>";
         echo "<td><button class='btn btn-primary' type='button' onclick='copyText(this)'>Copy</button></td>";
            echo "<td> $row[language]</td>";
            echo "</tr>";
  }
  echo "</table>";
  

}?></div>
<script type="text/javascript">
  function copyText(obj) 
{
    var tmpInput = $("<input>");
    $("body").append(tmpInput);
    var tdVal = $(obj).parent().prev().text();
    tmpInput.val(tdVal).select();
    document.execCommand("copy");
    tmpInput.remove();
     $("#codecopied").show();
            setTimeout(function(){
        $('#codecopied').fadeOut('fast');
    },2000)

}
</script>
</body>
</html>

