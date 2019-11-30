<?php
    session_start();
    $name = "Chanon Patipimpakom"."</br>";
    echo $name;
    $_SESSION['name'] = $name;
?>
<a href="page2.php">Next</a>