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



<select name ="pref" id="pref">
  <?php
    $prefs = ['東京都','長野県','鹿児島県','徳島県','新潟県','北海道','沖縄県','神奈川県','埼玉県','岩手県','宮城県','宮崎県'];
    foreach($prefs as $pref) {
      echo '<option value="'.$pref.'">'.$pref."\n\r".'</option>';
    }
  ?>
</select>

<dl>
  <dt>商品</dt>
  <dd>
    <?php
      $items =[
                'a-1' => 'ガム',
                'b-1' => 'チョコレート',
                'c-3' => 'クッキー'
      ];

      foreach($items as $itemKey => $itemValue) {
        echo '<input type="checkbox" id="'.$itemKey.'" value="'.$itemKey.'" /><label for="'.$itemKey.'">'.$itemValue.'</label>';
      }
      ?>


  </dd>
</dl>
<select>
      <?php
      $devices = [
                  'win' => 'Windows',
                  'mac' => 'Macintoch',
                  'iphone' => 'iPhone',
                  'ipad' => 'iPad',
                  'android' => 'Android'
      ];
      ?>

      <?php
      foreach($devices as $key => $device) {
      ?>
      <option value="<?php echo $key; ?>"><?php echo $device; ?></option>
      <?php } ?>

</select>

<input type="submit" value="送信する" />
</form>
