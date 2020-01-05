<html>
<title>Sterge pacient</title>
<head>
<link rel="stylesheet" type="text/css" href="../mystyle.css"><div class="content">
<div id="top_bar">
<ul>
  <li><a  href="../Home.php">Home</a></li>
  <li><a  class = "active" href="../Pacienti/Pacienti.php">Administrare pacienti</a></li>
  
</ul>
</div></div>

</head><div id="sidebar">
<ul>
  <li><a  href="Pacienti1.php">Afisare pacienti</a></li>
  <li><a href="Pacienti2.php">Cauta pacient</a></li>
  <li><a href="Pacienti3.php">Adauga pacient</a></li>
  <li><a class="active" href="Pacienti4.php">Sterge pacient</a></li>
  <li><a href="Pacienti5.php">Modifica date pacient</a></li>
</ul>


</div>
<div style="margin-left:25%;padding:1px 16px;height:1000px;">
<body background="../bg.jpg">
<center>
<form  method = post >
<h2>Stergeti un pacient</h2>
<input type="text" name ="id1" placeholder="Id pacient"></input><br><br>
<h4>sau</h4>
<input type="text" name ="nume1" placeholder="Nume"></input><br><br>

<input type="submit" value="Sterge pacient" name = "delll"></input><br>
</form>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CC";

	


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if(isset($_POST['delll'])){


	
	$nume1=$_POST['nume1'];
	$id1=$_POST['id1'];
	
	
	if($nume1 != NULL or $id1 != NULL){	
	
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$sql1 = "delete from pacienti where Nume='$nume1' or id_pacient='$id1' ";
$conn->query($sql1);
$s = mysqli_affected_rows($conn);

if($s > 0){
	
	echo "Pacient sters cu succes!";
	

}
else{
	echo"Pacientul nu poate fi sters!";
}

}
else
echo "Date introduse eronat!";




$conn->close();
}





?>

</center>
</body></div>
</html>



