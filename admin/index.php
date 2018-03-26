<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../login.php');
    die();
  }
  include('../config.php');
  $username = $_SESSION['username'];
  $db = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
  $query1 = "SELECT * FROM admins WHERE username='$username'";
    $results1 = mysqli_query($db, $query1);
    if (mysqli_num_rows($results1) == 0) {
      header('location: ../dashboard.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard | Euphoria</title>
  <link href="style.css" rel="stylesheet" />
  <link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
  <script src="../script.js"></script>
</head>
<body>
  <div class="topnav" id="top">
    <a href="../index.html">HOME</a>
    <a href="../events.html">EVENTS</a>
    <a href="../register.php">REGISTER</a>
    <a href="../login.php">LOGIN</a>
    <a href="../team.html">OUR TEAM</a>
    <a href="../dashboard.php?logout='1'" style="float: right;">LOGOUT</a>
    <a href="../dashboard.php">DASHBOARD</a>
    <a href="javascript:void(0);" class="icon" onclick="expand()">&#9776;</a>
  </div>

  <div align="center">
    <img src="../images/logos.png" alt="logo" class="trans" />
  </div>
  <h1>Statistics</h1>
  <?php
    $query = "SELECT * FROM users";
    $result = mysqli_query($db, $query);
    $n = mysqli_num_rows($result);

    $query = "SELECT * FROM events WHERE blitzkrieg=1";
    $results = mysqli_query($db, $query);
    $nblitz = mysqli_num_rows($results);

    $query = "SELECT * FROM events WHERE voiceouts=1";
    $results = mysqli_query($db, $query);
    $nvoice = mysqli_num_rows($results);

    $query = "SELECT * FROM events WHERE gyration=1";
    $results = mysqli_query($db, $query);
    $ngyra = mysqli_num_rows($results);

    $query = "SELECT * FROM events WHERE djwars=1";
    $results = mysqli_query($db, $query);
    $ndj = mysqli_num_rows($results);

    $query = "SELECT * FROM events WHERE freshpaint=1";
    $results = mysqli_query($db, $query);
    $nfresh = mysqli_num_rows($results);

    $query = "SELECT * FROM events WHERE lca=1";
    $results = mysqli_query($db, $query);
    $nlca = mysqli_num_rows($results);

    $query = "SELECT * FROM events WHERE dubsmash=1";
    $results = mysqli_query($db, $query);
    $ndub = mysqli_num_rows($results);

    $query = "SELECT * FROM events WHERE shutter=1";
    $results = mysqli_query($db, $query);
    $nshut = mysqli_num_rows($results);
  ?>
  <div class="transa">
    <h3>Total Registrations</h3><br />
    <h1><?php echo $n; ?></h1>
  </div>
  <div class="trans">
    <table>
      <tr>
        <td><h3>Blitzkrieg</h3><br><h1><?php echo $nblitz; ?></h1></td>
        <td><h3>VoiceOuts</h3><br><h1><?php echo $nvoice; ?></h1></td>
        <td><h3>Gyration</h3><br><h1><?php echo $ngyra; ?></h1></td>
        <td><h3>DJ Wars</h3><br><h1><?php echo $ndj; ?></h1></td>
      </tr>
      <tr>
        <td><h3>Freshpaint</h3><br><h1><?php echo $nfresh; ?></h1></td>
        <td><h3>L.C.A.</h3><br><h1><?php echo $nlca; ?></h1></td>
        <td><h3>DubSmash</h3><br><h1><?php echo $ndub; ?></h1></td>
        <td><h3>Shutter</h3><br><h1><?php echo $nshut; ?></h1></td>
      </tr>
    </table>
  </div>
  <h1>Users</h1>
  <div class="trans">
    <table>
      <tr>
        <th>Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Mobile no.</th>
        <th>Gender</th>
      </tr>
      <?php
        while($row = mysqli_fetch_assoc($result)) {
          echo "<tr> <td>" . $row["name"]. "</td><td>" . $row["username"]. "</td><td>" . $row["email"]. "</td><td>". $row["mobile"]. "</td><td>". $row["gender"]. "</td></tr>";
        }
      ?>
    </table>
  </div>

<div class="footer">
  <table style="width: 100%;">
    <tr>
      <td style="font-size: 24px; text-align: center; color: white;"><a href="../index.html">Home</a></td>
      <td style="font-size: 24px; text-align: center; color: white;"><a href="https://www.facebook.com/euphoria"><img src="../facebook.png" class="icon" />euphoria18</a></td>
      <td style="font-size: 24px; text-align: center; color: white;"><a href="mailto:admin@euphoria18.tk">admin@euphoria18.tk</a></td>
    </tr>
    <tr>
      <td style="font-size: 24px; text-align: center; color: white;"><a href="../login.php">Login</a></td>
      <td style="font-size: 24px; text-align: center; color: white;"><a href="https://www.youtube.com/euphoria"><img src="../youtube.png" class="icon" />/euphoria18</a></td>
      <td style="font-size: 24px; text-align: center; color: white;">+91 9950598784</td>
    </tr>
    <tr>
      <td style="font-size: 24px; text-align: center; color: white;"><a href="../register.php">Register</a></td>
      <td style="font-size: 24px; text-align: center; color: white;"><a href="https://www.twitter.com/euphoria"><img src="../twitter.png" class="icon" />/euphoria</a></td>
      <td style="font-size: 24px; text-align: center; color: white;">AB Road, Gwalior</td>
    </tr>
    <tr>
      <td style="font-size: 24px; text-align: center; color: white;"><a href="index.php">Admin Dashboard</a></td>
      <td style="font-size: 24px; text-align: center; color: white;"><a href="https://www.instagram.com/euphoria"><img src="../instagram.png" class="icon" />/euphoria.18</a></td>
      <td style="font-size: 24px; text-align: center; color: white;">Madhya Pradesh</td>
    </tr>
    <tr>
      <td colspan="3" style="font-size: 18px;">&copy; Copyright Euphoria. All rights reserved.</td>
    </tr>
  </table>
</div>
</body>
</html>