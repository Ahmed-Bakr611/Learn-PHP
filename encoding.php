<?php
$mb_str = "بكر";
var_dump(mb_strlen($mb_str));

$url = "https://example.com/path?key=value&special=@#$%";
var_dump(urlencode($url));
var_dump(urldecode(urlencode($url)));


$html = '<p>This is paragraph</p>';
var_dump(htmlentities($html));


var_dump(base64_encode("Hello World"));
var_dump(base64_decode(base64_encode("Hello World")));
