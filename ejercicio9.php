<?php

//Ejercicio 9: Crea una función llamada generarTablaMultiplicar que tome un número entero como parámetro y mostrar los resultados (del 1 al 10) uno debajo del otro por pantalla.
//Complejidad: BAJA (1 punto)

function generarTablaMultiplicar($num=3) {
    $multiplicacion1= $num*1;
    $multiplicacion2= $num*2;
    $multiplicacion3= $num*3;
    $multiplicacion4= $num*4;
    $multiplicacion5= $num*5;
    $multiplicacion6= $num*6;
    $multiplicacion7= $num*7;
    $multiplicacion8= $num*8;
    $multiplicacion9= $num*9;
    $multiplicacion10= $num*10;



    echo $multiplicacion1 "<br>";
    echo $multiplicacion2;
    echo $multiplicacion3;
    echo $multiplicacion4;
    echo $multiplicacion5;
    echo $multiplicacion6;
    echo $multiplicacion7;
    echo $multiplicacion8;
    echo $multiplicacion9;
    echo $multiplicacion10;
}