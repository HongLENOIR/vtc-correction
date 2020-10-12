<?php

/*
 * ici, nous aurons les fonctions utiles à notre projet
 * utilisable sur toutes les pages
 * */

function redirection($page){
    header('location: ' . $page);
}

// Permet de debugger
function debug($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}