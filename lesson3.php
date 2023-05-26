<?php
// 1. Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không
$number = '10';
function checkNumber($number){
    if($number%2==0) return true;
    else return false;
}
if(checkNumber($number))
    echo '1. Kết quả: Có <br><br>';
else 
    echo '1. Kết quả: Không <br><br>';

// Viết chương trình PHP để tính tổng của các số từ 1 đến n
$n= 60;
function sum($n){
    $term = ($n-1)+1;
    return ($n+1)* $term /2;
}
echo "2. Kết quả: " . sum($n) . "<br><br>"; 

?>

<?php
//Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10
echo '3. Kết quả: <br><br>'; 
?>
<table border="1px">
<tr>
<?php
for($i = 1; $i <= 10; $i ++) {
    echo "<td>";
    for($j = 1; $j <= 10; $j ++) {
        echo "$i x $j = " . ($i * $j);
        echo "<br>";
    }
    echo "</td>";
}
?>
</tr>
</table>

<?php
//Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không
$string = 'loulou in hospital';
$sub = 'int';
function checkIsExit($string, $sub){
    return strlen(strstr($string, $sub));
}
if(checkIsExit($string, $sub)>0)
    echo '4. Kết quả: Có <br><br>';
else 
    echo '4. Kết quả: Không <br><br>';

//Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
$list_number = array(1, 10, -25, 168);
echo "5. Kết quả: GTLN = " . max($list_number) . "và GTNN = ". min($list_number) .  "<br><br>";

//Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
echo '6. Kết quả: <br>';
sort($list_number);
foreach($list_number as $item)
    echo "$item <br>";

////Viết chương trình PHP để tính giai thừa của một số nguyên dương
function calculateFactorial($n) {
    $result = 1;
    if ($n == 0 || $n == 1) {
        return $giai_thua;
    } else {
        for($i = 2; $i <= $n; $i ++) {
            $result *= $i;
        }
        return $result;
    }
}
echo "7. Kết quả: " . calculateFactorial($n) ."<br><br>";


////Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước
function check_prime($n)
{
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0){
            return false;
        }
    }
    return true;
}
echo '8. Kết quả: <br>';
$start = 3;
$end = 10;
for($i = $start; $i <= $end; $i ++) {
    if(check_prime($i))
        echo "$i <br>";
}

//Viết chương trình PHP để tính tổng của các số trong một mảng
$sum = 0;
foreach($list_number as $item)
    $sum += $item;
echo "9. Kết quả: $sum <br>";

 //Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
       
 function isFibonacci($n)
 {
     $fibonacci = [];
     $fibonacci[0] = 0;
     $fibonacci[1] = 1;
 
     for ($i = 2; $i <= $n; $i++) {
         $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
     }
 
     return $fibonacci;
 }
 
 $fibonacci = isFibonacci($end);
 
 echo "10. Kết quả: <br>";
 for ($i = $start; $i <= $end; $i++) {
     echo $fibonacci[$i] . "<br>";
 }

//Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
function isArmstrongNumber($number) {
    $sum = 0;
    $temp = $number;

    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, strlen((string)$number));
        $temp = floor($temp / 10);
    }
    if ($sum === $number) {
        return true;
    } else {
        return false;
    }
}
$number1 = 153;

if (isArmstrongNumber($number1)) {
    echo "Câu 11. Có <br>";
} else {
    echo "Câu 11. Không <br>";
}
 
//Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
function insertElement($array, $element, $position) {
    if ($position < 0 || $position > count($array)) {
        return $array;
    }

    $part1 = array_slice($array, 0, $position);
    $part2 = array_slice($array, $position);
    $result = array_merge($part1, [$element], $part2);

    return $result;
}

// Ví dụ sử dụng chương trình
$numbers = [1, 2, 3, 4, 5];
$insertElement = 10;
$insertPosition = 2;
$arr = insertElement($numbers, $insertElement, $insertPosition);

echo "Câu 12: ";
print_r($arr);
echo '<br/>';

//Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function removeDup($array) {
    $result = array_unique($array);
    return $result;
}

$numbers = [9, 2, 3, 16, 4, 2, 5];
$uniqueNumbers = removeDup($numbers);

echo "Câu 13: Kết quả: ";
print_r($uniqueNumbers);
echo '<br/>';

//Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
function findPosition($array, $element) {
    $positions = [];
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] === $element) {
            $positions[] = $i;
        }
    }

    return $positions;
}

// Ví dụ sử dụng chương trình
$numbers = [1, 2, 3, 2, 4, 2, 5];
$searchElement = 2;
$positions = findPosition($numbers, $searchElement);
echo "Câu 14: Kết quả: ";
if (empty($positions)) {
    echo "Không tìm thấy";
} else {
    echo "Vị trí của phần tử $searchElement trong mảng là: ";
    foreach ($positions as $pos) {
        echo "$pos ";
    }
}
echo '<br/>';

//Viết chương trình PHP để đảo ngược một chuỗi.
function reverseString($string) {
    $reversedString = '';
    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $reversedString .= $string[$i];
    }

    return $reversedString;
}

// Ví dụ sử dụng chương trình
$word = "my name is loulou";
$reversedWord = reverseString($word);

echo "Câu 15: Kết quả: $reversedWord";
echo '<br/>';

//Viết chương trình PHP để tính số lượng phần tử trong một mảng.
function countElements($array) {
    return count($array);
}

// Ví dụ sử dụng chương trình
$numbers = [1, 2, 3, 4, 5];
$count = countElements($numbers);

echo "Câu 16:Kết quả: $count <br>";

//Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function isPalindrome($string) {
    $string = strtolower(preg_replace('/[^a-zA-Z]/', '', $string));
    return $string === strrev($string);
}

// Ví dụ sử dụng chương trình
$word = "luolou";

if (isPalindrome($word)) {
    echo "Câu 17: $word là chuỗi Palindrome <br>";
} else {
    echo "Câu 17: $word không là chuỗi Palindrome <br>";
}
//Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
function countOccur($array, $element) {
    $count = 0;

    foreach ($array as $value) {
        if ($value === $element) {
            $count++;
        }
    }

    return $count;
}

// Ví dụ sử dụng chương trình
$numbers = [1, 2, 3, 2, 4, 2, 5];
$searchElement = 2;
$count = countOccur($numbers, $searchElement);

echo "Câu 18: Số lần xuất hiện: $count<br>";

//Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
function sortArrayDescending($array) {
    rsort($array);
    return $array;
}

// Ví dụ sử dụng chương trình
$numbers = [5, 2, 9, -8, 7];
$result = sortArrayDescending($numbers);

echo "Câu 19. Kết quả mảng đã sắp xếp";
print_r($result);
echo '<br/>';
//Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
//Thêm đầu vào
function addToBeginning($array, $element) {
    array_unshift($array, $element);
    return $array;
}
function addElementToEnd($array, $element) {
    $array[] = $element;
    return $array;
}

// Ví dụ sử dụng chương trình
$numbers = [1, 2, 3, 4, 5];
$newElement = 0;
$check = 0; //0-begin; 1- end
if($check ==0) $result = addToBeginning($numbers, $newElement);
else $result = addElementToEnd($numbers, $newElement);
echo "Câu 20. Kết quả: ";
print_r($result);
echo '<br/>';

//Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
function findSecondLargest($array) {
    if(count($array)<2) return null;
    sort($array);
    $result = $array[count($array)-2];
    return $result;
}

// Ví dụ sử dụng chương trình
$numbers = [5, 12, 8, 30, 16, 15];
$result = findSecondLargest($numbers);

if ($result !== null) {
    echo "Câu 21: Kết quả: $result <br>";
} else {
    echo "Câu 21: Không tìm được <br>";
}

//Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
function findGCD($a, $b) {
    $a = abs($a);
    $b = abs($b);
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }

    return $a;
}

