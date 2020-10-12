<?php // add-vehicle.php

// Inclusion du header de la page
require_once(__DIR__ . '/partials/header.php');

// 1. Déclaration de variables
$brand = $model = $color = $registration = null;

// 2. Traitement POST du Formulaire, | Si $_POST n'est pas vide...
// print_r($_POST);
if (!empty($_POST)){ // /!\ ETAPE IMPORTANTE /!\Vérifier que le formulaire a été soumis

    // 3a.  Affectation des variables
    // Récupération des données saisies dans le formulaire.
   // $brand = $_POST['brand'];
    //$model = $_POST['model'];
    //$color = $_POST['color'];
    //$registration = $_POST['registration'];

    // 3b. Au lieu de faire une affectation manuel,
    // Vous pouvez automatiser la création des variable dynamique:
    //-------------------------------------------------------
    // création dynamique des variables en PHP {BONUS}
    // https: www.php.net/manual/fr/language.variables.variable.php

    foreach($_POST as $cle =>$valeur){
       // var_dump($cle);
        //var_dump($valeur);
        $$cle = $valeur;
    }
    //var_dump($brand);var_dump($model);var_dump($color);var_dump($registration);

    // 4. Vérification des données saisies
    $errors =[]; // Création d'un tableau pour stocker les erreurs
    if(empty($brand)){
        $errors['brand'] = "Vous avez oublié de saisir la marque du véhicule";
    }
    if(strlen($brand) >80){
        $errors['brand'] = "Pas plus de 80 caractères.";
    }
    if(empty($model)){
        $errors['model'] = "Vous avez oublié de saisir la modèle du véhicule";
    }
    if(empty($color)){
        $errors['color'] = "Vous avez oublié de saisir la couleur du véhicule";
    }
    if(empty($brand)){
        $errors['registration'] = "Vous avez oublié de saisir l'immatriculation du véhicule";
    }
    echo '<pre>';
    print_r($errors);
    echo '</pre>';

    // 5. Après les vérifications, je vérifie s'il y a des erreurs dans le tableau
    if(empty($errors)) {

        // Dans cette condition, le tableau est vide. Pas d'erreurs...
        // Insertion dans la BDD
        $idVehicle = addVehicle($brand, $model, $color, $registration);
        if ($idVehicle){
            // TODO redirection...
            redirection('manage-vehicle.php');
        }

    }else{

        // Le tableau n'est pas vide. Il y a des erreurs.
        // Affichage des erreurs à l'utilisateur
        $message = '
        <div class="alert alert-danger">
            Attention, veuillez bien remplir vos champs
        </div>
        ';
    } // if(empty($errors))
}// if(!empty($_POST))

?>
    <!-- Contenu de la page -->
    <div class="p-3 mx-auto text-center">
        <h1 class="display-4">Ajouter un Véhicule</h1>
    </div>

    <div class="py-5 bg-light">
        <div class="container ">
            <div class="row">
                <div class="col">
                   <div class="card shadow-sm p-4">

                       <?= $message ?> <!--egal au dans php echo $message;  -->

                       <form method="post" action="">

                           <!--brand-->
                           <div class="form-group">
                               <label for="">Marqe du véhicule</label>
                               <input type="text" name="brand"
                                        placeholder="Saisissez la marque du véhicule."
                                        class="form-control <?= isset($errors['brand']) ? 'is-invalid' : '' ?>">
                               <small class="form-text text-muted">
                                   Example: BMW, Mercedes, Audi, Renault,...
                               </small>
                               <div class="invalid-feedback">
                                <?= isset($errors['brand']) ?  $errors['brand'] : '' ?>                                  </div>
                           </div>

                           <!--model-->
                           <div class="form-group">
                               <label for="">Modèle du véhicule</label>
                               <input type="text" name="model"
                                      placeholder="Saisissez le modèle du véhicule."
                                      class="form-control <?= isset($errors['model']) ? 'is-invalid' : '' ?>">
                               <small class="form-text text-muted">
                                   Example: GLA, C200, A8, ...
                               </small>
                               <div class="invalid-feedback">
                                   <?= isset($errors['model']) ?  $errors['model'] : '' ?>                               </div>
                           </div>
                           <!--color-->
                           <div class="form-group">
                               <label for="">Couleur du véhicule</label>
                               <input type="text" name="color"
                                      placeholder="Saisissez le couleur du véhicule."
                                      class="form-control <?= isset($errors['color']) ? 'is-invalid' : '' ?>">
                               <small class="form-text text-muted">
                                   Example: rouge, noir, blanc, ...
                               </small>
                               <div class="invalid-feedback">
                                   <?= isset($errors['color']) ?  $errors['color'] : '' ?>                                  </div>
                           </div>
                           <!--registration-->
                           <div class="form-group">
                               <label for="">Immatriculation du véhicule</label>
                               <input type="text" name="registration"
                                      placeholder="Saisissez la plaque d'immatriculation du véhicule."
                                      class="form-control <?= isset($errors['registration']) ? 'is-invalid' : '' ?>">
                               <small class="form-text text-muted">
                                   Example: DJ-445-TY, ...
                               </small>
                               <div class="invalid-feedback">
                                   <?= isset($errors['registration']) ?  $errors['registration'] : '' ?>
                               </div>
                           </div>

                           <!--submit-->
                           <button class="btn btn-block btn-dark">
                               <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                   <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                   <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                               </svg>
                               Ajouter le véhicule
                           </button>

                       </form>
                   </div> <!-- / .card-->
                </div><!-- / .col-->
            </div><!-- / .row-->
        </div><!-- / .container-->
    </div><!-- / .bg-light-->


<?php

// Inclusion du footer de la page
require_once(__DIR__ . '/partials/footer.php');

?>