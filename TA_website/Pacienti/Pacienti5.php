<html>
<title>Modifica pacient</title>
<head>
<link rel="stylesheet" type="text/css" href="../mystyle.css"><div class="content">
<div id="top_bar">
<ul>
  <li><a  href="../Home.php">Home</a></li>
  <li><a  class = "active" href="../Pacienti/Pacienti.php">Administrare pacienti</a></li>
  
</ul></div></div>
</head><div id="sidebar">
<ul>
  <li><a  href="Pacienti1.php">Afisare pacienti</a></li>
  <li><a href="Pacienti2.php">Cauta pacient</a></li>
  <li><a href="Pacienti3.php">Adauga pacient</a></li>
  <li><a href="Pacienti4.php">Sterge pacient</a></li>
  <li><a class="active" href="Pacienti5.php">Modifica date pacient</a></li>
</ul>


</div>
<div style="margin-left:25%;padding:1px 16px;height:1000px;">
<body background="../bg.jpg">
<center>

<h2>Modificati un pacient</h2>
<form  method = post >
<h4>Introduceti id pacient existent</h4>
<input type="text" name ="id1" placeholder="ID pacient existent"></input>
<h4>Introduceti date noi pentru pacientul selectat</h4>
<input type="text" name ="nume1" placeholder="Nume_nou"></input><br>
<input type="text" name ="sex1" placeholder="Sex_nou"></input><br>
<input type="text" name ="varsta1" placeholder="Varsta_noua"></input><br>
<input type="text" name ="inaltime_cm1" placeholder="Inaltime_noua"></input><br>
<input type="text" name ="greutate_kg1" placeholder="Greutate_kg_noua"></input><br>
<input type="text" name ="stare_emotionala1" placeholder="Stare_emotionala_noua"></input><br>
<input type="text" name ="ta_sistolic1" placeholder="TA_sistolic_noua"></input><br>
<input type="text" name ="ta_diastolic1" placeholder="TA_diastolic_noua"></input><br>
<input type="text" name ="bpm1" placeholder="BPM_nou"></input><br>
<input type="text" name ="verdict1" placeholder="Verdict_nou"></input><br>
<input type="text" name ="tratament1" placeholder="Tratament_nou"></input><br>
<input type="text" name ="observatii1" placeholder="Observatii_noi"></input><br><br>

<input type="submit" value="Modifica inregistrari" name = "moddd"></input><br>
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
if(isset($_POST['moddd'])){


	$id1=$_POST['id1'];
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
	
	
if($nume1 != NULL and $sex1 != NULL and $varsta1 != NULL and $id1 != NULL){
	
	
	
		
	
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql1 = "update pacienti set Nume = '$nume1',Sex='$sex1',Varsta='$varsta1',Inaltime_cm='$inaltime_cm1',Greutate_kg='$greutate_kg1',Stare_emotionala='$stare_emotionala1',TA_sistolic='$ta_sistolic1',TA_diastolic='$ta_diastolic1',BPM='$bpm1',Verdict='$verdict1',Tratament='$tratament1',Observatii='$observatii1' where id_pacient='$id1'";
$conn->query($sql1);

if($conn->query($sql1) == TRUE){
	echo "Datele pacientului au fost modificate cu succes!";
	$sql = "SELECT * FROM pacienti where Nume = '$nume1' and id_pacient ='$id1'";
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
	echo"Datele pacientului nu pot fi modificate!";
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
