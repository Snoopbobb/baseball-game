<?php 
	// 0 is a ball, 1 is a strike
	$pitch = rand(0, 1);

	// 0 is no swing, 1 is swing
	$swing = rand(0, 1);


	if ($pitch == 0) {
		if ($swing == 0) {
			echo 'Ball!';
		} else {
			echo 'A swing and a miss.  Strike!';
		}
	} else {
		if ($swing == 1) {
			echo 'Base hit!';
		} else {
			echo 'Looked at a pitch right down the middle.  Strike!';	
		}
	}

?>