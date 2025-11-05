<?php
//ALEJANDRO CONGIL SAINZ, CETI, 2025-2026
//FUNCIÓN PARA SACAR LA SERIE DE FIBONACCI

/*La función tiene la variable $n, ya que es la que se pone luego más abajo
como dato que hay que calcular*/
function fibonacci($n){
    //Estas son las 3 variables que vamos utilizar para que funcione esta función
    $n1 = 0;
    $n2 = 1;
    $n3 = 1;
    /*Ya que los primeros 2 valores ya se han sacado desde las variables,
    se ha añadido en un array ($array) que aparezcan el primer valor $n1 y $n2*/
     $array = [$n1,$n2];
    
    /*Con la función "while" tenemos el valor $n3 (que el primer valor es 1)
    se diferencie  con el valor que pongamos más abajo. Si el valor $n3 llega
    a ser más grande o igual que el número calculado, no debe seguir trabajando
    la función "while"*/
    while($n3 <= $n){

        /*En este while ocurren varias cosas, en primer lugar, se añade en el array ($array)
    el valor con el que entra la variable $n3. */
       $array[] = $n3;
    /*Luego la variable $n1 (que en este momento es 0) se convierta 
    en la variable $n2 (es decir, la variable $n1 tiene como valor ahora mismo el 1). */
        $n1 = $n2;
    /*Luego la variable $n2 (que en este momento es 1) 
    se convierta en la variable $n3 (es decir, la variable $n2 
    tiene como valor ahora mismo el 1). */
        $n2 = $n3;
    /*Finalmente, la variable $n3 (que tiene en este
    momento el valor de 1) se convertirá en la suma de $n1 y $n2.*/
        $n3 = $n1 + $n2;
    }
    /*Cuando termine el bucle, ya que el numero el $n3 es mas grande que el numero
    que tenemos en el $prueba, vamos a tener el array presentado en el return con todos
    los valores dentro*/
    return $array;
}
/*Como último paso, hacemos una variable que contenga el valor que queramos
(en mi caso he decidido darle el 8000) para que se utilice la variable $secuencia
como resultado de la sucesión de fibonacci del valor decidido (8000)*/
$prueba = 8000;
echo "La sucesión de Fibonacci del valor $prueba es: ";
    /* Despues, tenemos un foreach que vaya enseñando todos los datos que ha añadido al array para que se
        vea uno por uno hasta el final*/
$secuencia = fibonacci($prueba);
foreach($secuencia as $valor){
    echo ", $valor";
}
?>