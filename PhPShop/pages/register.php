<?php
session_start();   

    $db_link = mysqli_connect("localhost", "root", "", "mcdonalds");
    mysqli_set_charset($db_link, "utf8");

    if(isset($_POST['register-button']))
    {
        $username 	= $_POST['username'];
        $password 	= $_POST['password'];
        $cpassword 	= $_POST['cpassword'];
        $age        = $_POST['age'];
        $email 	    = $_POST['email'];
        $cemail 	= $_POST['cemail'];

        
        if($username != "" && $password != "" && $cpassword != "" && $age != "" && $email != "" && $cemail != "")
        {
            if($password != $cpassword)
            {
                echo"Deine Passwörter stimmen nicht Überein";
            }
            elseif($password == $cpassword)
            {
                if($email != $cemail)
                {
                    echo"Deine E-Mail Adressen stimmen nicht Überein";
                }
                elseif($email == $cemail)
                {
                    echo"Dein Account wurde Erfolgreich Erstellt";

                    $sql_anweisung = "INSERT INTO `tbl_user`(`username`, `password`, `age`, `email`) VALUES ('$username','$password','$age','$email')";
        
                    mysqli_query($db_link, $sql_anweisung);
                }
            }
        }
    }



?>

<!DOCTYPE html>
<html lang="de">
<head>
    <title>Daniel | Register</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registerstyle.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <ul class="nav-ul">
                <li class="nav-item"></li>
                <li class="nav-item"><img src="../img/Mcdonalds-Logo-PNG-File.png" class="mcimage" style="width:50px;"></li>
                <li class="nav-item"> 
                    <?php 
                        if(isset($_SESSION['username']))
                        { 
                    ?>
                        <form action="" method="post">
                            <input type="submit" name="logout" class="login-button" Value="">
                        </form>
                    <?php 
                        }
                        else
                        {
                    ?>
                        <form action="login.php" method="post">
                            <input type="submit" name="login" class="login-button" Value="Einloggen">
                        </form>
                    <?php 
                        } 
                    ?>
            </ul>
        </nav>
    </header>
    <main>
        <div class="Registrieren">Registrieren</div>

        <div class="register-background">
            <form action="" method="post">
                <input type="text" name="username" class="username-input input" placeholder="Username">
                <input type="number" name="age" class="age-input input" placeholder="Age">
                <br>
                <input type="password" name="password" class="password-input input" placeholder="Password">
                <input type="password" name="cpassword" class="cpassword-input input" placeholder="Confirm Password">
                <br>
                <input type="email" name="email" class="email-input input" placeholder="E-Mail">
                <input type="email" name="cemail" class="cemail-input input" placeholder="Confirm EMail">
                <br>
                <input type="submit" name="register-button" class="register-button" value="Registrieren">
            </form>

            
        </div>
    </main>
    <footer>

    </footer>


</body>
</html>