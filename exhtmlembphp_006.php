<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gankein Html kub PHP</title>
    <style>
        .text{color:red;font-size=50px}
        
    </style>
</head>
<body>

    Natnaree<br>
    <span class="text"> age : </span>
    <?php echo "<span class='text'> age :</span>",2026 - 2006?><br>
    <?php echo "<span style = color:blue;text-decoration:underline;> อายุ :  </span> "
    , 2026 - 2007 ?>
    <?php
    //Ex 1 
    $age=20;
    $income=50000;
    if($age<18 || $income>=100000 ){
        echo "You are not eligible for benefits";
    }
    //ตัวอย่างการใช้คำสั่งเงื่อนไข 3เงื่อนไข ถ้า user=admin ให้แสดงสวัสดี admin 
    // ถ้า user=editorให้แสดงสวัสดี editor ถ้า user เป็นชื่ออื่นให้แสดง ไม่มีชื่อผู้ใช้ที่ระบุ
    $user="admin";
    switch($user){
        case("admin") : echo"Hello Admin"; break;
        case("editor") : echo"Hello Editor"; break;
         default : echo"Not Fount";
       
    }
   
    if($user==="admin"){echo"Hello Admin";}
    elseif($user==="editor"){echo"Hello Editor";}
    else{echo"Not Fount";}

    //ซื้อขั้นต่ำ300 บาท ฟรีค่าส่ง พร้องส่วนลด 5% 
    // ซื้อขั้นต่ำ่ 1000 บาท ฟรีค่าส่ง ลด 30% 
    // ซื้อต่ำกว่า 300 คิดค่าส่ง 38 บาท
    $price=2000;
    if( $price>=1000){
        echo "ฟรีค่าจัดส่ง";
        $discount=$price*0.3;
        echo "ส่วนลด : $discount",
        "ราคาสุทธิ :", $price-$discount ,"บาท";
    }
    elseif($price>=300){
        echo "ฟรีค่าจัดส่ง";
        $discount=$price*0.05;
        echo "ส่วนลด : $discount",
        "ราคาสุทธิ :", $price-discount ,"บาท";
    }
    else{
        echo "ค่าจัดส่ง 38 บาท",
        "ราคาสุทธิ :",$price+38,"บาท";
    }
    ?>

</body>
</html>