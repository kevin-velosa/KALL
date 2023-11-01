<style>
    a{
        text-decoration: none;
        text-align: center;
        margin: auto;
        display: block;
        font-size: 35px;
        height: 40px;
        width: 400px;
        background-color: orange;
        color: blue;
    }
</style>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "empleos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Recuperar datos del formulario
$user = $_POST['username'];
$pass = $_POST['password'];

// Consulta para validar las credenciales del usuario
$sql = "SELECT * FROM registros_usu WHERE n_usuario = '$user' AND contraseña = '$pass'";
$result = $conn->query($sql);

// Verificar si se encuentra un usuario con las credenciales ingresadas
if ($result->num_rows > 0) {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $user;
    $verifi="SELECT cargo FROM registros_usu WHERE 1";
    $resulta = $conn->query($verifi);
    if ($resulta='empleado'){
        echo"<a href='bucar_con.php'> buscar contratos</a>";
    }
    if ($resulta='contratador'){
        echo"<a href='http://localhost/cofre/real/buscar_movil/buscar_em.php'> buscar empledos</a>";
    }
}

?>