<?php
    $page = 870;
    $charg = 0;

    if($page<=100)
        $charg = $page;
    else if($page<=300)
        $charg = 100 + (($page-100)*0.75);
    else if($page<=1000)
        $charg = 250 + (($page-300)*0.5);
    else
        $charg = 600 + (($page-1000)*0.35);

    echo "จำนวน $page" . '</br>';
    echo "เงิน $charg";
?>