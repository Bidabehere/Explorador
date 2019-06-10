<?php
Class Carpeta{


    public function __construct()
    {
            }
    public function listar($carpe) ///muestra el listado de carpetas
    {
        $directorio = opendir($carpe);
        $a = 0;
        $b = 0;
        while ($archivo = readdir($directorio)) {
            if ($archivo == ".") {
                "";
            } elseif ($archivo == "..") {
                "";
            } elseif (is_dir("$carpe/$archivo")) {
                $direc[$a] = $archivo;
                $a++;
            } else {
                $archi[$b] = $archivo;
                $b++;
            }
        }
        closedir($directorio);

        return array($direc, $archi); 
    }

    public function vacio($directorio)
    {
    $listado[] = $this -> listar($directorio);
   
 
    
    }

    public function eliminarcarpertavacia($directorio, $dire)
    {
        echo ("$directorio/$carpe");

    }
    public function eliminarArchivos($directorio, $listaarchi)
    {
        $d = 0;
        while ($d < count($listaarchi)) {
            unlink("$directorio/$listaarchi[$d]");
            $d++;
        }
       // echo (" Felicitaciones!! Los archivos fueron eliminados");
       // echo ("$listaarchi[$d]");
        //echo '< meta http-equiv ="Refresh" content="5;url=index.php?'.$directorio.'">';
        header("Location: index.php?".$directorio);
    }
    public function vaciarCarpeta($directorio, $dire){
        
        $estado =  $this->vacio($dire);

        if($estado){
          // $this -> eliminarcarpertavacia($directorio, $dire);
            echo 'vacio';
        }else{
            echo 'lleno';
        }


        }
}


?>
