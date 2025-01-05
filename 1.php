<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'db_connection.php'; // MySQL connection
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $query->bind_param("s", $email);
    $query->execute();
    $result = $query->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password_hash'])) {
        $_SESSION['user_id'] = $user['id'];
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid credentials";
    }
}
?>
<form method="POST" action="">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Sign In</button>
</form>
<a href="register.php">Enroll with us</a>
