<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];


	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registrationforms(firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $firstName, $lastName, $gender, $email, $password, $number);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration is successful...";
		$stmt->close();
		$conn->close();
		if ($execval) {
			echo '<script>alert("Registration is successful.");</script>';
			sleep(2);
			header('Location: index.html'); // Redirect to the homepage after 2 seconds
			exit;
		} else {
			echo "Error: Registration failed.";
		}
	}
?>