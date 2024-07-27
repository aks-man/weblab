
<!-- Program Statement:
  Write a PHP script for login authentication. Design an HTML form which 
  takes Username and Password from user and validate against stored Username 
  and Password in a file.
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <style>
      body {
        background-color: brown;
        font-family: sans-serif;
      }

      h1 {
        text-align: center;
        color: whitesmoke;
      }

      form {
        text-align: center;
        max-width: 800px;
        margin: 50px auto;
        padding: 20px 10px;
        border: solid 2px black;
        background-color: beige;
}
      

      label {
        font-weight: bold;
        font-size: 1.2rem;
      }

      input {
      
    background-color: white;
    border: 10px;
    color: black;
    padding: 15px 50px;
    text-align: center;
    text-decoration: none;
    font-size: 14px;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.2);
      }

      p {
        text-align: center;
        font-weight: bold;
        font-size: 1.5rem;
      }

      div {
        text-align: center;
      }

      button {
        display: inline-block;
        padding: 0.5rem 2rem;
        background-color: plum;
        border: solid 1px black;
        border-radius: 8px;
      }

      button:hover {
        background-color: coral;
      }
    </style>
  </head>
  <body>
    <h1>Login</h1>
    <form action="12.php" method="POST">
      <label for="username">Username:</label>
      <input type="text" name="username" id="username" required><br><br><br>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" required><br><br><br>
      <div>
        <button type="submit">Login</button>
      </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $uname = $_POST["username"];
      $pass = $_POST["password"];
      $user_data = fopen("login.txt", "r");
      $contents = fread($user_data, filesize("login.txt"));
      fclose($user_data);
      if (strpos($contents, $uname . ":" . $pass) !== false) {
        echo "<p>Access granted!</p>";
      } else {
        echo "<p>Access denied!</p>";
      }
    }
    ?>
    <!-- Create a file "user_info.txt" containing Usernames and passwords in the format of Username:Password -->
  </body>
</html>



login.txt
lekhana:12345
akshay:12567
bob:1289
