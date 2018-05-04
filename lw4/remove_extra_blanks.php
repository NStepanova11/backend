<?php
    include "include/common.inc.php";
    if(isset($_GET['text']))
    {
        $text=$_GET['text'];
        $text = removeExtraBlanks($text);
        echo('|'.$text).'|';
    }