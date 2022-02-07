<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*
* Afficher Hello World dans un h1 de trois manières différentes :
*  a) Concatenation php et php
*  b) Concatenation Html php
*  c) Tout en php
*/
//hello_bonus.php
//Bonus)
/* Il existe une manière simple d'afficher un texte sans avoir a utiliser la fonction echo,
 * Cette manière  est définie par le PSR-1 comme uniquement déstinée a afficher une
 * courte chaine de caractères*/


?>

<h1>
<?= "Hello World"; ?>
</h1> 

