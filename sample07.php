<select name="age" id="age">
<?php
for($i=10;$i<70;$i++) {
  print('<option value="'.$i.'">'.$i.'歳</option>');
}
?>
</select>

<form action="" method="get">
  <dl>
    <dt>日にち </dt>
  <dd>
    <?php print(date('n')); ?>月
      <select name="day" id="day">
    <?php
    for($day=1;$day<=date('t');$day++) {
      print('<option value="'.$day.'">'.$day.'日</option>');
    }
    ?>
    </select>

  </dd>
  </dl>
  <input type="submit" value="送信する" />
</form>
