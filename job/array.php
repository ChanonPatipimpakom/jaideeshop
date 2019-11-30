<?php
    $score = array(
        "Chanon" => [
            "Midterm" => 30,
            "Final" => 40,
            "Project" => 30
        ],
        "Padrada" => [
            "Midterm" => 30,
            "Final" => 40,
            "Project" => 30
        ],
        "Napat" => [
            "Midterm" => 30,
            "Final" => 40,
            "Project" => 30
        ],
        "Veeravich" => [
            "Midterm" => 30,
            "Final" => 40,
            "Project" => 30
        ],
        "Panuwit" => [
            "Midterm" => 30,
            "Final" => 40,
            "Project" => 30
        ]
    );

    //echo print_r($score);
?>
<table>
<?php
    foreach($score as $n => $s){
        echo "$n";
        echo "<ul>";
        foreach($s as $t=>$v){
            echo "<li>$t => $v</li>";
        }
        echo "</ul>";
    }
?>