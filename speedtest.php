<!-- 
speedtest.php by @aaviator42
v0.1 : 2023-08-31
License: AGPLv33
https://github.com/aaviator42/speedtest.php
-->
<!DOCTYPE html>
<title>Speed Test</title>
<meta name="robots" content="noindex, nofollow, noarchive">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

<body>
<pre>
<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$kibibytes=10000;

echo "Streaming $kibibytes KiB... " . PHP_EOL;
echo "(server &rarr; client)" . PHP_EOL;

echo PHP_EOL;
echo "<!--" . PHP_EOL;
flush();

$time = explode(" ", microtime());
$start = $time[0] + $time[1];

for($x=0; $x<$kibibytes; $x++){
	//send 1 kibibyte
    echo str_pad('', 1024, '.');
    flush();
}

$time = explode(" ", microtime());
$finish = $time[0] + $time[1];
$timediff = $finish - $start;
$kilobits = $kibibytes * 8.192;
$kbps = $kilobits / $timediff;

if($kbps > 1000){
	$mbps = $kbps/1000;
	$speed = number_format($mbps, 2) . " Mbit/s";
} else {
	$speed = number_format($kbps, 2) . " kbit/s";
}

$timediff = number_format($timediff, 2);

echo PHP_EOL . "-->" . PHP_EOL;
echo PHP_EOL;

echo "Test finished in $timediff seconds." . PHP_EOL;
echo "Your connection speed is " . $speed . "." . PHP_EOL;

?>

</pre>
</body>
</html>
