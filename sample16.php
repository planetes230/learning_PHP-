<?php
mb_language('japanese');
mb_internal_encoding("UTF-8");

if(!empty($_POST['email'])) {
  $to = $_POST['email'];
  $subject = $_POST['subject'];
  $body = $_POST['message'];
  $from = mb_encode_mimeheader(mb_convert_encoding("福本悠太","JIS","UTF-8"))."<planet.planet230@gmail.com>";

  $success = mb_send_mail($to,$subject,$body,"From:".$from);
}

?>

<?php
if($success) {
  echo '送信しました。';
}else{
  echo '送信失敗しました。';
}
?>
