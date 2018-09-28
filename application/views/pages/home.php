<!DOCTYPE html>
<head>
  <title>UPDATE PostgreSQL data with PHP</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <style>li {list-style: none;}</style>
</head>
<body>
  <h2>Supply bookid and enter</h2>
  <ul>
    <form name="display" action="home.php" method="POST" >
      <li>Book ID:</li>
      <li><input type="text" name="bookid" /></li>
      <li><input type="submit" name="submit" /></li>
      <li>Run pg command:</li>
      <li><input type='text' name='user_command'/></li>
      <li><input type='submit' name='run' /></li>
    </form>
  </ul>
</body>
</html>
