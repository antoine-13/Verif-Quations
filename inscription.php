<!--Entete de début du site - menu bleu -->
<?php include_once("includes/entete_debut.php"); ?>

<!-- PROGRAMMER ICI -->
<div class="section container">
    <div class="row">
        <div class="col l3 m2 s12"></div>
        <div class="col l6 m8 s12">
            <form action="" method="POST">
                <div class="card-panel z-depth-5">
                    <h2 class="center" style="margin-top: 0;">Inscription</h2>
                    <div class="input-field">
                        <i class="material-icons prefix">person</i>
                        <input type="text" placeholder="Identifiant" name="register_email" focus class="validate">
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">lock</i>
                        <input type="password" placeholder="Mot de passe" name="register_password" class="validate">
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">lock</i>
                        <input type="password" placeholder="Confirmation de mot de passe " name="register_password" class="validate">
                    </div>

                    <input type="submit" name="formregister" value="Inscription" class="btn blue left col s12">
                    <p class="left">Dèjà membre? <a href="./index.php" class="blue-text">Se connecter</a></p>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
        <div class="col l3 m2 s12"></div>
    </div>
</div>

<!-- Fin d'un fichier incluant les sources JS de materialize -->
<?php include_once("includes/fin_fichier.php"); ?>
