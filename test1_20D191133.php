<br> Câu 1 <br>
<?php
function evenNumber($number) {
    if ($number % 2 == 0) {
        echo "Số $number là số chẵn.";
    } else {
        echo "Số $number không phải là số chẵn.";
    }
}

$myNumber = 8;
echo evenNumber($myNumber)
?>

<br> Câu 2 <br>
<?php
function sum($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}

$n = 5;
$totalSum = sum($n);
echo "Tổng của các số từ 1 đến $n là: $totalSum";
?>

<br> Câu 3 <br>
<?php
function printMultiplicationTable() {
    for ($i = 1; $i <= 10; $i++) {
        echo "Bảng cửu chương $i:\n";
        for ($j = 1; $j <= 10; $j++) {
            $result = $i * $j;
            echo "$i x $j = $result\n";
        }
        echo "<br>";
    }
}

printMultiplicationTable();
?>



<br> Câu 4 <br>
<?php
function checkStringContainsWord($string, $word) {
    $length = strlen($string);
    $wordLength = strlen($word);
    
    for ($i = 0; $i <= $length - $wordLength; $i++) {
    $match = true;
    
    // Kiểm tra từng ký tự trong từ
    for ($j = 0; $j < $wordLength; $j++) {
        if ($string[$i + $j] != $word[$j]) {
            $match = false;
            break;
        }
    }
    
    // Nếu tìm thấy từ trong chuỗi, trả về true
    if ($match) {
        return true;
    }
}

// Nếu không tìm thấy từ trong chuỗi, trả về false
return false;
}

// Gọi hàm kiểm tra chuỗi
$string = "Nguyen Phuong Thao";
$word = "Phuong";
if (checkStringContainsWord($string, $word)) {
echo "Chuỗi '$string' chứa từ '$word'.";
} else {
echo "Chuỗi '$string' không chứa từ '$word'.";
}
?>


<br> Câu 5 <br>
<?php
function findMinMax($array) {
    $min = $array[0]; 
    $max = $array[0]; 

    foreach ($array as $value) {
        if ($value < $min) {
            $min = $value; 
        }

        if ($value > $max) {
            $max = $value; 
        }
    }

    return array('min' => $min, 'max' => $max);
}

$numbers = array(5, 2, 9, 1, 7, 3);
$result = findMinMax($numbers);

echo "Giá trị nhỏ nhất là: " . $result['min'] . "<br>";
echo "Giá trị lớn nhất là: " . $result['max'];
?>


<br> Câu 6<br>
<?php
function arrayAscending($arr) {
    $length = count($arr);
    
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                [$arr[$j], $arr[$j + 1]] = [$arr[$j + 1], $arr[$j]];
            }
        }
    }
    
    return $arr;
}

$array = [9, 4, 2, 7, 5, 1];
foreach (arrayAscending($array) as $element) {
    echo $element . " ";
}
?>


<br> Câu 7 <br>
<?php
function factorial($n) {
    $result = 1;
    
    // Sử dụng vòng lặp để nhân từng số từ 1 đến $n
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    
    return $result;
}

$n = 5;
echo "Giai thừa của $n = " . factorial($n); 
?>


<br> Câu 8 <br>
<?php
function checkPrimeNumbers($start, $end) {
    $primeNumbers = array();
    
    for ($num = $start; $num <= $end; $num++) {
        $isPrime = true;
        
        if ($num <= 1) {
            $isPrime = false;
        } else {
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
        }
        
        if ($isPrime) {
            $primeNumbers[] = $num;
        }
    }
    
    return $primeNumbers;
}

$start = 1;
$end = 100;
$primeNumbers = checkPrimeNumbers($start, $end);

echo "Các số nguyên tố trong khoảng từ $start đến $end là: ";
foreach ($primeNumbers as $prime) {
    echo $prime . " ";
}
?>


<br> Câu 9 <br>
<?php
function sumArray($arr) {
    $sum = 0;
    
    foreach ($arr as $num) {
        $sum += $num;
    }
    
    return $sum;
}

$array = [1, 2, 3, 4, 5];
$sum = sumArray($array);

echo "Tổng các số trong mảng là: " . $sum;
?>



<br> Câu 10 <br>
<?php
function printFibonacciNum($startNum, $endNum) {
    $firstNum = 0;
    $secondNum = 1;

    while ($firstNum <= $endNum) {
        if ($firstNum >= $startNum) {
            echo $firstNum . " ";
        }

        $nextNum = $firstNum + $secondNum;
        $firstNum = $secondNum;
        $secondNum = $nextNum;
    }
}

