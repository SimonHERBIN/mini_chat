<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Connectez vous au Chat</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>
  <script type="text/javascript">
    $(function(){
      $("#registerform").on("submit", function(e){
        e.preventDefault()
        data = {
          lastname : $("#lastname").val(),
          pseudo : $("#pseudo").val(),
          password : $("#password").val()
        }
        $.ajax({
          method : "POST",
          url : "register_chat.php",
          data : data,
          success : function(resultat){
            if (resultat=="0"){
              window.location.href="mini_chat.php";
            }

            else if(resultat=="1"){
              alert("Pseudo déja utilisé");
              $("#pseudo").focus().val("");
            }
            else if(resultat=="2"){
              alert("Veuillez remplir le formulaire")
            }
            else {
              alert("Erreur")
            }
          }
        })
      })

    $("#loginform").on("submit", function(e){
      e.preventDefault()
      datalog = {
        lastname : $("#lastnamelog").val(),
        pseudo : $("#pseudolog").val(),
        password : $("#passwordlog").val()
      }
      $.ajax({
        method : "POST",
        url : "login_chat2.php",
        data : datalog,
        success : function(resultat){
          if (resultat==false){
            alert("Erreur de connexion")
          }
          else {
            window.location.href="mini_chat.php";
          }
        }
      })
    })
  })
  </script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-lg-6">
        <h1>Inscription au Chat</h1>
        <form action="" method="POST" id="registerform">
          <input type="text" name="lastname" id="lastname" placeholder="Nom"> <br>
          <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo"><br>
          <input type="password" name="password" id="password" placeholder="Password"><br>
          <input type="submit" name="submit">
          <input type="reset">
        </form>
      </div>

      <div class="col-sm-6 col-lg-6">
        <h1>Se connecter au Chat</h1>
      <form action="" method="POST" id="loginform">
        <input type="text" name="lastname" id="lastnamelog" placeholder="Nom" ><br>
        <input type="text" name="pseudo" id="pseudolog" placeholder="Pseudo"><br>
        <input type="password" name="password" id="passwordlog" placeholder="Password"><br>
        <input type="submit" name="submit">
        <input type="reset">
      </form>
      </div>
    </div>
  </div>





</body>
</html>
