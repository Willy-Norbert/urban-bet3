<?php
include('config.php');
if(isset($_POST['submit'])){
    $Lname=$_POST['Lname'];
    $Fname=$_POST['Fname'];
    $Email=$_POST['Email'];
    $username=$_POST['username'];
    $Tel=$_POST['Tel'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];
    $win="SELECT * FROM users WHERE username = '$username' or Email='$Email'";
    $duplicate=mysqli_query($conn,$win);

    $_SESSION['username'] = $username;
    
    if(mysqli_num_rows($duplicate) > 0){
        echo"
        <script> alert('username or Email has already taken') </script>;
        ";

    }else{
        if($password==$confirmpassword){
            $query="INSERT INTO users VALUES('','$Lname','$Fname','$Email',' $username','$Tel',' $password')";
           mysqli_query($conn,$query);
           header("location: index.php");
          
        }else{
            echo" <script>alert('password doesnot much')</script>";
    }
}
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="register.css">

    <style>
      .register-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: calc(100vh - 70px); /* Adjusted height minus header */
  background-color: #f0f5f9;
}

.register-box {
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
  padding: 20px;
  max-width: 500px;
  width: 100%;
  text-align: center;
}

.register-box h2 {
  font-size: 24px;
  margin-bottom: 20px;
  color: #333;
  display: flex;
  align-items: center;
  justify-content: center;
}

.register-box h2 i {
  margin-right: 10px;
}

.input-group {
  margin-bottom: 15px;
  text-align: left;
}

.input-group label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
  color: #555;
}

.input-group input {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  box-sizing: border-box;
}

.register-btn {
  background-color: #337ab7;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  cursor: pointer;
  width: 100%;
}

.register-btn:hover {
  background-color: #286090;
}

.login-link {
  color: #337ab7;
  text-decoration: none;
}

.login-link:hover {
  text-decoration: underline;
}

    </style>
</head>
<body>
    <!-- Register Form Section -->
    <div class="register-container">
        <div class="register-box">
            <h2><i class="fas fa-user-plus"></i> Register</h2>
            <form action="register.php" method="post"
            autocomplete="off">
                <div class="input-group">
                    <label for="name">First name</label>
                    <input type="text" id="Fname" name="Fname" required>
                </div><div class="input-group">
                    <label for="name">other names</label>
                    <input type="text" id="Lname" name="Lname" required>
                </div>
                <div class="input-group">
                    <label for="Email">E-Mail</label>
                    <input type="text" id="Email" name="Email" required>
                </div>
                <div class="input-group">
                    <label for="name">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="phone">Tel Number</label>
                    <input type="text"  id="Tel" name="tel" placeholder="+250 788 668 243" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="input-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirmpassword" name="confirmpassword" required>
                </div>
                <button type="submit" name="submit" class="register-btn">Register</button>
            </form>
            <p>Already registered? <a href="login.html" class="login-link">Go to login</a></p>
        </div>
    </div>

    <!-- FontAwesome CDN -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
