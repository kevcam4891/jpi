<div id="primary">
	<?php echo $this->element('nav'); ?>
	<div id="splash"><img src="/img/events/title.png" border="0"/></div>
</div>
<div id="events" class="clearfix">
	<div class="leftColumn">
		<?php
		$res = array(
			array(array('1-2','1-9','1-16','1-23','1-30'), "Movie Night - Rent a movie from Red Box & enjoy fresh popped popcorn."),
			array(array('1-3','1-17'), "Alley Cats Bowling", "12p-2p"),
			array(array('1-4','1-11','1-18','1-25'), "Basketball Practice skill", '1p-2p'),
			array(array('1-4','1-11','1-18','1-25'), "Half-court Basketball", '2p-3p'),
			array(array('1-4','1-11','1-18','1-25'), "Full-court Basketball", '3p-4:30p'),
			array(array('1-5','1-19','1-15','1-29'), "Uno & Board Games with friends"),
			array(array('1-8','1-12','1-22','1-26'), "Connect Four with Friends!"),
			array(array('1-9','1-23'), "Fun Bowling", "5:45p-7:30p"),
			array(array('1-6','1-13','1-20','1-27'), "Cinema Cafe Greenbrier ($1.50 all shows)"),
			array(array('1-7','1-21','12-31'), "Manicure & Pedicure"),
			array(array('1-7','1-21'), "Enjoy a nice cup of hot chocolate w/ marshmallows."),
			array(array('1-14','1-28'), "Exercise at home."),
			array(array('1-13','1-20','1-27'), "Joyful Noises Club", '6:30p-8p'),
			array(array('1-10','1-17','1-24','1-31'), "Lunar Golf"),
			array(array('1-10','1-17','1-24'), "New Year - New Body: Gym"),
		);

		$prev = array(
			 array(array('1-2','1-5','1-7','1-9','1-12','1-14','1-16','1-19','1-21','1-23','1-26','1-28','1-30'), "Skill Building"),
			 array(array('1-6'), "Hampton Roads Naval Museum"),
			 array(array('1-13','1-27'), "Meals on Wheels (Chesapeake)"),
			 array(array('1-20'), "Meals on Wheels (VA Beach)"),
			 array(array('1-8','1-22','1-29'), "Volunteer at Union Mission"),
			 array(array('1-15'), "AMF Lanes Bowling"),
		);

		$outings = array(
			 array(array('1-2','1-30'), "Greenbrier Mall"),
			 array(array('1-5','1-13','1-21'), "Dollar Tree"),
			 array(array('1-8','1-15','1-22','1-29'), "Bowling"),
			 array(array('1-9','1-23'), "Library"),
			 array(array('1-16','1-27'), "Recreation Center"),
			 array(array('1-6'), "Chrysler Muesum"),
			 array(array('1-7'), "Sports Museum"),
			 array(array('1-14','1-26'), "McDonalds"),
			 array(array('1-19','1-28'), "Pet-go-Round"),
			 array(array('1-20'), "Indoor Mini Golf"),
			 array(array('1-12'), "Sports Conplex"),
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
