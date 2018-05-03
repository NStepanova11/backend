<?php
    if(!isset($_GET['numbers']))
    {
        SetStatus();
    }
    else {
        $numbers = explode(',', $_GET['numbers']);
        $arrayIsCorrect=true;
        foreach($numbers as $value)
        {
            if(!is_numeric($value))
            {
                SetStatus();
                $arrayIsCorrect=false;
                break;
            }
        }
        if($arrayIsCorrect==true) {
            for ($i = 0; $i < sizeof($numbers); $i++) {
                for ($j = 0; $j < sizeof($numbers); $j++) {
                    if ($numbers[$i] < $numbers[$j]) {
                        $iNum = $numbers[$i];
                        $numbers[$i] = $numbers[$j];
                        $numbers[$j] = $iNum;
                    }
                }
            }
            echo(implode(",", $numbers));
        }
    }

    function SetStatus()
    {
        header("Status: 400 bad Request");
    }