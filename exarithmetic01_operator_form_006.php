<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมคำนวณราคาสินค้า</title>
</head>
<body>

  
    <h2 style="color:pink">โปรแกรมคำนวณราคาสินค้า</h2>
    <hr>

    <form name="calculateproduct" action="" method="post">
        <input type="text" name="price" placeholder="ราคาสินค้า">
        <input type="text" name="unit" placeholder="จำนวนสินค้า">
        <input type="submit" value="คำนวณ"><br><br>
    </form>

<?php
    $price = @$_POST['price'];
    $unit = @$_POST['unit'];

    $net = $price * $unit;

    echo "ราคาสินค้าทั้งหมด เท่ากับ <span style=color:red;> $net</span> บาท<br>";
?>

</body>
</html>