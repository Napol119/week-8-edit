<?php
$target_dir = "images"; //กำหนดที่อยู่ในการเก็บรูป
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



//เพิ่มโค้ดตรวจสอบไฟล์ที่อัพโหลดไปแล้ว



//เพิ่มโค้ดตรวจสอบขนาดไฟล์



//เพิ่มโค้ดตรวจสอบนามสกุลไฟล์



if ($uploadOk == 0) {
  
} else {
  if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    

  //เพิ่มโค้ดแสดงรายละเอียดของไฟล์ที่อัพโหลด
    echo "รูปมึงอัพได้แล้วนะไอแม่เย็ด."."<br><br><br>";


    echo "Upload : ". $_FILES["file"]["name"]."<br>";              //แสดงชื่อไฟล์
    echo "Type : ". $_FILES["file"]["type"]."<br>";                   //แสดงนามสกุลไฟล์
    echo "Size : ". $_FILES["file"]["size"]."<br>";          //แสดงขนาดไฟล์
    echo "Location : ". $_FILES["file"]["tmp_name"]."<br>";      //แสดงที่อยู่ของไฟล์
    echo "<img src=\"images/" . $_FILES["file"]["name"]. "\"/>";      //แสดงรูปภาพ

  } else {
    echo "อ่าวเห้ยเอ้า เอาเหี้ยไรมาใส่เนี่ย."."<br />";
  }
}
?>
