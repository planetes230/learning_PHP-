<?php
$success = file_put_contents('./news_data/news.txt','2021-10-12 ホームページをリニューアルしたよ');


if($success) {
  print('<p>ファイルへの書き込みが完了したよ</p>');
} else {
  print('<p>ファイルへの書き込みに失敗したあぁぁ！！くそがっ！！ディレクトリの権限とか確認したの！？</p>');
}
?>
