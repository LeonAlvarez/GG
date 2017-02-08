<?php

$str = isset($_REQUEST['str']) ? $_REQUEST['str'] : null;
//mb_internal_encoding('UCS-2LE');
$string = '↗Զ';
$char = $str;
var_dump(bin2hex($char)); //hex
var_dump(hexdec(bin2hex($char))); //decimal
echo "</br>";
echo $str." ".ord($str)." ascii ".(ord($str)+42);
echo "</br>";
echo ord(utf8_encode($str));
echo "</br>";
echo dechex((float) ord(mb_convert_encoding($str, 'UCS-2LE', 'UTF-8')));
echo "</br>";
$cad2 = mb_encode_numericentity($str, array (0x0, 0xffff, 0, 0xffff), 'UTF-8');
echo $cad2;
echo "</br>";
// convert $text from UTF-8 to ISO-8859-1
$convmap = array(0xFF, 0x2FFFF, 0, 0xFFFF);
$text = mb_encode_numericentity($str, $convmap, "UCS-2LE");
$text = utf8_decode($text);
echo $text;
echo "</br>";
function getRequestHeaders() {
    $headers = array();
    foreach($_SERVER as $key => $value) {
        if (substr($key, 0, 5) <> 'HTTP_') {
            continue;
        }
        $header = str_replace(' ', '-', ucwords(str_replace('_', ' ', strtolower(substr($key, 5)))));
        $headers[$header] = $value;
    }
    return $headers;
}

$headers = getRequestHeaders();

foreach ($headers as $header => $value) {
    echo "$header: $value <br />\n";
}
?>