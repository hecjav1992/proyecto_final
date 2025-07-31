<?php 
include('includes/conexion.php'); 
include('includes/header.php');
?>

<main>
    <form method="POST" action=""> 
        <input type="email" name="email" placeholder="Correo electrónico" required>
        <input type="password" name="password" placeholder="Contraseña" required> 
        <button type="submit" name="login">Iniciar sesión</button> 
    </form> 
</main>

<?php include('includes/footer.php'); ?>

<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows == 1) { 
        $usuario = $resultado->fetch_assoc();
        if (password_verify($password, $usuario['password'])) { 
            $_SESSION['usuario'] = $usuario['email']; 
            echo "<script>alert('Inicio de sesión exitoso'); window.location.href='admin.php';</script>";
        } else {
            echo "<script>alert('Contraseña incorrecta');</script>";
        }
    } else {
        echo "<script>alert('Usuario no encontrado');</script>";
    }
}
?>