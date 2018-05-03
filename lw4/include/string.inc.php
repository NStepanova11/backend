<?php
    function last($str)
    {
        return($str[-1]);
    }

    function withoutLast($str)
    {
        //$newStr=substr($str,0, strlen($str));
        $str=substr($str, 0, strlen($str)-1);
        return($str);
    }

    function reverse($str)
    {
        return(strrev($str));
    }