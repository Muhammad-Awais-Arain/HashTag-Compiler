<?php include('server.php');
  session_start(); //starting the session, to use and store data in session variable

  //if the session variable is empty, this means the user is yet to login
  //user will be sent to 'login.php' page to allow the user to login
  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: login.php');
  }
  $db = mysqli_connect('localhost', 'root', '', 'registration');
  $username=$_SESSION['username'];
      $language = strtolower($_POST['language']);
    $code = $_POST['code'];

    $sql="INSERT INTO savecode (username, code, language) values ('$username', '$code', '$language')";
    mysqli_query($db, $sql);
  ?>
