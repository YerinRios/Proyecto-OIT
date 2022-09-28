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
        
            <div class="input-group">
                <label class="label" for="name">Nombres</label>
                <input type="text" name="nombre" id="nombre" required >
            </div>
        
            <div class="input-group">       
                <label class="label" for="user">Usuario:</label>
                <input type="text" name="user" id="user" required>
            </div>     
        
            <div class="input-group">
                <label class="label" for="password">Contraseña:</label>
                <input type="password" name="password" id="password" required>
            </div>

            <div class="input-group">
                <label class="label" for="nombre1">Primer Nombre</label>
                <input type="text" name="nombre1" id="nombre1" required >
            </div>

            <div class="input-group">
                <label class="label" for="nombre2">Segundo Nombre</label>
                <input type="text" name="nombre2" id="nombre2" required >
            </div class="input-group">

            <div class="input-group">
                <label class="label" for="apellido1">Primer Apellido</label>
                <input type="text" name="apellido1" id="apellido1" required >
            </div>

            <div class="input-group">
                <label class="label" for="apellido2">Segundo Apellido</label>
                <input type="text" name="apellido2" id="apellido2" required >
            </div>

            <div class="input-group">
                <label class="label" for="birthday">Fecha de Nacimiento</label>
                <input type="date" name="birthday" id="birthday" required >
            </div>

            <div class="input-group">
                <label class="label" for="edad">Edad</label>
                <input type="number" name="edad" id="edad" required >
            </div>

            <div class="input-group">
                <label class="label" for="sexo">sexo</label>
                    <select class="select" name="sexo" id="sexo" required >
                        <option disabled selected>Seleccione...</option>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                        <option value="NB">No Binario</option>
                    </select>
            </div>

            <div class="input-group">
                <label class="label" for="tipo_documento">Tipo de Documento </label>
                    <select class="select" name="tipo_documento" id="tipo_documento" required>
                        <option disabled selected>Seleccione...</option>
                        <option value="CC">CEDULA DE CIUDADANIA</option>
                        <option value="CEC">CEDULA DE EXTRANGERIA COLOMBIANA</option>
                        <option value="CE">CEDULA EXTRANGERA</option>
                        <option value="PAS">PASAPORTE</option>
                        <option value="REC">REGISTRO CIVIL</option>
                        <option value="TI">TARGETA DE IDENTIDAD</option>
                    </select>
            </div>

            <div class="input-group">
                <label class="label" for="numero_documento">Numero de Documento</label>
                <input type="number" name="numero_documento" id="numero_documento" required >
            </div>

            <div class="input-group">
                <label class="label" for="ciudad_expedicion">Ciudad de Expedición</label>
                <input type="text" name="ciudad_expedicion" id="ciudad_expedicion" required >
            </div>

            <div class="input-group">
                <label class="label" for="pais">Pais</label>
                <input type="text" name="pais" id="pais" required >
            </div>

            <div class="input-group">
                <label class="label" for="departamento">Departamento</label>
                <input type="text" name="departamento" id="departamento" required >
            </div>

            <div class="input-group">
                <label class="label" for="ciudad">Ciudad</label>
                <input type="text" name="ciudad" id="ciudad" required >
            </div>

            <div class="input-group">
                <label class="label" for="barrio">Barrio</label>
                <input type="text" name="barrio" id="barrio" required >
            </div>

            <div class="input-group">
                <label class="label" for="telefono">Telefono</label>
                <input type="number" name="telefono" id="telefono" required >
            </div>

            <div class="input-group">
                <label class="label" for="celular">Celular</label>
                <input type="number" name="celular" id="celular" required >
            </div>

            <div class="input-group">
                <label class="label" for="correo">Correo Electronico</label>
                <input type="email" name="correo" id="correo" required >
            </div>

            <div class="input-group">
                <label class="label" for="nivel_academico">Nivel Academico</label>
                    <select class="select" name="nivel_academico" id="nivel_academico" required>
                        <option disabled selected>Seleccione...</option>
                        <option value="Preescolar">Preescolar</option>
                        <option value="Primaria">Primaria</option>
                        <option value="Secundaria">Secundaria</option>
                        <option value="Bachillerato">Bachillerato</option>
                        <option value="pregrado">Pregrado</option>
                        <option value="postgrado">Postgrado</option>
                        <option value="Maestria">Maestría</option>
                        <option value="Doctorado">Doctorado</option>
                    </select>
            </div>

            <div class="input-group">
                <label class="label" for="profesion">Profesion</label>
                <input type="tetx" name="profesion" id="profesion" required >
            </div>

            <div class="input-group">
                <label class="label" for="role">Role</label>
                <input type="tetx" name="role" id="role" required >
            </div>

            <div class="input-group">
                <label class="label" for="fecha_registro">Fecha de Registro</label>
                <input type="date" name="fecha_registro" id="fecha_registro" required >
            </div>

            <div class="input-group">
                <label class="label" for="fecha_activacion">Fecha de Activación</label>
                <input type="date" name="fecha_registro" id="fecha_registro" required >
            </div>

            <div class="button">
                <input type="submit" value="Registrarse" name="enviar" >
                <input type="reset" value="borrar" name="borrar" >
            </div>

        </form>
    </div>

</body>
</html>