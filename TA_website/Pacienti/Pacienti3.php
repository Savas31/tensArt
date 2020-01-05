<html>
<title>Adauga pacient</title>
<head>
<link rel="stylesheet" type="text/css" href="../mystyle.css"><div class="content">
<div id="top_bar">
<ul>
  <li><a  href="../Home.php">Home</a></li>
  <li><a  class = "active" href="../Pacienti/Pacienti.php">Administrare pacienti</a></li>
  
</ul>

</div></div>
</head>
<div id="sidebar">
<ul>
  <li><a  href="Pacienti1.php">Afisare pacienti</a></li>
  <li><a href="Pacienti2.php">Cauta pacient</a></li>
  <li><a class="active" href="Pacienti3.php">Adauga pacient</a></li>
  <li><a href="Pacienti4.php">Sterge pacient</a></li>
  <li><a href="Pacienti5.php">Modifica date pacient</a></li>
</ul>


</div>
<div style="margin-left:25%;padding:1px 16px;height:1000px;">
<body background = "../bg.jpg">

<center>
<h2>Adauga pacient</h2>
<form  method = post >
<input type="text" name ="id1" placeholder="ID pacient"></input><br><br>
<input type="text" name ="nume1" placeholder="Nume"></input><br><br>
<input type="text" name ="sex1" placeholder="Sex"></input><br><br>
<input type="text" name ="varsta1" placeholder="Varsta"></input><br><br>
<input type="text" name ="inaltime_cm1" placeholder="Inaltime_cm"></input><br><br>
<input type="text" name ="greutate_kg1" placeholder="Greutate_kg"></input><br><br>
<input type="text" name ="stare_emotionala1" placeholder="Stare_emotionala"></input><br><br>
<input type="text" name ="ta_sistolic1" placeholder="TA_sistolic"></input><br><br>
<input type="text" name ="ta_diastolic1" placeholder="TA_diastolic"></input><br><br>
<input type="text" name ="bpm1" placeholder="BPM"></input><br><br>
<input type="text" name ="verdict1" placeholder="Verdict"></input><br><br>
<input type="text" name ="tratament1" placeholder="Tratament"></input><br><br>
<input type="text" name ="observatii1" placeholder="Observatii"></input><br><br>

<input type="submit" value="Adauga pacient" name = "adddd"></input><br>
</form>
<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CC";

	


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if(isset($_POST['adddd'])){

	$id_pacient1=$_POST['id_pacient1'];
	$nume1=$_POST['nume1'];
	$sex1=$_POST['sex1'];
	$varsta1=$_POST['varsta1'];
	$inaltime_cm1=$_POST['inaltime_cm1'];
	$greutate_kg1=$_POST['greutate1'];
	$stare_emotionala1=$_POST['stare_emotionala1'];
	$ta_sistolic1=$_POST['ta_sistolic1'];
	$ta_diastolic1=$_POST['ta_diastolic1'];
	$bpm1=$_POST['bpm1'];
	$verdict1=$_POST['verdict1'];
	$tratament1=$_POST['tratament1'];
	$observatii1=$_POST['observatii1'];
	
	
	
	
if($id_pacient1 != NULL and $nume1 != NULL and $sex1 != NULL and $varsta1 != NULL){

	
	
	
		
	
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql1 = "INSERT INTO pacienti (id_pacient,Nume,Sex,Varsta,Inaltime_cm,Greutate_kg,Stare_emotionala,TA_sistolic,TA_diastolic,BPM,Verdict,Tratament,Observatii)
VALUES ('$id_pacient1','$nume1','$sex1','$varsta1','$inaltime_cm1','$greutate_kg1','$stare_emotionala1','$ta_sistolic1','$ta_diastolic1','$bpm1','$verdict1','$tratament1','$observatii1')";

if($conn->query($sql1) == TRUE){
	echo "User adaugat cu succes!";
	$sql = "SELECT * FROM pacienti where id_pacient = '$id_pacient1 and 'Nume = '$nume1'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>id_pacient</th><th>Nume</th><th>Sex</th><th>Varsta</th><th>Inaltime_cm</th><th>Greutate_kg</th><th>Stare_emotionala</th><th>TA_sistolic</th><th>TA_diastolic</th><th>BPM</th><th>Verdict</th><th>Tratament</th><th>Observatii</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id_pacient"]."</td><td>".$row["Nume"]."</td><td> ".$row["Sex"]."</td><td> ".$row["Varsta"]."</td><td> ".$row["Inaltime_cm"]."</td><td> ".$row["Greutate_kg"]."</td><td> ".$row["Stare_emotionala"]."</td><td> ".$row["TA_sistolic"]."</td><td> ".$row["TA_diastolic"]."</td><td> ".$row["BPM"]."</td><td> ".$row["Verdict"]."</td><td> ".$row["Tratament"]."</td><td> ".$row["Observatii"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "Nu exista rezultate!";
}

}
else{
	echo"Pacientul nu poate fi adaugat!";
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

