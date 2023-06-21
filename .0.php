<?php
//Ejercicio uno Asistencia 

include '.o.html';
 
  // juliano
    $calif = null;
    $asis = null;
    define("clases",30);
   

    if (isset($_POST['calif'])and !empty($_POST['asis'])){
        $calif = $_POST['calif'];
        $asis = $_POST['asis'];

        if ($calif >= 1 && $asis >= (clases*0.8)) {
            echo "<div align='center'>  Aprobo </div> ";
        }
        else {
            echo "<div align='center'> No Aprobo </div> ";
        }
    }

?>