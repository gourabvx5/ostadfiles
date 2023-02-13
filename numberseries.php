<?php 

$sum =0;
$limit = 100;

for ($i=0; $i <=$limit; $i++){
    $sum = $sum+$i;
    if ($i == $limit){
        echo $i;
    }else {
        echo $i." + ";
    }
}
echo " = ".$sum;

?>