$startNum = 0;
$endNum = 100;
printFibonacciNum($startNum, $endNum);
?>


<br> Câu 11 <br>
<?php
function checkArmstrong($number) {
    $sum = 0;
    $temp = $number;
    
    while ($temp != 0) {
        $digit = $temp % 10; //lấy phần dư của số chia 
        $sum += $digit ** 3;
        $temp = (int)($temp / 10); // lấy phần nguyên của số chia
    }
    
    return $sum === $number;
}

$number = 153;
if (checkArmstrong($number)) {
    echo $number . ' là số Armstrong.';
} else {
    echo $number . ' không phải là số Armstrong.';
}
?>



<br> Câu 12 <br>
<?php

function insertElement($array, $element, $position) {
    $length = count($array);
    
    // Kiểm tra vị trí chèn có hợp lệ hay không
    if ($position < 0 || $position > $length) {
        echo "Vị trí chèn không hợp lệ!";
        return $array;
    }
    
    // Tạo mảng mới với kích thước tăng lên 1
    $newArray = array();
    
    // Chèn các phần tử từ mảng gốc vào mảng mới cho đến vị trí chèn
    for ($i = 0; $i < $position; $i++) {
        $newArray[] = $array[$i];
    }
    
    // Chèn phần tử mới vào mảng
    $newArray[] = $element;
    
    // Chèn các phần tử từ vị trí sau vào mảng mới
    for ($i = $position; $i < $length; $i++) {
        $newArray[] = $array[$i];
    }
    
    return $newArray;
}

// Sử dụng hàm để chèn phần tử vào mảng
$array = [1, 2, 3, 4, 5];
$newArray = insertElement($array, 10, 2);

// In ra mảng sau khi chèn
echo implode(', ', $newArray);
?>


<br> Câu 13 <br>
<?php
function removeDuplicates($array) {
    $result = array();
    
    foreach ($array as $element) {
        $isDuplicate = false;
        
        foreach ($result as $value) {
            if ($element == $value) {
                $isDuplicate = true;
                break;
            }
        }
        
        if (!$isDuplicate) {
            $result[] = $element;
        }
    }
    
    return $result;
}

$array = [1, 2, 3, 4, 1, 2, 5, 3];
$newArray = removeDuplicates($array);

// Chỉ hiển thị dãy số
echo implode(', ', $newArray);
?>



<br> câu 14 <br>
<?php
function findElementPosition($array, $element) {
    $position = -1; // Khởi tạo biến vị trí ban đầu là -1
    
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == $element) {
            $position = $i; // Gán vị trí của phần tử khi tìm thấy
            break; // Thoát khỏi vòng lặp khi tìm thấy phần tử
        }
    }
    
    return $position;
}

$array = [1, 2, 3, 4, 5];
$element = 3;

$position = findElementPosition($array, $element);

echo "Vị trí của phần tử $element trong mảng là: $position";
?>



<br> Câu 15 <br>
<?php
function reverseString($string) {
    $reversedString = ''; // Khởi tạo chuỗi đảo ngược ban đầu rỗng
    
    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $reversedString .= $string[$i]; // Nối ký tự từ cuối chuỗi vào chuỗi đảo ngược
    }
    
    return $reversedString;
}

$inputString = "Nguyen Phuong Thao";
$reversedString = reverseString($inputString);

echo "Chuỗi đảo ngược: $reversedString";
?>



<br> Câu 16 <br>
<?php

function countElements($array)
{
    $count = count($array);
    return $count;
}

// Mảng ban đầu
$originalArray = array(1, 2, 3, 4, 5);

// Tính số lượng phần tử trong mảng
$elementCount = countElements($originalArray);

// Hiển thị số lượng phần tử
echo "Số lượng phần tử trong mảng là: " . $elementCount;
?>


<br> Câu 17 <br>
<?php

function isPalindrome($string) {
    $length = strlen($string);
    
    for ($i = 0; $i < $length / 2; $i++) {
        if ($string[$i] !== $string[$length - $i - 1]) {
            return false; // Nếu có bất kỳ ký tự không khớp, trả về false
        }
    }
    
    return true; // Nếu tất cả các ký tự khớp, trả về true
}

