<?php
$zip = mb_convert_kana($_REQUEST['zip'],'a','UTF-8');

if(preg_match('/^[0-9]{3}-[0-9]{4}$/',$zip)) {
  print('郵便番号:〒'.$zip);
}else{
  print('※郵便番号は 123-4567の形式でご入力ください');
}


?>
