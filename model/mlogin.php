<?php
require_once('model/connexion.php');

class Login extends Connexion
{
   public function Allogin()
    {

        $motdepass =$this->connect()->prepare('SELECT * FROM `login` WHERE username=:identifiant AND password=:motdepasse');
        $motdepass->bindParam(':identifiant', $_POST['usernam'], PDO::PARAM_STR);
        $motdepass->bindParam(':motdepasse', $_POST['passwordd'], PDO::PARAM_STR);
    
        $motdepass->execute();
        $ok=$motdepass->fetch(PDO::FETCH_ASSOC);

        //var_dump($ok);
        //die;
        return $ok ;

    }



}