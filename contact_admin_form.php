<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$("#contact, #Login").hide();
		<?php
			if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
				echo '$("#adminbtn").hide();'."\n";
				echo '$("#logoff").show();'."\n";
			} else {
				echo '$("#adminbtn").show();'."\n";
				echo '$("#logoff").hide();'."\n";
			}
			
			include 'admin.php';
		?>
		$("#contactbtn").click(function(){
			$("#contact").fadeIn(500);
		});
		$("#adminbtn").click(function(){
			$("#Login").fadeIn(500);
		});
		$(".bg").click(function(){
			$("#contact, #Login").fadeOut(500);
		});
	});
</script>
<div id = "contact">
	<div class = "container">
		<div>Contact</div>
		<form id = "contactForm" action = "contact.php" method = "post">
			<div><input type = "text" name = "name" placeholder = "Name"></div>
			<div><input type = "text" name = "email" placeholder = "Email"></div>
			<div><textarea name = "message" form = "contactForm" placeholder = "Please type your message here" cols = "38" rows = "5"></textarea></div>
			<div class = "submit" ><input type = "submit" value = "send"></div>
		</form>
	</div>
	<div class = "bg"></div>
</div>
<div id = "adminbtn">Admin</div>
<div id = "logoff"><a href = "logout.php">Log Out </a></div>
<div id = "Login">
	<div class = "container">
		<div>Admin Login</div>
		<form id = "adminForm" action = "index.php" method = "post">
			<div><input type = "text" name = "username" placeholder = "Username"></div>
			<div><input type = "password" name = "pw" placeholder = "Password"></div>
			<div class = "submit" ><input type = "submit" value = "Login"></div>
		</form>
	</div>
	<div class = "bg"></div>
</div>