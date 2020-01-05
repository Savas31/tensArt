<html>
<title>Afisare pacienti</title>
<head>

<link rel="stylesheet" type="text/css" href="../mystyle.css"><div class="content">
<div id="top_bar">
<ul>
 <li><a  href="../Home.php">Home</a></li>
  <li><a  class = "active" href="../Pacienti/Pacienti.php">Administrare pacienti</a></li>
  
</ul></div></div></head>
<div id="sidebar">
<ul>
  <li><a  class="active" href="Pacienti1.php">Afisare pacienti</a></li>
  <li><a href="Pacienti2.php">Cauta pacient</a></li>
  <li><a href="Pacienti3.php">Adauga pacient</a></li>
  <li><a href="Pacienti4.php">Sterge pacient</a></li>
  <li><a href="Pacienti5.php">Modifica date pacient</a></li>
</ul>


</div>
<div style="margin-left:25%;padding:1px 16px;height:1000px;">
<body background="../bg.jpg">

<center>
<h2>Afisare pacienti</h2>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CC";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM pacienti";
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
$conn->close();
?>
</center>








</body>
</div>


</html>
