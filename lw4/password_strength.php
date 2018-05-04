<?php
    header("Content-Type: text/plain; charset=utf-8");

    if(!isset($_GET['password'])) {
        setStatus();
    }
    else{
        $forbidden="(^A-Za-z0-9)";//ошибка, считает запрещенные символы
        $password = str_split($_GET['password']);

        if (!in_array($forbidden,$password)) {
            $passwordSize = sizeof($password);
            $safety = CalculateSafety($password,$passwordSize);
            printSafety($safety);
        }
        else
        {
            setStatus();
        }
    }

function printSafety($safety)
{
    echo("Безопасность пароля: $safety\n");
}

function setStatus()
{
    header("Status: 400 Bad request");
}

function CalculateSafety($password, $passwordSize)
{
    $upperCaseChars="/[A-Z]+/";
    $numbers="/[0-9]+/";
    $lowerCaseChars="/[a-z]+/";
    //1
    $safety = 0;
    printSafety($safety);
    if($passwordSize>0)
    {
        //2
        $safety += (4 * $passwordSize);
        printSafety($safety);
        //3
        $numbersCount = count(preg_grep($numbers, $password));
        $safety += 4 * $numbersCount;//баллы за кол-во цифр
        printSafety($safety);
        //4-5
        $upperCount = count(preg_grep($upperCaseChars, $password));
        $lowerCount = count(preg_grep($lowerCaseChars, $password));

        if ($upperCount > 0 && $lowerCount > 0)
            $safety += (($passwordSize - $upperCount) + ($passwordSize - $lowerCount)) * 2;
        printSafety($safety);
        //6-7
        if ($passwordSize == $numbersCount || $passwordSize == $lowerCount + $upperCount) {
            $safety -= count($password);
        }
        printSafety($safety);
        //8
        $sameCharsAmount = array_count_values($password);
        foreach ($sameCharsAmount as $key => $value) {
            if ($value > 1)
                $safety -= $value;
        }
        printSafety($safety);

    }
    return $safety;
}