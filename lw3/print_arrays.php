<?php
header("Content-Type: text/plain; charset=utf-8");
$simpleNumbers = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29];
    $funcValues = [
        'count'=>'Подсчитывает количество элементов массива или что-то в объекте',
        'is_array' => 'Определяет, является ли переменная массивом',
        'array_merge' => 'Сливает один или большее количество массивов',
        'empty' => 'Проверяет, пуста ли переменная',
        'print_r' => 'выводит информацию о переменной в удобочитаемом виде'
        ];
    $unitMatrix = [
        [1,0,0,0],
        [0,1,0,0],
        [0,0,1,0],
        [0,0,0,1]
    ];

    echo ("Первые 10 простых чисел:\n");
    for ($i=0; $i<count($simpleNumbers); $i++)
        echo ($simpleNumbers[$i].' ');

    echo("\n\nЗначения функций: \n");
    foreach ($funcValues as $key => $value)
    {
        echo ("$key == $value\n");
    }

    echo ("\nЕдиничная матрица:\n");
    foreach($unitMatrix as $value1) {
        foreach ($value1 as $value2) {
            echo($value2.' ');
        }
        echo("\n");
    }


