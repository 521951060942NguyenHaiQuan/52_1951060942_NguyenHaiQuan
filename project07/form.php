<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="process.php">
        
        <textarea name="Mô tả bản thân" >
            Lorem ipsum dolor sit, 
            amet consectetur adipisicing elit. 
            Perferendis, ab enim autem neque debitis
             excepturi facere laboriosam quaerat praesentium 
             impedit reprehenderit iure, cumque, expedita dolores
              labore esse placeat! Doloremque, velit?
        </textarea>
        <br>
        <br>
        Tên
        <input type="text" name="ten">
        <br>
        Ngày Sinh
        <input type="date"name="ngay_sinh">
        <br>
        Mật khẩu
        <input type="password" name="mat_khau">
        <br>
        <input type="radio" name="gioi_tinh" value="Nam">Nam
        <input type="radio" name="gioi_tinh"value="Nữ">Nữ
        <br>

      <button>Đăng ký</button>

    </form>
    
</body>
</html>