$inputString = "level";
if (isPalindrome($inputString)) {
    echo "Chuỗi '$inputString' là chuỗi Palindrome.";
} else {
    echo "Chuỗi '$inputString' không là chuỗi Palindrome.";
}

?>



<br> Câu 18 <br>
<?php

function countOccurrences($array, $element)
{
    $count = 0;

    // Duyệt qua mảng và tăng biến đếm mỗi khi phần tử xuất hiện
    foreach ($array as $value) {

        if ($value === $element) {

            $count++;
        }
    }

    return $count;
}

// Mảng ban đầu
$originalArray = array(1, 2, 3, 2, 4, 3, 5, 1);
$elementToCount = 2;

// Đếm số lần xuất hiện của phần tử trong mảng
$occurrences = countOccurrences($originalArray, $elementToCount);

// Hiển thị số lần xuất hiện
echo "Số lần xuất hiện của phần tử " . $elementToCount . " trong mảng là: " . $occurrences;
?>



<br> Câu 19 <br>
<?php

function arrayDescending($arr) {
    $length = count($arr);
    
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            if ($arr[$j] < $arr[$j + 1]) {
                // Swap the elements
                [$arr[$j], $arr[$j + 1]] = [$arr[$j + 1], $arr[$j]];
            }
        }
    }
    
    return $arr;
}

// Example usage
$array = [9, 4, 2, 7, 5, 1];
$result = arrayDescending($array);

// Display the result as a sequence of numbers
echo implode(', ', $result);
?>



<br> Câu 20 <br>
<?php
function addToArray($arr, $element, $position) {
    if ($position === 'start') {
        $result = [$element]; // Tạo một mảng mới với phần tử được thêm vào đầu

        foreach ($arr as $value) {
            $result[] = $value; // Thêm các phần tử cũ vào sau phần tử mới
        }
    } elseif ($position === 'end') {
        $result = $arr; // Tạo một bản sao của mảng ban đầu

        $result[] = $element; // Thêm phần tử vào cuối mảng
    }

    return $result;
}

// Ví dụ sử dụng
$array = ['Monday', 'Wednesday'];
$newElement = 'Friday';

$result1 = addToArray($array, $newElement, 'start');
$result2 = addToArray($array, $newElement, 'end');

// Hiển thị kết quả
echo "Mảng sau khi thêm vào đầu: " . implode(', ', $result1) . "<br>";
echo "Mảng sau khi thêm vào cuối: " . implode(', ', $result2) . "<br>";
?>


<br> câu 21 <br>
<?php
function findSecondLargest($arr) {
    $n = count($arr);
    $max = $arr[0];
    $secondMax = $arr[0];

    for ($i = 1; $i < $n; $i++) {
        if ($arr[$i] > $max) {
            $secondMax = $max;
            $max = $arr[$i];
        } elseif ($arr[$i] > $secondMax && $arr[$i] !== $max) {
            $secondMax = $arr[$i];
        }
    }

    return $secondMax;
}

// Ví dụ sử dụng
$array = [2, 9, 4, 7, 5, 1];
$secondLargest = findSecondLargest($array);

echo "Số lớn thứ hai trong mảng là: " . $secondLargest;
?>


<br> câu 22 <br>
<?php
function findGCDandLCM($a, $b) {
    $gcd = 0;
    $lcm = 0;

    // Tìm USCLN
    $num1 = $a;
    $num2 = $b;
    while ($num2 != 0) {
        $temp = $num2;
        $num2 = $num1 % $num2;
        $num1 = $temp;
    }
    $gcd = $num1;

    // Tính BSCNN
    $lcm = ($a * $b) / $gcd;

    // Trả về kết quả
    return array('gcd' => $gcd, 'lcm' => $lcm);
}

// Ví dụ sử dụng
$num1 = 12;
$num2 = 18;

$result = findGCDandLCM($num1, $num2);

echo "Ước số chung lớn nhất của $num1 và $num2 là: " . $result['gcd'] . "<br>";
echo "Bội số chung nhỏ nhất của $num1 và $num2 là: " . $result['lcm'];
?>


<br> câu 23 <br>
<?php
function isPerfectNumber($num)
{
    $sum = 0;
    for ($i = 1; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            $sum += $i;
        }
    }
    if ($sum == $num) {
        return true;
    } else {
        return false;
    }
}

$num = 28;

