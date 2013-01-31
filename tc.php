<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>add</title>
  </head>
  <body bgcolor="#aaccee">
    <?php
      $selrow=$_POST['select'];
      
      echo $selrow[1];
      
      for ($x = 0;$x < 4; $x++)
      {
        if ($selrow[$x] != "update")
        {
          echo "<br />not checked";
        }
        else
        {
          echo "<br />checked";
        }
      }
      print_r ($selrow);
      
      ?>
  </body>
</html>