<?php // vehicle.php

// FIXME TODO Fonction getVehicles(): Retourne tous les véhicules
function getVehicles(){
    global $db;
    $sql ='SELECT * FROM vehicle';
    $query =$db->prepare($sql);
    $query->execute();
    return $query->fetchAll();
}

// TODO Fonction getVehicleById($id): Retourne une véhicule via son ID

// TODO Fonction addVehicle(...): Insérer une véhicule
function addVehicle($brand, $model, $color,$registration){

    global $db; // Récupération de $db dans l'espace global de PHP
    $query = $db->prepare('INSERT INTO vehicle (brand, model, color, registration)                                        VALUES (:brand, :model, :color, :registration)');
    $query->bindValue(':brand', $brand, PDO:: PARAM_STR);
    $query->bindValue(':model', $model, PDO:: PARAM_STR);
    $query->bindValue(':color', $color, PDO:: PARAM_STR);
    $query->bindValue(':registration', $registration, PDO:: PARAM_STR);

    // Si le véhicule est bien inséré, alors je retourne l'ID sinon je retourne faut.
    return $query->execute() ? $db->lastInsertId() : false;
}

// TODO Fonction updateVehicle(...): Mettre à jour une véhicule
/*function updateVehicle(){
    global $db;
    $query= $db->prepare('UPDATE  vehicle(brand, model, color, registration) SET VALUE(:brand, :model, :color, :registration) WHERE id = :id')
    $query->bindValue(':brand', $brand, PDO:: PARAM_STR);
    $query->bindValue(':model', $model, PDO:: PARAM_STR);
    $query->bindValue(':color', $color, PDO:: PARAM_STR);
    $query->bindValue(':registration', $registration, PDO:: PARAM_STR);
}
*/
// TODO Fonction deleteVehicle(...): Supprimer une véhicule
function deleteVehicule($id){
    global $db;
    $delete = $db->prepare('DELETE FROM vehicle WHERE id = :id');
    $delete->bindValue(':id', $id, PDO::PARAM_INT);
    return $delete ->execute();
}




