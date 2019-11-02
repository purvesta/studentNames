<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cs471";

function dbConnect(){
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	return $conn;
}

function echoJSAssocArray(){
	/*SQL QUERY to get student records*/
	$conn = dbConnect();

	$sql = "SELECT * FROM students";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    	// Do something with the data
	} else {
	    echo "0 results";
	}

}

?>
<html>
	<head>
	</head>
	<body>
		<div id="flashcard-front">
			<img src="" width="50" height="50" alt="Student Picture" />
		</div>
		<div id="flashcard-back">
			<h2 id="name">Tanner Purves</h2>
		</div>
		<button id="flip" onclick="flipCard()">Flip</button>
		</div>

		<script type="text/javascript">
			var front = document.getElementById('flashcard-front');
			var back = document.getElementById('flashcard-back');
			front.style.display = 'block';
			back.style.display = 'none';
			function flipCard() {
				if(front.style.display == 'block'){
					front.style.display = 'none';
					back.style.display = 'block';
				}
				else{
					front.style.display = 'block';
					back.style.display = 'none';
				}
			}
		</script>
	</body>
</html>
