<?php
$ma_nhanvien=$_GET['id'];
            //Bước 1:
            $conn=mysqli_connect('localhost','root','','dhtl_danhba');
            if(!$conn){
                die("Kết nối thất bại>Vui  lòng kiểm tra lại thông tin máy chủ");
            }
            //Bước 2 thực hiện truy vấn
            $sql="DELETE FROM db_nhanvien where ma_nhanvien='$ma_nhanvien'";
            $number=mysqli_query($conn,$sql);
            if($number>0){
                header("location:admin.php");
            }
            else{
                header("location:error.php");
            }
    