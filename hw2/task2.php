
<?php
$name = readline("Как тебя зовут? ");

do{
    $count = (int)readline("Сколько задач сегодня у тебя? ");
} while ($count<=0);

$text = "";
$sum = 0;

for ($i = 1; $i <= $count; $i++){
    $task = readline("Какая задача стоит перед вами сегодня? ");
    $time = readline("Сколько примерно времени эта задача займет? ");
    $text .= " - $task ($time ч)\n";
    $sum += $time;
}

echo "$name, сегодня у вас запланировано $count приоритетных задачи на день:
$text Примерное время выполнения плана = $sum ч";