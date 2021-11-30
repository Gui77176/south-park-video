<?php
require("view/connexion.php");
require("view/inscription.php");

class BDD
{
    public $connex;

    function __construct()
    {
        $this->connex= new PDO("mysql:host=localhost;dbname=vidéo", "root", "",array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        $this->connex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function getAllType()
    {
      try
      {
        $sql=$this->connex->prepare("SELECT * FROM");
      }

      catch (PDOException $error)
      {
        echo $error->getMessage();
      }

    }
}
?>