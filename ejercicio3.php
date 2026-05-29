<?php

//Ejercicio 3: Crea una función que tome un número entero como parámetro y devuelva true si el número es par y false si es impar.
//Complejidad: MEDIA (2 puntos)


function esPar($num=2) {
    if ($num/2==1){
        echo "true";
    }else{
        echo "false";
    }
}