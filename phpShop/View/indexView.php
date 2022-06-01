<?PHP


namespace IndexView;


class View
{

    public function head()
    {
        return'<!DOCTYPE html>
                <html lang="de">
                    <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <link rel="stylesheet" href="css/style.css">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>McDonalds | Home</title>
                </head>';
    }

    public function header()
    {
        return'<header>
                 <nav class="navbar">
                    <ul class="nav-ul">
                        <li class="nav-item"></li>
                        <li class="nav-item"><img src="img/Mcdonalds-Logo-PNG-File.png" class="mcimage" style="width:50px;"></li>
                        <li class="nav-item"> </li>
                    </ul>
                </nav>
            </header>';
    }


    public function leftSide()
    {
        return'     <div class="bestellmenu">
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
                        </div>';
    }

    public function rightSide()
    {
        return'     <div class="rechtsauswahl">

                        <form action="" method="POST">
                            <div class="bsp-ding">
                                <input type="hidden" name="id" value="1">
                                <input type="hidden" name="produktname" value="$produktname">
                                <input type="hidden" name="preis" value="$preis">
                                <div class="name">$produktname</div>
                                <div class="bild" name="bild\"><img src="$bild"/></div>
                                <div class="preis">$preis</div>
                                <input type="submit" class="hinzufuegen-button" name="hinzufuegen" value="Hinzufügen">
                            </div>
                        </form>     


                    </div>
                </div>';
      
    }



    public function footer()
    {
        return'<footer>

               </footer>
            </body>
        </html>';
    }

}







?>