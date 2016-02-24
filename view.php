<?php
	include 'inc/header.php';
	include 'inc/function.php';
	include 'inc/config.php';

	if (isset($_GET['film']) && !empty($_GET['film']) && strlen($_GET['film']) > 4) {

		$video = urldecode($_GET['film']);
		echo '<div class="right">
				<form name="player" method="POST">
				        <select name="choixPlayer">
							<option>Choix du player : </option>
							<option value="1">html</option>
							<option value="2">vlc</option>
							<option value="3">divx</option>
						</select>
						<input type="submit" name="Submit" value="Submit" />
				</form>
				'.download($video).'
			</div>';

		if(empty($_POST['choixPlayer'])) {
			echo html($video);
		}

		$choix = $_POST['choixPlayer'];
		echo choice($choix, $video);

		
	}

	if (!isset($_GET['film']) && empty($_GET['film']) || strlen($_GET['film']) < 5) {
		echo '<center>
					<h4>404 Toast / Media Not Found</h4>
					<h4>Go to the <a href="index.php"><u>home page</u></a>.</h4>
				</center>
				<div class="playa"></div>';
	}

include 'inc/footer.php';
?>
