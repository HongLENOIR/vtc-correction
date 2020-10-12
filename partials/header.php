<?php

// Récupérations de nos fonctions globales
require_once(__DIR__ . '/../functions/global.php');

// Connexion à la BDD
require_once(__DIR__ . '/../config/database.php');

// Récupérations de nos fonctions
require_once(__DIR__ . '/../functions/driver.php');
require_once(__DIR__ . '/../functions/vehicle.php');
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Gestion VTC</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Gestion VTC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link" href="manage-vehicle.php">Gestion des véhicules</a>
            <a class="nav-link" href="manage-driver.php">Gestion des chauffeurs</a>
            <a class="nav-link" href="vehicle-assignment.php">Attribution des véhicules</a>
        </div>
    </div>
</nav>

