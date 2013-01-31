

<html>
  <head>
    <title>Bulk Update</title>
  </head>
  <body bgcolor="#aaddaa">
    
    <?php
      
      echo "<table width=50% border=1>";
        echo "<tr>";
      echo "<td>Name</td><td>Racked</td><td>Cabled</td><td>LabelST</td><td>LabelEth</td><td>Labelname</td><td>Raidclear</td><td>Inv</td><td>Built</td><td>Post</td><td>Live</td>";
        echo "</tr>";
      
      $hostname="bitbytebit.kodingen.com";
      $username="k12584_sp";
      $password="4f919f1c00f6a";
      $dbname="k12584_sp";
      
      $connect = mysql_connect($hostname, $username, $password);
      if (!$connect) {
        die('Could not connect: '.mysql_error());
      }
      
      mysql_select_db($dbname, $connect);
      
       
      $query = "SELECT * FROM Main";
      $result = mysql_query($query);
      $r=0;
      
      while ($row = mysql_fetch_assoc($result))
      {
        echo "<tr>";
        $indexID[r]=$row['IndexID'];
        $dt=$row['Date'];
        $sname=$row['SName'];          
        echo "<td>$sname</td>";
        $chassis=$row['Chassis'];          
        $memory=$row['Mem'];          
        $drives=$row['Drives'];   
        $proc=$row['Proc'];           
        $netenv=$row['NetEnv'];          
        $ip=$row['IP'];          
        $vlan=$row['VLAN'];           
        $loc=$row['Loc'];           
        $u=$row['U'];           
        $sowner=$row['SOwner'];           
        $email=$row['Email'];           
        $racked=$row['Racked'];
        echo "<td><input type='text' name='racked' size=2 value=$racked></td>";
        $cabled=$row['Cabled'];
        echo "<td><input type='text' name='cabled' size=2 value=$cabled></td>";
        $labelst=$row['LabelST'];
        echo "<td><input type='text' name='labelst' size=2 value=$labelst></td>";
        $labeleth=$row['LabelEth'];
        echo "<td><input type='text' name='labeleth' size=2 value=$labeleth></td>";
        $labelname=$row['LabelName'];
        echo "<td><input type='text' name='labelname' size=2 value=$labelname></td>";
        $raidclear=$row['RaidClear'];
        echo "<td><input type='text' name='raidclear' size=2 value=$raidclear></td>";
        $inv=$row['Inv'];
        echo "<td><input type='text' name='inv' size=2 value=$inv></td>";
        $built=$row['Built'];
        echo "<td><input type='text' name='built' size=2 value=$built></td>";
        $post=$row['Post'];
        echo "<td><input type='text' name='post' size=2 value=$post></td>";
        $live=$row['Live'];
        echo "<td><input type='text' name='live' size=2 value=$live></td>";
        $comments=$row['Comments'];
      
        echo "</tr>";
        r++;
      }
      
      echo "</table>";
      echo "<h1>$indexID[3]</h1>";
     
        ?>
  </body>
</html>
          