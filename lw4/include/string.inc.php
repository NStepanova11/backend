<?php
    function last($str)
    {
        return($str[-1]);
    }

    function withoutLast($str)
    {
        $str=substr($str, 0, strlen($str)-1);
        return($str);
    }

    function reverse($str)
    {
        return(strrev($str));
    }

    function removeExtraBlanks($text)
    {
        $text=trim($text);
        $text=preg_replace("/ {2,}/", " ", $text);
        return $text;
    }