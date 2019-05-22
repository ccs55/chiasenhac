<?php
$conn = mysqli_connect('localhost', 'root', '', 'users_manager');
session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE user_mail='$email' AND user_pass='$password'";
    $query = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($query);
    if ($num > 0) {
        $row = mysqli_fetch_array($query);
        $_SESSION['email'] = $row['user_mail'];
        $_SESSION['password'] = $row['user_pass'];
        if ($row['user_level'] == 1) {
            $_SESSION['level'] = $row['user_level'];
            header('location: admin.php');
        } else {
            header('location: index.php');
        }
    } else {
        echo "<script>alert('Email address or password wrong!');</script>";
    }
}
?>