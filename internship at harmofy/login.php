<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login page</title>
  <link rel="stylesheet" href="./loginstyle.css" />
</head>

<body>
  <div class="login-container">

    <img src="Media/Harmofypic.png" alt="">

    <h2>LOGIN</h2>

    <form action="" method="get">
      User name:
      <br />
      <input type="text" name="username" />
      <br />
      <br />
      Email:
      <br />
      <input type="email" name="useremail" />
      <br />
      <br />
      Password:
      <br />
      <input type="password" name="password" />
      <br />
      <br />
      <input type="submit" name="loginBtn" value="Login" />
    </form>
  </div>


  <?php

  //DEFAULT USER
  $dbUsername = "Laban";
  $dbUseremail = "laban@yahoo.com";
  $dbUserpasswoord = "Ithasnopassword";


  if (isset($_GET["loginBtn"])) {

    $Uname = $_GET["username"];

    $Uemail = $_GET["useremail"];

    $Upassword = $_GET["userpassword"];

    //login user
    if ($Uname == $dbUsername && $Uemail == $dbUseremail &&  $Upassword == $dbUserpassword) {

      header("Location: home.php");
    } else {
      echo "No user found.";
    }
  }
  ?>
</body>

</html>