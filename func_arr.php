<?php
$str = "Trung tâm đào tạo lập trình \"Unicode\"";

//1. Thêm kí tự \ vào phía trước các ký tự mong muốn
$str = addcslashes($str, "uln\"");
echo "$str";
echo "<br/>";

//2. Thêm kí tự \ vào phía trước ""
$str = addslashes($str);
echo "$str";
echo "<br/>";

//3. Xóa bỏ các kí tự \ trong chuỗi
$str = stripslashes($str);
echo "$str";
echo "<br/>";

//4. Chuyển chuỗi thành mảng
$str = "Trung tâm \"Unicode\"";

$arr = explode("t", $str);

print_r($arr);
echo "<br/>";

//5. Chyển mảng thành chuỗi
$str = implode(" - ", $arr);
echo "$str";
echo "<br/>";

//6. Lấy độ dài của chuỗi
$str = "Trung tâm UNICODE";
$lenght = strlen($str);
echo "Độ dài là : $lenght";
echo "<br/>";

//7. Lấy số chữ trong chuỗi
$str = "Xin chao Unicode";
$wordCount = str_word_count($str, 0, "áàãạ...//Những phần tử muốn loại đi");
echo "Số chữ là: $wordCount";
echo "<br/>";

//8. Lặp chuỗi theo số lần xác định
$str = "Unicode";
$str = str_repeat($str, 10);
echo "$str";
echo "<br/>";

//9. Hàm tìm kiếm và thay thế
$str = "Trung tâm đào tạo lập trình \"Unicode\"";
$str = str_replace("\"Unicode\"", "PHP" ,$str);
echo "$str ";
echo "<br/>";

//10. Hàm mã hóa 1 chiều md5 (32 kí tự)
$str = "1,2,3,4,5,6";
$str = md5($str);
echo "$str ";
echo "<br/>";

//11. Hàm mã hóa 1 chiều sha1 (40 kí tự)
$str = "1234556";
$str = sha1($str);
echo "$str ";
echo "<br/>";

//12. Chuyển chuỗi html thành dạng thực thể
$str = "<p>Đào tạo PHP</p>";
$str = htmlentities($str);
echo $str;
echo "<br/>";

//13. Chuyển dạng thực thể sang chuỗi html
$str = "<p>Đào tạo &iexcl; PHP</p>";
$str = html_entity_decode($str);
echo $str;
echo "<br/>";

//14. Hàm loại bỏ các thẻ html
$str = "<p>Đào tạo PHP <a href=\"\">Lập trình <b>Unicode<\b></a></p>";
$str = strip_tags($str, "<a>"); //Thẻ nào trong "" thì vx giữ nguyên
echo $str;
echo "<br/>";

//15. Hàm lấy 1 chuỗi con từ chuỗi cha
$str = "Trung tam đao tao Unicode";
$subStr = substr($str, 0, 3); // Kí tự bắt đầu là 0, lấy đến số nào thì nhập stt vào
                              // Nếu muốn lấy từ đuôi thì tham số thứ 2 sẽ là độ dài: để số âm         
echo $subStr;
echo "<br/>";

//16. Hàm tách 1 chuỗi từ kí tự cho trước cho đến hết chuỗi
$str = "andlp@gmail.com";
$strstr = strstr($str, "d");
echo $strstr;
echo "<br/>";

//17. Hàm tìm chuỗi con có thuộc chuỗi cha hay k và trả về stt
$str = "Trung tam đao tao Unicode";
$position = strstr($str, "google");
var_dump($position);
echo "<br/>";

//18. Hàm cắt bỏ 1 đoạn hoặc toàn bộ chuỗi, thay thế bằng 1 chuỗi con khác
/**
 * Chèn: Khi độ dài và vị trí =
 * Đè: khi độ dài và vị trí khác nhau
 */
$str = "Trung tam dao tao PHP";
$str = substr_replace($str, "@", 0, 6); //Trong (), tham số 1 là chuỗi, tham số 2 là chuỗi thay thế, tham số 3 là vị trí, tham số 4 là độ dài
echo $str;
echo "<br/>";

//19. Chuyển các ký tự sang dạng thường
$str = "TRUNG TAM DAO TAO PHP";
$str = strtolower($str);
$str = mb_strtolower($str, 'UTF-8');// Hộ trợ tiếng việt
echo $str;
echo "<br />";

//20. Chuyển các ký tự sang chữ hoa
$str = "trung tam dao tao php";
$str = strtoupper($str);
$str = mb_strtoupper($str, 'UTF-8'); // Hỗ trợ tiếng việt
echo "$str";
echo "<br />";

//21. Chuyển chữ cái đầu tiên sang viết hoa
$str = "trung tam dao tao PHP";
$str = ucfirst($str);
echo "$str";
echo "<br />";

//22. Chuyển chữ cái đầu tiên thành chữ thường
$str = "Trung tam dao tao PHP";
$str = lcfirst($str);
echo "$str";
echo "<br/>";

//23. Chuyển các chữ cái đầu tiên trong chuỗi sang chữ hoa
$str = "dang le phuc an";
$str = ucwords($str);
echo "$str";
echo "<br/>";

//24. Xóa các ký tự đầu cuối
$str = "Trung tam dao tao PHP ";
$str = trim($str, ' T');
//var_dump($str); exit();
echo "<br />";

//25. Xóa ký tự bên trái
$str = " Trung tam dao tao PHP ";
$str = ltrim($str);
var_dump($str);
echo "<br/>";

//26. Xóa ký tự bên phải
$str = " Trung tam dao tao PHP ";
$str = rtrim($str);
var_dump($str);
echo "<br/>";

