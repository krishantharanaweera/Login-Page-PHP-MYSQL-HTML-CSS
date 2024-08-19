
<?php
    session_start();
    if(!isset($_SESSION['user_login'])){
        header('location:index.html');
    }
?>
<a href="./logout.php">Logout</a>
<h1>Admin Dashboard</h1>