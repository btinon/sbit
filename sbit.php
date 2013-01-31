<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>add</title>
  </head>
  <body bgcolor="#aaccee">    
    <h2>Add New Server</h2>
    
    <?php
      $sname=$_POST['servername'];
      $chassis=$_POST['chassis'];
      $memory=$_POST['memory'];
      $proc=$_POST['proc'];
      $drives=$_POST['drives'];
      $netenv=$_POST['netenv'];
      $sowner=$_POST['serverowner'];
      $email=$_POST['email'];
      $comments=$_POST['comments'];
      
      $dt=date(m-d-y);
      $ip="000.000.000.000";
      $vlan=300;
      $loc="P3SF09.02";
      $u=27;
        
      
      $racked=0;
      $cabeled=0;
      $labelst=0;
      $labeleth=0;
      $labelname=0;
      $raidclear=0;
      $inv=0;
      $built=0;
      $post=0;
      $live=0;
            
      echo "<table width=80%>";
      
      echo "<tr>";
      echo "<td>Server Name:</td>"."<td>$sname</td>"."<td>Server Owner:</td>"."<td>$sowner</td>"."<td>Owner Email:</td>"."<td>$email</td>";
      echo "</tr>";
      
      echo "<tr>";
      echo "<td>Chassis:</td>"."<td>$chassis</td>"."<td>Memory:</td>"."<td>$memory</td>";
      echo "</tr>";
      
      echo "<tr>";
      echo "<td>Proc:</td>"."<td>$proc</td>"."<td>Drives:</td>"."<td>$drives</td>";
      echo "</tr>";
      
      echo "<tr>";
      echo "<td>Network:</td>"."<td>$netenv</td>";
      echo "</tr>";
      echo "</table>";
      
      $hostname="bitbytebit.kodingen.com";
      $username="k12584_sp";
      $password="4f919f1c00f6a";
      $dbname="k12584_sp";
      
      $connect = mysql_connect($hostname, $username, $password);
      if (!$connect) {
        die('Could not connect: '.mysql_error());
      }
      mysql_select_db($dbname, $connect);
      
      
      mysql_query("INSERT INTO Main (`Date`, `SName`, `Chassis`, `Mem`, `Drives`, `Proc`, `NetEnv`, `IP`, `VLAN`, `Loc`, `U`, `SOwner`, `Email`, `Racked`, `Cabled`, `LabelST`, `LabelEth`, `LabelName`, `RaidClear`, `Inv`, `Built`, `Post`, `Live`, `Comments`)  VALUES ('$dt', '$sname', '$chassis', '$memory', '$drives', '$proc', '$netenv', '$ip', '$vlan', '$loc', '$u', '$sowner', '$email', '$racked', '$cabled', '$labelst', '$labeleth', '$labelname', '$raidclear', '$inv', '$built', '$post', '$live', '$comments')") or die (mysql_error());
echo "Server Added ...<br>";
      
      mysql_close($connect);
      
      
      
      ?>
    <hr />
    <br />
    <form action="sbit.html" method="post">
      Do you want to enter another?
      <br />
      <input type="submit" value="Enter Another Server">
    </form>
    <form action="index.html" method="post">
      <br />
      Back to main
      <input type="submit" value="back to main">
    </form>
    
  </body>
</html>




