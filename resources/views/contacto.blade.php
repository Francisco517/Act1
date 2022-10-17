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
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/inforeciver" method="POST">
            @csrf 

            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" value = "{{old ('name')}}">
            @error('name')
                <i>{{ $message }}</i>
            @enderror

            <label for="email"><br> Correo: </label>
            <input type="email" id="email" name="email" value = "{{old ('name')}}">
            @error('email')
                <i>{{ $message }}</i>
            @enderror

            <br><label for="coment">Comentario</label><br>
            <textarea name="comentario" rows="10" cols="40">
              {{old ('comentario')}}
            </textarea><br>
            @error('comentario')
                <i>{{ $message }}</i>
            @enderror
            <br>
            <input type="submit" value="Submit">
</body>
</html>