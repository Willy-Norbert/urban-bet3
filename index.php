
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urban BET</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="sidebar">
        <h1>Urban BET</h1>
        <ul>
            <a href="#" style="text-decoration: none;"><li>Cassino</li></a>
            <a href="" style="text-decoration: none;"><li>Ikiryabarezi</li></a>
            <a href="" style="text-decoration: none;"><li>Aviator</li></a>
            <a href="" style="text-decoration: none;"><li>Soccer/Football</li></a>
            <a href="" style="text-decoration: none;"><li>Ifarasi</li></a>
        </ul>
        <div class="profile">
            <a href="" style="text-decoration: none;"><img src="images/urban.jpg" alt="Profile" >
            <p ><?php if (isset($_SESSION['username'])) {
    echo "Welcome, " . $_SESSION['username'] . "!";
}?></p></a>
        </div>
    </div>

    <div class="main">
        <div class="balance-info">
            <a href="deposit.html" style="text-decoration: none;"><button class="btn">Deposit</button></a>
            <a href="withdraw.html" style="text-decoration: none;"><button class="btn">Checkout</button></a>
            <div class="balance">
                <span>Balance: RWF 21,000</span>
            </div>
            <div class="login">
                <a href="login.php" style="text-decoration: none;"><button class="btn login">LogIn</button></a>
                <a href="register.php" style="text-decoration: none;"><button class="btn signup">SignUp</button></a>
            </div>
        </div>

        <div class="wheel-container">
            <div class="wheel" id="wheel">
                
                <img src="images/bird.jpg" class="wheel-item" alt="Lion">
                <img src="images/butterfly.jpg" class="wheel-item" alt="Tiger">
                <img src="images/elephant.jpg" class="wheel-item" alt="Bear">
                <img src="images/hyenas.jpg" class="wheel-item" alt="Elephant">
                <img src="images/lion.jpg" class="wheel-item" alt="Lion">
                <img src="images/lion2.jpg" class="wheel-item" alt="Tiger">
                <img src="images/snake.jpg" class="wheel-item" alt="Bear">
                <img src="images/springbok.jpg" class="wheel-item" alt="Elephant">
                <!-- Add more images as needed -->
            </div>
        </div>
        <div class="buttons">
            <button class="bet red" id="lion">Lion x6</button>
            <button class="bet blue" id="elephant">Elephant x3</button>
            <button class="bet green" id="snake">Snake x4</button>
            <button class="bet blue" id="butterfly">Butterfly x3.5</button><br>
            <button class="bet blue" id="springbok">Springbok x3.5</button>
            <button class="bet blue" id="hyenas">Hyenas x5</button>
            <button class="bet green" id="bird">Bird x6</button>
            <button class="bet red" id="Zebra">Zebra x3.2</button>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>

