<?php 

if (isset($_POST['btnGuardar'])) {
$nombre = $_POST['txtNombre'];
$apellido = $_POST['txtApellido'];
$cedula = $_POST['txtCedula'];
$correo = $_POST['txtCorreo'];
$fechaNacimiento = $_POST['txtAñoNacimiento'];

echo "Nombre: ".$nombre;
echo "<br>";
echo "Apellido: ".$apellido;
echo "<br>";
echo "Cedula: ".$cedula;
echo "<br>";
echo "Correo: ".$correo;
echo "<br>";
echo "Fecha de nacimiento: ".$fechaNacimiento;
echo "<br>";
}

?>