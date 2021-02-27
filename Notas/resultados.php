<?php

    //Agarrar valores del form
    $Mate= $_POST['Mate'];
    $Lengua= $_POST['Lengua'];
    $EFSI= $_POST['EFSI'];

    include('helpers.php');

    //Poner valores en el array de notas
    if(isset($Mate) && isset($Lengua) && isset($EFSI))
    {
        $Materias=['Matematica','Lengua','EFSI'];
        $Notas=[$Mate,$Lengua,$EFSI];
    }

    //Llamar a las funciones de Helper.php
    
    //PROMEDIO
    $prom=Promedio($Notas);
    echo "<div>Promedio:".$prom ."</div>";

    //MATERIAS BAJAS
    $NotasBajas=MateriaBaja($Notas);

    

    if($NotasBajas!=null)
    {
        echo "<div>Materias Bajas:";
        for($i=0;$i<count($Notas);$i++)
        {
            if(isset($NotasBajas[$i]))
            {
                echo $Materias[$NotasBajas[$i]]." ";
            }
        }
    }else
    {
        echo "<div>No hay materias Bajas</div>";
    }
    
    
    

    //NOTA MAS ALTA
    $MasAlta=NotaMasAlta($Notas);
    echo "<div>La nota mas alta fue un ".$MasAlta."</div>";

    //NOTA MAS BAJA
    $MasBaja = NotaMAsBaja($Notas);
    echo "<div>La nota mas baja fue un ".$MasBaja."</div>";

    //PROMEDIO SIN BAJAS
    $NotasSinbajas=MateriaSinBajas($Notas);
    $promediosinbajas=Promedio($NotasSinbajas);
    echo "El promedio sin las bajas es: ".$promediosinbajas;


?>