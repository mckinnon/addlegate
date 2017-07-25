<?php

if (file_exists("addlegate_config.php")) {
    require 'addlegate_config.php';
    $addlegate_error = "0";
	echo "\n\n<!-- OK: config found -->\n\n";
    } else {
    echo "\n\n<!-- ERROR: Addlegate config -->\n\n";
    $addlegate_error = "1";
};

date_default_timezone_set('UTC');

ini_set("default_socket_timeout","2");
set_time_limit(1);
$f=fopen("https://" . $url,"r");
$r=fread($f,500);
fclose($f);
if(strlen($r)>1) {
	$url_error = "0";
	echo "\n\n<!-- OK: Ad Server Online -->\n\n";
} else {
	$url_error = "1";
	echo "\n\n<!-- ERROR: Ad Server Offline -->\n\n";
};

if ($addlegate_error == 0) {
    $wiggle = rand(1000,9999);
    $noise = bin2hex(openssl_random_pseudo_bytes(rand(0,15)));
    $token = preg_replace('/[0-9]/','', $id);
    $tokenless = preg_replace('/[0-9]/','', $noise . "z" . $id);
	$svg_logo = '<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" width="100" height="100" version="1.1"><g transform="translate(-189.67969,-584.0465)"><path d="m260.2 682-40 0.5-28.6-27.9-0.5-40 27.9-28.6 40-0.5 28.6 27.9 0.5 40z" style="fill:#007800;stroke-width:3.1;stroke:#fff"/><path d="m279.5 633c-1.6-6.4-5.6-11.6-11.2-14.5-1.6-0.9-34-12.6-34.7-12.6-0.6 0-0.8 0.5-1 1.9-0.3 3.4 1.5 7 4.4 8.7 0.5 0.3 2.6 1.1 4.7 1.9 5.3 1.8 5.3 1.9 5.3 2.5 0 1.1 0.7 1.1-17.5 1-12.2-0.1-17.1 0-17.7 0.2-1 0.3-2.2 1.2-2.6 2.1-1 2-0.2 4.5 1.7 5.5 0.8 0.4 1.2 0.4 14 0.4 12.9 0 13.2 0 13.5 0.4 0.3 0.4 0.3 0.5 0.1 0.9l-0.2 0.5-16 0.1c-15.8 0.1-16 0.1-16.9 0.5-1.9 1-2.7 3.4-1.7 5.3 0.3 0.5 0.8 1.2 1.3 1.6l0.8 0.7 15.9 0.1c15.6 0.1 15.9 0.1 16.3 0.5 0.3 0.3 0.3 0.5 0.1 0.9l-0.2 0.5-13.4 0c-12.6 0-13.4 0-14.2 0.4-2.9 1.4-3.3 5.3-0.6 7.1l0.8 0.6 14.2 0.1c10 0 14.3 0.1 14.5 0.3 0.4 0.3 0.4 1.1 0 1.4-0.2 0.2-2.5 0.3-9 0.3-8.5 0-8.8 0-9.7 0.4-2.5 1.2-2.7 4.7-0.4 6.2l0.8 0.6 20.2-0.1c12.9 0 20.7-0.1 21.5-0.3 6.7-1.2 12.5-5.7 15.4-12 2-4.4 2.5-9.4 1.3-14.1z" style="fill:#fff;stroke-linejoin:round;stroke-width:1.7;stroke:#003200"/></g></svg>';
	$svglogo = base64_encode('<!-- ' . $noise . ' -->' . $svg_logo . '<!-- ' . $noise . ' -->');
};

if ($addlegate_bgshape == 'custom') {
	$addlegate_background = $addlegate_customsvg;
} else {
	if ($addlegate_bgshape == 'dot') {
		$svgry = "5"; $svgw = "8"; $svgh = "8";
	} elseif ($addlegate_bgshape == 'grid') {
		$svgry = "0"; $svgw = "8"; $svgh = "8";
	} elseif ($addlegate_bgshape == 'hstripe') {
		$svgry = "0"; $svgw = "10"; $svgh = "8";
	} elseif ($addlegate_bgshape == 'vstripe') {
		$svgry = "0"; $svgw = "8"; $svgh = "10";
	} elseif ($addlegate_bgshape == 'solid') {
		$svgry = "0"; $svgw = "10"; $svgh = "10";
	} else {
		$svgry = "0"; $svgw = "0"; $svgh = "0";
	}
	$addlegate_background = '<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" width="10" height="10" version="1.1"><g transform="translate(0,0)"><rect width="' . $svgw . '" height="' . $svgh . '" x="0" y="0" ry="' . $svgry . '" style="fill:' . $addlegate_bgcolor . ';opacity:' . $addlegate_bgopacity . '"/></g></svg>';
};

$svgbg = base64_encode('<!-- ' . $noise . ' -->' . $addlegate_background . '<!-- ' . $noise . ' -->');
$bait = "ads";

if (($addlegate_error == 0) && ($url_error == 0)) {
    $addlegate_css = "div." . $token . "{z-index:" . $wiggle . ";position:fixed;top:0;right:0;left:0;bottom:0;opacity:0.0;background:url('data:image/svg+xml;base64," . $svgbg . "');}\n#" . $token . "{-webkit-animation:" . $token . "anim " . $addlegate_fade . "s 1 forwards " . $addlegate_delay . "s;animation:" . $token . "anim " . $addlegate_fade . "s 1 forwards " . $addlegate_delay . "s;}\n@-webkit-keyframes " . $token . "anim{from{opacity:0;}to{opacity:1;}}\n@keyframes " . $token . "anim{from{opacity:0;}to{opacity:1;}}\ndiv#" . $tokenless . '{' . $addlegate_alertcss . "}\n#" . $token . "img{position:absolute;bottom:0px;right:0px;margin:20px;width:50px}\n";
    $addlegate = '<div class="' . $token . '" id="' . $token . '"; style="";><div id="' . $tokenless . '">' . $addlegate_message . '</div><a href="https://github.com/mckinnon/addlegate"><img id="' . $token . 'img" src="data:image/svg+xml;base64,' . $svglogo . '"></a></div>' . "\n" . '<script type="text/javascript" src="https://' . $url . $path . '/ads/index.php?' . $bait . '=' . $id . '.js"></script>';	
};

?>