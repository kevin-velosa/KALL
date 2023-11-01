<head>
    <style>
        table, th, td {
    border: 1px solid white;
    border-collapse: collapse;
    margin-top: 7%;
    margin-left: 27%;
  }
  th, td {
    background-color: #96D4D4;
  }
    </style>
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "empleos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$habi=$_POST['habi'];
$sql = "SELECT * FROM registros_usu WHERE habilidad = '$habi'";
$result = $conn->query($sql);

// Output data of each row
if ($result->num_rows > 0) {
    echo "<table border='1'>
       <tr>
         <th>ID</th>
         <th>Nombre</th>
         <th>apellido</th>
         <th>edad</th>
         <th>habilidad</th>
         <th>descripcion</th>
         <th>telefono</th>
         <th>correo</th>
         <th>cargo</th>
         <th>nombre de usuario</th>
       </tr>";
   }
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "<tr>";
       echo "<td>" . $row["id_usu"]. "</td>";
       echo "<td>" . $row["Nombre"]. "</td>";
       echo "<td>" . $row["Apellido"]. "</td>";
       echo "<td>" . $row["Edad"]. "</td>";
       echo "<td>" . $row["habilidad"]. "</td>";
       echo "<td>" . $row["descripcion"]. "</td>";
       echo "<td>" . $row["telefono"]. "</td>";
       echo "<td>"."<a href='mailto:juan@gmail.com'> " . $row["correo"]."</a>"; "</td>"; 
       echo "<td>" . $row["cargo"]. "</td>";
       echo "<td>" . $row["n_usuario"]. "</td>";//aqui va el boton para borrar el producto
       echo "<tr>";
   }
?>