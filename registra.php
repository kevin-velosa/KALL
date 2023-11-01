<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF8">
        <title>empleos para ti el libertador</title>
        <style>
            div{
    margin-left: 25%;
    margin-right: 25%;
    border-radius: 10px;
    background-color: rgb(0, 65, 163);
}
input{
    width: 80%;
    height: 40px;
    border-radius: 10px;
    background-color: aqua;
    margin: 10%;
}
label,a{
    font-size: medium;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    color: coral;
    margin: 10%;
    text-decoration: none;
}
a{
    margin: 10%;
    font-size: 30px;
}
.grid-container {
    display: grid;
    grid-template-columns: auto auto auto auto;
    gap: 10px;
    background-color: #2196F3;
    padding: 10px;
  }
  
  .grid-container > div {
    background-color: rgba(255, 255, 255, 0.8);
    border: 1px solid black;
    text-align: center;
    font-size: 30px;
  }
body{
    border-left: 40%;
}
        </style>
    </head>
    <body>
        <div style="width: 376px; height: 639px; position: relative; background: white">
            <div style="width: 288px; height: 321px; left: 36px; top: 146px; position: absolute; background: #FA1818">
            
                <form name="New User" method="POST" action="inicio.php">
                    <label for="nombre_usuario">nombre de usuario:</label>
                    <br><input type="text" name="nickname" pattern="[a-zA-Z0-9]+" placeholder="Ingrese su Nickname" required><br>
                    
                    <label for="contraeña">contraseña:</label><br>
                    <input type="password" name="contraseña" maxlength="20" autocomplete="new-password" placeholder="Ingrese su contrase"><br>
                    
                    <label for="nombres">nombres:</label><br>
                    <input type="text" name="nombre" placeholder="ingresa tus nombres" required><br>
                    
                    <label for="apellidos">apellidos:</label><br>
                    <input type="text" name="apellidos" placeholder="ingresa tus apellidos" required><br>
        
                    <label for="correo">Email:</label><br>
                    <input type="email" name="correo" placeholder="Ingresa su email" required><br>
                    
                    <label for="edad">edad: </label><br>
                    <input type-Inumber" name="edad" min="18" placeholder="ingresa tu edad" required><br>

                    <label for="cargo">selecione su cargo</label><br><br><br>
                    <label for="cargo"> empleado</label><input type="radio" name="cargo" value="empleado">
                    <label for="cargo"> contratador</label><input type="radio" name="cargo" value="contratador">

                    <label for="descripcion">descripcion: </label><br>
                    <input name="descripcion" placeholder="imgresa crea tu descripcion" required></input><br>
                    <hr>
        
                    <input type="submit" name="enviar" class="boton" value="Registrate">
                    <input type="reset" class="boton" value="Borrar">
                    
                    <a href="#">ya tienes cuenta?</a>
                    </form>
            
            </div>
            <img src="logo.PNG" style="width: 257px; height: 86px; left: 36px; top: 25px; position: absolute; background: #D9D9D9">
    </body>
</html>