<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="http://localhost:3000/form_regist/css/estilo.css">
</head>
<body>
    
    <div class="container">
        <h1 class="title">Formulario de registro</h1>

        <form class="form_class" action="registro.php" name="registro" method="POST" >
        
            <div>
                <label for="name">Nombres y apellidos</label>
                <input type="text" name="nombre" id="nombre" required >
            </div>
        
            <div>       
                <label for="user">Nombre usuario:</label>
                <input type="text" name="user" id="user" required>
            </div>     
        
            <div>
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" required>
            </div>

        <div>
            <input type="submit" value="Registrarse" name="enviar" >
            <input type="reset" value="borrar" name="borrar" >
        </div>

        </form>
    </div>

</body>
</html>