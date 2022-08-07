<?php
	$frames_dir = $frames_absolute_url . '/online-photo-frames';
	echo '<link href="' . $frames_dir . '/css.php?styles=' . $frame_styles . '" rel="stylesheet" type="text/css"></link>';
	function startFrame($style) {
		global $frames_dir;
		return '	
			<table>
				<tr>
					<td class="frame-half"></td>
					<td>
						<table class="frame-table">
							<tr>
								<td><img src="' . $frames_dir . '/images/style' . $style . '/tl.png" alt="" /></td>
								<td class="t-' . $style . '"></td>
								<td><img src="' . $frames_dir . '/images/style' . $style . '/tr.png" alt="" /></td>
							</tr>
							<tr>
								<td class="l-' . $style . '"></td>
								<td>';
	}
	
	function endFrame($style) {
		global $frames_dir;
		$r_image = '<img src="' . $frames_dir . '/images/style' . $style . '/r-image.png" alt="" />';
		$b_image = '<img src="' . $frames_dir . '/images/style' . $style . '/b-image.png" alt="" />';
		return '</td>
							<td class="r-' . $style . '">' . $r_image . '</td>
						</tr>
						<tr>
							<td><img src="' . $frames_dir . '/images/style' . $style . '/bl.png" alt="" /></td>
							<td class="b-' . $style . '">' . $b_image . '</td>
							<td><img src="' . $frames_dir . '/images/style' . $style . '/br.png" alt="" /></td>
						</tr>
					</table>
					<div class="frame-link">Frames by:<a href="http://www.photoshop-tutorial-guide.com">www.photoshop-tutorial-guide.com</a></div>
				</td>
				<td class="frame-half"></td>
			</tr>
		</table>';
	}
?>