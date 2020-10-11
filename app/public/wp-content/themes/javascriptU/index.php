<?php

$namesArr = array('Sanjeev', 'Sanjay', 'Shanti');

$count = 0;
while($count < count($namesArr)) {
    echo "<li>Hi, my name is $namesArr[$count] </li>";
    $count++;
}

?>
