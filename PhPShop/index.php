<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>McDonalds | Home</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <ul class="nav-ul">
                <li class="nav-item"></li>
                <li class="nav-item"><img src="img/Mcdonalds-Logo-PNG-File.png" class="mcimage" style="width:50px;"></li>
                <li class="nav-item"> 
                    <?php 
                        if(isset($_SESSION['username']))
                        { 
                    ?>
                        <form action="pages/profil.php" method="post">
                            <input type="submit" name="profil" class="login-button" Value="Dein Profil">
                        </form>
                    <?php 
                        }
                        else
                        {
                    ?>
                        <form action="pages/login.php" method="post">
                            <input type="submit" name="login" class="login-button" Value="Einloggen">
                        </form>
                    <?php 
                        } 
                    ?>

                    <?php
                        if(isset($_POST['logout']))
                        {
                            session_destroy();
                        }
                    ?>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="bestellmenu">
            <div class="linksauswahl">
                <li  class="linksauswahl-item">
                    <form action="" method="post">
                        <input type="submit" name="fruestueck-button" class="links" value="Frühstück">
                    </form>
                </li>
                <li  class="linksauswahl-item">
                    <form action="" method="post">
                        <input type="submit" name="burger-button" class="links" value="Burger">
                    </form>
                </li>
                <li  class="linksauswahl-item">
                    <form action="" method="post">
                        <input type="submit" name="getraenke-button" class="links" value="Getränke">
                    </form>
                </li>
                <li class="linksauswahl-item">
                    <form action="" method="post">
                        <input type="submit" name="desert-button" class="links" value="Desert">
                    </form>
                </li>
           </div>

            <div class="rechtsauswahl">
                
                <?php
                
                
                if (isset($_POST["fruestueck-button"]))
                {
                    $db_link = mysqli_connect("localhost", "root", "", "mcdonalds");
                    mysqli_set_charset($db_link, "utf8");
                    $sql_anweisung = "SELECT id, produkt_name, bild, preis FROM tbl_fruestueck";

                    $ergebnismenge = mysqli_query($db_link, $sql_anweisung);
                    while($datenzeile = mysqli_fetch_assoc($ergebnismenge))
                    {
                        $id = $datenzeile['id'];
                        $produktname = $datenzeile['produkt_name'];
                        $bild = $datenzeile['bild'];
                        $preis = $datenzeile['preis'];

                        echo"<form name=\"\" action=\"\" method=\"POST\">";
                            echo"<div class=\"bsp-ding\">";
                                echo"<input type=\"hidden\" name=\"id\" value=\"$id\">";
                                echo"<input type=\"hidden\" name=\"produktname\" value=\"$produktname\">";
                                echo"<input type=\"hidden\" name=\"preis\" value=\"$preis\">";
                                echo"<div class=\"name\">$produktname</div>";
                                echo"<div class=\"bild\" name=\"bild\"><img src=\"$bild\"/></div>";
                                echo"<div class=\"preis\">$preis</div>";
                                echo"<input type=\"submit\" class=\"hinzufuegen-button\" name=\"hinzufuegen\" value=\"Hinzufügen\">";
                            echo"</div>";   
                        echo"</form>";
                    }
                }

                if (isset($_POST["burger-button"]))
                {
                    $db_link = mysqli_connect("localhost", "root", "", "mcdonalds");
                    mysqli_set_charset($db_link, "utf8");
                    $sql_anweisung = "SELECT id, produkt_name, bild, preis FROM tbl_burger";

                    $ergebnismenge = mysqli_query($db_link, $sql_anweisung);
                    while($datenzeile = mysqli_fetch_assoc($ergebnismenge))
                    {
                        $id = $datenzeile['id'];
                        $produktname = $datenzeile['produkt_name'];
                        $bild = $datenzeile['bild'];
                        $preis = $datenzeile['preis'];

                        echo"<form name=\"\" action=\"\" method=\"POST\">";
                            echo"<div class=\"bsp-ding\">";
                                echo"<input type=\"hidden\" name=\"id\" value=\"$id\">";
                                echo"<input type=\"hidden\" name=\"produktname\" value=\"$produktname\">";
                                echo"<input type=\"hidden\" name=\"preis\" value=\"$preis\">";
                                echo"<div class=\"name\">$produktname</div>";
                                echo"<div class=\"bild\" name=\"bild\"><img src=\"$bild\"/></div>";
                                echo"<div class=\"preis\">$preis</div>";
                                echo"<input type=\"submit\" class=\"hinzufuegen-button\" name=\"hinzufuegen\" value=\"Hinzufügen\">";
                            echo"</div>";   
                        echo"</form>";
                    }
                }

                if (isset($_POST["getraenke-button"]))
                {
                    $db_link = mysqli_connect("localhost", "root", "", "mcdonalds");
                    mysqli_set_charset($db_link, "utf8");
                    $sql_anweisung = "SELECT id, produkt_name, bild, preis FROM tbl_getraenke";

                    $ergebnismenge = mysqli_query($db_link, $sql_anweisung);
                    while($datenzeile = mysqli_fetch_assoc($ergebnismenge))
                    {
                        $id = $datenzeile['id'];
                        $produktname = $datenzeile['produkt_name'];
                        $bild = $datenzeile['bild'];
                        $preis = $datenzeile['preis'];

                        echo"<form name=\"\" action=\"\" method=\"POST\">";
                            echo"<div class=\"bsp-ding\">";
                                echo"<input type=\"hidden\" name=\"id\" value=\"$id\">";
                                echo"<input type=\"hidden\" name=\"produktname\" value=\"$produktname\">";
                                echo"<input type=\"hidden\" name=\"preis\" value=\"$preis\">";
                                echo"<div class=\"name\">$produktname</div>";
                                echo"<div class=\"bild\" name=\"bild\"><img src=\"$bild\"/></div>";
                                echo"<div class=\"preis\">$preis</div>";
                                echo"<input type=\"submit\" class=\"hinzufuegen-button\" name=\"hinzufuegen\" value=\"Hinzufügen\">";
                            echo"</div>";   
                        echo"</form>";
                    }
                }


                
                if (isset($_POST["desert-button"]))
                {
                    $db_link = mysqli_connect("localhost", "root", "", "mcdonalds");
                    mysqli_set_charset($db_link, "utf8");
                    $sql_anweisung = "SELECT id, produkt_name, bild, preis FROM tbl_desert";

                    $ergebnismenge = mysqli_query($db_link, $sql_anweisung);
                    while($datenzeile = mysqli_fetch_assoc($ergebnismenge))
                    {

                        
                        $id = $datenzeile['id'];
                        $produktname = $datenzeile['produkt_name'];
                        $bild = $datenzeile['bild'];
                        $preis = $datenzeile['preis'];

                        echo"<form name=\"\" action=\"\" method=\"POST\">";
                            echo"<div class=\"bsp-ding\">";
                                echo"<input type=\"hidden\" name=\"id\" value=\"$id\">";
                                echo"<input type=\"hidden\" name=\"produktname\" value=\"$produktname\">";
                                echo"<input type=\"hidden\" name=\"preis\" value=\"$preis\">";
                                echo"<div class=\"name\">$produktname</div>";
                                echo"<div class=\"bild\" name=\"bild\"><img src=\"$bild\"/></div>";
                                echo"<div class=\"preis\">$preis</div>";
                                echo"<input type=\"submit\" class=\"hinzufuegen-button\" name=\"hinzufuegen\" value=\"Hinzufügen\">";
                            echo"</div>";   
                        echo"</form>";
                    }   
                }

                if (isset($_POST["hinzufuegen"]))
                {
                    if(isset($_SESSION['username']))
                    {
                        array_push($_SESSION['warenkorb'],($_POST['id']),($_POST['produktname']),($_POST['preis']));
                        echo"<div class=\"hinzugefueged\">Dein Artikel wurde Erfolgreich zum Warenkorb hinzugefügt</div>";
                    }
                    else
                    {
                        echo"Logge dich bitte zuerst ein";
                    }
                }

                

                ?>
            </div>
        </div>

        <details>
            <summary>Warenkorb Ansehen</summary>
            <div class="innerclass">
                <?php 
                    if(isset($_SESSION['username']))
                    { 
                    ?>
                        <table class="table" border=1px>
                        <tr>
                            <th class="one">Name</th>
                            <th class="two">Preis</th>
                        </tr>
                                                                        
                        <?php

                        for($i = 0 ; $i < count($_SESSION['warenkorb']) ; $i++) 
                        {
                            echo '<tr>';
                            $i++;
                            echo '<td>'.$_SESSION['warenkorb'][$i].'</td>';
                            $i++;
                            echo '<td>'.$_SESSION['warenkorb'][$i].'</td>';
                            echo '</tr>';
                        }   
                    }
                    else
                    {
                        echo"<div class=\"first-login\">Logge dich bitte zuerst ein, damit du die Warenkorb Funktion nutzen kannst</div>";
                    }
                        ?>
                        
                    
                </table>
            </div>
        </details>
    </main>
    <footer>
        <div class="footer">

        </div>
    </footer>
</body>
</html>