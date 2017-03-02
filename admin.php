<?php
	if (!empty($_POST)) {
		include 'connectStr.php';
		
		$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
		$pw = filter_var($_POST['pw'], FILTER_SANITIZE_STRING);
		
		$sql = "SELECT UserName, Password FROM Resume.Admin WHERE UserName = '".$username."' AND Password = '".md5($pw)."'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo '$("#adminbtn").hide();'."\n";
				echo '$("#logoff").show();'."\n";
			}
			$_SESSION['loggedin'] = true;
		} else {
			echo "No matching username or password.";
		}
		$conn->close();
	}
?>