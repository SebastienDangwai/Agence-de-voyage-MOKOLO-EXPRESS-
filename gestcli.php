<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mokoloexpress";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
} 
?>
<!DOCTYPE html>
<html>
<head>
	<title>chcode_appli</title>
	<link rel="stylesheet" type="text/css" href="cssfile.css">
	<meta charset="utf8">
</head>

<body>

		<?php 

	//l'affichage de la liste des voyages éffectués
	     $rq=mysqli_query($conn,"select * from client order by id desc");
	print'<table border="1" class="tab">
	<th>Destination</th><th>Noms passagers</th><th>numero client</th><th>bagage</th></tr>';
	     while($rst=mysqli_fetch_assoc($rq)){
	     
	        $idvoy=$rst['id'];
	        $villedep=$rst['destination'];
	        $villedest=$rst['noms'];
	        $nbpassagers=$rst['numtel'];
	        $annee=$rst['bagage'];
	        
	         print"<tr>";
	         echo"<td>$idvoy</td>";
	         echo"<td>$villedep</td>";
	         echo"<td>$villedest</td>";
	         echo"<td>$nbpassagers</td>";
	         echo"<td>$annee</td>";
	       
	         print"</tr>";
	         
	     }
	   print'</table>';
	?>
	
	</body>
</html>