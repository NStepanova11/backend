<?php
    if(!isset($_GET['arr']))
        header("Status:400 Bad Request");
    else {
        $arr = explode(',', $_GET['arr']);
        /*$resultArr=[];
        for($i=sizeof($arr)-1; $i>=0; $i--)
        {
            array_push($resultArr, $arr[$i]);
        }*/

        $begin=0;
        $end=sizeof($arr);

        while ($begin!=$end)
        {

        }
        print_r($resultArr);
    }