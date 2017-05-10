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

session_start();
if (isset($_POST["submit"]) &&  isset($_SESSION["id"]) && isset($_SESSION["pseudo"])) {

  if ($_POST["message"] !="") {

    $message=$PDO->prepare("INSERT INTO message (user_id, message) VALUES (:id, :message)");
    $message->bindValue(":id", $_SESSION["id"]);
    $message->bindValue(":message", $_POST["message"]);

    $message->execute();
    }
  }

 ?>


 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <title>Mini Chat</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">

   <script src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
  $(function(){
    setInterval($(function() {
      $.ajax({
        url : "mini_chat_message.php",
        success : function(actualise) {
          $("#mini_chat").html(actualise);
        }
      } )
    }
  ),60000)

$(".logout_btn").on("click", function(e) {
  e.preventDefault()
  $.ajax({
    url : "logout_chat.php",
    success : function(logout){
      alert(logout);
      window.location.href="login_chat.php"
    }
  })
})
})
    </script>


 </head>
 <body>
   <div id="mini_chat"></div>

   <form action="mini_chat.php" method="POST">
     <input type="text" name="message" id="message" placeholder="Votre message ici">
     <input type="submit" name="submit">
     <input type="reset">
   </form>
   <button class="logout_btn">Se déconnecter du Chat</button>

 </body>
 </html>
