<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="contact">
    <form action="" method="post" id="form1">
        <label for="name" class="font"><h1>โปรแกรมคำนวณค่าปริ้นงาน</h1></label>
        <p>
            <input type="number" name="apage" placeholder="กรอกจำนวนหน้าเอกสาร">
        </p>

<?php
    error_reporting(~E_NOTICE );
    $page = $_POST["apage"];
    if($page<=100){
        $acharg = $page;
        $bcharg = 0;
        $ccharg = 0;
        $dcharg = 0;
        $charg = $page;
    }
    else if($page<=300){
        $acharg = 100;
        $bcharg = ($page-100)*0.75;
        $ccharg = 0;
        $dcharg = 0;
        $charg = 100 + (($page-100)*0.75);
    }
    else if($page<=1000){
        $acharg = 100;
        $bcharg = 150;
        $ccharg = ($page-300)*0.5;
        $dcharg = 0;
        $charg = 250 + (($page-300)*0.5);
    }
    else{
        $acharg = 100;
        $bcharg = 150;
        $ccharg = 350;
        $dcharg = ($page-1000)*0.35;
        $charg = 600 + (($page-1000)*0.35);
    }
?>

        <label for="">จำนวนหน้า</label>
        <div style="border: 2px solid #c9e6ff;border-radius: 5px;background: #fff;padding: 0.5rem;color:black;font-size:14px">
            <?php echo "$page หน้า";?>
        </div>

        <label for="">1 - 100 หน้า ราคา </label>
        <div style="border: 2px solid #c9e6ff;border-radius: 5px;background: #fff;padding: 0.5rem;color:black;font-size:14px">
            <?php echo "$acharg บาท";?>
        </div>

        <label for="">101 - 300 หน้า ราคา </label>
        <div style="border: 2px solid #c9e6ff;border-radius: 5px;background: #fff;padding: 0.5rem;color:black;font-size:14px">
            <?php echo "$bcharg บาท";?>
        </div>

        <label for="">301 - 1000 หน้า ราคา </label>
        <div style="border: 2px solid #c9e6ff;border-radius: 5px;background: #fff;padding: 0.5rem;color:black;font-size:14px">
            <?php echo "$ccharg บาท";?>
        </div>

        <label for="">1001 หน้าขึ้นไป ราคา </label>
        <div style="border: 2px solid #c9e6ff;border-radius: 5px;background: #fff;padding: 0.5rem;color:black;font-size:14px">
            <?php echo "$dcharg บาท";?>
        </div>
        
        <label for="">จำนวนเงินทั้งสิ้น</label>
        <div style="border: 2px solid #c9e6ff;border-radius: 5px;background: #fff;padding: 0.5rem;color:black;font-size:14px">
            <?php echo "$charg บาท";?>
        </div>

        <p>
            <button>ยืนยัน</button>
        </p>
   </form>
</body>
</html>