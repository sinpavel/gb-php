
<?php

do{
    $number = (int)readline("Введите число - ");
} while ($number<=0);

$number = $number % 8;
switch (true){
    case ($number == 0 || $number == 2):
        echo "Указательный палец";
        break;
    case ($number == 1):
        echo "Большой палец";
        break;
    case ($number == 3||$number==7):
        echo "Средний палец";
        break;
    case ($number == 4||$number==6):
        echo "Безымянный палец";
        break;
    case($number==5):
        echo "Мизинец";
        break;    
}
