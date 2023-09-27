<?php 
session_start();
if(!isset($_SESSION['email'])){
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
</head>

<body>
    <div class="container">
        <a href="logout.php">Logout</a>
        <h1>Welcome <?php echo $_SESSION['email']; ?></h1>
    </div>
</body>
</html>