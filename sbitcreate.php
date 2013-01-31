<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Create Server Record</title>
</head>
  <body bgcolor="#lightgrey">
    
<?php
  
  $hostname="bitbytebit.kodingen.com";
  $username="k12584_sp";
  $password="4f919f1c00f6a";
  $dbname="k12584_sp";

  $dt=date("m/d/y");
  $servername=$_POST['serverName'];
  $chassis=$_POST['chassis'];
  $memory=$_POST['memory'];
  $drives=$_POST['drives'];
  $proc=$_POST['proc'];
  $netenv=$_POST['netEnv'];
  $ip="000.000.000.000";
  $vlan="000";
  $loc="P3SF09.05";
  $u="27";
  $serverowner=$_POST['serverOwner'];
  $email=$_POST['email'];
  $racked="0";
  $cabled="0";
  $labelst="0";
  $labeleth="0";
  $labelname="0";
  $raidclear="0";
  $inv="0";
  $built="0";
  $post="0";
  $live="0";
  $comments=$_POST['comments'];
  
  $connect = mysql_connect($hostname, $username, $password);
  if (!$connect) {
    die('Could not connect: '.mysql_error());
  }
  mysql_select_db($dbname, $connect);
  
  mysql_query("INSERT INTO Main (`Date`, `SName`, `Chassis`, `Mem`, `Drives`, `Proc`, `NetEnv`, `IP`, `VLAN`, `Loc`, `U`, `SOwner`, `Email`, `Racked`, `Cabled`, `LabelST`, `LabelEth`, `LabelName`, `RaidClear`, `Inv`, `Built`, `Post`, `Live`, `Comments`)  VALUES ('$dt', '$servername', '$chassis', '$memory', '$drives', '$proc', '$netenv', '$ip', '$vlan', '$loc', '$u', '$serverowner', '$email', '$racked', '$cabled', '$labelst', '$labeleth', '$labelname', '$raidclear', '$inv', '$built', '$post', '$live', '$comments')") or die (mysql_error());
echo "Server Added ...<br>";
  
  ?>