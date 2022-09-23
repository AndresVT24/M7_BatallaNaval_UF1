<table border = 1>
<?php 
/*
vaixell d'una posició: fragata
vaixell de 2 posicions: submarí
vaixell de 3 posicions: destructor
vaixell de 4 posicions: portaavions
*/
$arrayVaixells = [
    [[1,1]],
    [[3,4],[4,4]],
    [[5,6],[5,7],[5,8]],
    [[10,10],[10,9],[10,8],[10,7]]
];

for ($i=0;$i<=12;$i++){ #NUMEROS
    echo "<tr>";

    for ($j=0;$j<=12;$j++){ #LETRAS
        for ($x = 0; $x<count($arrayVaixells); $x++){
            $cant = count($arrayVaixells[$x]);

            for ($l=0; $l<$cant;$l++){
                $cantArray = count($arrayVaixells[$l]);

                if ($arrayVaixells[$x][$l][0] == $i && $arrayVaixells[$x][$l][1] == $j){
                    echo "<td>X</td>";
                    $ver = 1;
                }
            }
        }

        if ($ver){
            #empty
        }

        elseif ($i == 0 && $j >0){
            echo "<td>$j</td>";
        }

        elseif ($j == 0 && $i > 0){
            $numero = 64+$i;
            $letra = chr($numero);
            echo "<td>$letra</td>";
        }

        else{
            echo "<td></td>";
        }

        $ver = 0;
    }
}
?>
</table>