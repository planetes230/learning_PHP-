

<pre>
<?php
$name = htmlspecialchars($_REQUEST['my_name'],ENT_QUOTES);
?>
<p>ようこそ<?php echo $name; ?>さん。</p>
<ul>
  <li><a href ="#"><?php echo $name; ?>さんのマイページを見る。</a></li>
</ul>
</pre>
