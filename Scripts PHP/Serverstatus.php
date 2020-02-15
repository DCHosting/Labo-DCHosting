<div class="col-sm-12 col-md-4">
	<div class="service-section">
		<?php
		if (fsockopen("192.168.1.1",80)) {
			echo '<img src="./ok.png" alt="">';
		} else {
			echo '<img src="./off.png" alt="">';

		}
		?>
		<div class="title">Serveur Alpha</div>
		<?php
		if (fsockopen("192.168.1.1",80)) {
			print "Serveur en ligne";
		} else {
			print "Serveur hors ligne";

		}
		?>
		<br />
		<br />
		Uptime : 100%
	</div>
</div>