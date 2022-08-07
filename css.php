<?php
 	header('Content-type: text/css');
	$frame_styles = $_GET['styles'];
	if ($frame_styles == 'all') {
		$num_styles = 30;
		$i = 0;
		while ($i < $num_styles) {
			$style_array[$i] = $i+1;
			$i++;
		} 
	} else {
		$style_array = explode(' ',$frame_styles);
	}
	$r = 0;
	while ($style_array[$r] != '') {
		$i = $style_array[$r];
		$r++;
		echo '

.t-' . $i . ' {
	background-image:url(/online-photo-frames/images/style' . $i . '/t.png);
	background-repeat:repeat-x;
	background-position:top;
}

.l-' . $i . ' {
	background-image:url(/online-photo-frames/images/style' . $i . '/l.png);
	background-repeat:repeat-y;
	background-position:left;
}

.r-' . $i . ' {
	background-image:url(/online-photo-frames/images/style' . $i . '/r.png);
	background-repeat:repeat-y;
	background-position:right;
}

.b-' . $i . ' {
	background-image:url(/online-photo-frames/images/style' . $i . '/b.png);
	background-repeat:repeat-x;
	background-position:bottom;
}';
}
?>

.frame-table {
	border-collapse:collapse;
	padding:0px;
}

.frame-table td {
	padding:0px;
	vertical-align:top;
	text-align:left;
}

.frame-table td img{
	padding:0px;
	margin:0px;
}

.frame-link {
	text-align:center;
	font-size:9px;
	color:#999999;
	font-family:Arial, Helvetica, sans-serif;
}

.frame-link a {
	font-size:9px;
	color:#999999;
	font-family:Arial, Helvetica, sans-serif;
}

.frame-half {
	width:50%;
}

img {
	margin:0px;
	padding:0px;
}
