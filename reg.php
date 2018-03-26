<?php 
session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  include('config.php');
  $user = $_SESSION['username'];
  $e = $_GET['event'];

  $db = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);



  $event = 'blitzkrieg';
  if ($e == 1) {
  	$query = "UPDATE events SET blitzkrieg=1 WHERE user='$user'";
  	mysqli_query($db, $query);

  } elseif ($e == 2) {
  	$query = "UPDATE events SET voiceouts=1 WHERE user='$user'";
  	mysqli_query($db, $query);
  	
  } elseif ($e == 3) {
  	$query = "UPDATE events SET gyration=1 WHERE user='$user'";
  	mysqli_query($db, $query);
  	
  } elseif ($e == 4) {
  	$query = "UPDATE events SET djwars=1 WHERE user='$user'";
  	mysqli_query($db, $query);
  	
  } elseif ($e == 5) {
  	$query = "UPDATE events SET freshpaint=1 WHERE user='$user'";
  	mysqli_query($db, $query);
  	
  } elseif ($e == 6) {
  	$query = "UPDATE events SET lca=1 WHERE user='$user'";
  	mysqli_query($db, $query);
  	
  } elseif ($e == 7) {
  	$query = "UPDATE events SET dubsmash=1 WHERE user='$user'";
  	mysqli_query($db, $query);
  	
  } elseif ($e == 8) {
  	$query = "UPDATE events SET shutter=1 WHERE user='$user'";
  	mysqli_query($db, $query);
  	
  }
  header("location: dashboard.php#a");
?>