<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard | Euphoria</title>
	<link href="style.css" rel="stylesheet" />
  <link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
  <script src="script.js"></script>
</head>
<body>
  <div class="topnav" id="top">
    <a href="index.html">HOME</a>
    <a href="events.html">EVENTS</a>
    <a href="register.php">REGISTER</a>
    <a href="login.php">LOGIN</a>
    <a href="team.html">OUR TEAM</a>
    <a href="dashboard.php?logout='1'" style="float: right;">LOGOUT</a>
    <a href="dashboard.php" class="active">DASHBOARD</a>
    <a href="javascript:void(0);" class="icon" onclick="expand()">&#9776;</a>
  </div>

  <div align="center">
    <img src="images/logos.png" alt="logo" class="trans" />
  </div>
  <!--<h1>Dashboard</h1>-->
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
</div>
<?php 
include('config.php');

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$username = $_SESSION['username'];
$sql = "SELECT name, college, gender, mobile, image FROM users WHERE username='$username'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$name = $row['name'];
$college = $row['college'];
$gender = $row['gender'];
$mobile = $row['mobile'];
$image = $row['image'];
if ($image == "unset") {
  if ($gender == "male") {
    $image = "uploads/default-male.png";
  } else {
    $image = "uploads/default-female.png";
  }
  
} else {
  $image = "uploads/".$username.".jpg";
}

$sql2 = "SELECT blitzkrieg, voiceouts, gyration, djwars, freshpaint, lca, dubsmash, shutter FROM events WHERE user='$username'";
$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();
$blitzkrieg = $row2['blitzkrieg'];
$voiceouts = $row2['voiceouts'];
$gyration = $row2['gyration'];
$djwars = $row2['djwars'];
$freshpaint = $row2['freshpaint'];
$lca = $row2['lca'];
$dubsmash = $row2['dubsmash'];
$shutter = $row2['shutter'];

?>
<div class="trans" align="center" style="margin-left: 25%; margin-right: 25%;">
  <div class="polaroid">
  <img src=<?php echo '"'.$image.'"'; ?> class="profile" style="max-width: 250px;" >
  <div class="container">
  <a href="uploads.php">Upload</a>
  </div>
  </div>
  <h1 style="margin-top: 0px; margin-bottom: 0px;"><?php echo $name; ?></h1>
  <h2 style="margin-top: 0px; margin-bottom: 0px;"><?php echo $college; ?></h2>
  <h2 style="margin-top: 0px; margin-bottom: 0px;"><?php echo $mobile; ?></h2>
</div>
		<h1 style="margin-top: 30px; margin-bottom: 0px;" id="a">Events</h1>
  <div class="trans" style="margin-right: 15%; margin-left: 15%; margin-top: 0px;">
    <table class="dashtable">
      <tr>
        <td class="dtd">Blitzkrieg</td>
        <td class="dtd">
          <?php 
            if ($blitzkrieg == 0) {
              echo "<button class='reg'> <a href='reg.php?event=1'>Register</a> </button>";
            } else {
              echo "Registered";
            }
          ?>
        </td>
      </tr>
      <tr>
        <td class="dtd">Voice Outs</td>
        <td class="dtd">
          <?php 
            if ($voiceouts == 0) {
              echo "<button class='reg'> <a href='reg.php?event=2'>Register</a> </button>";
            } else {
              echo "Registered";
            }
          ?>
        </td>
      </tr>
      <tr>
        <td class="dtd">Gyration</td>
        <td class="dtd">
          <?php 
            if ($gyration == 0) {
              echo "<button class='reg'> <a href='reg.php?event=3'>Register</a> </button>";
            } else {
              echo "Registered";
            }
          ?>
        </td>
      </tr>
      <tr>
        <td class="dtd">DJ Wars</td>
        <td class="dtd">
          <?php 
            if ($djwars == 0) {
              echo "<button class='reg'> <a href='reg.php?event=4'>Register</a> </button>";
            } else {
              echo "Registered";
            }
          ?>
        </td>
      </tr>
      <tr>
        <td class="dtd">Fresh Paint</td>
        <td class="dtd">
          <?php 
            if ($freshpaint == 0) {
              echo "<button class='reg'> <a href='reg.php?event=5'>Register</a> </button>";
            } else {
              echo "Registered";
            }
          ?>
        </td>
      </tr>
      <tr>
        <td class="dtd">Lights Camera Action!</td>
        <td class="dtd">
          <?php 
            if ($lca == 0) {
              echo "<button class='reg'> <a href='reg.php?event=6'>Register</a> </button>";
            } else {
              echo "Registered";
            }
          ?>
        </td>
      </tr>
      <tr>
        <td class="dtd">DubSmash</td>
        <td class="dtd">
          <?php 
            if ($dubsmash == 0) {
              echo "<button class='reg'> <a href='reg.php?event=7'>Register</a> </button>";
            } else {
              echo "Registered";
            }
          ?>
        </td>
      </tr>
      <tr>
        <td class="dtd">Shutter</td>
        <td class="dtd">
          <?php 
            if ($shutter == 0) {
              echo "<button class='reg'> <a href='reg.php?event=8'>Register</a> </button>";
            } else {
              echo "Registered";
            }
          ?>
        </td>
      </tr>
    </table>
  </div>
<script type="text/javascript" language="javascript">
      var aax_size='728x90';
      var aax_pubname = 'prmsrswt-21';
      var aax_src='302';
    </script>
    <script type="text/javascript" language="javascript" src="http://c.amazon-adsystem.com/aax2/assoc.js"></script>
<div class="footer">
  <table style="width: 100%;">
    <tr>
      <td><a href="index.html">Home</a></td>
      <td><a href="https://www.facebook.com/euphoria"><img src="facebook.png" class="icon" />euphoria18</a></td>
      <td><a href="mailto:admin@euphoria18.tk">admin@euphoria18.tk</a></td>
    </tr>
    <tr>
      <td><a href="login.php">Login</a></td>
      <td><a href="https://www.youtube.com/euphoria"><img src="youtube.png" class="icon" />/euphoria18</a></td>
      <td>+91 9950598784</td>
    </tr>
    <tr>
      <td><a href="register.php">Register</a></td>
      <td><a href="https://www.twitter.com/euphoria"><img src="twitter.png" class="icon" />/euphoria</a></td>
      <td>AB Road, Gwalior</td>
    </tr>
    <tr>
      <td><a href="admin/index.php">Admin Dashboard</a></td>
      <td><a href="https://www.instagram.com/euphoria"><img src="instagram.png" class="icon" />/euphoria.18</a></td>
      <td>Madhya Pradesh</td>
    </tr>
    <tr>
      <td colspan="3" style="font-size: 18px;">&copy; Copyright Euphoria. All rights reserved.</td>
    </tr>
  </table>
</div>

<button onclick="topFunction()" id="myBtn" title="Go to top">&#x25B2;</button>
</body>
</html>