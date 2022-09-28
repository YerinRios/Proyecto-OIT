<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Base de datos</title>
</head>
<body>
    <?php
   
        include 'connection.php';

            $nombre = $_POST["nombre"];
            $user = $_POST["user"];
            $password = $_POST["password"];
            $nombre1 = $_POST["nombre1"];
            $nombre2 = $_POST["nombre2"];
            $apellido1 = $_POST["apellido1"];
            $apellido2 = $_POST["apellido2"];
            $birthday = $_POST["birthday"];
            $edad = $_POST["edad"];
            $sexo = $_POST["sexo"];
            $tipo_documento = $_POST["tipo_documento"];
            $numero_documento = $_POST["numero_documento"];
            $ciudad_expedicion = $_POST["ciudad_expedicion"];
            $pais = $_POST["pais"];
            $departamento = $_POST["departamento"];
            $ciudad = $_POST["ciudad"];
            $barrio = $_POST["barrio"];
            $telefono = $_POST["telefono"];
            $celular = $_POST["celular"];
            $correo = $_POST["correo"];
            $nivel_academico = $_POST["nivel_academico"];
            $profesion = $_POST["profesion"];
            $role = $_POST["role"];
            $fecha_registro = $_POST["fecha_registro"];
            $fecha_activacion = $_POST["fecha_activacion"];

                if(!$connection){
                    echo"No se ha podido conectar al servidor";
                }
                else{

                    echo" Hemos conectado a la base de datos"; 
                }

            // indicar el nombre de la base de datos    

            $dbformulario ="datab";

            //indicamos la selección de la base de datos
            
            $datab = mysqli_select_db($connection, $datab);

                if (!$datab){

                    echo "No se ha podido encontrar la tabla";
                }
                else{
                    echo "Tabla seleccionada";

                }

            // Insertamos datos de registro al Mysql que se encuentra en el panel de xampp
            //indicando el nombre de la tabla y sus atributos

            $instruccion_SQL = "INSERT INTO datab ( `nombre`, `usuario`, `password`, `nombre1`, `nombre2`, 
            `apellido1`, `apellido2`, `birthday`, `edad`, `sexo`, `tipo_documento`, `numero_documento`, 
            `ciudad_expedicion`, `pais`, `departamento`, `ciudad`, `barrio`, `telefono`, `celular`, 
            `correo`, `nivel_academico`, `profesion`, `role`, `fecha_registro`, `fecha_activacion`) 
            VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]',
            '[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]',
            '[value-15]','[value-16]','[value-17]','[value-18]','[value-19]','[value-20]','[value-21]',
            '[value-22]','[value-23]','[value-24]','[value-25]','[value-26]')";

            $resultado = mysqli_query($connection, $instruccion_SQL);
            
            // $consulta: "SELECT * FROM table where id = '1'",
            // es solo para un registro
            $consulta = "SELECT * FROM datos";

            $result = mysqli_query($connection, $consulta); 

                if(!$result){
                    echo"No se ha podido realizar la consulta";   

                }
                    echo"<table>";
                    echo"<tr>";
                    echo"<th> <h2> id </th></h2>  " ; 
                    echo"<th> <h2> Nombre </th></h2>  " ; 
                    echo"<th> <h2> Usuario </th></h2>  " ;
                    echo"<th> <h2> Contraseña</th></h2>  " ;
                    echo"</tr>";
                    echo "</table>";
            
                while ($colum = mysqli_fetch_array($result)){

                    echo"<tr>";
                    echo"<td> <h3>" .$colum['id']. "</td> </h3>" ;
                    echo"<td> <h3>" .$colum['nombre']."</td> </h3>";
                    echo"<td> <h3>" .$colum['user']. "</td></h3>" ;
                    echo"<td> <h3>" .$colum['password']. "</td></h3>" ;
                }
                

        

                mysqli_close($connection);

                echo'<a href="index.php"> Volver Atras </a>'; 
        
    ?>


</body>
</html>