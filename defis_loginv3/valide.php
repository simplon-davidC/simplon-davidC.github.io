<?php
/**
 * Created by IntelliJ IDEA.
 * User: David
 * Date: 20/10/2016
 * Time: 21:55
 */
// vérification que les valeurs existent
if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmation'])){
    // Si le mot de passe et le mdp de confirmation sont identiques
    if($_POST['password'] == $_POST['confirmation']){
        // Si le mail n'est pas remplit
        if(empty($_POST['email'])){
            // On redirige vers le formulaire avec un message d'erreur spécifique
            header('location:creation_compte.php?noMail');
            // Sinon si le mdp et la confirmation contiennent plus de 4 caractères
        }elseif(strlen($_POST['password']) > 4 && strlen($_POST['confirmation']) > 4){
            //On démarre une nouvelle session
            session_start();
            $email = $_POST['email'];
            // on attribut une nouvelle session à l'email de l'utilisateur
            $_SESSION['user'] = $email;
            // On crée une variable qui indiquera à l'utilisateur qu'un email lui a été envoyé.
            $loginPass = "Votre compte a bien été créé, un mail a été envoyé à ";
        }else{
            // Sinon on redirige vers le formulaire en spécifiant que les mdp et confirmation n'ont pas assez de caractères
            header('location:creation_compte.php?lenError=1');
        }
    }else{
        // Sinon le mail et la confirmation ne sont pas identiques, on redirige vers le formulaire avec un message d'erreur ciblé
        header('location:creation_compte.php?registrationFalse=1');
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Confirmation inscription</title>
    <link rel="stylesheet" href="style.css" media="screen">
</head>
<body>
<div class='nouveau'>
    <?php
    echo $loginPass.$_POST['email'];
    ?>
</div>
<div class="deconnexion">
    <a href="creation_compte.php?seeYou=1">Retour</a>
</div>
</body>
</html>