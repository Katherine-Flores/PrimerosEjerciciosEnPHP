<?php
#Ejercicio #1 : Generar las tablas de multiplicar del 4 y del 6
echo "\n-> Mostrar la tabla de multiplicar del 4 y el 6\n";
$tabla1 = 4;
$tabla2 = 6;
$total = 0;

echo "\nTabla del 4";
for($i=0; $i<=10; $i++){
    $total = $tabla1 * $i;
    echo "\n4 * " . $i . " = " . $total;
}

echo "\n\nTabla del 6";
$total = 0;
for($i=0; $i<=10; $i++){
    $total = $tabla2 * $i;
    echo "\n6 * " . $i . " = " . $total;
}

#Ejercicio #2 : Con un numero seteado en la variable1 calcular el factorial y mostrarlo por pantalla
echo "\n\n-> Calcular Factorial";
$variable1 = 5;
$factorial = 1;

for($i=1; $i<=$variable1; $i++){
    $factorial*=$i;
}
echo "\nEl resultado para " . $variable1 . "! es de: " . $factorial;

#Ejercicio #3 : Con un numero seteado en la variable2 mostrar por pantalla si el numero es primo o no
echo "\n\n-> Verificar si es PRIMO";
$variable2 = 2;
$divisible = 0;

for($i=1; $i<=$variable2; $i++){
    if($variable2 % $i == 0){
        $divisible++;
    }
}

if($divisible > 2){
    echo "\nEl numero " . $variable2 . " NO es PRIMO";
}else{
    echo "\nEl numero " . $variable2 . " es PRIMO";
}

#Ejercicio #4 : Con un numero seteado en la variable3 mostrar por pantalla si el numero es par
echo "\n\n-> Verificar si es PAR";
$variable3 = 8;

if($variable3 % 2 == 0){
    echo "\nEl numero " . $variable3 . " es PAR";
} else{
    echo "\nEl numero " . $variable3 . " es IMPAR";
}

#Ejercicio #5 : Con un numero seteado en la variable4 mostrar la tabla de multiplicar
echo "\n\n-> Mostrar la tabla de multiplicar de un numero random";
$variable4 = rand(1,10);
$total = 0;

echo "\nTabla del " . $variable4;
for($i=0; $i<=10; $i++){
    $total = $variable4 * $i;
    echo "\n" . $variable4 . " * " . $i . " = " . $total;
}
