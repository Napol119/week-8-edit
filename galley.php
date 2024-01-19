<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" >
<link rel="stylesheet" href="css/style3.css">


</head>
<body>
  <div class="main-block">
    <div class="left-part">
      <i class="fas fa-regular fa-camera-retro"></i>
      <i class="fas fa-light fa-images"></i>
      <i class="fas fa-grin-wink"></i>
    </div>

    <!-- สร้างฟอร์มอัพโหลดที่นี่ -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
    <h1>โหลดไฟล์แม่เย็ด</h1>
    <label for="file"></label>
    <input type="file" name="file" id="file" />
      <br />
      <input name="button" type="submit" value="มึงกดดิเห้ย" />
</form>
  </div>
</body>
</html>
