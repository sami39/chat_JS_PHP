<?php session_start() ;
if(!isset($_SESSION['nom'])){
header('location: index.php');
} ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
var_dump($_SESSION); 
?>
<h1>sami</h1>
<div id="logout">
    <form class="w-100" action="" method="POST">
        <button type="submit" name='action' value='logout' id="logout">Logout</button>
    </form>     
    </div>
    <?php
    if (isset($_POST['action'])&&($_POST['action']=='logout')){
        session_destroy();
        header('location: index.php');
    }
    ?>
</body>
</html>