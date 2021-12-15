<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librus</title>
    <link rel="stylesheet" href="../Styles/style.css?v=1.1">
</head>
<body>
    <?php

    require_once '../start.php';

    ?>
    <div id="baner">
        <div id="logo">
            <img src="logo.png" alt="logo">
        </div>
        <div id="bCenter">
            okok
        </div>
        <div id="bRight">
            okok
        </div>
    </div>
    <div id="main">
        
        <div id="wew">
            <img src="../Logo.png" alt="logo"> <br />
            <form method="post" action="login.php">
                <div class="binput">Login</div>
                <input type="text" name="login"><br />
                <div class="binput">Hasło</div>
                <input type="password" name="pass"> <br />
                <input type="submit" value="ZALOGUJ" id="loginbtn">
                <p style="text-align: right;"><a href="#">Przypomnij haslo</a></p>
                <span id="error" style="color: red;">
                    <?php   if(isset($_SESSION['error'])) echo $_SESSION['error']; unset($_SESSION['error']);   ?>
                </span>
            </form>
        </div>
    </div>
    <div id="stopka">
        <hr />

    </div>
</body>
</html>