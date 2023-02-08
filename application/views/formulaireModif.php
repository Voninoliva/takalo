<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo site_url('user/update');?>" method="post"  enctype="multipart/form-data">
    <input type="text" name="nom" value="<?php echo $nom; ?>">
    <input type="hidden" name="idOb" value="<?php echo $idObjet; ?>">
    <input type="text" name="descri"    value="<?php echo $descri; ?>">
    <input type="text" name="prix" value="<?php echo $prixEstimatif; ?>">
    <input type="hidden" name="a0" value="<?php echo $photo; ?>">
    <input type="submit" value="Modifier cet objet">
    </form>
</body>
</html>