<?php
/**
 * Empty() function
 * 
 * Trả về kiểu dữ liệu boolean()
 * Trả về true nếu:
 *  + Không tồn tại => !isset($variable)
 *  + Rỗng, =0, trống, null, array rỗng, object rỗng, false
 */

$str = "Unicode";

$check = empty($str);
var_dump($check);