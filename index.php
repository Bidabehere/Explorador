<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>

<HEAD>
  <STYLE TYPE="text/css">
    a:link {
      color: blue;
      text-decoration: none
    }

    a:active {
      color: black;
      text-decoration: none
    }

    a:visited {
      color: blue;
      text-decoration: none
    }

    a:hover {
      color: black;
      text-decoration: underline
    }
  </STYLE>
  <TITLE> Explorador </TITLE>
  <META NAME="Generator" CONTENT="EditPlus">
  <META NAME="Author" CONTENT="Juan Pablo Bidabehere">
  <META NAME="Keywords" CONTENT="">
  <META NAME="Description" CONTENT="">

</HEAD>

<BODY>
  <?php
  require_once 'Carpeta.php';

  $folder = "<img src=\"folder.gif\" border=\"0\" >";
  $file = "<img src=\"page.gif\">";


  //Verifico el direcctorio sino uso el raiz
  /*  if (empty($_GET['dir'])) {
    $dir = $_SERVER['DOCUMENT_ROOT'];
  } else {
    $dir = (isset($_GET['dir'])) ? $_GET['dir'] : "";
  }
  */


  (empty($_GET['dir'])) ? $dir = $_SERVER['DOCUMENT_ROOT'] : $dir = $_GET['dir'];
  unset($_GET['dir']);





  echo "Archivos:<br><br>";
  echo $dir . "<br><br><br>";
  require("func/funciones.php");
  //$temp = seleccionar($dir);


  $carpeta = new Carpeta;

  $temp = $carpeta->listar($dir);
  $a = 0;
  $direc = $temp[0];
  $e = 0;
  $archi = $temp[1];


  echo "<form action=\"eliminaTodoUnDir.php\" method=\"post\">";
  while ($a < count($direc)) {
    echo "<input type=\"checkbox\" name =\"direc[]\" value=\"$direc[$e]\"> ";
    $e++;
    echo "<a href=\"?dir=$dir/$direc[$a]\">$folder</a>" . "<a href=\"?dir=$dir/$direc[$a]\">$direc[$a]</a><br>";
    $a++;
  }
  $d = 0;
  while ($d < count($archi)) {
    echo "<input type=\"checkbox\" name =\"archivo[]\" value=\"$archi[$d]\">" . $file . $archi[$d] . "<br>";
    $d++;
  }
  echo "<br>";
  echo "<input type=\"hidden\" name =\"directorio\" value=\"$dir\">";
  echo "<input type=\"submit\" value=\"Eliminar\">";
  echo "<input type=\"button\" onclick=\"history.back()\" value=\"Atras\">";
  echo "</form>";

  ?>
</BODY>

</HTML>