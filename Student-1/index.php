<?php 
echo 'Algo 1';
echo'<br>';
$x = 10;
$y = 20;
echo $x + $y;
echo'<br>';
echo'<br>';

echo "Algo 2";
 echo'<br>';
 $x = 10;
 echo $x*2;
 echo'<br>';
 echo'<br>';

 echo 'Algo 3';
 echo'<br>';
 $x = rand (1 ,5);
 if($x === 1){
     echo 'Hello'; 
 }
 elseif($x === 2){
     echo'Salut';
 }
 else{
     echo 'Yo';
 }
 echo'<br>';
 echo'<br>';

 echo'Algo 4';
 echo'<br>';

 $note = rand(0, 20);
 if($note <= 10){
     echo 'Bof';
 }
 elseif($note > 10 && $note <=12){
     echo 'Passable';
 }
 elseif($note > 12 && $note <= 14){
     echo 'Assez bien';
 }
 elseif($note > 14 && $note <= 16){
    echo 'Bien';
}
elseif($note > 16){
    echo 'Très bien';
}
echo'<br>';
echo'<br>';

echo'Algo 5';
echo'<br>';
$age = 20;
echo ($age < 20)  ? "Oui" : "Non";