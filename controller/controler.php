<?php
 
require_once 'model/mlogin.php';
function Veriflog() {

$log = new Login ;

$loge=$log->Allogin();
if(is_array($loge)){
    $_SESSION['nom']=$loge['username'] ;
    header("location:view/template.php");
    
   
   } else {
       echo "<font color='red'> Veuillez recommencer svp, une erreur est survenue</font>";
   }




}
