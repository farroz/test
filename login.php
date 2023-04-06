<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title> 
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <div class="login">
        <h2 class="login-header">Login Community</h2>
        <form class="login-container" action="index.php?page=home" method="POST">
            <p>
                <input type ="text" placeholder="Username" name="username"/>
            </p>
            <p>
                <input type="password" placeholder="Password" name="password"/>
            </p>
            <p>
                <input type="Submit" placeholder="Login"/>
            </p>
        </form>
    </div>           
</body>
</html>