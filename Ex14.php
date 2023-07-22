<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมสูตรคูณ</title>
    <link rel="stylesheet" href="../bootstrap-5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <div>
            <p class="fs-1 bg bg-primary text-white mt-3  p-3">โปรแกรมคำนวณสูตรคูณ</p>
        </div>
    <form action="Ex14.php" method="GET">
       <div class="row mt-3">
            <div class="col-3">
                <input type="text"  class="form-control fs-4" placeholder="กรุณากรอกแม่สูตรคูณ" value="" required name="number" />
            </div>
            <div class="col-3">
                <input type="submit" class="btn btn-primary" value="คำนวณสูตรคูณ" name="cal" />
            </div>
       </div>
    </form>
 



<?php
    if(isset($_GET['number']) && $_GET['number'] != null){
        $n = $_GET['number'];
        echo  "<div class='mt-3 pt-3 alert alert-success' role='alert'>";
        for($i = 1; $i < 13 ; $i++){
         
            echo  "$n x $i = ". $n * $i . "<br>";
        }
        echo  "</div>";
    }
?>

</div>
</body>
</html>