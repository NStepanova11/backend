<?php
    if($argc==1)
        echo("No parameters were specified!");
    else
    {
        print("Number of arguments: ".$argc."\n");
        echo("Arguments:\n");
        for ($i=0; $i<$argc; $i++) {
            echo ("   *".$argv[$i]."\n");
        }
    }