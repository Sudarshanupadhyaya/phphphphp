<?php

// using $checkErr for 403 error tracking.
$checkErr = 0;
if (isset($_REQUEST['checkErr'])) {
    $checkErr = $_REQUEST['checkErr'];
}

if($checkErr == 1)
{ echo "Nothing Loaded:exit<br>"; exit;}
