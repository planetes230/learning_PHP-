<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table>
    <?php
    for($i=0;$i<=10;$i++) {
      if($i % 2) {
        print('<tr style="background-color: #bce0f2">');
      }else{
        print('<tr>');
      }
      print('<td>'.$i.'</td>');
      print('<td>'.$i.'行目の情報です</td>');
      print('</tr>');
    }
    ?>
  </table>
  <?php print(date('n')); ?>月
  <select name="day" id="day">
  <?php
  $day =1;
  while($day<=date('t')) {
    print('<option value ="'.$day.'">'.$day.'日</option>');
    $day++;
  }
  ?>
   </select>
</body>
</html>
