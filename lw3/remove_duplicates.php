<?php
    if($argc==2)
    {
        $inputString=str_split($argv[1]);
        $resultString = array_unique($inputString);
        foreach ($resultString as $value)
            echo($value);
    }
    else
    {
        echo("Incorrect number of arguments!\nUsage php remove_duplicates.php <input string>");
    }