<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css1/style_clientSide.css">
    <link rel="stylesheet" href="./css1/style_sidebar_clientSide.css">
    
</head>
<html>
    <body>
        <div class="conatiner">
            <div class="row" >
                <?php
                // faire l'appel du sidebar
                require_once "sidebar_clientSide.php"
                ?>
            <div class="col-11">
                <section id="profil">
                    <div class="row">
                        <div class="col-3">
                        <img src="./assets/new-logo.png" >
                    </div>
                    </div>
                    <br><br><br>
                    <div class="row">
                        <div class="col-lg-7 col-md-12"> 
                            <div class="list-group">
                                <!-- un bloc de bienvenue -->
                                <span class="list-group-item frst">Bienvenue, <span style="color:#04B400;">Chér XxxxXXx</span> <br>
                                    J'espère que vous étes en forme et bonne santé pour prochaine match</span><br><br>
                                <a href="Reserver_terrain.php" class="list-group-item list-group-item-action text-center" ><p style="margin-top:0.6rem;">Réserver terrain</p></a><br>
                                <a href="Recherche_takwira.php" class="list-group-item list-group-item-action text-center" ><p>Recherche Takwira</p></a><br>
                                <a href="Historique_reservation.php" class="list-group-item list-group-item-action text-center" ><p>Historique des reservations</p></a><br>                
                            </div>
                        </div>
                        <br><br>
                            <div class="col-lg-5 col-sm-12 text-center">
                                <select>
                                    <option class="text-center">Cette mois </option>
                                </select>
                                <br><br><br>
                                <!-- creation d'un block contient l'historique de reservation statique -->
                                <div class="dates text-center" >
                                    <ul>
                                        <br><br>
                                        <li>10/04/2023</li>
                                        <br>
                                        <li>13/04/2023</li>
                                        <br>
                                        <li>16/04/2023</li>
                                        <br>
                                        <li>26/04/2023</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>
    </body>
</html>
