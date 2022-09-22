<table border = 1>
<?php
$submarino = [[6,1],[6,2],[6,3]];

for ($i=0;$i<=12;$i++){ #LETRAS
    echo "<tr>";
    
    for ($j=0;$j<=12;$j++){ #NUMEROS
        $ver = 0;
        if ($i == 0){
            echo "<td>$j</td>\n";
        }

        elseif ($j == 0){
            $numero = 64+$i;
            $letra = chr($numero);
            echo "<td>$letra</td>\n";
         }
        
        else{

            foreach($submarino as $coordenada){
                if ($i == $coordenada[1] && $j == $coordenada[0]){
                    echo "<td>x</td>";
                    $ver = 1;
                }
            }

            if ($ver == 0){
                echo "<td> </td>";
            }
        }
    }
}
?>
</table>
