<?php

$num=[1,2,3,4,5,6];

for ($i=0 ; $i < count(value: $num) ; $i++ ) {
    echo $num[$i];
}

foreach ($num as $value) {
    echo $value;
}