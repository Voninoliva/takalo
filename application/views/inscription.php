<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/inscription.css'); ?>">
    <title>Document</title>

</head>
<body>
    <div class="content">

    <div class="inscription">
        <div class="form-text">Créer votre compte</div>
        <div class="form-saisie">
            <form method="post" action="<?php echo site_url('Client/inscription') ?>">
                <span>Nom</span>
                <input type="text" name="nom" placeholder="Entrez votre nom">
                <span>Prénom</span>
                <input type="text" name="prenom" placeholder="Entrez votre prénom">
                <span>Adresse</span>
                <input type="text" name="adresse" placeholder="Entrez votre adresse">
                <span>Contact</span>
                <input type="text" name="adresse" placeholder="Contact">
                <span>Adresse E-mail</span>
                <input type="text" name="email" placeholder="Entrez votre adresse e-mail">
                <span>Mot de passe</span>
                <input type="password" name="mdp" placeholder="Entrez votre mot de passe">
                <input type="submit" name ="btn" value="S'inscrire" class="btnInscript">
                Vous êtes inscris ? <a href="<?php echo site_url('LoginClient') ?>"> Connectez-vous</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>