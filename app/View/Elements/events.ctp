<div class="clearfix">
	<div class="month"><?php echo $title ?></div>
	<?php
	$eventsByDate = array();
	foreach ($events as $ev){
		$evDates = $ev[0];
		if (!is_array($evDates))
			$evDates = (array) $evDates;
		foreach ($evDates as $evd){
			$d = new DateTime('2014-'.$evd);
			$df = $d->format('Y-m-d');
			$eventsByDate[$df][] = array(
				 'title' => $ev[1],
				 'time' => (!empty($ev[2])) ? $ev[2] : false,
				 'desc' => (!empty($ev[3])) ? $ev[3] : false
			);
		}
	}
	ksort($eventsByDate);
	?>
	<?php foreach ($eventsByDate as $date => $evs): ?>
		<dt>
		<?php
		$d = new DateTime($date);
		echo $d->format('l, M j');
		?>
		</dt>
		<dd>
			<?php foreach ($evs as $ev): ?>
				<?php if (!empty($ev['title'])): ?>
					<div class="eventTitle"><?php echo $ev['title'] ?></div>
				<?php endif; ?>
				<?php if (!empty($ev['time'])): ?>
					<div class="eventTime"><?php echo $ev['time'] ?></div>
				<?php endif; ?>
			<?php endforeach; ?>
		</dd>
	<?php endforeach; ?>
</div>