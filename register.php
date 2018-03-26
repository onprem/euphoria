<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register | Euphoria</title>
	<link href="style.css" rel="stylesheet" />
	<link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
    <script src="script.js"></script>
</head>
<body>
	<div class="topnav" id="top">
        <a href="index.html">HOME</a>
        <a href="events.html">EVENTS</a>
        <a href="register.php" class="active">REGISTER</a>
        <a href="login.php">LOGIN</a>
        <a href="team.html">OUR TEAM</a>
        <a href="dashboard.php">DASHBOARD</a>
        <a href="javascript:void(0);" class="icon" onclick="expand()">&#9776;</a>
    </div>
	<div align="center">
		<img src="images/logos.png" alt="logo" class="trans" />
	</div>
	<h1>Registration</h1>
	<div align="center" class="form">
    	<form action="register.php" method="post" autocomplete="off">
    		<?php include('errors.php'); ?>
    		<label for="name">Name</label><br>
    		<input type="text" id="name" name="name" placeholder="Your name.." required><br>

    		<label for="college">College</label><br>
    		<input type="text" id="college" name="college" placeholder="Your College.." required><br>

    		<label for="gender">Gender</label><br>
    		<select id="gender" name="gender" required>
      			<option value="male">Male</option>
      			<option value="female">Female</option>
      			<option value="other">Other</option>
    		</select><br>

    		<label for="uname">Username</label><br>
    		<input type="text" id="uname" name="uname" placeholder="Username.." required minlength="6" maxlength="20"><br>

            <label for="email">Email</label><br>
            <input type="text" id="email" name="email" placeholder="Email.." required minlength="6" maxlength="48" onblur="validateEmail(this);"><br>

    		<label for="pass">Password</label><br>
    		<input type="password" id="pass" name="pass" placeholder="Password (min 6 characters) " required minlength="6" maxlength="30"><br>

            <label for="pass">Confirm Password</label><br>
            <input type="password" id="confirm_pass" name="pass" placeholder="Confirm Password (min 6 characters) " required minlength="6" maxlength="30"><br>

    		<label for="mobile">Mobile no.</label><br>
    		<input type="text" id="mobile" name="mobile" placeholder="10 digit phone no..." required minlength="10" maxlength="10"><br>

  
    		<button type="submit" name="reg_user">Register</button>
  	</form>
	</div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">&#x25B2;</button>

    <script type="text/javascript">
        var password = document.getElementById("pass")
        , confirm_password = document.getElementById("confirm_pass");

        function validatePassword(){
            if(password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;

        x = document.getElementById("email");
        function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
            x.setCustomValidity("Invalid email!");
            return false;
        }
        else {
            x.setCustomValidity('');
        }

        return true;

}
</script>
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
</body>
</html>