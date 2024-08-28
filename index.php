<p>
<?php
// echo "ADSO";

//$a=25;// con el signo $ se inicializa una variable en php
//$b=5;
//echo "el resultado de sumar". $a . "+" . $b . "=" . $a + $b;
//$a = "palabra";
//echo $a;

// $edad=25;
?>
</p>
<?php
// if ($edad >= 25) {
    ?>
    <!-- <p> -->
    <!-- si puede estudiar -->
<!-- </p> -->
<?php
// }else{
    ?>
    <!-- <p>No paso el resultado</p> -->
    <?php
// }
?>




<?php
$dia = 4;//podemos ingresar del 1 al 7

// if ($dia==1) {
//     echo "Domingo";
// } else if ($dia==2){
//     echo "Lunes";
// } else if ($dia==3){
//     echo "Martes";
// } else if ($dia==4){
//     echo "Miercoles";
// } else if ($dia==5){
//     echo "Jueves";
// } else if ($dia==6){
//     echo "Viernes";
// } else if ($dia==7){
//     echo "Sabado";
// } else{
//     echo "El numero no aplica";
// }


switch ($dia) {
    case 1:
        echo "Domingo";
        break;
    case 2:
        echo "Lunes";
        break;
    case 3:
        echo "Martes";
        break;
    case 4:
        echo "Miercoles";
        break;
    case 5:
        echo "Jueves";
        break;
    case 6:
        echo "Viernes";
        break;
    case 7:
        echo "Sabado";
        break;
    default:
        echo "El numero no aplica";
        break;
}


