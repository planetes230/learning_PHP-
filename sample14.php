
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$myID =$_POST['my_id'];
$password = $_POST['password'];
$save = $_POST['save'];

//cookieに保存
if($save == 'on') {
  setcookie('my_id',$myID,time() + 60 * 60 * 24 * 14);
  $message = 'ログイン情報を記録しました。';
}else{
  setcookie('my_id','');
  $message = '記録しませんでした。';
}
?>

<p><?php echo $message ?></p>
<p><a href="./sample14_input.php">戻る</a></p>

</body>
</html>
