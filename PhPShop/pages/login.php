<?php
    session_start();

    $connection = mysqli_connect('localhost','root','','mcdonalds') or die ('Verbindungsaufbau ist nicht möglich');
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <title>Daniel | Login</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/loginstyle.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <ul class="nav-ul">
                <li class="nav-item"></li>
                <li class="nav-item"><img src="../img/Mcdonalds-Logo-PNG-File.png" class="mcimage" style="width:50px;"></li>
                <li class="nav-item"></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="login">
            <div class="backgroundlogin">
                <form method="post" action="">
                    <div class="login-schrift">Login</div>
                    <div class="form_input">
                        <input type="text" name="username" placeholder="Username" class="username-input">
                    </div>
                    <div class="form_input">
                        <input type="password" name="password" placeholder="Password" class="password-input">
                    </div>
                    <input type="submit" name="submit" value="Anmelden" class="einloggen-button">
                </form>
                <form method="post" action="register.php">
                    <input class="registrieren-button" type="submit" name="neuenaccounterstellen" Value="Account Erstellen">
                </form>

                <?php
                    if(isset($_POST['submit']))
                    {
                        $username = $_POST['username'];
                        $password = $_POST['password'];

                        $abfrage = mysqli_query($connection,"SELECT username, password From tbl_user
                                                             Where username = '$username' AND password = '$password'");

                        $liste = mysqli_fetch_array($abfrage);

                        if(is_array($liste))
                        {
                            $_SESSION['username'] = $liste['username'];
                            $_SESSION['warenkorb'] = array();
                            
                        }
                    }
                    
                    if(isset($_SESSION['username']))
                    {
                        header("Location:../index.php");
                    }
                ?>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>