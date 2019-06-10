<?php
// eliminar todos los archivos de un directorio
//Primero elimina los archivos sueltos que son enviavos
//Luego progresibamente elimina los directorios

$listaarchi=($_POST['archivo']);
$listadir=($_POST['direc']);
$directorio=($_POST['directorio']);
require_once("func/funciones.php");
require_once('Carpeta.php');
require_once("func/eliminarArchivos.php");
require_once("func/deldir.php");
//Chequear que mande algo el usuario para elminar

if(count($listaarchi)=='0' && $listadir== ""){Echo "No selecciono nada para eliminar";}

$carpeta = new Carpeta;

//Muestra los archivos,sueltos, y despues llama a la funcion para eliminarlos
$x=0;
while($x < count($listadir))
{$carpeta -> vaciarCarpeta($directorio, $listadir[$x]);$x++;}



//$carpeta -> eliminararchivos($directorio, $listaarchi);



//eliminarArchivos($directorio, $listaarchi);
/*
//Hay que eliminar los directorios
$x=0;
while($x < count($listadir))
{ echo "<br>"; 
	if(!@rmdir($directorio."/".$listadir[$x])=='0')
		{$x++;}
	else
		{$temp = seleccionar($directorio."/".$listadir[$x]); eliminarArchivos($directorio."/".$listadir[$x], $temp[1]);
			if(empty($directorio."/".$listadir[$x]))
			{ rmdir($directorio."/".$listadir[$x]); $x++;}
				else { deldir($directorio."/".$listadir[$x]); $x++;}
};
}*/


?> 
