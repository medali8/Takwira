
<br>
<section id="LoginSignup">
<div class="conatiner-fluid">
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            
            <p class="text-lg-center text-md-center"><a style="cursor : pointer ;"onclick="hid_function_x()">Connectez-vous</a> ou <a style="cursor : pointer ;" onclick="hid_function_y()">Créez un compte <br> pour Reserver</a></p>
            <img src="assets//terrainFoot.png" class="mx-auto d-block" ><br><br> 
           

        </div>
        <div class="col-lg-6 " id="login">
                    <span class="text-center about2">Bienvenue</span><br>
                    <span>entrez vos information s'il vous avez un compte</span><br><br>
                    <form>
                        <label for="email" class="my-1">Email</label><br>
                        <input type="email" id="email"><br><br>
                        <label for="pwd" class="my-1">Mot de passe</label><br>
                        <input type="password" id="pwd"><br><br>
                        <a href="#">Vous avez oublié votre mot de passe ?</a><br>
                        
                        <input type="checkbox" id="resterco">
                        <label for="resterco" class="rco">Rester connecté</label><br><br>
                        <input type="submit" value="Connexion">
                        <div class="row">
                            <div class="col-5"><hr></div>
                            <div class="col-1 ou">Où</div>
                            <div class="col-5 scndline"><hr></div>
                        </div><br>
                        
                        <button>
                            <div class="row">
                                <div class="col-3">
                                    <img src="assets/icons8-logo-google-48.png">
                                </div>    
                                <div class="col-5 mx-4 my-2">
                                    S'inscrire avec google
                                </div>
                            </div>
                        </button>
                            
                        
                    </form>
            </div>
            <div class="col-lg-6" id="signup" style="display: none;">
                    <span class="text-begin about2">Bienvenue</span><br><br>
                    <span>entrez vos information s'il vous avez un compte</span><br>
                    <form>
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <label for="email" class="my-1">Email</label><br>
                                    <input type="email" id="email" style = "width : 90% ;">
                                </div>
                                <div class="col-6">
                                    <label for="pwd" class="my-1">Mot de passe</label><br>
                                    <input type="password" id="pwd" style = "width : 90% ;"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="name" class="my-1">Nom</label><br>
                                    <input type="text" id="name" style = "width : 90% ;">
                                </div>
                                <div class="col-6">
                                    <label for="cpwd" class="my-1">Verification mot de passe</label><br>
                                    <input type="password" id="cpwd" style = "width : 90% ;"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="prenom" class="my-1">Prenom</label><br>
                                    <input type="text" id="prenom" style = "width : 90% ;">
                                </div>
                                <div class="col-6">
                                    <label for="dte" class="my-1 ">Date de naissance</label><br>
                                    <input type="date" id="dte" style = "width : 90% ;"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="cin" class="my-1">CIN</label><br>
                                    <input type="text" id="cin" style = "width : 90% ;">
                                </div>
                                <div class="col-6">
                                    <label for="gv" class="my-1">Gouverorat</label><br>
                                    <input type="text" id="gv" style = "width : 90% ;"><br><br>
                                </div>
                            </div>
                        </div>
                        <a href="#">Vous avez oublié votre mot de passe ?</a><br><br>
                        <input type="submit" class="register" value="Connexion" onclick="add()" >
                        <div class="row">
                            <div class="col-5"><hr></div>
                            <div class="col-1 ou">Où</div>
                            <div class="col-5 scndline"><hr></div>
                        </div><br>
                        
                        <button class="ggl">
                            <div class="row">
                                <div class="col-3">
                                    <img src="assets/icons8-logo-google-48.png">
                                </div>    
                                <div class="col-5 mx-4 my-2">
                                    S'inscrire avec google
                                </div>
                            </div>
                        </button>
                    </form>
                </div>
    </div>
</div>
<br><br><br><br>



</section>
<script>
function hid_function_x(){
    var div_login=document.getElementById("login");
    var div_signup=document.getElementById("signup");
    div_login.style.display="block";
    div_signup.style.display="none";
}
function hid_function_y(){
    var div_login=document.getElementById("login");
    var div_signup=document.getElementById("signup");
    div_login.style.display="none";
    div_signup.style.display="block";
}
</script>