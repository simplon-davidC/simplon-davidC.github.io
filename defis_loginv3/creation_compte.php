<?php
/**
 * Created by IntelliJ IDEA.
 * User: David
 * Date: 20/10/2016
 * Time: 21:54
 */
// Fonction qui affichera le message d'erreur adéquat
function errorMessage(){
    // Si le password et la confirmation ne sont pas identiques
    if(isset($_GET['registrationFalse'])){
        echo '<div class="alert alert-danger" role="alert">Vos mot de passe ne sont pas identiques.</div>';
        // Sinon si la longueur du password et de la confirmation est inférieure à 4 caractères
    } elseif(isset($_GET['lenError'])){
        echo '<div class="alert alert-danger" role="alert">Votre mot de passe doit faire plus de 4 caractères.</div>';
        // Sinon si le mail n'est pas remplit
    } elseif(isset($_GET['noMail'])){
        echo '<div class="alert alert-danger" role="alert">Veuillez indiquer votre adresse de messagerie.</div>';
    }
}
// Fonction qui confirmera à l'utilisateur que son compte a été créé
function ciao(){
    if(isset($_GET['seeYou'])){
        echo '<div class="alert alert-success" role="alert">Votre inscription a bien été prise en compte.</div>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Création compte</title>
    <link rel="stylesheet" href="style.css" media="screen">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<form action="valide.php" method="post" class="form-horizontal">

    <div class ="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Inscription</h1>
                    </div>
                    <?php
                    echo errorMessage();
                    echo ciao();
                    ?>
                    <div class="panel-body">
                        <label>Adresse Email</label>
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        <input type="email" name= "email" placeholder="Email" class="form-control"/></br>

                        <label>Password </label>
                        <span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span>
                        <input type="password" name="password" placeholder="Mot de passe" class="form-control"/></br>

                        <label>Confirmation</label>
                        <span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span>
                        <input type="password" name="confirmation" placeholder="Confirmer votre Mot de passe" class="form-control"/></br>
                        <label>
                            <p><input type="checkbox" required> J'accepte les conditions même si je ne les lis pas.</p>
                            <button type="submit" class="btn btn-default" name="valider">Inscription</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>