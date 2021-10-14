<?php

$xmlTree = simplexml_load_file('http://h2o-space.com/blog/feed');

foreach($xmlTree->channel->item as $item) {
  print('<li><a href="' .$item->link . '">' .$item->title . '</a></li>');
}
?>
