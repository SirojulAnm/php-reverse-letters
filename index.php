<?php

$char = 'abcdef';  
$char = implode(' ',str_split($char)); 

$explode = explode(' ',$char);
$count = count($explode) - 1;
$hasil = [];

for ($i=$count; $i>=0; $i--) { 
    $hasil[] = $explode[$i];
}

echo join($hasil);


/* Result

fedcba 

*/

