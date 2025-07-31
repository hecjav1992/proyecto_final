<?php
session_start();
if (isset($_SESSION['usuario'])) {
    header("Location:admin.php");
    exit();
}
?>

<?php include('includes/header.php'); ?>

<main>
    <h2>Bienvenido</h2>
    <p>Por favor, <a href="login.php">inicia sesión</a> para acceder al panel.</p>
    <p>¿No tienes una cuenta? <a href="registro.php">Regístrate aquí</a></p>
</main>

<?php include('includes/footer.php'); ?>