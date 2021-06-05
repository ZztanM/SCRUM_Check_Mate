<?php 
 $conexion = new PDO('mysql:host=localhost;dbname=check_mate_v2','root','');
   date_default_timezone_set('America/Argentina/Buenos_Aires');
 $conexion->exec('SET CHARACTER SET utf8');

 ?>