//27. Tách chuỗi lớn thành từng chuỗi nhỏ
$str = "121212";
$str = chunk_split($str, 2, " "); // Trong (), hàm số 1 là hàm, hàm số 2 là số lượng phần tử của mỗi chuỗi con, phần 3 là kí tự ngăn cách giữa các chuỗi con
echo $str;
echo "<br />";

//28. Chuyển kí tự xuống dòng thành thẻ <br/> trong html
$str = "Trung tam dao tao \n UNICODE";
$str = nl2br($str);
echo $str;
echo "<br />";

//29. Chuyển chuỗi json thành mảng hoặc object
$strjson = '{ "item1" : "value1" , "item2" : "value2" }';
echo $strjson;
echo "<br />";

$jsonArr = json_decode($strjson, true); // Không có true => Object, Có true => Array
print_r($jsonArr);
echo "<br />";

//30. Chuyển từ mảng, object thành json
$strjon = json_encode($jsonArr);
echo $strjon;
echo "<br />";



//Bài tập
// Bài 1: Viết chương trình lấy username của 1 email

$email = "andlp@gmail.com";

// $endemail = strstr($email, '@');
// $username = str_replace($endemail, '', $email);
// echo $username;

$username = strstr($email, '@', true);
echo $username;
echo "<br/>";

//Bài 2: Viết chương trình lấy ra 5 kí tự cuối chuỗi
$str = "Hoc lap trinh tai UNICODE";
$endstr = substr($str, -5);
//$endstr = mb_substr($str, -5, null, 'UTF-8');
echo $endstr;
echo "<br/>";

//Bài 3: Xóa chữ đầu tiên
$str = "di de tro ve";
$positionSpace = mb_strpos($str, ' ', null, 'UTF-8');
//$leftLenght = mb_strlen($str, 'UTF-8') - ($positionSpace + 1);
$endWord = mb_substr($str, $positionSpace + 1, );
$str = $endWord;
echo $str;
echo "<br />";

// Bài 4: Viết chương trình đảo ngc chuwx đầu và cuối
$str = "Hoc Lap Trinh PHP tai UNICODE";

//Lấy chữ đầu tiên
$positionSpacefirst = mb_strpos($str, ' ', null, 'UTF-8');
$firstWord = mb_substr($str, 0, $positionSpacefirst, 'UTF-8');

//Lấy chữ cuối
$positionSpaceEnd = mb_strripos($str, ' ', null, 'UTF-8');
$leftLength = mb_strlen($str, 'UTF-8') - $positionSpaceEnd;
$endWord = mb_substr($str, $positionSpaceEnd + 1, $leftLength, 'UTF-8');

//Lấy nội dung còn lại
$middleWord = mb_substr($str, $positionSpacefirst, $positionSpaceEnd - $positionSpacefirst + 1, 'UTF-8');

//Chèn và đổi chỗ
$str = $endWord.$middleWord.$firstWord;
echo $str;
echo "<br />";

//Bài 5: Nhập tên 1 người, In ra họ tên đệm và tên
$fullName = "Đặng Lê Phúc An";

$positionSpaceEnd = mb_strripos($fullName, ' ', null, 'UTF-8');
$leftLength = mb_strlen($fullName, 'UTF-8') - ($positionSpaceEnd);
$lastName = mb_substr($fullName , $positionSpaceEnd, $leftLength, 'UTF-8');

$firstName = mb_substr($fullName, 0, $positionSpaceEnd, 'UTF-8');

echo "First name: $firstName <br/> Last name: $lastName";
echo "<br/>";

//Bài 6: Viết hàm in ra 50 chữ đầu tiên của chuỗi
$content = "Tiếp tục quán triệt và thực hiện nghiêm các chỉ đạo của Chính phủ, Thủ tướng Chính phủ trong công tác phòng chống dịch Covid-19 và các dịch bệnh truyền nhiễm khác; tuyệt đối không được chủ quan, lơ là, mất cảnh giác và thực hiện hiệu quả các biện pháp phòng, chống dịch theo Nghị quyết số 38/NQ- CP ngày 17-3-2022 của Chính phủ và Kế hoạch phòng, chống bệnh truyền nhiễm năm 2023 tại Quyết định số 1331/QĐ-BYT ngày 10-3-2023 của Bộ Y tế.";

$contentLength = mb_strlen($content, 'UTF-8');
$result = null;
$count = 0;
$limit = 50;

for ($i = 0; $i < $contentLength; $i++){
    $result .= mb_substr($content, $i, 1, 'UTF-8');
    if (mb_substr($content, $i, 1, 'UTF-8') == ' '){
        $count++;
        if ($count >= $limit) {
            break;
        }
    }
}
echo $result;
echo "<br />";

//Bài 7: Viết chương trình kiểm tra độ mạnh của mật khẩu
$password = "ABCD";
$number = "123456789";
$symbol = "!@#$%^&*()_+";
$checkLenght = false;
$checkNumber = false;
$checkLower = false;
$checkUpper = false;
$checkSymbol = false;


if (mb_strlen($password, 'UTF-8') >= 6) {
    $checkLenght = true;
}

for ($i = 0; $i <= mb_strlen($password, 'UTF-8'); $i++){
    $char = mb_substr($password, $i, 1, 'UTF-8');
    if (mb_strpos($number, $char, null, 'UTF-8') != false){
        $checkNumber = true;
        //break;
    }

    if ($char >= "a" && $char <= "z"){
        $checkLower = true;
    }

    if ($char >= "A" && $char <= "Z"){
        $checkUpper = true;
    }
    if (mb_strpos($symbol, $char, null, 'UTF-8') != false){
        $checkSymbol = true;
    }
}

if ($checkLenght && $checkNumber && $checkLower && $checkSymbol){
    echo "Mật khẩu mạnh";
} else {
    echo "Mật khẩu yếu";
}
echo "<br />";
