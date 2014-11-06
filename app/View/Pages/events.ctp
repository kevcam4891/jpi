<div id="primary">
	<?php echo $this->element('nav'); ?>
	<div id="splash"><img src="/img/events/title.png" border="0"/></div>
</div>
<div id="events" class="clearfix">
	<div class="leftColumn">
		<?php
		$res = array(
			 array(array('11-1', '11-15'), "Alley Cats Bowling", '12p-2p'),
			 array('11-2', "Gail's Birthday"),
			 array('11-2', "Skating Practice", '11am-1pm'),
			 array('11-2', "Soccer Practice", '1:30pm'),
			 array('11-5', "Golf Practice", '6p-7p'),
			 array('11-13', "Chesapeake Animal Care Center", '10a-4p'),
			 array(array('11-3', '11-12', '11-17', '11-26'), "Play Uno or Board Games with Friends"),
			 array(array('11-4', '11-11'), "Cinema Cafe Greenbrier Mall"),
			 array(array('11-11', '11-18', '11-25'), "Joyful Noise Club", "6:30p-8p"),
			 array(array('11-4', '11-18', '11-22', '11-29'), "Norfolk Zoo", '10a-5p'),
			 array(array('11-5', '11-19'), "Trim Fingernails and Toenails"),
			 array(array('11-8'), "Camellia Show and Plant Show", false, "Norfolk Botanical Gardens"),
			 array(array('11-8', '11-9'), "State Games Bowling @ Pinboys", '6pm', "Laskin Road"),
			 array(array('11-9'), "Skating", '7am', "Haygood Skating Center"),
			 array('11-22', "Grand Illumination Parade", '7p-9p', '(Free) Norfolk'),
			 array(array('11-6', '11-24'), "Exercise at home"),
			 array(array('11-7', '11-15', '11-21'), "Movie Night", '', "Rent a Movie from RedBox & enjoy fresh popped popcorn"),
			 array('11-10', "Exercise at home"),
			 array('11-14', "Thanksgiving Crafts at Home"),
			 array('11-20', "Exercise at home"),
			 array('11-23', "Holiday Craft Show", '11a-4p'),
			 array('11-27', "HAPPY THANKSGIVING"),
			 array('11-30', "Decorate Home for Christmas!!"),
			 array(array('11-9', '11-16', '11-30'), "Decorate Home for Christmas!!"),
			 array(array('11-9', '11-16', '11-30'), "Computer Time"),
		);

		$prev = array(
			 array(array('11-3', '11-5', '11-7', '11-10', '11-12', '11-14', '11-17', '11-19', '11-21', '11-24', '11-26'), "Skill Building"),
			 array(array('11-4',), "Walmart"),
			 array(array('11-6', '11-20'), "Volunteer at Union Mission"),
			 array(array('11-11', '11-25'), "Meels on Wheels (Chesapeake)"),
			 array(array('11-13'), "Casa Di Constanzia Pizza"),
			 array(array('11-18'), "Meels on Wheels (VA Beach)"),
			 array(array('11-27'), "Thanksgiving"),
			 array(array('11-28'), "Thanksgiving Break"),
		);

		$outings = array(
			 array(array('11-3'), "Dollar Tree"),
			 array(array('11-4', '11-10', '11-19'), "Rec Center"),
			 array(array('11-5'), "Greenbrier Mall"),
			 array(array('11-6', '11-13'), "Bowling"),
			 array(array('11-11'), "Chrysler Museum"),
			 array(array('11-12'), "Pet-go-round"),
			 array(array('11-17'), "Virginia Dinosaur Museum"),
			 array(array('11-18'), "McDonalds"),
			 array(array('11-24'), "Goodwill Shopping"),
			 array(array('11-25'), "Music Center"),
			 array(array('11-26'), "Air Power Park"),
			 array(array('11-27', '11-28'), "Closed (Holiday)"),
		);

		echo $this->element('events', array(
			 'events' => $res,
			 'title' => 'November 2014: Residential'
		));
		?>
	</div>
	<div class="rightColumn">
		<?php
		echo $this->element('events', array(
			 'events' => $prev,
			 'title' => 'November 2014: Prevocational Highlights'
		));
		echo $this->element('events', array(
			 'events' => $outings,
			 'title' => 'November 2014: Outings'
		));
		?>
	</div>
</div>
