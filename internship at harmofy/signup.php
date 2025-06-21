<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup page</title>
    <link rel="stylesheet" href="./signupstyle.css" />
  </head>
  <body>

    <div class="signup-container">

      <img src="Media/Harmofypic.png" alt="logo">

      <h2>SIGN UP</h2>

      <form action="#" method="post">
        <label for="name">Name:</label>
        <br />
        <input
          type="text"
          name="name"
          id="name"
          placeholder="Enter your name"
        />
        <br />
        <br />

        <label for="username">Username:</label>
        <br />
        <input
          type="text"
          name="username"
          id="username"
          placeholder="Enter your Username"
        />
        <br />
        <br />

        <label for="email">Email:</label>
        <br />
        <input
          type="email"
          name="email"
          id="email"
          placeholder="Enter your Email"
        />
        <br />
        <br />

        <label for="password">Password:</label>
        <br />
        <input
          type="password"
          name="password"
          id="password"
          placeholder="Enter your password"
        />
        <br />
        <br />
        <input type="submit" value="Sign Up" name="btnSignUp" />
      </form>
    </div>

    <?php

        if(isset($_POST["btnSignUp"])){

            $name = $_POST["name"];
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            //echo "$name - $username - $email - $password";

            include db.php;

            $sql = "INSERT INTO `users` (`user_id`,`full_name`, `username`, `password`, `email`) VALUES(NULL, '$name', '$username', '$email')";

            mysqli_querry($conn, $sql);

        }

   ?></body>
</html>
         

