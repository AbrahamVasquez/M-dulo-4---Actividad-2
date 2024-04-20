<?php

/* 1. Problema de la serie Fibonacci:
Escribe una función llamada generar Fibonacci que reciba un número n como parámetro 
y genere los primeros n términos de la serie Fibonacci. La serie comienza con 0 y 1, 
y cada término subsiguiente es la suma de los dos anteriores. */

function generarFibonacci($n) {

    // Defining variables as initializers and include them into an phraseay
    $num1 = 0;
    $num2 = 1;
    $fibonacci = array($num1, $num2);

    if( $n <= 0 ) {
        return "Por favor intenta usar un numero mayor a 0";
    } elseif ( $n == 1 ) { // Returns the 1st elemenr of the serie (0)
        return $num1 ; 
    } elseif ( $n == 2 ) { // Returns a string with the 2 first elements of the Fibonacci serie
        return implode(", ", $fibonacci);
    } else {
        for ( $i = 2; $i < $n; $i++ ) { // To gather the rest of elements needed starting from the 3rd element and sum the previous elements of the Fibonacci
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }

        return implode(", ", $fibonacci); // Returns a string with results adding a comma after
    }
    
}

$n = 50;
echo "Los primeros $n términos de la serie Fibonacci son: " . generarFibonacci($n);

////////////////////////////////////////////////////////////////////////////////////////////////

/* 2. Problema de números Primos:
Crea una función llamada esPrimo que determine si un número dado es primo o no. 
Un número primo es aquel que solo es divisible por 1 y por sí mismo. */

function esPrimo($number) {

    if ( $number <= 1 ) { // Numbers under 1 are not prime numbers
        return "El $number no es un numero primo"."\n";
    }

    for ( $i=2; $i < $number / 2; $i++ ) { // To check if the current number is divisible by another number starting from 2
        
        if ($number % $i == 0) { // To check residual, if it's 0 means that if visible by 1
            return "El $number no es un numero primo"."\n";
        }
    }
    return "El $number SI es un numero primo"."\n";
}


print_r (esPrimo(5)); // Print number

////////////////////////////////////////////////////////////////////////////////////////////////

/* Problema de Palíndromos:
Implementa una función llamada esPalindromo que determine si una cadena de texto dada es un palíndromo. 
Un palíndromo es una palabra, frase o secuencia que se lee igual en ambas direcciones. */

function esPalindromo($phrase) {

    // To modify string to lowerCase and remove spaces
    $phrase = strtolower(str_replace(' ', '', $phrase));

    $invertedPhrase = strrev($phrase); // We reverse the phrase to check if it's the same backwards

    if ($phrase === $invertedPhrase) {
        return "The phrase '$phrase' is a palindrome.\n"; // It's a palindrome (True)
    } else {
        return "The phrase '$phrase' is not a palindrome.\n"; // No es palindromo (False)
    }

}

print_r(esPalindromo("La tele letal")); // Print string example 1
print_r(esPalindromo("Vamos los pibe noma")); // Print string example 2

?>