if (isPerfectNumber($num)) {
    echo $num . " là số hoàn hảo";
} else {
    echo $num . " không phải là số hoàn hảo";
}
?>


<br> câu 24 <br>
<?php
function findLargestOdd($arr)
{

    $largestOdd = null;

    foreach ($arr as $num) {

        if ($num % 2 != 0 && ($largestOdd == null || $num > $largestOdd)) {

            $largestOdd = $num;
        }
    }

    return $largestOdd;
}

$myArray = array(2, 4, 6, 10, 9, 3, 5, 7);

// Tìm số lẻ lớn nhất trong mảng
$largestOdd = findLargestOdd($myArray);

// Hiển thị số lẻ lớn nhất
echo "Số lẻ lớn nhất trong mảng là: " . $largestOdd;
?>


<br> câu 25 <br>
<?php
function isPrimeNumber($num)
{
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

$num = 17;

if (isPrimeNumber($num)) {
    echo $num . " là số nguyên tố";
} else {
    echo $num . " không phải là số nguyên tố";
}
?>


<br> câu 26 <br>
<?php
function findLargestPositive($arr)
{
    $largestPositive = null;
    foreach ($arr as $num) {
        if ($num > 0 && ($largestPositive == null || $num > $largestPositive)) {
            $largestPositive = $num;
        }
    }
    return $largestPositive;
}

$myArray = array(-2, 4, 6, -8, 9, 3, -5, 7);

// Tìm số dương lớn nhất trong mảng
$largestPositive = findLargestPositive($myArray);

// Hiển thị số dương lớn nhất
echo "Số dương lớn nhất trong mảng là: " . $largestPositive;
?>


<br> câu 27 <br>
<?php
function findLargestNegative($arr)
{
    $largestNegative = null;
    foreach ($arr as $num) {
        if ($num < 0 && ($largestNegative == null || $num > $largestNegative)) {
            $largestNegative = $num;
        }
    }
    return $largestNegative;
}

$myArray = array(2, -4, 6, -8, -9, 3, -5, 7);

// Tìm số âm lớn nhất trong mảng
$largestNegative = findLargestNegative($myArray);

// Hiển thị số âm lớn nhất
echo "Số âm lớn nhất trong mảng là: " . $largestNegative;
?>


<br> câu 28 <br>
<?php
function sumOddNumbers($n)
{
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 != 0) {
            $sum += $i;
        }
    }
    return $sum;
}

$n = 10;

// Tính tổng các số lẻ từ 1 đến n
$sum = sumOddNumbers($n);

// Hiển thị tổng các số lẻ
echo "Tổng các số lẻ từ 1 đến " . $n . " là: " . $sum;
?>


<br> câu 29 <br>
<?php
function findPerfectSquaresInRange($start, $end)
{
    $result = [];
    for ($num = $start; $num <= $end; $num++) {
        // Kiểm tra nếu số hiện tại là số chính phương
        if (isPerfectSquare($num)) {
            $result[] = $num; // Thêm số vào mảng kết quả
        }
    }
    return $result;
}

function isPerfectSquare($num)
{
    // Tính căn bậc hai của số và kiểm tra nếu nó là một số nguyên
    $sqrt = sqrt($num);
    return $sqrt == (int)$sqrt;
}

$start = 1;
$end = 100;

$squares = findPerfectSquaresInRange($start, $end);

echo "Các số chính phương trong khoảng $start đến $end là: ";
echo implode(", ", $squares);
?>


<br> câu 30 <br>
<?php
function isSubstring($string, $substring)
{
$stringLength = strlen($string);
$substringLength = strlen($substring);

// Kiểm tra các vị trí trong chuỗi gốc để tìm chuỗi con
for ($i = 0; $i <= $stringLength - $substringLength; $i++) {
    $match = true;

    // Kiểm tra từng ký tự của chuỗi con
    for ($j = 0; $j < $substringLength; $j++) {
        if ($string[$i + $j] !== $substring[$j]) {
            $match = false;
            break;
        }
    }

    // Nếu tìm thấy chuỗi con, trả về true
    if ($match) {
        return true;
    }
}
return false;
}

$string = "Hello, world!";
$substring = "world";

if (isSubstring($string, $substring)) {
echo "Chuỗi '" . $substring . "' là chuỗi con của chuỗi '" . $string . "'";
} else {
echo "Chuỗi '" . $substring . "' không là chuỗi con của chuỗi '" . $string . "'";
}
?>