<html>
  <body>
  <!-- Code based on W3Schools PHP form https://www.w3schools.com/php/php_forms.asp and customized-->
  Hey there, <?php echo $_POST["name"];?>!<br>
  Your email address is: <?php echo $_POST["email"];?><br>
  Your personal website address is: <?php echo $_POST["personalWebsite"];?><br>
  Your comment said: <?php echo $_POST["comment"];?>
  </body>
</html>