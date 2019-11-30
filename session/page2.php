<?php
    session_start();
    $name = $_SESSION['name'];
    $newname = $_SESSION['name']="Napat Manpansa".'</br>';
    $_SESSION['age']=80;
    echo $newname;
?>
<a href="page3.php">Next</a>