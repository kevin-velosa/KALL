<?php
    //conexion a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "empleos";

    // crear conexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // obtener los valores del formulario HTML
    if(isset($_POST['enviar'])){
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $edad = $_POST['edad'];
        $habilidad = $_POST['habilidad'];
        $descripcion= $_POST['descripcion'];
        $telefono= $_POST['telefono'];
        $email = $_POST['correo'];
        $cargo= $_POST['cargo'];
        $contraseña = $_POST['contraseña'];

        // insercion en la base de datos
        $sql = "INSERT INTO registros_usu (`id_usu`, `Nombre`, `Apellido`, `Edad`, `habilidad`, `descripcion`, `telefono`, `correo`, `cargo`, `contraseña`) VALUES (null,'$nombre', '$apellidos','$edad','$habilidad','$descripcion','$telefono','$email','$cargo','$contraseña')";

        // verificar si se ha creado correctamente el usuario
        if ($conn->query($sql) === TRUE) {
            echo "<h1>Nuevo registro creado correctamente</h1>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // cerrar la conexion
    $conn->close();
?>