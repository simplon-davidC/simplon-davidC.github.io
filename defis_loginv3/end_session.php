<?php
// On rentre la session existante
session_start();
// destroy détruit les valeurs existante dans cette session lors de la déconnexion
session_destroy();
// On redirige l'utilisateur sur la page d'accueil une fois la session terminée
header('location:creation_compte.php?seeYou=1');
?>