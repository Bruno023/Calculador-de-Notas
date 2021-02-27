<?php
    function Promedio($Notas)
    {
        $Suma = 0;
        for ($i=0; $i <count($Notas) ; $i++) { 
            if(isset($Notas[$i]))
            {
                $Suma+=$Notas[$i];
            }
        }
        $promedio = $Suma/count($Notas);
        return $promedio;
    }

    function MateriaBaja($Notas)
    {
        $NotasBajas=[];
        for($i=0; $i < count($Notas); $i++)
        {
            if($Notas[$i]<6)
            {
                $NotasBajas[$i]=$i;
            }
        }
        return $NotasBajas;
    }

    function NotaMasAlta($Notas)
    {
        $MAX=-1;
        for ($i=0; $i < count($Notas); $i++) { 

            if ($Notas[$i]>$MAX) {

                $MAX = $Notas[$i];
            }
        }
        return $MAX;
    }

    function NotaMasBaja($Notas)
    {
        $MIN=11;
        for ($i=0; $i < count($Notas); $i++) { 

            if ($Notas[$i]<$MIN) {

                $MIN = $Notas[$i];
            }
        }
        return $MIN;
    }

    function MateriaSinBajas($Notas)
    {
        $NotasSinBajas=[];
        $y=0;
        
        for($i=0; $i < count($Notas); $i++)
        {
            if($Notas[$i]>5)
            {
                $NotasSinBajas[$y]=$Notas[$i];
                $y++;
            }
        }
        return $NotasSinBajas;
    }

?>