<?php
    $allowType=["jpg","jpeg","gif","png","tif","tiff"];
    $fileType=explode("/",$_FILES["filePic"]["type"]);
    if(!in_array($fileType[1],$allowType)){
        //เมื่ออัพโหลดไฟล์ที่ไม่ตรงกัน
        echo "Non-image file is not allowed";
    }
    else{
        echo "Name: ".$_FILES["filePic"]["name"] . "<br>";
        echo "Size: ".$_FILES["filePic"]["size"] . "<br>";
        echo "Temp name: ".$_FILES["filePic"]["tmp_name"] . "<br>";
        echo "Error: ".$_FILES["filePic"]["error"] . "<br>";

        move_uploaded_file($_FILES["filePic"]["tmp_name"],"image/".$_FILES["filePic"]["name"]);
    }
?>