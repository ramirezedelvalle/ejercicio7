<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>II Curso Internacional de Informatica y Ciberdefensa</title>
    <link rel="shortcut icon" href="images/divisa.png">
</head>
<style>
    body {
	background-image: url(images/internet.jpeg);
	background-size: full;
	background-attachment: fixed;
    font-family: arial bold;
    font-size: x-large;
}

.header {
  background-image: url(images/ciberdefensa.jpg);
  background-size: cover;
  margin: 0;
  padding: 1px;
  text-align: center;
  color: gold;
  font-family: 'arial';
  font-size: 60px;
  transition-duration: 5s;
}

</style>
<body>

<div class="header">
	<center><h1> COMANDO DE INFORMATICA Y TECNOLOGIA</h1></center>
	<center><p>Escuela de Informatica y Tecnologia</p></center>
</div> 

    <div class="container">
        <br>
        <h1 class="text-center">Registro de Alumnos</h1>
        <br>
        <div class="row justify-content-center">
            <form action="/tareas/ejercicio7/controladores/alumnos/guardar.php" method="POST" >
            <div class="row mb-3">
                    <div class="col">
                        <label for="alu_cod">Codigo del Alumno</label>
                        <input type="number" name="alu_cod" id="alu" class="form-control" required>
                    </div>
                </div>
            <div class="row mb-3">
                    <div class="col">
                        <label for="alu_nom">Nombre del Alumno</label>
                        <input type="text" name="alu_nom" id="alu" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="alu_ape">Apellidos del Alumno</label>
                        <input type="text" name="alu_ape" id="alu" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="alu_tel">Telefono del Alumno</label>
                        <input type="number" name="alu_tel" id="alu" class="form-control" min="10000000" max="99999999" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="alu_dia">Dia de Nacimiento</label>
                        <input type="number" name="alu_dia" id="alu" class="form-control" required>
                    </div>
                    <div class="col">
                        <label for="alu_mes">Mes de Nacimiento</label>
                        <input type="number" name="alu_mes" id="alu" class="form-control"  min="1" max="12" required>
                    </div>
                    <div class="col">
                        <label for="alu_fech">Año de Nacimiento</label>
                        <input type="number" name="alu_fech" id="alu" class="form-control"  min="1900" max="2023" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="alu_mail">Correo Electronico del Alumno</label>
                        <input type="mail" name="alu_mail" id="alu" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>