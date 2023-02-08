<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php  echo site_url("welcome/verify");?>" method="get">
        <input type="text" name="nom">
        <input type="password" name="mdp">
        <input type="submit" value="envoyer">
    </form>
</body>
</html>