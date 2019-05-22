<?php
session_start();
if (!isset($_SESSION['email'])) {
    ?>
    Bạn chưa đăng nhập,&nbsp;
    <a href="login.php">
        Đăng nhập
    </a>
    &nbsp;
    tại đây.
    <?php
} else {
    if (!isset($_SESSION['level'])) {
        echo "Xin chào các bạn" . $_SESSION['email'];
        echo "<a href='logout.php'>Logout</a>";
    } else {
        header('location: admin.php');
    }
}
?>