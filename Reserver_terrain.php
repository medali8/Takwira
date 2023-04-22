<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css1/style_reserverTerrain.css">
    <link rel="stylesheet" href="./css1/style_sidebar_clientSide.css">
    
</head>

        <div class="conatiner">
            <div class="row" >
                <?php
             require_once "sidebar_clientSide.php"
            ?>
            <div class="col-11">
        <section id="reserver_terrain">
                <div class="row">
                    <div class="col-3">
                        <img src="./assets/new-logo.png" >
                    </div>
                </div>
                
                <div class="row">
                    <div class="text-center">
                        <div class="col-lg-12 w-75" style="background-color : white ; font-weight:600 ; font-size : 1.20rem ; border-radius :10px ; margin-left : 10%; ">
                           <p style="margin-top :1%"> Au cas où il vous manquerait des joueurs, cochez simplement "je cherche un joueur" <br> vous serez notifié si quelqu'un veut rejoindre </p>
                        </div>   
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="form_reservation">
                        <br>
                        <div class="col-lg-12 text-center">
                                <form action="" method=POST >
                                    <p><input type="text" name="cin" id="cin" placeholder="Cin"></p>
                                    <p><input type="text" name="name" id="name" placeholder="Name"></p>
                                    <p><input type="text" name="prenom" id="prenom" placeholder="Prenom"></p>
                                    <p><select>
                                        <option disabled selected>Choisissez le terrain </option>
                                        <!-- lehne bch nfitchiw mel database el terrainette eli mawjoudin  -->
                                        <option>Terrain Gaddour</option>
                                        <option>Terrain ben jaafer</option>
                                    </select>
                                    </p>
                                    <p><input type="text" name="dr" id="dr" placeholder="Date de reservation"></p>
                                    <p><input type="text" name="hr" id="hr" placeholder="l'heure de reservation"></p>
                                    <p><input type="number" name="nbp" id="nbp" placeholder="Nombre de personne"><br></p>
                                    <p style="color : white ;"><input type="checkbox">&nbsp;&nbsp; Je cherche un joueur</p>
                                    <p><input type="textarea" placeholder="Anything to say ?"></p>
                                    <div class="btns">
                                        <input type="submit" value="Confirmer">
                                        <input type="reset" value="reinitialiser">
                                    </div>
                                    <br><br>
                                </form>
                        </div>




                        
                    </div>
                </div>