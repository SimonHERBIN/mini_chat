<?php

define("MYSQL_HOST", "localhost");
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB', 'mini_chat');

try {
  $PDO = new PDO("mysql:host=".MYSQL_HOST.";dbname=".MYSQL_DB, MYSQL_USER,MYSQL_PASSWORD); /* se connecter à base de données */
  $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);                            /* afficher les messages d'erreurs */
  $PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
} catch (PDOException $e) {
  $e->getMessage();
}

  $login=$PDO->prepare("SELECT * FROM users WHERE pseudo=:pseudo AND lastname=:lastname AND password=:password");
  $login->bindValue(":lastname", $_POST["lastname"]);
  $login->bindValue(":pseudo", $_POST["pseudo"]);
  $login->bindValue(":password", sha1($_POST["password"]));
  $login->execute();
  $compte=$login->fetch();

  if ($compte=="") {
    echo false;
  } else {
    session_start();
    $_SESSION["id"] = $compte->id;
    $_SESSION["pseudo"] = $compte->pseudo;
    echo true;
  }
?>
