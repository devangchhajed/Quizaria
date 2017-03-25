
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>TechVibes-Login</title>
        <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <!--Google Font - Work Sans-->
<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,700' rel='stylesheet' type='text/css'>

<div class="container">
  <div class="profile">
     <img src="../img/plogo.png" alt="Avatar"  class="profile__avatar" id="toggleProfile"/> 
    <div class="profile__form">
      <form  method="post" action="validate_login.php"  class="profile__fields">
        <div class="field">
          <input type="text" id="username" name="username" class="input" autocomplete="off" required/>
          <label for="fieldUser" class="label">Username</label>
        </div>
        <div class="field">
          <input type="password" id="password" name="password" class="input" autocomplete="off" required />
          <label for="fieldPassword" class="label">Password</label>
        </div>
        <div class="profile__footer">
          <button type="submit" class="btn">Login</button>
        </div>
      </form>
     </div>
  </div>
</div>
    
    
  </body>
</html>
