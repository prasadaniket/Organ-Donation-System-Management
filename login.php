<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Sign up</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body>

    <!-- header section starts  -->

    <header class="header">
        <a href="index.php" class="logo">
            <img src="img/blacklogo.png" alt="">
        </a>
    </header>

    <!-- header section ends -->

    <div class="container">
        <div class="form-box">
            <h1 id="title">Login</h1>
            <form action="insert.php" method="POST">
                <div class="input-group">
                    
                    <!-- Input fields here -->
                    <div class="input-field" id="namefield">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Name" id="name" name="name" required>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email Address" id="email" name="email" required>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" id="password" name="password" required>
                    </div>
                    <div>
                        <p>You do not have an account? <a href="#">Sign up</a></p>
                        <p><a href="#">You forgot your password?? </a></p>
                    </div>
                </div>  
                
                <div class="btn-field">
                    <button type="submit" id="signupBtn" name="submit" class>Sign Up</button>
                    <button type="button" id="loginBtn" name="submit" class="disable">Login</button>
                </div>
            </form>

            <!-- <form action="login_check.php" method="POST">
                <div class="btn-field">
                     <button type="button" id="loginBtn" name="submit" class="disable">Login</button>
                </div>
            </form> -->

        </div>
    </div>

<script>
    let signupBtn = document.getElementById("signupBtn");
    let loginBtn = document.getElementById("loginBtn");
    let namefield = document.getElementById("namefield");
    let title = document.getElementById("title");

loginBtn.onclick = function(){
    namefield.style.maxHeight = "0";
    title.innerHTML = "Login";
    signupBtn.classList.add("disable");
    loginBtn.classList.remove("disable");
}

signupBtn.onclick = function(){
    namefield.style.maxHeight = "60px";
    title.innerHTML = "Sign Up";
    signupBtn.classList.remove("disable");
    loginBtn.classList.add("disable");
}

</script>
</body>
</html>
