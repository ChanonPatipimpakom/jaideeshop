<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tbody>
            <thead>
                <tr>
                    <td><b>ภาค</b></td>
                    <td><b>มาม่า</b></td>
                    <td><b>ปลากระป๋อง</b></td>
                    <td><b>น้ำปลา</b></td>
                    <td><b>น้ำตาลทราย</b></td>
                </tr>
            </thead>
            <?php
                $score=array("เหนือ"=>array("nood"=>500,
                                "makarel"=>350,
                                "fish"=>200,
                                "sugar"=>430),
                            "กลาง"=>array("nood"=>500,
                                "makarel"=>350,
                                "fish"=>200,
                                "sugar"=>430),
                            "อีสาน"=>array("nood"=>500,
                                "makarel"=>350,
                                "fish"=>200,
                                "sugar"=>430),
                            "ใต้"=>array("nood"=>500,
                                "makarel"=>350,
                                "fish"=>200,
                                "sugar"=>430),
                            );
                foreach($score as $name => $items){

            ?>
                <tr>
                    <td><?php echo $name; ?></td>
                    <?php
                        foreach($items as $k => $v){
                    ?>
                        <td><?php echo $v;?></td>
                    <?php
                        }
                    ?>
                </tr>
            <?php
               }
            ?>

        </tbody>
    </table>
</body>
</html>