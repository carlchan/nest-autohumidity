#!/usr/bin/php
<?php
require_once('nest.class.php');

define('USERNAME', '');
define('PASSWORD', '');

$nest = new Nest();

if (count($argv)==1) {
	$infos = $nest->getDeviceInfo();
	echo $infos->current_state->humidity."\n";
} else {
	$target=intval($argv[1]);
	if ($target > 50) {
		echo "Yeah that's a bad idea, I'll be ignoring you now.\n";
		exit(1);
	}
	$nest->setHumidity($target);
	echo "Setting Humidity target to ".$target."%\n";
}

exit(0);

?>
