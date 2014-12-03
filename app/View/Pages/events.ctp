<div id="primary">
	<?php echo $this->element('nav'); ?>
	<div id="splash"><img src="/img/events/title.png" border="0"/></div>
</div>
<div id="events" class="clearfix">
	<div class="leftColumn">
		<?php
		$res = array(
			array(array('12-1','12-10','12-15','12-24','12-29'), "Uno & Board Games with friends"),
			array(array('12-2','12-9','12-16','12-23','12-30'), "Cinema Cafe Greenbrier"),
			array(array('12-9','12-16','12-23'), "Joyful Noises Club", '6:30p-8p'),
			array(array('12-3','12-17','12-31'), "Manicure & Pedicure"),
			array(array('12-3','12-17'), "Enjoy a nice cup of hot chocolate w/ marshmallows."),
			array(array('12-4'), "KMC Birthday"),
			array(array('12-4','12-11','12-18'), "Rockin' to the oldies with Irv & Sassy, Sing & Dancing to 50's & 60's hits."),
			array(array('12-5','12-19'), "Fun Bowling ($$)"),
			array(array('12-5'), "A Night in Bethlehem"),
			array(array('12-5','12-12','12-19','12-26'), "Movie Night - Rent a movie from Red Box & enjoy fresh popped popcorn."),
			array(array('12-6'), "Chespeake Rotart Christmas Parade", "6pm-8pm"),
			array(array('12-6','12-20'), "Bowl Greenbrier AMF Lanes", "12p-2p"),
			array(array('12-7','12-14','12-21','12-28'), "Basketball Practice skill", '1p-2p'),
			array(array('12-8','12-22'), "Exercise at home."),
			array(array('12-11','12-18'), "Chesapeake Planetarium", '8pm'),
			array(array('12-13'), "Suffolk Holiday Parade Downtown Suffolk", '7pm'),
			array(array('12-13'), "Chiristmas Musical, Great Bridge Baptist Church"),
			array(array('12-13'), "Decorate home for Christmas"),
			array(array('12-14'), "JO Birthday"),
			array(array('12-21'), "JS Birthday"),
			array(array('12-20'), "Decorate Home for Christmas"),
			array(array('12-27'), "Holiday clean up - take down decorations at home."),
			array(array('12-31'), "Watch Ball Drop"),
		);

		$prev = array(
			 array(array('12-1','12-3','12-5','12-8','12-10','12-15','12-17','12-19','12-26','12-29','12-31'), "Skill Building"),
			 array(array('12-2',), "Walk on the Boardwalk/Lunch at the mall"),
			 array(array('12-11'), "Volunteer at Union Mission"),
			 array(array('12-9','12-23'), "Meals on Wheels (Chesapeake)"),
			 array(array('12-16'), "Meals on Wheels (VA Beach)"),
			 array(array('12-4'), "White's Nursary"),
			 array(array('12-12'), "Freestyle Friday"),
			 array(array('12-18'), "Hunt Club Farm"),
			 array(array('12-22'), "Christmas Party & Dance"),
			 array(array('12-24'), "Christmas Eve (Prevoc Closed)"),
			 array(array('12-25'), "Christmas (Prevoc Closed)"),
			 array(array('12-30'), "Outing"),
		);

		$outings = array(
			 array(array('12-1','12-30'), "Dollar Tree"),
			 array(array('12-2'), "Shopping at Roses"),
			 array(array('12-3','12-8','12-31'), "Recreation Center"),
			 array(array('12-4','12-11','12-18'), "Bowling"),
			 array(array('12-5','12-12'), "Community Integration"),
			 array(array('12-9'), "Chrysler Center"),
			 array(array('12-10','12-29'), "Pet-go-Round"),
			 array(array('12-15'), "Five Below"),
			 array(array('12-16'), "McDonalds"),
			 array(array('12-17'), "Christmas Party"),
			 array(array('12-19'), "MacArthur Mall"),
			 array(array('12-22'), "Goodwill Shopping"),
			 array(array('12-23'), "McArthur Mall"),
			 array(array('12-24','12-25'), "Closed"),
			 array(array('12-26'), "Library"),
		);

		echo $this->element('events', array(
			 'events' => $res,
			 'title' => 'Residential Activities'
		));
		?>
	</div>
	<div class="rightColumn">
		<?php
		echo $this->element('events', array(
			 'events' => $prev,
			 'title' => 'Pre-Vocational Activities'
		));
		echo $this->element('events', array(
			 'events' => $outings,
			 'title' => 'Day Program Activities'
		));
		?>
	</div>
</div>
