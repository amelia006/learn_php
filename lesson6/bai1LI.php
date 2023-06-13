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
  $sql_stmt = "CREATE table sinhvien(
    MaSV varchar(10) not null PRIMARY key,
    HoTen varchar(50) not null,
    NgaySinh datetime,
    LopHoc varchar(10),
    DTB float
    );";
 $result = mysqli_query($dbh,$sql_stmt);//thuc hien
 if(!$result)
    die ("Create failed" .mysqli_error());
 else {
    echo "Create success";
 }

 //insert
 $sql_stmt = "INSERT INTO sinhvien (MaSV,HoTen,NgaySinh,LopHoc,DTB)
                 values ('SV001','Nguyen Van A','2002-10-01','A5','8.7'),
                 ('SV002','Nguyen Van B','2002-08-01','A5','6.2'),
                 ('SV003','Nguyen Van C','2002-07-01','A5','9'),
                 ('SV004','Nguyen Van D','2002-12-01','A5','3'),
                 ('SV005','Nguyen Van E','2002-10-01','A5','5')"; 
$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL
    
if (!$result) {
    die("Add failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Add success";
}

//update

$sql_stmt = "UPDATE sinhvien set DTB =8.5 where MaSV = 'SV001'";
$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL
    
if (!$result) {
    die("update failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "update success";
}

//delete
$sql_stmt = "DELETE from sinhvien where MaSV = 'SV003'";
$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL
    
if (!$result) {
    die("delete failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "delete success";
}

//select
$sql_stmt = "SELECT * from sinhvien";
$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL
    
if (!$result) 
    die("select failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại

$rows = mysqli_num_rows($result); 

if($rows){
    while($row =mysqli_fetch_array($result)) { 
        echo 'MaSV: ' .$row['MaSV'] . '<br>';
        echo 'Hoten: ' .$row['HoTen'] . '<br>';
        echo 'NgaySinh: ' .$row['NgaySinh'] . '<br>';
        echo 'Lophoc: ' .$row['LopHoc'] . '<br>';
        echo 'DTB: ' .$row['DTB'] . '<br>';
    } 
}

   
?>