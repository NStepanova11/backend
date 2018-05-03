<?php
    if(!isset($_GET['arr']) || empty($_GET['arr']))
        header("Status:400 Bad Request");
    else {
        $arr = explode(',', $_GET['arr']);
        //$resultArray = array_reverse($arr);
        $i=0;
        $j=sizeof($arr)-1;
        $replaceNum='';
        while($j!=0 && $i!=sizeof($arr)-1)
        {
            $replaceNum=$arr[$i];
            $arr[$i]=$arr[$j];
            $arr[$j]=$replaceNum;
            $i++;
            $j--;
        }
        print_r($arr);
    }