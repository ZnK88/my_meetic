<?php
session_start();
include ('../controller/profil.class.php');
if(!isset($_SESSION['user']))
{
    header('Location: login.php');
}
else
{
    $profil = new profil();
}
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/parametre.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="js/parametre.js"></script>
    <title>My_meetic</title>
</head>
<body>
    <div id="user_profil">
    <p>Bonjour <?php print $_SESSION['prenom'] ?></p>
    <button id="deconnexion">deconnexion</button>
    <a href="./profil.php">Accueil</a>
    <a href="./parametre.php">Parametre</a>


    </div>
    <div id="edition">
        <h1>Parametre</h1>
        <div id="edit">
            <p>E-mail:</p>
            <input type="mail" name="email" id="email">
            <p>saisissez a nouveau:</p>
            <input type="mail" name="email" id="emailverif">
            <button id="updatemail">Update</button>
            <p>Mot de passe:</p>
            <input type="password" name="Motdepasse" id="Motdepasse">
            <p>saisissez a nouveau:</p>
            <input type="password" name="Motdepasse" id="Motdepasseverif">
            <button id="updatepassword">Update</button>
            <button id="disable">Désactivé votre compte</button>
        </div>
        
    </div>
</body>
</html>
