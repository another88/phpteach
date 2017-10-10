<?php
echo "<ul class='treeview-menu' data-widget=\"tree\">";
foreach ($this->params['items'] as $item) {
  echo "<li  class=\"header\"> <a href='{$item['url']}'>{$item['label']}</a> </li>";
}
echo "</ul";