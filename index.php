<?php 
include_once 'class/character.php';
include_once 'class/orc.php';
include_once 'class/stuff.php';
$character1 = new character(1);
$character2 = new character(2);
$orc1 = new orc(1);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Programmation orienté objet</title>
    </head>
    <body>
        <h1>Titre explicite</h1>
        <p><?= $character1->chat('Hello world !'); ?></p>
        <p><?= $character2->chat('La ferme !') ?></p>
       
        <?php 
            
        ?>
    </body>
</html>
