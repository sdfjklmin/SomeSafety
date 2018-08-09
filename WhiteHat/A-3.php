<?php

$input = $_GET['data'] ?? '<script>alert(32)</script>';
// var_dump($input) ;exit();
echo "<div>".$input."</div>";
// eval($input) ; url: http://base.com/Self/SomeSafety/WhiteHat/A-3.php?data=file_put_contents('test', 'what') ;
// 利用eval执行对应的PHP脚本 data 参数内容遵循 php 语法
