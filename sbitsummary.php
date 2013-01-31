

<html>
  <head>
    <title>Server Build Progress</title>
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
      
      while ($row = mysql_fetch_assoc($result))
      {
        echo "<tr>";
        $indexID=$row['IndexID'];
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
        echo "<td>$racked</td>";
        $cabled=$row['Cabled'];
        echo "<td>$cabled</td>";
        $labelst=$row['LabelST'];
        echo "<td>$labelst</td>";
        $labeleth=$row['LabelEth'];
        echo "<td>$labeleth</td>";
        $labelname=$row['LabelName'];
        echo "<td>$labelname</td>";
        $raidclear=$row['RaidClear'];
        echo "<td>$raidclear</td>";
        $inv=$row['Inv'];
        echo "<td>$inv</td>";
        $built=$row['Built'];
        echo "<td>$built</td>";
        $post=$row['Post'];
        echo "<td>$post</td>";
        $live=$row['Live'];
        echo "<td>$live</td>";
        $comments=$row['Comments'];
      
        echo "</tr>";
      }
      
      echo "</table>";
     
        ?>
  </body>
</html>
          