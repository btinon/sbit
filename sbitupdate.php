

<html>
  <head>
    <title>Update Server Build Progress</title>
  </head>
  <body bgcolor="#aaccee">
    
    <?php
      echo "<form action='updatedb.php' method='POST'>";
      
      $sname=$_POST['sname'];
      $hostname="bitbytebit.kodingen.com";
      $username="k12584_sp";
      $password="4f919f1c00f6a";
      $dbname="k12584_sp";
      
      $connect = mysql_connect($hostname, $username, $password);
      if (!$connect) {
        die('Could not connect: '.mysql_error());
      }
      
      mysql_select_db($dbname, $connect);
      echo "$sname<br />";
      
      $query = "SELECT * FROM Main WHERE SName='$sname'";
      $result = mysql_query($query);
      if($result)
      {
        $break="<br />";
        $row = mysql_fetch_array($result);
        
        $indexID=$row['IndexID'];          
        $dt=$row['Date'];           
        $sname=$row['SName'];          
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
        $cabled=$row['Cabled'];           
        $labelst=$row['LabelST'];           
        $labeleth=$row['LabelEth'];           
        $labelname=$row['LabelName'];           
        $raidclear=$row['RaidClear'];           
        $inv=$row['Inv'];          
        $built=$row['Built'];           
        $post=$row['Post'];         
        $live=$row['Live'];          
        $comments=$row['Comments'];
        echo "<table width=80%>";
        
        echo "<tr>";
        echo "<td>Server Name:</td>"."<td><input type='text' name='usname' value=$sname></td>"."<td>Server Owner:</td>"."<td><input type='text' name='usowner' value=$sowner></td>"."<td>Owner Email:</td>"."<td><input type='text' name='uemail' value=$email></td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Chassis:</td>"."<td><input type='text' name='uchassis' value=$chassis></td>"."<td>Memory:</td>"."<td><input type='text' name='umemory' value=$memory></td>"."<td>IP:</td>"."<td><input type='text' name='uip' value=$ip></td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Proc:</td>"."<td><input type='text' name='uproc' value=$proc></td>"."<td>Drives:</td>"."<td><input type='text' name='udrives' value=$drives></td>"."<td>VLAN:</td>"."<td><input type='text' name='uvlan' value=$vlan></td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Network:</td>"."<td><input type='text' name='unetenv' value=$netenv></td>"."<td>Rack:</td>"."<td><input type='text' name='uloc' value=$loc></td>"."<td>U:</td>"."<td><input type='text' name='uu' value=$u></td>";
        echo "</tr>";
        echo "</table>";
        echo "<hr />";
      }
      else
      {
        echo "nope not here";
      }      
      
      echo "<table id=checkProgress>";
      
      echo "<tr>";
      
      if ($racked == 1)
      { echo "<td>Racked</td><td><input type='text' size=1 name='uracked' value='1'></td>"; }
      else
      { echo "<td>Racked</td><td><input type='text' size=1 name='uracked' value='0'></td>"; }
      echo "</tr>";
      
      echo "<tr>";
      if ($cabled == 1)
      { echo "<td>Cabled</td><td><input type='text' size=1 name='ucabled' value='1'></td>"; }
      else
      { echo "<td>Cabeled</td><td><input type='text' size=1 name='ucabled' value='0'></td>"; }
      echo "</tr>";
      
      echo "<tr>";
      if ($labelst == 1)
      { echo "<td>labelst</td><td><input type='text' size=1 name='ulabelst' value='1'></td>"; }
      else
      { echo "<td>labelst</td><td><input type='text' size=1 name='ulabelst' value='0'></td>"; }
      echo "</tr>";
      
      echo "<tr>";
      if ($labeleth == 1)
      { echo "<td>labeleth</td><td><input type='text' size=1 name='ulabeleth' value='1'></td>"; }
      else
      { echo "<td>labeleth</td><td><input type='text' size=1 name='ulabeleth' value='0'></td>"; }
      echo "</tr>";
      
      echo "<tr>";
      if ($labelname == 1)
      { echo "<td>labelname</td><td><input type='text' size=1 name='ulabelname' value='1'></td>"; }
      else
      { echo "<td>labelname</td><td><input type='text' size=1 name='ulabelname' value='0'></td>"; }
      echo "</tr>";
      
      echo "<tr>";
      if ($raidclear == 1)
      { echo "<td>raidclear</td><td><input type='text' size=1 name='uraidclear' value='1'></td>"; }
      else
      { echo "<td>raidclear</td><td><input type='text' size=1 name='uraidclear' value='0'></td>"; }
      echo "</tr>";
      
      echo "<tr>";
      if ($inv == 1)
      { echo "<td>inv</td><td><input type='text' size=1 name='uinv' value='1'></td>"; }
      else
      { echo "<td>inv</td><td><input type='text' size=1 name='uinv' value='0'></td>"; }
      echo "</tr>";
      
      echo "<tr>";
      if ($built == 1)
      { echo "<td>built</td><td><input type='text' size=1 name='ubuilt' value='1'></td>"; }
      else
      { echo "<td>built</td><td><input type='text' size=1 name='ubuilt' value='0'></td>"; }
      echo "</tr>";
      
      echo "<tr>";
      if ($post == 1)
      { echo "<td>post</td><td><input type='text' size=1 name='upost' value='1'></td>"; }
      else
      { echo "<td>post</td><td><input type='text' size=1 name='upost' value='0'></td>"; }
      echo "</tr>";
      
      echo "<tr>";
      if ($live == 1)
      { echo "<td>live</td><td><input type='text' size=1 name='ulive' value='1'></td>"; }
      else
      { echo "<td>live</td><td><input type='text' size=1 name='ulive' value='0'></td>"; }
      echo "</tr>";
      echo "</table>";
      echo "Comments:<br />";
    echo "<textarea name='ucomments' cols=50 rows=5 wrap=physical>Type your comments here</textarea>";
      
      echo "<input type='submit' name='srv' value='Update'>";
      echo "</form";
      
      mysql_close($connect);
            
           
            ?>
    
    </body>
    </html>   
      
      
      