<?php
session_start();

if (isset($_SESSION['id'])) {
 		header('location:home.php');
 	}
?>
<html style="background: url(asset/bg.jpg); background-repeat: no-repeat; background-size:cover;overflow-x:hidden;">
<title>Barangay Management Information System</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" type="text/css" href="Css/homepage.css">
<link rel="stylesheet" type="text/css" href="Css/position.css">
<link rel="shortcut icon">
<!-- <script src="css/ism-2.2.min.js"></script>
<link rel="stylesheet" href="Css/slider.css">  -->
<style type="text/css">
	.nav {
  background-color:#2e4a62;
  border: none;
  width: 100%;
  position:fixed;
  overflow: hidden;
  top: 0;
  left: 0;
  text-transform: uppercase;
}
</style>

<nav class="navtop navigationtop navigationtop-default navigationtop-fixed-top" style="">
          <div class="box boxattrib">
              <div class="navigationtop-nav navtopul">

                  <a class="navigationtop-brand navbrnad" href="/" style=""><strong class="navbrandgreen">San</strong>Isidro</a>
              </div>
              <div id="navigationtop navtopunique" class="navigationtop-collapse collapse" style="float:right">
                  <ul class="navigationtop-nav navtopul" style="font-size:16px">
                      <li class="navtopli" style=""><a href="index.php" class="navlabel" style="" target="_Parent">Home</a></li>
                      <li class="navtopli" style=""><a href="index.php#section2" class="navlabel" style="" target="_Parent">About</a></li>
                      <li class="navtopli" style=""><a href="index.php#loc" class="navlabel" style="" target="_Parent">Contact</a></li>
                      <?php


                      if (isset($_SESSION['id'])) {
                      echo '

                      <li class="navtopli" style=""><a href="home.php" class="navlabel" style="" target="_Parent">Dashboard</a></li>
                      <li class="navtopli" style=""><a href="#" class="navlabel" style="">Log Out</a></li>';
                      }
                      else{

                      echo '
                      <li class="navtopli" style=""><a href="login.php" class="navlabel" style="">Log In</a></li>';
                      }
                      ?>
                      </li>
                  </ul>
                  <ul class="navigationtop-nav navigationtop-right navtopul" style="">
                      <li class="navtopli" style="">
                      </li>
                      <li class="navtopli" style="">
                      </li>

                  </ul>
              </div>
              <!--/.nav-collapse -->
          </div>
      </nav>
<body style="background-color:#fff0;">


<div class="cont">	
</div>
	<div class="right" style="opacity: 0.90;" >
	<section class="banner">Sign In</section> </br> </br>
	<Center><img src="asset/icon.jpg" height="100" width="100" ></center>
	<form method="POST">
			<input type="text" name="username" required autofocus placeholder="Enter Username">
			<input type="password" name="password" required autofocus placeholder="Enter Password">
			
			<input type="Submit" name="submit" value="Enter">
			<script>
function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "Passwordrd";
    }
}
</script>
	</div>

		</form>
</div>

<?php
include('db.php');

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$qry = mysqli_query($db, "SELECT * FROM Accounts WHERE Username ='$username'");
	$count = mysqli_num_rows($qry);

	if ($count > 0) {
		$accnt = mysqli_fetch_array($qry);
		$pass=$accnt['Password'];

		
		$_SESSION['id'] = $accnt['ID'];


		if($pass==$password && $username==$username){
				
		$pos = $accnt['position_id'];
				$position=$accnt['Position'];
				$committee=$accnt['Committee'];
				$fullname = $accnt['Fullname'];
				$_SESSION['LOGIN_STATUS'] = true;
				$_SESSION['position'] = $position;
				$_SESSION['USER'] = $username;
				$_SESSION['committee'] = $committee;
				$_SESSION['password'] = $password;
				$_SESSION['emailaddress'] = $count['Emailaddress'];
				$_SESSION['device_Id'] = $count['Position'];
				$_SESSION['positionID'] = $pos;
				$_SESSION['fullname'] = $fullname;
				$_SESSION['position_id'] = $accnt['position_id'];


		}
		else {
		echo "<script>alert('Incorrect Password.');</script>";
		}

	}
	else {
	echo "<script>alert('Invalid username.');</script>";
	}

} 
?>

</body>
</html>


