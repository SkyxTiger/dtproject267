<?php
    echo"<h2>การใช้ strlen</h2>";
    $strlen="I am a string";
    echo strlen($strlen);
    $strlen2="มหาวิทยาลัย";
    echo"<br>";
    echo strlen($strlen2);

    echo"<h2>การใช้ explode(การสร้างสตริงจาอาร์เรย์)</h2>";
    $expStr="I am a string";
    $expArr=explode(' ',$expStr);
    print_r($expArr); //print_r ใช้ในการแสดงผลข้อมูลในอาร์เรย์
    echo"<br>";
    echo $expArr[0].$expArr[1].$expArr[2].$expArr[3];

    echo"<h2>การใช้ impode (การสร้างอาร์เรย์จาสตริง)</h2>";
    $impArr=["I","am","an","array"];
    $impStr=implode($impArr);
    echo $impStr;
    echo"<br>";
    $filename=['img123','png'];
    $impFilename=implode('.',$filename);
    echo $impFilename[0].$impFilename[1].$impFilename[2].
    $impFilename[3].$impFilename[4].$impFilename[5];
    echo"<br>";
    echo $filename[0]."<br>";
    echo $impFilename;

    echo"<h2>การใช้เข้ารหัสแบบ mb5 (มี 32  ตัวอัก)</h2>";
    $password = "lantao";
    $hashValue = md5($password);
    echo $hashValue;
    echo $password;
    echo"<br>";
    echo" <h2>การเข้ารหัสแบบ sha256 (ปลอดภัยกว่าเพราะมี 64 ตัวอักษร)</h2>";
    echo"การเข้ารหัสแบบ SHA-256 เป็นการเข้ารหัสแบบทางเดียว (one-way encryption) เนื่องจาก SHA-256 เป็นฟังก์ชันแฮชที่ออกแบบมาเพื่อความปลอดภัย ไม่มีค่าสั่งหรือวิธีการที่สามารถแปลงกลับ ข้อความที่ถูกแฮชด้วย SHA-256 กลับไปเป็นข้อความดันฉบับได้โดยง่าย" ;
    echo"<hr>";
    $password = "pitboo";
    $hashValue = hash('sha256', $password);
    echo $hashValue;
    echo"<br>";

    $storedData =
    "358d0ea28a987530d47b4651b170613dd570f345a967cd68d2085d82a9f28225";

    $originalText = "pitboo";

    if (hash_equals(hash('sha256',$originalText),$storedData)){
        echo "ล็อกอินสำเร็จ";
    } else {
        echo "รหัสไม่ถูก";
    }


?>