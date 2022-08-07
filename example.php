<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Photo Frames Example</title>
<?php 
	/* 	Online Photo Frames v.1.00 is FREEWARE. It may not be sold
	/* 	or distributed without the permission of www.photoshop-tutorial-guide.com.
	/* 	Please do not remove this copyright notice or the acknowledgment
	/* 	links below each frame. Have fun and enjoy!! */
	
	
	$frames_absolute_url = "";
	$frame_styles = "all"; 
	include('photo-frame.php'); 
	
	if ($_POST['action'] == 'change_code') {
		if ($_POST['code'] != '') {
			$code = $_POST['code'];
		} else {
			$code = '<img src="images/exp_image_1.jpg" alt="" />';
		}
	} else {
		$code = '<img src="images/exp_image_1.jpg" alt="" />';
	}
?>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>	
	.align-center {
		text-align:center;
	}
	.header-bg-td {
		background-image:url(images/header-bg.jpg);
		background-repeat:repeat-x;
		background-position:top;
		width:100%;
	}
	img {
		border:0px;
	}
	.header {
		border:2px solid black;
	}
	.frame-name {
		border:1px solid black;
		background-color:#CCCCCC;
		font-size:13px;
		font-family:Verdana, Arial, Helvetica, sans-serif;
		margin-top:3px;
		padding:1px;
		padding-right:20px;
		padding-left:20px;
	}
	body {
		background-color:#ECECEC;
	}
	h1 {
		margin-bottom:0px;
		margin-top:0px;
		border-bottom:1px solid black;
	}
	.right-td-div {
		border:1px solid silver;
		background-color:#FAFAFA;
		padding:10px;
		margin:5px;
	}
	.green-ul li {
		border:1px solid green;
		background-color:#F3FFF2;
		padding:2px;
		margin-bottom:5px;
	}
	h2 {
		margin-top:5px;
		text-decoration:underline;
	}
</style>
</head>

<body>
	<div class="header">
	<table cellpadding="0" cellspacing="0">
		<tr>
			<td><a href="http://www.photoshop-tutorial-guide.com"><img src="images/top-logo.jpg" alt="Photoshop Tutorial Guide Logo" /></a></td>
			<td class="header-bg-td"><img src="images/spacer.gif" alt="spacer" height="3" /></td>
		</tr>
	</table>
	</div><br />
	<h1>Online Photo Frames v.1.01</h1>
	<table width="100%">
		<tr>
			<td>
			<div class="right-td-div">
			<h2>Test Code:</h2>
			<p>Add your code below and click "Update Frames" to see how your code looks in the different frame styles. Then just follow the instructions to the right to add the frames to your code. The frames look very good around images! (try changing the image to <strong>exp_image_2.jpg</strong> or <strong>exp_image_3.jpg</strong>)</p>
				<form action="example.php" method="post">
				<input type="hidden" name="action" value="change_code" />
				<textarea name="code" cols="40" rows="4"><?php echo $code; ?></textarea><br />
				<input type="submit" value="Update Frames" />
				</form>
			</div>
				<h2>Frame Styles:</h2>
				<div class="align-center">
			<?php
				$total_styles = 30;
				$i = $total_styles;
				while ($i > 0) {
					echo '<span class="frame-name">Style #' . $i . '</span><br />
						' . startFrame($i) . $code . endFrame($i) . '<hr /><br />';
					$i--;
				}
			?>
				</div>
			</td>
			<td" valign="top" width="50%">
			<div  class="right-td-div">
			<h2>Instructions for use:</h2>
			<p>Note that <strong>you must have PHP 4.2 or higher installed on your web server</strong> for this script to work properly.</p>
			<ol class="green-ul">
				<li>Copy the code below and paste it into your web page between the <strong>&lt;head&gt;</strong> and <strong>&lt;/head&gt;</strong> tags:
				<br />
	<textarea cols="40" rows="4">&lt;?php 
/* 	(c) 2005 www.Photoshop-Tutorial-Guide.com */
/* 	Online Photo Frames v.1.01 is FREEWARE. It may not be sold */
/* 	or distributed without the permission of www.photoshop-tutorial-guide.com. */
/* 	Please do not remove this copyright notice or the acknowledgment */
/* 	links below each frame. Thanks and enjoy!! */

$frames_absolute_url = "http://www.mywebsite.com";
$frame_styles = "all"; 
include('online-photo-frames/photo-frame.php'); 
?&gt;</textarea></li>
				<li>Replace the <strong>$frames_absolute_url</strong> value with the absolute URL of your site. Do not add a trailing slash.</li>
				<li>To reduce the filesize of the included stylesheet, change the <strong>$frame_styles</strong> value with the styles of frames you will be using, separated by spaces. For instance: "1 13 29".</li>
	<li>The frame will be added around your choice of content. You can add it to images, blocks of code, anything! To add the frame, add the following PHP code before the code you want to frame:<br />
		<textarea cols="40" rows="2">&lt;?php echo startFrame(25); ?&gt;</textarea></li>
	<li>Next, add this after the code you want to frame:<br />
		<textarea cols="40" rows="2">
&lt;?php echo endFrame(25); ?&gt;
	</textarea></li>
	<li>Change the number in the startFrame() and endFrame() to the frame style number you want to use.</li>
			</ol>
			</div>
			<h2>Some Extra Tips:</h2>
			<ul>
				<li>Online Photo Frames was designed to download as fast as possible. Once a frame is used once on your site, the images are downloaded onto the visitors machine, so they don't have to download it again. That means you can use it on additional images / code blocks without an extra download.</li>
				<li>Online Photo Frames uses an external CSS file so that you don't have a lot of extra code added to your page (good for search engines!). To reduce the amount of download required for the CSS file, just change the value for $frame_styles to a space-separated list of frame styles you use. For instance, if you only use styles #29, #12 and #3, change the value to <strong>$frame_styles="29 12 3"</strong>. If you leave the value as "all", that's fine, the CSS file will be just a little bigger.
			</ul>
			</td>
		</tr>
	</table>
</body>
</html>
