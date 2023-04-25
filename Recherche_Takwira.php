<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css1/style_rechercheTakwira.css">
    <link rel="stylesheet" href="./css1/style_sidebar_clientSide.css">
    
</head>
    <body>
        <div class="conatiner">
            <div class="row" >
                <?php
             require_once "sidebar_clientSide.php"
            ?>
            <div class="col-11">
            <section id="recherche_takwira">
                <div class="row">
                    <div class="col-3">
                        <img src="./assets/new-logo.png" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 w-75" style="background-color : white ; font-weight:600 ; font-size : 1.20rem ; border-radius :20px ; margin-left : 4%; ">
                    <p style="margin-top :1%"> Veuillez ajouter le date , le temps et la gouvernorat ou vous etes disponible <br> et s'il ya une disponibilité de rejoindre une Takwira , vous sera notifié </p>
                </div>   
                </div>
                <br><br>
                <div class="row">
                    <div class="form_recherche">
                        <br>
                        <div class="col-lg-12 text-center">
                            <form action="" method=POST >
                                <p><input type="text" name="cin" id="cin" placeholder="Cin"></p>
                                <p><input type="text" name="name" id="name" placeholder="Name"></p>
                                <p><input type="text" name="prenom" id="prenom" placeholder="Prenom"></p>
                                <p><input type="date" name="dd" id="dd" placeholder="Date de disponibilite"></p>
                                <p><input type="text" name="hd" id="hd" placeholder="l'heure de diposibilite"></p>
                                <p><input type="text" name="gv" id="gv" placeholder="Gouvernorat"></p>
                                <p><textarea style="border-top-right-radius: 15px ; border-top-left-radius: 15px; height : 4.2rem; width : 17rem;" rows="3" placeholder="Anything to say ?"></textarea>
                                <div class="btns">
                                    <input type="submit" value="Confirmer">
                                    <input type="reset" value="Annuler">
                                </div>
                            <br><br>
                            </form>
                        </div>  
                    </div>
                </div>
        </section>
        </div>
    </body>
</html>