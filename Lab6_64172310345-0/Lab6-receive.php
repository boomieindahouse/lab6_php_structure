<?php
   $dayTH = ['อาทิตย์','จันทร์','อังคาร','พุธ','พฤหัสบดี','ศุกร์','เสาร์'];
   $monthTH = [null,'มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'];
   $monthTH_brev = [null,'ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.'];
   $date = $dayTH[date("w")]." ".date("d")." ".$monthTH[date("n")]." ".(date("Y")+543);
   date_default_timezone_set('asia/bangkok');
   echo "วันที่ ".$date."<br>"; 
   echo "เวลา ".date("G:i")." น."."<br>";
   echo "<br><br>";
   $title_name=$_POST["title"];
   $fname=$_POST["fname"];
   $lname=$_POST["lname"];
   $sex=$_POST["sex"];

   if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(move_uploaded_file($_FILES["photo"]["tmp_name"],"picture/".$_FILES["photo"]["name"])){
        echo "";
    }else{
        echo "Error: ".$_FILES["photo"]["error"];
    }
   }

   echo "ชื่อ "."$title_name"."      "."$fname"."      "."$lname"."<br>";
   echo "เพศ "."$sex"."<br>";
   echo "บันทึกข้อมูลเรียบร้อบ";
?>