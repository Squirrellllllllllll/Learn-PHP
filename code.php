<?php
//1. Đặt tên biến
$bai_1;
$customerDetail_Email = 'andlp1912@gmail.com';
$customer_age = 30;
$customer_age = 28;

//2. In ra biến
echo $customer_age;
echo '<br/>'; // Khoảng cách dòng
echo $customerDetail_Email;
echo '<br/>';
echo '0968192222';

// comment
/* comment 1
comment 1
*/
echo '<br/>';

//4. Debug
var_dump($customer_age);
echo '<br/>';
print_r($customerDetail_Email);
echo'<br/>';

//5. Nối biến
$bien1 = 'Hoc PHP';
$bien2 = ' EUP';
echo $bien1.' ở'.$bien2;
echo '<br/>';
$bien3 = 'Di hoc';
$bien4 = ' nghi hoc';
echo $bien = $bien3.' hay'.$bien4;
echo '<br/>';
$html = '<a href=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAJ1BMVEVS5lles2ZM0W1+5iciiCxS6FdMz25Hz3GB6B+D7CcVfywbhCZitmnvvTAKAAABCElEQVR4nO3QQQGAIAAEMERARfrnpcN9+GwRVkqkj5p43jvxzZb41xXJSpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4ceLEiRMnTpw4OXuyAdPHrEGNCAzvAAAAAElFTkSuQmCC" ></a>';
echo $html;

echo '<br/>';
//6. Hằng số
define('WEB_XAMPP','http://hoangan.net');
echo WEB_XAMPP;
echo '<br/>';
const WEB_XAMPP = 'C:/xampp/htdocs';
echo '<br/>';
$checkDefine = define('WEBXAMPP','http://hoangan.net'); //check xem hàm define có tồn tại k
var_dump($checkDefine);
echo '<br />';

//7. Kiểu dữ liệu
//a. Số nguyên
$age = 20; //khai báo
var_dump($age);//kiểm tra kiểu dữ liệu
echo '<br/>';

$age1 = 30.5;
var_dump($age1);
echo '<br/>';
echo 'The number is:'.' '.$age1 = (int)$age1; // Ép giá trị biến về kiểu dữ liệu int

echo '<br />';
$age2 = 41.4;
$checkint = is_int($age2); // kiểm tra có phải số nguyên k
var_dump($checkint);
echo '<br/>';
echo 'The int must be:'.' '.$age2 = (int)$age2;

//b. BOOLEAN
echo '<br />';
$check = 0;
$check = (bool)$check; //Ép kiểu boolean
var_dump($check);
echo '<br />';
$checkBool = is_bool($check); // check kiểu boolean True hay fault
var_dump($checkBool);

//c. FLOAT  
$fee = 10.5; // Khai báo
$fee = (float)$fee;// Ép kiểu số thục
var_dump($fee); //kiểm tra kiểu dữ liệu
var_dump(isfloat($fee)); //Kiểm tra kiểu có phải số thực k

//d. STRING
$messenger = "Chuỗi kí tự";
$checkString = is_string($messenger);
var_dump($messenger);
echo '<br />';
var_dump($check_string);
echo '<br />'
$numString = 10;
$numString = (string)$numString;
$checkString = is_string($numString);
var_dump($checkString);

//e. ARRAY

.
