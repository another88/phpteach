<?php
$base = Yii::app()->getBaseUrl(true);
echo "<ul class=\"sidebar-menu tree\" data-widget=\"tree\">";
foreach ($this->params['items'] as $item) {
  //class header
  echo "<li> <i class=\"fa fa-link\"></i><a href='{$base}{$item['url']}'>{$item['label']}</a> </li>";
}
echo "</ul";