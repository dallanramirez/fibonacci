Ejercicio de Fibonacci en PHP

Para encontrar el valor de Fibonacci de un indice, se debe realizar 1 funcion con recursividad.
Tomando como referencia: 0, 1, 1, 2, 3, 5, 8, 13, ...,
entonces el ejercicio sería: f(x) = f(x-1) + f(x-2)
considerando como datos iniciales el 0 y 1 (cuyos indices son el mismo numero)

En esta API primero se descarta que sea un número negativo (menor que 0), y se debe enviar el parametro "n" obligatoriamente.

Adicionalmente estoy usando caché para mejorar el rendimiento.

Ejecutar:

http://localhost/fibonacci.php?n=6

Resultado esperado:

{
  "valor": 8
}

Posibles Mejoras:

Se puede omitir que se envíe letras o caracteres especiales a la api.
Se puede limitar a un número de máximo del indice enviado a la api.
Se puede almacenar nuevas respuestas de cada indice Fibonacci en una base de datos y acelerar el proceso de busqueda si es que ya existiera.
