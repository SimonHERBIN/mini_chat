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

$mini_chat=$PDO->prepare("SELECT * FROM message INNER JOIN users ON message.user_id=users.id");
$mini_chat->execute();
$show_message=$mini_chat->fetchAll();

foreach ($show_message as $value) {
	echo "<div class='message_chat'><p> From : ".$value->pseudo."</p><p>".$value->message."</p></div>" ;
}

 ?>
