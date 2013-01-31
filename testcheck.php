<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>checkbox array test</title>
  </head>
  <body bgcolor="#bbeecc">
    <form action="tc.php" method="post">
      <?php
        echo "<table width=50%>";
        
        
        echo "<tr><td><input type='checkbox' name='select[]' value='update'></td><td>Zero</td></tr>";
        echo "<tr><td><input type='checkbox' name='select[]' value='update'></td><td>One</td></tr>";
        echo "<tr><td><input type='checkbox' name='select[]' value='update'></td><td>Two</td></tr>";
        echo "<tr><td><input type='checkbox' name='select[]' value='update'></td><td>Three</td></tr>";
        echo "</table>";
        echo "<br />";
        echo "<input type='submit' value='submit'>";
        
        ?>
         
    
  </body>
</html>