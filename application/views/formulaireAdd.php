<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo site_url('user/addObj');?>" method="post"  enctype="multipart/form-data">
    <input type="text" name="nom" placeholder="nom">
    <input type="text" name="descri" placeholder="descri">
    <input type="number" name="prix" placeholder="Ar TTC">
    <input type="file" name="a0">
    <input type="submit" value="Ajouter cet objet">
    </form>
</body>
</html>