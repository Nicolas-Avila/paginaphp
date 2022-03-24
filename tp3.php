<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="tp3css.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="todo">
    <form action="tp3.1.php" method="post">
         <label for="nombre">Nombre de la pagina</label>   
         <input id="nombre"type="text" name="titulo" placeholder="ingrese el nombre " required>
         <label for="texto">Titulo de la pagina</label>
         <input id="texto" type="text" name="encabezado" placeholder="ingrese su titulo">
         <label for="colo">Ingrese el color del texto</label>
         <input id="colo"type="color" name="color">
         <label for="text">Texto de la pagina.</label>
         <textarea id="text"name="texto" rows="6" cols="30" placeholder="ingrese su texto"></textarea>
         <input id="boton"type="submit" value="Terminar">
    </form>
</div>
</body>
</html>
