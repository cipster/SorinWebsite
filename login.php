<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Procertis Admin - Log-in</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="css/login.css">

</head>

<body>

  <div class="login-card">
    <h1>Procertis Admin</h1><br>
  <form action="php/login/password_validate.php" method="post">
    <input type="text" name="myusername" placeholder="utilizator">
    <input type="password" name="mypassword" placeholder="parola">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>

  <div class="login-help">
  </div>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>