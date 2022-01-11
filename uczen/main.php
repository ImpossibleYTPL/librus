<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volcano - Twój dziennik elektroniczny</title>
    <link rel="stylesheet" href="../Styles/style.css?v=1.1">
</head>
<body>
    <?php

    require_once '../start.php';

    ?>
    <div id="baner">
        <div id="logo">
        <img class="header-img" src ="../Logo.png" alt="Volcano-Logo">
            <a href="index.html#">&nbsp&nbsp&nbsp&nbsp<h1>Volcano </h1></a>
        </div>
        <div id="bCenter">
          
        </div>
        <div id="bRight">
          
        </div>
    </div>
    <div id="main">
        
        <div id="wew">
            <img src="../Logo.png" alt="logo"> <br /><br />
            <form method="post" action="login.php">
                <div class="binput">Login:</div>
                <input type="text" name="login"><br />
                <div class="binput">Hasło:</div>
                <input type="password" name="pass"> <br /><br />
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
        <ol>Strona została wykonana przez:
            <li>Rafał Brzeski</li>
            <li>Bartek Behnke</li>
            <li>Patryk Kupferschmidt</li>
            <li>Mateusz Hinc</li>
        </ol>

    </div>
</body>
</html>