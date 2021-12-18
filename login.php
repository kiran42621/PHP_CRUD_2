<?php require 'dbConfig/config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div style="width:40%;border:1px solid black;padding-bottom:10px">
    <form action="login.php" method="POST">
        <center>
            <h2>Login</h2>
        
        <table>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id=""></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id=""></td>
            </tr>
        </table>
        <p>Don't have account? <a href="signup.php">Sign Up Here</a></p>
        <input type="submit" value="Login" name="Login">
        </center>
        </form>
    </div>
</body>
</html>
<?php
  if (isset($_POST['Login'])) {
    $username = $_POST['email'];
    $password = $_POST['password'];

    if ($username == "Admin" && $password == "Admin@123#") {
      echo "<script>window.location.href = 'Admin/Home.php'</script>";
    }
    else {
      $query = "select * from users where Email = '$username' AND Password = '$password'";
      $query_solution = mysqli_query($con, $query);
      $query_solutions = mysqli_query($con, $query);
      if (mysqli_fetch_array($query_solution) > 0) {
        $_SESSION['username'] = $username;
        while ($row = mysqli_fetch_array($query_solutions)) {
          $_SESSION['user_id'] = $row['ID'];
        }
        echo "<script>window.location.href = 'home.php'</script>";
      }
      else {
        echo "<script>alert('Check Username and password !')</script>";
      }
    }
  }
 ?>