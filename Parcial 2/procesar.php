<?php
$servicios=[

"Examen de la vista - Bs 50",

"Armazón clásico - Bs 180",

"Lentes de sol - Bs 120"

];

echo "<h1>Cita reservada en Óptica Mirasol</h1>";

echo "<p>Nombre: ".$_POST["nombre"]."</p>";

echo "<p>Correo: ".$_POST["correo"]."</p>";

echo "<p>Consulta: ".$_POST["consulta"]."</p>";

echo "<h2>Servicios</h2>";

foreach($servicios as $servicio){

echo "<p>$servicio</p>";

}

echo "<p>Te atiende Jhonny Tito Castro</p>";
