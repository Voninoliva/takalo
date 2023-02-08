<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo base_url('assets/css/fontawesome-free-6.2.1-web/css/all.css'); ?>>
    <link rel="stylesheet" href=<?php echo base_url('assets/css/mystyle.css'); ?>>
    <link rel="stylesheet" href=<?php echo base_url('assets/css/style.css'); ?>>
    <link rel="stylesheet" href=<?php echo base_url('assets/css/bulma/css/bulma.css'); ?>>
    <link rel="stylesheet" href=<?php echo base_url('assets/css/aaastyle.css'); ?>>
    <link rel="stylesheet" href=<?php echo base_url('assets/css/footer.css'); ?>>

    <title>Document</title>
</head>
<body>
<style>
    a{
        display: flex;
    }
</style>
<header class="has-background-danger-dark">
        <nav class="navbar is-transparent is-fixed-top">
            <div class="">
                <div class="">
                    <a href="<?php echo site_url('affichage/seeAll');?>" class="navbar-item">Home</a>
                    <a href="<?php echo site_url('affichage/searchPage');?>" class="navbar-item">recherche multi</a>
                    <a href="#" class="navbar-item">Liste propositions</a>
                </div>
                <div class="">
                    <a href="<?php echo site_url('user/myObj');?>" class="navbar-item">Moi</a>
                    <a href="#" class="navbar-item"><i class="fa-regular fa-bell is-size-5"></i></a>
                    <a href="#" class="navbar-item"><i class="fas fa-gear is-size-5"></i></a>
                </div>
            </div>
        </nav>
    </header>
