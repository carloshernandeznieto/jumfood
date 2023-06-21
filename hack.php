

<?php
  echo strip_tags($_POST["password"]);
?>
<?php
// Verificar si se enviaron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los datos del formulario
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Aquí puedes realizar la validación y autenticación del usuario
  // por ejemplo, consultar una base de datos o utilizar lógica de negocio

  // Ejemplo de validación básica
  if ($username == "usuario" && $password == "contraseña") {
    // Autenticación exitosa, redirigir al usuario a la página de inicio
    header("Location: inicio.php");
    exit;
  } else {
    // Autenticación fallida, mostrar mensaje de error
    echo "Nombre de usuario o contraseña incorrectos";
  }
}
?>
