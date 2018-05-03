<?php
    include  "include/string.inc.php";
    if(isset($_GET['str']))
    {
        $str = $_GET['str'];
        $str = withoutLast($str);
        echo($str);
    }