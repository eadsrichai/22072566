<!-- 
    Body Mass Index (BMI) 
    สูตรการคำนวณ = น้ำหนักตัว[Kg] / (ส่วนสูง[m] ยกกำลังสอง) 
    BMI kg/m2	    อยู่ในเกณท์	    ภาวะเสี่ยงต่อโรค
    น้อยกว่า          18.50	        น้ำหนักน้อย / ผอม	        มากกว่าคนปกติ
    ระหว่าง          18.50 - 22.90	ปกติ (สุขภาพดี)	            เท่าคนปกติ
    ระหว่าง          23 - 24.90	    ท้วม / โรคอ้วนระดับ 1        อันตรายระดับ 1
    ระหว่าง          25 - 29.90	    อ้วน / โรคอ้วนระดับ 2	     อันตรายระดับ 2
    มากกว่า          30	            อ้วนมาก / โรคอ้วนระดับ 3	อันตรายระดับ 3 
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมคำนวณดัชนีมวลกาย</title>
    <link rel="stylesheet" href="../bootstrap-5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div>
            <p class="fs-1 text-center bg bg-primary text-white mt-3  p-3">โปรแกรมคำนวณดัชนีมวลกาย</p>
        </div>
        <form class="" action="Ex16.php" method="GET">
        <div class="row row-cols-1 gy-3">
            <div class="col form-floating">
                <input type="text" value=""  id="fw" name="fw" class="form-control" />
                <label for="fw" class="ms-2">น้ำหนักตัว (kg.)</label>
            </div>
            <div class="col form-floating">
                <input type="text" value=""  id="fh"  name="fh" class="form-control" />
                <label for="fh" class="ms-2" >ส่วนสูง (cm.)</label>
            </div>
            <div class="">
                <input type="submit" value="คำนวณ BMI" name="submit" class="col-12 fs-3 btn btn-primary" />
            </div>
        </div>
        </form>
            <?php
                if(isset($_GET['fw']) && $_GET['fw'] != null && isset($_GET['fh']) && $_GET['fh'] != null){
                    $w = $_GET['fw'];
                    $h = $_GET['fh'];
                    $h = pow($h/100.00,2);
                    $bmi = $w/($h);
                 
            ?>
            <div class="row row-cols-1 gy-3">
                <div class="col">
                    <span>ค่า BMI ของคุณคือ :</span>
                    <input type="text" value="<?php  echo number_format( $bmi,2);  ?>" name="" class="" />
                </div>
                <div class="col">
                    <span>ผลการทดสอบ :</span>
                    <input type="text" value="" name="" class="" />
                </div>
            </div>
        <?php   }  ?>
    </div>
</body>
</html>