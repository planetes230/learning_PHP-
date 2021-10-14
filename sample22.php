<?php
// $news = file_get_contents('./news_data/news.txt');
$doc = file_get_contents('./news_data/news.txt');
$doc .= "<br />2021-10-12 1:35 ニュースを追加したよ。読みやがれ。";
file_put_contents('./news_data/news.txt',$doc);
readfile('./news_data/news.txt');
?>
