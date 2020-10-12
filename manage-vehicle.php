<?php // manage-vehicle.php

// Inclusion du header de la page
require_once(__DIR__ . '/partials/header.php');

?>


    <!-- Contenu de la page -->
    <div class="p-3 mx-auto text-center">
        <h1 class="display-4">Gestion des Véhicules</h1>
    </div>

    <div class="py-5 bg-light">
        <div class="container ">
            <div class="row">
                <div class="col">
                    <h3>
                        Mes Véhicules
                        <a href="add-vehicle.php" class="btn">
                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-patch-plus-fll" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zM8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z"/>
                            </svg>
                        </a>
                    </h3>
                </div>
            </div>
        </div>
    </div>


<?php

// Inclusion du footer de la page
require_once(__DIR__ . '/partials/footer.php');

?>