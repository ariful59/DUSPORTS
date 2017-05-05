<html>

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<?php
	//$con=mysqli_connect("localhost","root","","WebProject");
    $conn = new mysqli('localhost', 'dusports', 'dusports', 'dusports');

	$result = $conn->query("select * from notice;");

	while($row = $result->fetch_assoc()){
		echo "<div class=\"jumbotron text-center\">";
		echo "<p>".$row['Date']."<br> ".$row['Notice']."<br></p>";
		echo "</div>";
	}

?>
</body>


</html>




