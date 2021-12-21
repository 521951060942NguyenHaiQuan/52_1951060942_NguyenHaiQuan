<?php
    $hovaten =$_POST['txtHoTen'];
    $chucvu =$_POST['txtChucVu'];
    $somayban =$_POST['txtSoMayBan'];
    $sodidong =$_POST['txtSoDiDong'];
    $email =$_POST['txtEmail'];
    $madonvi =$_POST['cboDonVi'];

    $conn=mysqli_connect('localhost','root','dhtl_danhba');
    if(!$conn){
        die("Ket noi that bai.vui long kiem tra lai cac thong tin may chu");
    }
