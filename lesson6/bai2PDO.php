<?php
 $db_type ='mysql';
 $db_host ="localhost";
 $user_name = "root";
 $user_pass ="";
 $db_name ="lesson6";

 //connect
$conn = new PDO("$db_type:host=$db_host;dbname=$db_name",$user_name,$user_pass);
if ($conn) {
    echo "Connected to the $db_host successfully!";
}
//creating new tables
$state = "CREATE table giaodich_pdo(
    Stt int auto_increment primary key ,
    Ma varchar(10) not null unique,
    Loai varchar(50) not null,
    Ngay datetime,
    Sotien decimal,
    Mota varchar(2000)
    )";
if(!$conn->exec($state))
    die ("Create failed" .mysqli_error());
 else {
    echo "Create success";
 }

 //insert
 $data = [
    [
         'Ma' => 'SV001',
         'Loai' => 'rut tien',
         'Ngay' => '2023-06-07',
         'Sotien' => '1000',
         'Mota' => 'di rut tien'
    ],
    [
        'Ma' => 'SV002',
        'Loai' => 'rut tien',
        'Ngay' => '2023-08-07',
        'Sotien' => '2000',
        'Mota' => 'di rut tien'
   ],
   [
    'Ma' => 'SV003',
    'Loai' => 'rut tien',
    'Ngay' => '2023-09-07',
    'Sotien' => '7000',
    'Mota' => 'di rut tien'
   ],
   [
    'Ma' => 'SV004',
    'Loai' => 'vay tien',
    'Ngay' => '2023-09-07',
    'Sotien' => '1000',
    'Mota' => 'di vay tien'
   ],
   [
    'Ma' => 'SV005',
    'Loai' => 'vay tien',
    'Ngay' => '2023-09-07',
    'Sotien' => '2000',
    'Mota' => 'di vay tien'
   ]
];

$stmt = $conn->prepare("INSERT INTO giaodich_pdo(Ma,Loai,Ngay,Sotien,Mota) values (:Ma,:Loai,:Ngay,:Sotien,:Mota)");

try{
    foreach($data as $row) {
        $stmt->execute($row); 
    }
    echo "Add success";
}
catch (Exception $e) 
{
    echo "Add failed: " . $e->getMessage();
}

//update

$stmt = $conn->prepare("UPDATE giaodich_pdo SET Sotien=:Sotien  WHERE Stt=:Stt");
$data = [
         'Sotien' => '1000',
         'Stt' => '3'
];
$result=$stmt-> execute($data);
if (!$result) {
    die("update failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "update success";
}

//delete
$stmt = $conn->prepare("DELETE from giaodich_pdo WHERE Stt=:Stt");
$data = [
         'Stt' => '5',
];
$result=$stmt-> execute($data);
    
if (!$result) {
    die("delete failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "delete success";
}

?>