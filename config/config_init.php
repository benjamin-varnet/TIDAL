<?php
// Initialisation de la session
session_start();
header("Cache-Control: no-cache");

// Chargement Smarty et Defines
require('defines.inc.php');
require(_PATH_ . 'web/tools/smarty/Smarty.class.php');

// Chargement du coeur
$files = scandir(_CORE_);
foreach ($files as $filename)
{
    if (is_file(_CORE_.$filename))
        require_once(_CORE_.$filename);
}

$host = "localhost";
$database_name = "shop_goneix";
$username = "root";
$password = "root";
$connexion;

  //Connexion a la Database
function getConnection(){
    $this->connexion = null;

    try{
      $this->connexion = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database_name, $this->username, $this->password);
    }catch(PDOException $exception){
      echo "Connection error: " . $exception->getMessage();
    }

    return $this->connexion;
  }

// Initialisation Smarty
$smarty = new Smarty();
?>