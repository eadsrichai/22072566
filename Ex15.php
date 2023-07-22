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
    <form action="Ex15.php" method="GET">
       <div class="row mt-3">
            <div class="col-4">
                <input type="text"  class="form-control fs-4" placeholder="แม่สูตรคูณแม่เริ่มต้น" value="" required name="numberstart" />
            </div>
            <div class="col-4">
                <input type="text"  class="form-control fs-4" placeholder="แม่สูตรคูณแม่สิ้นสุด" value="" required name="numberstop" />
            </div>
            <div class="col-3">
                <input type="submit" class="btn btn-primary" value="คำนวณสูตรคูณ" name="cal" />
            </div>
       </div>
    </form>
 



<?php
    if(isset($_GET['numberstart']) && $_GET['numberstart'] != null && isset($_GET['numberstop']) && $_GET['numberstop'] != null){
        $start = $_GET['numberstart'];
        $stop = $_GET['numberstop'];
        echo  "<div class='mt-3 pt-3 alert alert-success' role='alert'>";
       
        $i = $start;
        while($i<= $stop){
            $j = 1;
            while($j < 13){ 
                echo  "$i x $j = ". $i * $j ;
                $j++;
                echo "<br>";
            }
            $i++;
            echo "<br>";
        }
}
?>

</div>
</body>
</html>