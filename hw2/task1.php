<?php
$question = "В каком году был основан Санкт-Петербург? Варианты ответа: 1803, 1703, 1603.\n";
while(true){
    $answer=readline($question);
    if ($answer==1703){
        echo "Поздравляю! Вы ответили верно.";break;  
    }
    elseif($answer==1803||$answer==1603){
        echo "Вы ответили не верно.";break;
    }
}