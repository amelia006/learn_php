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
$state = "CREATE table sinhvien_pdo(
    MaSV varchar(10) not null PRIMARY key,
    HoTen varchar(50) not null,
    NgaySinh datetime,
    LopHoc varchar(10),
    DTB float
    )";
if(!$conn->exec($state))
    die ("Create failed" .mysqli_error());
 else {
    echo "Create success";
 }

 //insert

 $data = [
    [
         'MaSV' => 'SV001',
         'HoTen' => 'Nguyen Van A',
         'NgaySinh' => '2002-10-01',
         'LopHoc' => 'A5',
         'DTB' => '8.7'
    ],
    [
        'MaSV' => 'SV002',
        'HoTen' => 'Nguyen Van B',
        'NgaySinh' => '2002-10-01',
        'LopHoc' => 'A5',
        'DTB' => '6.2'
   ],
   [
    'MaSV' => 'SV003',
    'HoTen' => 'Nguyen Van C',
    'NgaySinh' => '2002-10-01',
    'LopHoc' => 'A5',
    'DTB' => '9'
   ],
   [
    'MaSV' => 'SV004',
    'HoTen' => 'Nguyen Van D',
    'NgaySinh' => '2002-10-01',
    'LopHoc' => 'A5',
    'DTB' => '3'
   ],
   [
    'MaSV' => 'SV005',
    'HoTen' => 'Nguyen Van E',
    'NgaySinh' => '2002-10-01',
    'LopHoc' => 'A5',
    'DTB' => '5'
   ]
];

$stmt = $conn->prepare("INSERT INTO sinhvien_pdo (`MaSV`,`HoTen`,`NgaySinh`,`LopHoc`,`DTB`) values (:MaSV,:HoTen,:NgaySinh,:LopHoc,:DTB)");

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

$stmt = $conn->prepare("UPDATE sinhvien_pdo SET DTB=:DTB  WHERE MaSV=:MaSV");
$data = [
         'MaSV' => 'SV001',
         'DTB' => '8.5'
];
$result=$stmt-> execute($data);
if (!$result) {
    die("update failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "update success";
}

//delete
$stmt = $conn->prepare("DELETE from sinhvien_pdo WHERE MaSV=:MaSV");
$data = [
         'MaSV' => 'SV003',
];
$result=$stmt-> execute($data);
    
if (!$result) {
    die("delete failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "delete success";
}

?>