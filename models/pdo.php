<?php

require("config.models.php");

function connexionPDO(){
    try{
        $bdd = new PDO("mysql:host=".HOST_NAME.";dbname=".DATABASE_NAME.";charset=utf8",USER_NAME,PASSEWORD);
        $bdd->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ATTR_ERRMODE);
        return $bdd;
    } catch(PDOException $e){
        $message = "Erreur PDO avec le message : ". $e->getMessage();
        die($message);
    }
}