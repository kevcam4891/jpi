<div id="primary">
	<?php echo $this->element('nav'); ?>
	<div id="splash"><img src="/img/events/title.png" border="0"/></div>
</div>
<div id="events" class="clearfix">
	<div class="leftColumn">
		<?php
		$res = array(
			array(array('5-13','5-27'), "Manicure & Pedicure"),
			array(array('5-4','5-18'), "Uno & Board Games with friends"),
			array(array('5-11','5-25','5-21','5-7'), "Connect Four with Friends!"),
			array(array('5-1','5-15','5-22','5-29'), "Movie Night - Rent a movie from Red Box & enjoy fresh popped popcorn."),
			array(array('5-1','5-15','5-22','5-29'), "Bowling", "5:45p-8p"),
			array(array('5-16'), "Alley Cats Bowling", "12p-2p"),
			array(array('5-23'), "Party for the Planet, Virginia Zoo"),
			array(array('5-8'), "Friendable Spring Formal!", '6p-8:30p'),
			array(array('5-9'), "Tides Game, Harbor Park", '3p & 5:30p'),
			array(array('5-2'), "Spring Fling", '6:30p-8:30p'),
			array(array('5-23','5-30'), "Nice brisk walk in nearby park (if weather permits)"),
			array(array('5-30'), "Lunar Golf"),
			array(array('5-12','5-19','5-26'), "Joyful Noise Club", "6:30-8p"),
			array(array('5-3','5-10','5-17','5-24'), "Track and Field Practice", "1:30-3p"),
			array(array('5-3','5-10','5-17','5-24'), "Softball Practice", "1:30-3p"),
			array(array('5-3','5-10','5-17','5-24'), "Tennis Practice", "3-4:30p"),
			array(array('5-5','5-12','5-19','5-26'), "Cinema Cafe Greenbrier ($1.50 all shows)"),
			array(array('5-6','5-20'), "Exercise at home."),
		);

		$prev = array(
			 array(array('4-1','4-3','4-6','4-8','4-10','4-13','4-15','4-17','4-20','4-22','4-24','4-27','4-29'), "Skill Building"),
			 array(array('4-2','4-23'), "Union Mission"),
			 array(array('4-3'), "Easter Celebration!"),
			 array(array('4-7'), "Norfolk Zoo"),
			 array(array('4-9'), "Chrysler Museum - Lunch @ Townpoint Park"),
			 array(array('4-14','4-23','4-28'), "Volunteer - Meals on Wheels"),
			 array(array('4-16'), "Douglas MacArthur Memorial Museum"),
			 array(array('4-21'), "Chesapeake Animal Shelter - lunch at park"),
			 array(array('4-30'), "Motorworld Pirate Golf"),
		);

		$outings = array(
			 array(array('5-6'), "MacArthur Memorial"),
			 array(array('5-19'), "Simply Pets"),
			 array(array('5-7'), "Battlefield Park"),
			 array(array('5-4','5-27'), "Blue Gap Farm"),
			 array(array('5-20'), "Norfolk Southern Museum"),
			 array(array('5-11','5-28'), "Ferry Ride Lunch @ Waterside ($1.75 per person)"),
			 array(array('5-26'), "Mall Walking/Eat Lunch in Food Court"),
			 array(array('5-22'), "Norfolk Zoo"),
			 array(array('5-25','5-29'), "Cici's Pizza"),
			 array(array('5-21'), "Cici's Pizza"),
			 array(array('5-14'), "Suffolk Seabord Station ($2.00)"),
			 array(array('5-12'), "Chesapeake Arboretum"),
			 array(array('5-13'), "Air Power Park"),
			 array(array('5-5'), "Five Below/Mt. Trashmore"),
		);

		echo $this->element('events', array(
			 'events' => $res,
			 'title' => 'Residential Activities'
		));
		?>
	</div>
	<div class="rightColumn">
		<?php
		//echo $this->element('events', array(
			 //'events' => $prev,
			 //'title' => 'Pre-Vocational Activities'
		//));
		echo $this->element('events', array(
			 'events' => $outings,
			 'title' => 'Milestones Day Program'
		));
		?>
	</div>
</div>
