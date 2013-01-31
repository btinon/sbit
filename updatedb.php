<html>
  <head>
    <title>Update Server Build Progress</title>
  </head>
  <body bgcolor="#aaddaa">
    <?php
      
      $usname=$_POST['usname'];
      $uchassis=$_POST['uchassis'];
      $umemory=$_POST['umemory'];
      $udrives=$_POST['udrives'];
      $uproc=$_POST['uproc'];
      $unetenv=$_POST['unetenv'];
      $uip=$_POST['uip'];
      $uvlan=$_POST['uvlan'];
      $uloc=$_POST['uloc'];
      $uu=$_POST['uu'];
      $usowner=$_POST['usowner'];
      $uemail=$_POST['uemail'];
      
      $uracked=$_POST['uracked'];
      $ucabled=$_POST['ucabled'];
      $ulabelst=$_POST['ulabelst'];
      $ulabeleth=$_POST['ulabeleth'];
      $ulabelname=$_POST['ulabelname'];
      $uraidclear=$_POST['uraidclear'];
      $uinv=$_POST['uinv'];
      $ubuilt=$_POST['ubuilt'];
      $upost=$_POST['upost'];
      $ulive=$_POST['ulive'];
      $ucomments=$_POST['ucomments'];
      
      

      
      echo "Saving ... $usname";
      echo "<br />";
      echo $uchassis;
      echo "<br />";
      echo $umemory;
      echo "<br />";
      echo $udrives;
      echo "<br />";
      echo $uproc;
      echo "<br />";
      echo $unetenv;
      echo "<br />";
      echo $uip;
      echo "<br />";
      echo $uvlan;
      echo "<br />";
      echo $uloc;
      echo "<br />";
      echo $uu;
      echo "<br />";
      echo $usowner;
      echo "<br />";
      echo $uemail;
      echo "<br />";
      echo $uracked;
      echo "<br />";
      echo $ucabled;
      echo "<br />";
      echo $ulabelst;
      echo "<br />";
      echo $ulabeleth;
      echo "<br />";
      echo $ulabelname;
      echo "<br />";
      echo $uraidclear;
      echo "<br />";
      echo $uinv;
      echo "<br />";
      echo $ubuilt;
      echo "<br />";
      echo $upost;
      echo "<br />";
      echo $ulive;
      echo "<br />";
      echo $ucomments;
      
      
      $hostname="bitbytebit.kodingen.com";
      $username="k12584_sp";
      $password="4f919f1c00f6a";
      $dbname="k12584_sp";
      
      $connect = mysql_connect($hostname, $username, $password);
      if (!$connect) {
        die('Could not connect: '.mysql_error());
      }
      
      mysql_select_db($dbname, $connect);
      
      mysql_query("Update Main SET Date='$udt', SName='$usname', Chassis='$uchassis', Mem='$umemory', Drives='$udrives', Proc='$uproc', NetEnv='$unetenv', IP='$uip', VLAN='$uvlan', Loc='$uloc', U='$uloc', SOwner='$usowner', Email='$uemail', Racked='$uracked', Cabled='$ucabled', LabelST='$ulabelst', LabelEth='$ulabeleth', LabelName='$ulabelname', RaidClear='$uraidclear', Inv='$uinv', Built='$ubuilt', Post='$upost', Live='$ulive', Comments='$ucomments' WHERE SName='$usname'");   
      
      $result = mysql_query($query);
      
     mysql_close($connect);
         
    ?>
    <form action="index.html" method="post">
      <input type="submit" value="back to main">
    </form>
  </body>
</html>