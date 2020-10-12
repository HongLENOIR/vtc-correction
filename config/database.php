<?php //database.php
try{
    $db = new PDO( 'mysql:host=localhost; dbname=vtc_correction', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $exception) {
    print "Erreur de connexion : " .$exception->getMessage() ."<br>";
    die();
}