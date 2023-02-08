<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titre; ?></title>
</head>
<body>
    <h1><?php echo $couleur; ?></h1>
    <form action=<?php echo site_url('connection/inscription'); ?> method="get">
    <input type="text" name="nom" placeholder=" nom">
    <input type="text" name="prenom" placeholder="prenom">
    <input type="password" name="mdp" placeholder="mdp">
    <input type="email" name="mail" placeholder="email">
    <input type="submit" value="s'inscrire">
    </form>
</body>
</html>