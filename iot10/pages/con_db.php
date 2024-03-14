<?php

/* นำข้อมูลมาใส่โดยหาได้จาก Database Manager ใน 000webhost*/
$servername = "localhost";          // คือหาได้จาก DB Host
$username = "root";     // หาได้จาก DB User
$password = "";        // รหัสผ่านตอนสร้าง Database
$dbname = "test";       //  หาได้จาก DB Name

// ส่วนนี้จะเป็นการเชื่อมต่อฐานข้อมูล
$conn = new mysqli($servername, $username, $password, $dbname); // ตัวแปรเก็บค่าคำสั่งในการเชื่อมต่อฐานข้อมูล


// สร้างเงื่อนไขเพื่อตรวจสอบการเชื่อมต่อ โดยหากเชื่อมต่อสำเร็จ จะขึ้นข้อความว่า "connected"
if ($conn->connect_error){
    die("cannot connect to database" . $conn->connect_error);
}
else{
    //echo "connected!";
}

?>