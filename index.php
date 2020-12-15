<?php
session_start();
require_once 'controller/controler.php' ;
if(isset($_POST['submit']) && $_POST['submit']=="Login" && !empty($_POST['usernam']) && !empty($_POST['passwordd'])){
  
    Veriflog();
}

else{

    require 'view/login.php';
}