function findLCM($a, $b) {
    $gcd = findGCD($a, $b);
    $lcm = ($a * $b) / $gcd;

    return $lcm;
}

// Ví dụ sử dụng chương trình
$number1 = -156;
$number2 = 18;

$gcd = findGCD($number1, $number2);
$lcm = findLCM($number1, $number2);
echo "Câu 22: <br>";
echo "UCLN của $number1 và $number2 là: $gcd<br>";
echo "BCNN của $number1 và $number2 là: $lcm <br>";

//Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
function isPerfectNumber($number) {
    $sum = 0;

    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            $sum += $i;
        }
    }
    if ($sum === $number) {
        return true;
    } else {
        return false;
    }
}

// Ví dụ sử dụng chương trình
$number = 28;

if (isPerfectNumber($number)) {
    echo "Câu 23: $number là số hoàn hảo.<br>";
} else {
    echo "Câu 23: $number không là số hoàn hảo.>br>";
}

//Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
function findLargestOdd($array) {
    sort($array);
    $result =0;
    for($i=count($array)-1; $i>=0;$i--)
    {
        if($array[$i]%2==1) 
        {
            $result = $array[$i];
            break;
        }
    }
    return $result;
}

$numbers = [2, 8, 5, 12, 3, 7, 99];
$result = findLargestOdd($numbers);

if ($result !== 0) {
    echo "Câu 24: $result <br>";
} else {
    echo "Câu 24: Không tìm thấy<br>";
}

//Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function isPrimeNumber($number) {
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

$number = 23;

if (isPrimeNumber($number)) {
    echo "Câu 25: $number là số nguyên tố <br>";
} else {
    echo "Câu 25: $number không là số nguyên tố <br>";
}

//Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
function findLargestPositive($array) {
    sort($array);
    if($array[count($array)-1]<0)  return null;
    else return $array[count($array)-1];
}

// Ví dụ sử dụng chương trình
$numbers = [-5, 2, 98, -10, 4, 7, 1];
$result = findLargestPositive($numbers);

if ($result !== null) {
    echo "Câu 26: Số dương lớn nhất là: $result <br>";
} else {
    echo "Câu 26: Không có số dương nào <br>";
}

//Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function findLargestNegative($array) {
    sort($array);
    if($array[0]>0)  return null;
    else return $array[0];
}

// Ví dụ sử dụng chương trình
$numbers = [5, -2, 9, -10, 4, -7, 1];
$result = findLargestNegative($numbers);

if ($result !== null) {
    echo "Câu 27: Số âm nhỏ nhất là: $result <br>";
} else {
    echo "Câu 27: Không có số âm nào <br>";
}

 //Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
 function sumOfOddNumbers($n) {
     $sum = 0;
     for ($i = 1; $i <= $n; $i++) {
         if ($i % 2 != 0) {
             $sum += $i;
         }
     }
 
     return $sum;
 }
 
 $n = 16;
 $result = sumOfOddNumbers($n);
 
 echo "Câu 28: Kết quả: $result<br>";

//Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
function findPerfectSquares($start, $end) {
$perfectSquares = [];
for ($i = $start; $i <= $end; $i++) {
if (sqrt($i) == intval(sqrt($i))) {
    $perfectSquares[] = $i;
}
}

return $perfectSquares;
}

$start = 1;
$end = 300;

$result = findPerfectSquares($start, $end);

echo "Câu 29: Kết quả";
foreach ($result as $square) {
echo $square . " ";
}
echo '<br/>';

//Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
function isSubstring($string, $substring) {
    $position = strpos($string, $substring);
    if ($position !== false) {
        return true;
    } else {
        return false;
    }
}
$string = "loulou in hospital";
$substring = "loulou";

if (isSubstring($string, $substring)) {
    echo "Chuỗi '$substring' là chuỗi con của '$string'";
} else {
    echo "Chuỗi '$substring' không là chuỗi con của '$string'";
}
?>







