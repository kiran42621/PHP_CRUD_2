<?php require 'dbConfig/config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <div style="width:40%;border:1px solid black;padding-bottom:10px">
    <form action="signup.php" method="POST">
        <center>
            <h2>Sign Up</h2>
        
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><input type="number" name="number" id=""></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id=""></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id=""></td>
            </tr>
        </table>
        <p>Already have account? <a href="login.php">Login Here</a></p>
        <input type="submit" value="Sign Up" name="Add">
        </center>
    </form>
    </div>
</body>
</html>
<?php
  if (isset($_POST['Add'])) {
    $username = $_POST['name'];
    $password = $_POST['password'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "select * from users where Email = '$email'";
    $query_solution = mysqli_query($con, $query);
    if (mysqli_fetch_array($query_solution) > 0) {
        echo "<script>alert('User Already exists')</script>";
    }
    else {
        $query = "insert into users values('','$username','$number','$email','$password')";
        $query_solution = mysqli_query($con, $query);
        if($query_solution){
          echo "<script>window.location.href = 'signup.php'</script>";
        }
        else {
          echo "<script>alert('Error Occured')</script>";
        }
      }
    }
 ?>