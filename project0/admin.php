<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    </header>
    <main>
    <div class="container">
            <h3 class="text-center">DANH BẠ ĐIỆN THOẠI CÁN BỘ</h3>
            <table class="table">
            <button type="button" class="btn btn-primary"><a style="color:white;text-decoration:none"href="add_employee.php">Thêm</a></button>
  <thead>
    <tr>
      <th>Mã nhân viên</th>
      <th>Họ và tên</th>
      <th>Chức vụ</th>
      <th>Số máy bàn</th>
      <th>Số di động</th>
      <th>Email</th>
      <th> Tên đơn vị</th>
      <th>Sửa</th>
      <th>Xóa</th>
      
    </tr>
  </thead>
  <tbody>
      <!--Phần dữ liệu muốn thay đổi-->
      <!--Phân kết nối-->
       <!-- Bước 1 kết nối cơ sở dữ liệu -->
       <?php
            //Bước 1:
            $conn=mysqli_connect('localhost','root','','dhtl_danhba');
            if(!$conn){
                die("Kết nối thất bại>Vui  lòng kiểm tra lại thông tin máy chủ");
            }
            //Bước 2 thực hiện truy vấn
            $sql="select * from db_nhanvien";
            $ketqua=mysqli_query($conn,$sql);
            //Bước 3
            if(mysqli_num_rows($ketqua)>0){
              while($row=mysqli_fetch_assoc($ketqua)){
                ?>
                
                <tr>
                    <th scope="row"><?php echo $row['ma_nhanvien'];?></th>
                    <td><?php echo $row['hovaten'];?></td>
                    <td><?php echo $row['chucvu'];?></td>
                    <td><?php echo $row['sodt_coquan'];?></td>
                    <td><?php echo $row['sodt_didong'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['ma_donvi']?></td>
                    <td><a href="#"><i class="bi bi-pencil-square"></i></a></td>
                    <td><a href="delete_employee.php?id=<?php echo $row['ma_nhanvien'];?>"><i class="bi bi-trash"></i></a></td>
                  </tr>
                <?php
            }
          }

       ?>
    
  </tbody>
</table>
        </div>
    </main>
</body>
</html>