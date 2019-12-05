<?php
switch ($i) {
    case 0:
        echo "i es igual a 0";
        break;
    case 1:
        echo "i es igual a 1";
        break;
    case 2:
        echo "i es igual a 2";
        break;
    default:
       echo "i no es igual a 0, 1 ni 2";
}
?>

//Este otro ejemplo compara una expresión más avierta
<?php
switch($valor)
    {
    case ($valor < 5):
    echo "Nota muy baja";
    break;
 
    case (($valor >= 6) && ($valor <= 9)):
    echo "Buena nota";
    break;
 
    case ($valor = 10):
    echo "Excelente nota";
    break;
    }
?>
