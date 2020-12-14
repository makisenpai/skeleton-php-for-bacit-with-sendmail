


<!DOCTYPE html>
<html lang="no">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="/css/style.css">
<title>Login</title>
</head>
    <body>
        <div class="login_box">
            <h1>Login</h1>
            <form action="../inc/login.form.php" method="post">
                <label for="username">
                    <i class="fas fa-user"></i>
                </label>
                <input type="text" name="username" placeholder="Username" id="username" required>
                </br>
                <label for="password">
                    <i class="fas fa-lock"></i>
                </label>
                <input type="text" name="password" placeholder="Password" id="password" required>
                </br>
                <input type="submit" value="Login">

            </form>


            <p>Har du ikke bruker klikk her</p>
            <a href="/site/signup.site.php">Signup</a>
        </div>
    </body>
</html>