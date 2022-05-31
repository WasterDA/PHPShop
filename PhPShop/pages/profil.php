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
                <li class="nav-item">
                <?php 
                    if(isset($_SESSION['username']))
                    { 
                ?>
                    <form action="" method="post">
                        <input type="submit" name="zuruek" class="zuruck" Value="Home">
                    </form>
                <?php
                    }
                ?>
                </li>
                <li class="nav-item"><img src="../img/Mcdonalds-Logo-PNG-File.png" class="mcimage" style="width:50px;"></li>
                <li class="nav-item">
                <?php 
                    if(isset($_SESSION['username']))
                    { 
                ?>
                    <form action="" method="post">
                        <input type="submit" name="logout" class="login-button" Value="Logout">
                    </form>
                    <?php 
                        } 
                    ?>
                <?php
                    if(isset($_POST['zuruek']))
                    {
                        header("Location:../index.php");
                    }

                    if(isset($_POST['logout']))
                    {
                        header("Location:../index.php");
                        session_destroy();
                    }
                    ?>
                </li>
            </ul>
        </nav>
    </header>
    <main>        
        <?php
            if(isset($_POST['bestaetigen']))
            {
                $newpassword = $_POST['newpassword'];
                $username = $_SESSION['username'];
    
                $update = "UPDATE tbl_user SET password = '$newpassword' WHERE username = '$username'";
    
                mysqli_query($connection, $update);
            }
        ?>
        
        <div class="mittig">
            <p>Password Ändern</p>
            <form action="" method="post">
                <input type="text" name="newpassword">
                <input type="submit" name="bestaetigen" value="Änderung Bestätigen">
            <form>
        </div>

        <?php
            if(isset($_POST['bestaetigenloeschen']))
            {
                $username = $_SESSION['username'];
    
                $loeschen = "DELETE FROM `tbl_user` WHERE username = '$username'";
    
                mysqli_query($connection, $loeschen);
            }
        ?>
        <div class="mittig">
            <p>Account Löschen</p>
            <form action="" method="post">
                <input type="submit" name="bestaetigenloeschen" value="Löschen Bestätigen">
            <form>
        </div>

    </main>
    <footer>

    </footer>
</body>
</html>
