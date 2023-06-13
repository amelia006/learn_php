<?php
 $db_server ="localhost";
 $db_username = "root";
 $db_pass ="";
 $db_name ="lesson6";

 //connect
 $dbh = mysqli_connect($db_server,$db_username,$db_pass);

 if(!$dbh)
  die ("Not connect" .mysqli_error());
 
  if (!mysqli_select_db($dbh, $db_name))  
  die ("Not found database". mysqli_error());
 
  //create table
  $sql_stmt = "CREATE table giaodich(
    Stt int not null primary key auto_increment,
    Ma varchar(10) not null unique,
    Loai varchar(50) not null,
    Ngay datetime,
    Sotien decimal,
    Mota varchar(2000)
    );";
 $result = mysqli_query($dbh,$sql_stmt);//thuc hien
 if(!$result)
    die ("Create failed" .mysqli_error());
 else {
    echo "Create success";
 }

 //insert
 $sql_stmt = "INSERT INTO giaodich (Ma,Loai,Ngay,Sotien,Mota)
                 values ('SV001','rut tien','2023-05-07','1000','di rut tien'),
                 ('SV002','rut tien','2023-06-07','2000','di rut tien'),
                 ('SV003','rut tien','2023-08-07','7000','di rut tien'),
                 ('SV004','vay tien','2002-12-01','1000','di vay tien'),
                 ('SV005','vay tien','2002-10-01','2000','di vay tien')"; 
$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL
    
if (!$result) {
    die("Add failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Add success";
}

//update

$sql_stmt = "UPDATE giaodich set Sotien =1000 where Stt = 3";
$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL
    
if (!$result) {
    die("update failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "update success";
}

//delete
$sql_stmt = "DELETE from giaodich where where Stt = 5";
$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL
    
if (!$result) {
    die("delete failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "delete success";
}
   
?>