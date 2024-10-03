<?php
require("config.php");
if(isset($_POST["submit"])){
    $Email=$_POST["Email"];
    $password=$_POST["password"];
    $win="SELECT * FROM users WHERE Email ='$Email'";
    $result= mysqli_query($conn,$win);
    $row=mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)>0){
if($password == $row['password']){
    $_SESSION["login"]=true;
    $_SESSION["id"]=$row['id'];
    header("location: index.php");
   if(empty($Email)){
        exit();
    }
   

}else{
    echo"<script> alert('wrong password')</script>";
}
    
    }else{
        echo"<script> alert('user not registered')</script>"; 
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
    <style>
       .login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: calc(100vh - 70px); /* Adjusted height minus header */
    background-color: #f0f5f9;
  }
  
  .login-box {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-width: 400px;
    width: 100%;
    text-align: center;
  }
  
  .login-box h2 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .login-box h2 i {
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
  
  .remember-me {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
  }
  
  .remember-me input {
    margin-right: 5px;
  }
  
  .login-btn {
    background-color: rgb(1, 248, 1);
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    width: 100%;
  }
  
  .login-btn:hover {
    background-color: rgb(25, 207, 25);
  }
  
  .login-options {
    margin: 15px 0;
  }
  
  .login-options a {
    color: #337ab7;
    text-decoration: none;
  }
  
  .login-options a:hover {
    text-decoration: underline;
  }
  
  .register-link {
    color: #337ab7;
    text-decoration: none;
  }
  
  .register-link:hover {
    text-decoration: underline;
  }
  
    </style>
</head>
<body>

    <!-- Login Form Section -->
    <div class="login-container">
        <div class="login-box">
            <h2><i class="fas fa-lock"></i> Login</h2>
            <form action="login.php" method="post">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="text" id="Email"
                    name="Email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="remember-me">
                    <input type="checkbox" id="remember-me" name="remember-me">
                    <label for="remember-me">Remember me</label>
                </div>
                <button type="submit" name="submit" class="login-btn">Login</button>
                <div class="login-options">
                    <a href="#" class="forgot-password">Forget password?</a>
                </div>
            </form>
            <p>Don't have an account yet? <a href="register.html" class="register-link">Register</a></p>
        </div>
    </div>

    <!-- FontAwesome CDN -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
