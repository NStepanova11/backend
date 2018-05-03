<?php
    header('Content-type: text/plain; charset=utf-8');
    if(!isset($_GET['string'])){
        header("Status: 400 Bad Request");
    }
    else {
        $inputString = strtolower($_GET['string']);
        $uniqueSymbols = array_unique(str_split($inputString));
        foreach($uniqueSymbols as $value)
        {
            $amount=substr_count($inputString, $value);
            if($value == ' ')
                $value="' '(пробел)";
            echo("$value - $amount\n");
        }
    }