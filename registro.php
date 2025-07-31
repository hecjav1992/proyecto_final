<?php
include('./includes/conexion.php'); 
include('./includes/header.php');

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $fecha = date('Y-m-d H:i:s'); 

    $sql = 'INSERT INTO usuarios (email, password) VALUES (?, ?)';
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ss", $email, $password);

    if ($stmt->execute()) {
        $message = "Usuario registrado exitosamente!";
    } else {
        $message = "Error al registrar usuario: " .  $conexion->error;
    }
}
?>
<main>
    <h2>Registro de nuevo usuario</h2>
    
    <?php if (!empty($message)): ?>
        <p style="color: <?php echo strpos($message, 'exitosamente') !== false ? 'green' : 'red'; ?>">
            <?php echo htmlspecialchars($message); ?>
        </p>
    <?php endif; ?>
    
    <form method="POST" action="">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>
        
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>
        
        <label>Contraseña:</label><br>
        <input type="password" name="password" required><br><br>
        
        <button type="submit">Registrar</button>
    </form>
</main>

<?php include('./includes/footer.php'); ?>