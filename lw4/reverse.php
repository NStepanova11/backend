<?php
    include "include/common.inc.php";
    if(isset($_GET['str']))
    {
        $str=$_GET['str'];
        $str = reverse($str);
        echo($str);
    }