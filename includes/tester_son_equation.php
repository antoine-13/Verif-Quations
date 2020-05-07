<!--Entete de début du site - menu bleu -->
<?php include_once("entete_debut.php"); ?>



<!-- PROGRAMMER ICI -->
<main>
    <div class="row main_container">
        <form method = "post">
            <div class="col s6 main_box">
                <div class="row  z-depth-3 equation">
                    <div class="row titre">
                        <span class="main_text">Entrez votre équation à résoudre :</span>
                    </div>
                    <div class="row ">
                        <div class="input-field col s6">
                            <input id="equation" type="text" class="validate" name="equation"> 
                            <label for="equation">Equation</label>
                        </div>
                    </div>
                </div>
                
                <div class="row  z-depth-3 reponse">
                    <div class="row ">
                        <span class="main_text">Ma réponse :</span>
                    </div>
                    <div class="row entree">
                        
                        
                    </div>
                    <div class="row ">
                        <span>Ajoutez une ligne</span>
                        <a id="add" href="#!" class="btn-floating btn-small waves-effect waves-circle waves-light">
                            <i class="material-icons">add</i>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col s3 offset-s9">
                            <button class="btn waves-effect waves-light" type="submit" name="submit">Verifier
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </div>
        </form>

        </div>
        <div class="col s6 z-depth-3 solution">
            <?php
                if(isset($_POST["submit"])){
                    echo "Votre équation est : ";
                    echo $_POST["equation"];?> </br> <?php
                    $number = 1;
                    while(isset($_POST[$number])){
                        echo $_POST[$number]; ?></br> <?php
                        $number = $number + 1;
                    }
                }
            ?>
            
        </div>


    </div>
</main>




<!-- Fin d'un fichier incluant les sources JS de materialize -->
<?php include_once("fin_fichier.php"); ?>