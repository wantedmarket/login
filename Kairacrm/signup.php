<?php
  session_start();

  include("dp.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    $first_name = $_POST['fname'];
    $lname_name = $_POST['lname'];
    $Gender = $_POST['gender'];
    $contact = $_POST['contactnum'];
    $address = $_POST['address'];
    $gmail = $_POST['email'];
    $password = $_POST['pass'];

    if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
    {
        $query = "insert into kairacrm (fname, lname, gender, contactnum, address, email, pass) values()"
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="formout">
        <div class="signup">
            <h1>Sign up</h1>
            <h4>Welcome to KairaTechnologies</h4>
            <form action="POST">
                <label for="">First Name</label>
                <input type="text" name="fname" required>
                <label for="">Last Name</label>
                <input type="text" name="lname" required>
                <label for="">Gender</label>
                <input type="text" name="gender" required>
                <label for="">Contact Address</label>
                <input type="tel" name="contactnum" required>
                <label for="">Address</label>
                <input type="text" name="address" required>
                <label for="">Email</label>
                <input type="email" name="email" required>
                <label for="">Password</label>
                <input type="password" name="pass" required>
                <input type="submit" name="" value="submit">
            </form>
            <p>By clicking the sign Up button, you agree to our <br>
            <a href="">Terms and Condition</a> and <a href="#">Policy privacy</a>
            </p>
            <p>Already have an account? <a href="login.php">Login Here</a></p>
        </div>
    </div>
</body>
</html>