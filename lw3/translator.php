<?php
    $dictionary = [
        'Keyboard'=>'Клавиатура',
        'Mouse'=>'Мышь',
        'Dog'=>'Собака',
        'Moscow'=>'Москва',
        'April'=>'Апрель',
        'Rain'=>'Дождь',
        'Phone'=>'Телефон',
        'Glass'=>'Стакан',
    ];

    if(!isset($_GET['word']))
    {
        header("Status: 400 Bad Request");
    }
    else
    {
        $word=$_GET['word'];
        $valueIsFind=false;
        foreach ($dictionary as $key=>$value)
        {
            if($key==$word)  {
                echo($value);
                $valueIsFind = true;
            }
            else if($value==$word) {
                echo($key);
                $valueIsFind=true;
            }
        }
        if($valueIsFind==false)
            header("Status: 404 Not Found");
    }
