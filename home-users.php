<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../index.php');
	exit;
}
?>
<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
    <link rel="stylesheet" href="/lvl-biz/css/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e36f36e146.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  </head>
  <body>
        <header class="topbar">
            <?php include('includes/nav-bar-user.php');?>
            <nav class="user">
                <ul>
                    <li class="user">
                        <a href="#"><i class="fas fa-user-circle fa-3x"></i></a>
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><?=$_SESSION['username']?></a>
                        <ul class="dropdown-menu fade-up">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="includes/logout.inc.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
         <h2>Welcome <?=$_SESSION['username']?></h2>
  </body>      
</html> 