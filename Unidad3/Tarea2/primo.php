<h1>¿ES UN N&Uacute;MERO PRIMO?</h1>
<?php
// PHP code to check whether a number is prime or Not
// function to check the number is Prime or Not

function primeCheck($number){
    if ($number == 1)
        return 0;
    for ($i = 2; $i <= $number/2; $i++){
        if ($number % $i == 0)
            return 0;
    }
    return 1;
}
 
// Driver Code
$number = $_POST['number'];
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
