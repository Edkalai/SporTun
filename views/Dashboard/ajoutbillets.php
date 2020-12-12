<?php
	$titre = $_POST['titre'];
	$descourte = $_POST['descourte'];
	$deslongue = $_POST['deslongue'];
	$prix = $_POST['prix'];
	$date = $_POST['date'];
	$photo = $_POST['photo'];

	// Database connection
	$conn = new mysqli('localhost','root','','sportun/events');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(titre, descourte, deslongue, date, prix, photo) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssib", $titre, $descourte, $deslongue, $date, $prix, $photo);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>