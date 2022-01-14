<h1>¿ES UN N&Uacute;MERO PRIMO?</h1>
<?php

// Pasamos el valor capturado en el HTML y usamos la función primeCheck para comprobar si el número es primofunction primeCheck($number){
    if ($number == 1)
        return 0;
    for ($i = 2; $i <= $number/2; $i++){
        if ($number % $i == 0)
            return 0;
    }
    return 1;
}
 
$number = $_GET['number'];
$marcador = primeCheck($number);
if ($marcador == 1)
    echo "El número ".$number." es primo";
else
    echo "El número ".$number." no es primo"
?>
<br> <br>
<form action="index.html">
    <input type="submit" value="Volver atrás">
</form>
