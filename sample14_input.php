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
if(isset($_COOKIE['my_id'])) {
  $myId = $_COOKIE['my_id'];
}else{
  $myId ='';
}
?>
<form action="sample14.php" method="POST">
<dl>
  <dt>ID</dt>
  <dd><input type="text" name="my_id" id="my_id" value="<?php echo $myId; ?>" /></dd>
  <dt> パスワード</dt>
  <dd><input type="password" name="password" id="password"/></dd>
  <dt>IDの保存</dt>
</dl>
<p><input type="checkbox" name="save" id="save" value="on" /><label for="save">IDを保存する</label></p>
<input type="submit" value="送信する" />
</form>
</body>
</html>
