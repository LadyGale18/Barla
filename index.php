<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <form method="POST" action="accounts/process.php">
      <label>Digite usuario</label>
      <input type="text" id="User" name="User">
      <label>Digite Clave</label>
      <input type="password" id="Password" name="Password">      
      <input type="submit">
      <?php if(filter_input(INPUT_GET, 'ClaveCorrecta')== 'false') : ?>
      <p>el usuario o la contraseña son incorrectos</p>
      <?php endif; ?>
    </form>
  </body>
</html>
