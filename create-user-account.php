<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="create-user-account.css">
    <title>Create User Account</title>
</head>
<body>
	<?php

use function PHPSTORM_META\elementType;

include "navbaar.php";
	?>
<div class="main_div">
	<div class="box">
		<h1>Create User Account</h1>
		<form method="POST" action="">
			<div class="inputBox">
				<input type="text" name="name" autocomplete="off" required>
				<label>UserName</label>
			</div>
			<div class="inputBox">
				<input type="email" name="email" autocomplete="off" required>
				<label>Email</label>
			</div>
			<div class="inputBox">
				<input type="number" name="balance" autocomplete="off" required>
				<label>Balance</label>
			</div>
			<div class="button">
			<input type="submit" name="submit" value="Create">
			<input type="reset" name="reset" value="Reset">
			</div>
		</form>
	</div>
</div>
<?php
include "footer.php";
?>
</body>
</html>


<?php

include "configration.php";
if(isset($_POST["submit"])){
	$name = $_POST["name"];
	$email = $_POST["email"];
	$balance = $_POST["balance"];

	$insertquery = "INSERT INTO `users`(`name`, `email`, `balance`) 
	VALUES ('$name','$email','$balance')";

	$result = mysqli_query($conn, $insertquery);

	if($result){
		?>
		<script>
			alert("User Created successfully");
		</script>
		<?php
	}else{
		?>
		<script>
			alert("WE are sorry the User is not Created");
		</script>
		<?php
	}
}

?>