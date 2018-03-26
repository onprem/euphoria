<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login | Euphoria</title>
  <link href="style.css" rel="stylesheet" />
  <link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
  <script src="script.js"></script>
</head>
<body>
  <div class="topnav" id="top">
    <a href="index.html">HOME</a>
    <a href="events.html">EVENTS</a>
    <a href="register.php">REGISTER</a>
    <a href="login.php" class="active">LOGIN</a>
    <a href="team.html">OUR TEAM</a>
    <a href="dashboard.php">DASHBOARD</a>
    <a href="javascript:void(0);" class="icon" onclick="expand()">&#9776;</a>
  </div>
  <div align="center">
    <img src="images/logos.png" alt="logo" class="trans" />
  </div>
  <h1>Login</h1>
	<div align="center" class="form">
  <form method="post" action="login.php" autocomplete="off">
  	<?php include('errors.php'); ?>
  		<label for="uname">Username</label><br>
      <input type="text" id="uname" name="uname" placeholder="Username.." required minlength="6" maxlength="20"><br>

      <label for="pass">Password</label><br>
      <input type="password" id="pass" name="pass" placeholder="Password (min 6 characters) " required minlength="6" maxlength="30"><br>

  		<button type="submit" name="login_user">Login</button>

  	<p>
  		Not yet a member? <a href="register.php" style="color: white;">Sign up</a>
  	</p>
  </form>
</div>

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