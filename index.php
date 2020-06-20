<!DOCTYPE html>
<html>
<title>Led</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<?php 
$home="http://fbnserver.ddns.net:8090/";
$output = array();
echo "hola pi <br>";
exec("python holamundo.py",$output);
echo $output[0]; 


 ?>
<hr>
 <div class="w3-bar">
  <a href="<?php echo $home."?action=1" ?>"><button class="w3-button w3-black">Encender Led</button></a>
   <a href="<?php echo $home."?action=3" ?>"><button class="w3-button w3-teal">Apagar Led</button></a>
   <a href="<?php echo $home."?action=2" ?>"><button class="w3-button w3-red">Parpadear Led</button></a>
</div>
<hr>
 <div class="w3-bar">
  <a href="<?php echo $home."?action=4" ?>"><button class="w3-button w3-black">Activar relay</button></a>
   <a href="<?php echo $home."?action=5" ?>"><button class="w3-button w3-teal">Desactivar relay</button></a>
</div>
<hr>


<?php 
if (isset($_GET['action'])) {
    $action = $_GET['action'];
	if ($action==1) {
		exec("sudo python turn-on-led.py");
		echo "<h1>Led encendido</h1>";
	} else if($action==2) {
		exec("sudo python blink-led.py");
		echo "<h1>El led ha parpadeado</h1>";
	} else if($action==3)  {
		exec("sudo python turn-off-led.py");
		echo "<h1>Led apagado</h1>";
	} else if($action==4) {
		exec("sudo python turn-on-relay.py");
		echo "<h1>relay activado</h1>";
	} else if($action==5) {
		exec("sudo python turn-off-relay.py");
		echo "<h1>relay desactivado</h1>";
	} else {
		echo "<h1>Opción no disponible</h1>";
	}
	
}
 ?>

 </body>



