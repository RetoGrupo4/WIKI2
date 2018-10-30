<?php
$directorio = "../.git/refs/tags"; //ruta actual
$ficheros  = scandir($directorio, 1);
$version=array_values($ficheros)[0];
print_r( "Version: " .$version);
?>