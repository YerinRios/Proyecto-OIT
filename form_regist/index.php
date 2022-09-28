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
        

        <form class="form_class" action="registro.php" name="registro" method="POST" >
            <h1 class="title">Formulario de registro</h1>
        
            <div>
                <label for="name">Nombres</label>
                <input type="text" name="nombre" id="nombre" required >
            </div>
        
            <div>       
                <label for="user">Usuario:</label>
                <input type="text" name="user" id="user" required>
            </div>     
        
            <div>
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" required>
            </div>

            <div>
                <label for="nombre1">Primer Nombre</label>
                <input type="text" name="nombre1" id="nombre1" required >
            </div>

            <div>
                <label for="nombre2">Segundo Nombre</label>
                <input type="text" name="nombre2" id="nombre2" required >
            </div>

            <div>
                <label for="apellido1">Primer Apellido</label>
                <input type="text" name="apellido1" id="apellido1" required >
            </div>

            <div>
                <label for="apellido2">Segundo Apellido</label>
                <input type="text" name="apellido2" id="apellido2" required >
            </div>

            <div>
                <label for="birthday">Fecha de Nacimiento</label>
                <input type="date" name="birthday" id="birthday" required >
            </div>

            <div>
                <label for="edad">Edad</label>
                <input type="number" name="edad" id="edad" required >
            </div>

            <div>
                <label for="sexo">sexo</label>
                <input type="text" name="sexo" id="sexo" required >
            </div>

            <div>
                <label for="tipo_documento">Tipo de Documento </label>
                <input type="text" name="tipo_documento" id="tipo_documento" required >
            </div>

            <div>
                <label for="numero_documento">Numero de Documento</label>
                <input type="number" name="numero_documento" id="numero_documento" required >
            </div>

            <div>
                <label for="ciudad_expedicion">Ciudad de Expedición</label>
                <input type="text" name="ciudad_expedicion" id="ciudad_expedicion" required >
            </div>

            <div>
                <label for="pais">Pais</label>
                <input type="text" name="pais" id="pais" required >
            </div>

            <div>
                <label for="departamento">Departamento</label>
                <input type="text" name="departamento" id="departamento" required >
            </div>

            <div>
                <label for="ciudad">Ciudad</label>
                <input type="text" name="ciudad" id="ciudad" required >
            </div>

            <div>
                <label for="barrio">Barrio</label>
                <input type="text" name="barrio" id="barrio" required >
            </div>

            <div>
                <label for="telefono">Telefono</label>
                <input type="number" name="telefono" id="telefono" required >
            </div>

            <div>
                <label for="celular">Celular</label>
                <input type="number" name="celular" id="celular" required >
            </div>

            <div>
                <label for="correo">Correo Electronico</label>
                <input type="email" name="correo" id="correo" required >
            </div>

            <div>
                <label for="nivel_academico">Nivel Academico</label>
                <input type="tetx" name="nivel_academico" id="nivel_academico" required >
            </div>

            <div>
                <label for="profesion">Profesion</label>
                <input type="tetx" name="profesion" id="profesion" required >
            </div>

            <div>
                <label for="role">Role</label>
                <input type="tetx" name="role" id="role" required >
            </div>

            <div>
                <label for="fecha_registro">Fecha de Registro</label>
                <input type="date" name="fecha_registro" id="fecha_registro" required >
            </div>

            <div>
                <label for="fecha_activacion">Fecha de Activación</label>
                <input type="date" name="fecha_registro" id="fecha_registro" required >
            </div>

        <div>
            <input type="submit" value="Registrarse" name="enviar" >
            <input type="reset" value="borrar" name="borrar" >
        </div>

        </form>
    </div>

</body>
</html>