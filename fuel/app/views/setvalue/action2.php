<ul class="nav nav-pills">
	<li class='<?php echo Arr::get($subnav, "action2" ); ?>'><?php echo Html::anchor('setvalue/action2','Action2');?></li>
</ul>
<p>Action1</p>
<?php
echo '<pre>';
echo Fuel::VERSION . PHP_EOL;
var_dump($GLOBALS);
echo '</pre>';
//
