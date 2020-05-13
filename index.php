<!--Entete de début du site - menu bleu -->
<?php include_once("includes/entete_debut.php"); ?>

<!-- PROGRAMMER ICI -->

<div class="section container">
    <div class="row">
        <div class="col l3 m2 s12"></div>
        <div class="col l6 m8 s12">
            <form action="" method="POST">
                <div class="card-panel z-depth-5">
                    <h2 class="center" style="margin-top: 0;">Connexion</h2>
                    <div class="input-field">
                        <i class="material-icons prefix">person</i>
                        <input type="text" placeholder="email ou nom d'utilisateur" name="login_email" focus class="validate">
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">lock</i>
                        <input type="password" placeholder="mot de passe" name="login_password" class="validate">
                    </div>
                    <p>
                        <label>
                            <input type="checkbox" name="login_checkbox">
                            <span>Se souvenir de moi</span>
                        </label>
                    </p>
                    <input type="submit" name="formlogin" value="Se connecter" class="btn blue left col s12">
                    <p class="left">Ëtes-vous nouveau? <a href="inscription.php" class="blue-text">Inscripton</a></p>
                    <p class="right"><a class="blue-text" href="#">Mot de passe oublié?</a></p>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
        <div class="col l3 m2 s12"></div>
    </div>
</div>

<!-- Fin d'un fichier incluant les sources JS de materialize -->

<?php include_once("includes/fin_fichier.php"); ?>
