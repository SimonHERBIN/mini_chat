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

  if($_POST["lastname"]!="" && $_POST["pseudo"]!="" && $_POST["password"]!= ""){
    $verif=$PDO->prepare("SELECT pseudo FROM users WHERE pseudo=:pseudo");
    $verif->bindValue(":pseudo", $_POST["pseudo"]);
    $verif->execute();
    $test=$verif->fetch();

    if($test!=""){
      echo "1";
    }
    else {
      $req=$PDO->prepare("INSERT INTO users (lastname, pseudo, password) VALUES (:lastname, :pseudo, :password)");
      $req->bindValue(":lastname", $_POST["lastname"]);
      $req->bindValue(":pseudo", $_POST["pseudo"]);
      $req->bindValue(":password", sha1($_POST["password"]));

      if($req->execute()) {
      $login=$PDO->prepare("SELECT * FROM users WHERE lastname=:lastname AND pseudo=:pseudo AND password=:password");
      $login->bindValue(":lastname", $_POST["lastname"]);
      $login->bindValue(":pseudo", $_POST["pseudo"]);
      $login->bindValue(":password", sha1($_POST["password"]));
      $login->execute();
      $compte=$login->fetch();
      session_start();
      $_SESSION['id'] = $compte->id;
      $_SESSION['pseudo'] = $compte->pseudo;
        echo "0";
      }
      else {
        echo "Erreur";
      }
    }
  }
  else {
    echo "2";
  }

 ?>
