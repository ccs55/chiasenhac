<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: login.php');
} else {
    if (!isset($_SESSION['level'])) {
        header('location: index.php');
    } else {
      echo "Hello " . $_SESSION['email'] . ", This is Admin";
        echo "<a href='logout.php'>Logout</a>";
    }
}
?>