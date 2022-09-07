<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>

</head>
<body>
<li class="active"> <a href="landingpage">Home</a> </li>

    <form action="" method="get">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" value = {{$name}}>

            <label for="email"><br> Correo: </label>
            <input type="email" id="email" name="email" value = {{$email}}><br>

            <label for="coment">Comentario</label><br>
            <textarea name="comentario" rows="10" cols="40"></textarea><br>

            <input type="submit" value="Submit">
</body>
</html>