<html>
<head>
<title>Administrare pacienti</title>
<link rel="stylesheet" type="text/css" href="../mystyle.css"><div class="content">
<div id="top_bar">
<ul>
  <li><a  href="../Home.php">Home</a></li>
  <li><a  class = "active" href="Pacienti.php">Administrare pacienti</a></li>
  
</ul>
</div></div>

</head>
<div id="sidebar">
<ul>
  <li><a  href="Pacienti1.php">Afisare pacienti</a></li>
  <li><a href="Pacienti2.php">Cauta pacient</a></li>
  <li><a href="Pacienti3.php">Adauga pacient</a></li>
  <li><a href="Pacienti4.php">Sterge pacient</a></li>
  <li><a href="Pacienti5.php">Modifica date pacient</a></li>
</ul>


</div>
<div style="margin-left:25%;padding:1px 16px;height:1000px;">

<center>
<body background=../bg.jpg>
<h2>Management Pacienti</h2>
<br><br>
<form  method = post action ="Pacienti1.php">
<input type="submit"  style="height: 40px; width: 146px;" value="Afiseaza pacienti" name = "print_p"></input><br>
</form>

<form  method = post action ="Pacienti2.php">
<input type="submit"  style="height: 40px; width: 146px;" value="Cauta pacienti" name = "search_p"></input><br>
</form>

<form  method = post action ="Pacienti3.php">
<input type="submit"  style="height: 40px; width: 146px;" value="Adauga pacient" name = "addd"></input><br>
</form>

<form  method = post action ="Pacienti4.php">
<input type="submit" style="height: 40px; width: 146px;" value="Sterge pacient" name = "dell"></input><br>
</form>

<form  method = post action ="Pacienti5.php">
<input type="submit" style="height: 40px; width: 146px;" value="Modifica date pacient" name = "modd"></input><br>
</form>
</body>
</center></div>

</html>



