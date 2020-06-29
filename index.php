<?php 
 function calculator($a,$b,$op){
    switch ($op) {
        case 'addition':
            return $a+$b;
            break;
        case 'subtraction':
                return $a-$b;
                break;    
        case 'multiplication':
            return $a*$b;
        break;
        case 'division':
            return $a/$b;
        break;
        default:
            return 'Choose correct option';
            break;
    }
 }

$result= calculator(10,3,'addition');
 echo 'Addition';
 echo "<br>";
 echo $result;
 echo "<br>";
 $result= calculator(10,3,'subtraction');
 echo 'subtraction';
 echo "<br>";
 echo $result;
 echo "<br>";
 $result= calculator(10,3,'multiplication');
 echo 'multiplication';
 echo "<br>";
 echo $result;
 echo "<br>";
 $result= calculator(10,3,'division');
 echo 'Division';
 echo "<br>";
 echo $result;
?>