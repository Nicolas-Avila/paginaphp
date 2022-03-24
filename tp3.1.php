<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="tp3css.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    echo '<title>' .$_POST["titulo"]. '</title>';
    ?>
    <style type="text/css">
    *{
        color:<?php echo $_POST["color"];?>;
    }
     </style>    
</head>
<body>
    <?php
        echo '<h1 >'. $_POST['encabezado']. '</h1>';
        echo '<p >' . $_POST["texto"]. '<p>';    
        
    ?>
    </body>
</html>