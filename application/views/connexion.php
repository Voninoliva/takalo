<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/connexion.css'); ?>">
    <title>Connexion</title>

</head>
<body>
    <div class="connexion">
        <div class="form-saisie">
            <form method="post" action="<?php echo site_url('Client/connexion');?>">
                <span>Adresse E-mail</span>
                <input type="text" name="email" placeholder=" Adresse E-mail" value="Tafita@gmail.com">
                <span>Mot de passe</span>
                <input type="password" name="mdp" placeholder=" Mot de passe" value="root">
                <input type="submit" name ="" value="Se connecter" class="btnConn">
                Êtes-vous inscris ? <a href="LoginClient/inscription">Inscrivez-vous</a>
            </form>
        </div>
    </div>

   <script src="js/login.js"></script>

</body>
</html>