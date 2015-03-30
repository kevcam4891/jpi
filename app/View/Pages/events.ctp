<div id="primary">
	<?php echo $this->element('nav'); ?>
	<div id="splash"><img src="/img/events/title.png" border="0"/></div>
</div>
<div id="events" class="clearfix">
	<div class="leftColumn">
		<?php
		$res = array(
			array(array('4-1','4-15','4-29'), "Manicure & Pedicure"),
			array(array('4-2','4-16','4-30','4-6','4-20'), "Uno & Board Games with friends"),
			array(array('4-9','4-23','4-13','4-27'), "Connect Four with Friends!"),
			array(array('4-3','4-10','4-17','4-24'), "Movie Night - Rent a movie from Red Box & enjoy fresh popped popcorn."),
			array(array('4-3','4-17'), "Future friendable Social Club ($$)"),
			array(array('4-3','4-10','4-17','4-24'), "Bowling", "5:45p-8p"),
			array(array('4-4','4-11','4-18','4-25'), "Nice brisk walk in nearby park (if weather permits)"),
			array(array('4-4','4-11','4-12','4-18','4-25','4-26'), "Library for computer time"),
			array(array('4-18'), "Party for the Planet, Virginia Zoo"),
			array(array('4-25'), "Lunar Golf"),
			array(array('4-7','4-14','4-21','4-28'), "Cinema Cafe Greenbrier ($1.50 all shows)"),
			array(array('4-14','4-21','4-28'), "Joyful Noise Club", "6:30-8p"),
			array(array('4-8','4-22'), "Exercise at home."),
			array(array('4-5','4-12','4-19','4-26'), "Track and Field Practice", "1:30-3p"),
			array(array('4-5','4-12','4-19','4-26'), "Softball Practice", "1:30-3p"),
			array(array('4-5','4-12','4-19','4-26'), "Tennis Practice", "3-4:30p"),
			array(array('4-19'), "Miss Abilities Pageant ($10)", '6-8:30p'),
			array(array('4-22'), "GW Individual Birthday"),
			array(array('4-22'), "Earth Day"),
			array(array('4-3'), "Good Friday"),
			array(array('4-5'), "Happy Easter!!"),
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
			 array(array('4-1'), "MacArthur Memorial"),
			 array(array('4-2'), "Simply Pets"),
			 array(array('4-3','4-20'), "VA Beach Sportsplex"),
			 array(array('4-7'), "Battlefield Park/Lunch"),
			 array(array('4-9'), "Blue Gap Farm"),
			 array(array('4-13'), "Hampton University Museum/Lunch"),
			 array(array('4-14'), "Glass Studio/Chrysler Museum"),
			 array(array('4-15'), "Ferry Ride Lunch @ Waterside ($1.75 per person)"),
			 array(array('4-16'), "Animal Jungle"),
			 array(array('4-22'), "Norfolk History Museum"),
			 array(array('4-28'), "Mall Walking/Eat Lunch in Food Court"),
			 array(array('4-23','4-24'), "Great Dismal Swamp Birding Festival"),
			 array(array('4-8','4-21','4-27'), "Norfolk Zoo"),
			 array(array('4-6','4-17'), "Dollar Tree"),
			 array(array('4-10','4-29'), "Library"),
			 array(array('4-30'), "Mt. Trashmore/Lunch @ the Park"),
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
			 'title' => 'Milestones Day Program'
		));
		?>
	</div>
</div>
