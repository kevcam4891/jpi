<div id="primary">
	<?php echo $this->element('nav'); ?>
	<div id="splash"><img src="/img/events/title.png" border="0"/></div>
</div>
<div id="events" class="clearfix">
	<div class="leftColumn">
		<?php
		$events = array(
			 '04-04-2014' => array(
				  array(
						'title' => 'BANK for working individuals'
				  )
			 ),
			 '04-05-2014' => array(
				  array(
						'title' => 'Alley Cats Bowling',
						'time' => '12-2:00pm'
				  ),
				  array(
						'title' => 'Little league games',
						'time' => '1:00, 3:00, 5:00',
						'note' => 'Bring $ for snack (school behind C2)'
				  ),
			 ),
			 '04-06-2014' => array(
				  array(
						'title' => 'SO Spring Practice',
						'time' => '1:30 softball/track<br/>3:00 tennis',
						'note' => 'Oscar Smith HS',
				  ),
			 ),
			 '04-08-2014' => array(
				  array(
						'title' => 'Take a brisk walk - weather permitting',
				  ),
			 ),
			 '04-12-2014' => array(
				  array(
						'title' => 'SONIC 1/2 price drinks',
				  ),
			 ),
			 '04-16-2014' => array(
				  array(
						'title' => 'Take a brisk walk - weather permitting',
				  ),
			 ),
			 '04-13-2014' => array(
				  array(
						'title' => 'SO Spring Practice',
						'time' => '1:30 softball/track<br/>3:00 tennis',
						'note' => 'Oscar Smith HS',
				  ),
			 ),
			 '04-18-2014' => array(
				  array(
						'title' => 'BANK for working individuals',
						'time' => '2-4:00pm',
				  )
			 ),
			 '04-19-2014' => array(
				  array(
						'title' => 'Alley Cats Bowling',
						'time' => '12-2:00pm'
				  ),
			 ),
			 '04-20-2014' => array(
				  array(
						'title' => 'EASTER - Attend Church',
				  ),
			 ),
			 '04-22-2014' => array(
				  array(
						'title' => "Brianna's 21st Birthday",
				  ),
			 ),
			 '04-23-2014' => array(
				  array(
						'title' => "A VERY SPECIAL DAY",
				  ),
			 ),
			 '04-24-2014' => array(
				  array(
						'title' => 'Take a brisk walk - weather permitting',
				  ),
			 ),
			 '04-26-2014' => array(
				  array(
						'title' => 'BowlAThon VA Beach',
						'time' => '12 noon (sharp)',
				  ),
				  array(
						'title' => 'Spring Fling Dance',
						'time' => '6:30-8:30pm',
						'note' => 'RCCC ($10)',
				  ),
			 ),
			 '04-27-2014' => array(
				  array(
						'title' => 'SO Spring Practice',
						'time' => '1:30 softball/track<br/>3:00 tennis',
						'note' => 'Oscar Smith HS',
				  ),
			 ),
			 '04-30-2014' => array(
				  array(
						'title' => 'Take a brisk walk - weather permitting',
				  ),
			 ),
		);

		$prev = array(
			 array('Recycling/Park', array(1, 15)),
			 array('Nature Walk', array(2)),
			 array('Union Mission', array(3, 10)),
			 array('Freestyle Friday', array(4)),
			 array('Skill Building', array(7, 9, 14, 23, 28)),
			 array('Volunteer Meal On Wheels', array(8, 22, 29)),
			 array('Community Walk', array(11)),
			 array('Outing/Lunch', array(17)),
			 array('Good Friday', array(18)),
			 array('Easter Monday', array(21)),
			 array('Meals on Wheels Breakfast and Union Mission', array(24)),
			 array('Earth Day Walk', array(25)),
			 array('Computer Challenge', array(30)),
		);
		?>
		<div class="clearfix">
			<div class="month">April 2014: Residential</div>
			<?php foreach ($events as $date => $evs): ?>
				<dt>
				<?php
				$d = new DateTime('2014-04-'.substr($date, 3, 2));
				echo $d->format('l, F j');
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
		<div style="margin-top: 30px;">
			<?php
			foreach ($prev as $ev => $pr) {
				foreach ($pr[1] as $d) {
					$prevDates[$d] = $pr[0];
				}
			}
			ksort($prevDates);
			?>
			<div class="month">April 2014: Prevocational</div>
			<?php foreach ($prevDates as $pd => $title): ?>
				<dt><?php
			$d = new DateTime('2014-04-'.$pd);
			echo $d->format('l, F j');
				?></dt>
				<dd>
					<div class="eventTitle"><?php echo $title ?></div>
				</dd>
			<?php endforeach; ?>
		</div>
	</div>
	<div class="rightColumn">
		<h2>Employment Open House</h2>
		<h3 style="margin-bottom:25px">
			JOIN JUST PEOPLE, INC  FOR AN EMPLOYMENT OPEN HOUSE WITH ON THE SPOT INTERVIEWS SATURDAY, MAY 3rd, 2014 
			FROM 10AM-3PM AT  1728 HEARTHSIDE COURT, CHESAPEAKE, VA 23321.  PLEASE BRING RESUME, DRIVERS LICENSE 
			AND SOCIAL SECURITY CARD.  CALL OUR OFFICE AT 757.456.5347 FOR DETAILS OR QUESTIONS.
		</h3>
		<dl class="clearfix">
			<dt>Position:</dt>
			<dd>Direct Support Professional</dd>
			<dt>Employer:</dt>
			<dd>Just People Inc.</dd>
			<dt>Location:</dt>
			<dd>Chesapeake, 23320</dd>
			<dt>Pay Rate:</dt>
			<dd>Starting $9.00/hr to $10.00/hr</dd>
		</dl>
		<p style="margin:20px 0px;">
			<strong>Job Description:</strong></br>
			Provide living assistance to intellectual disabled adults whether residential, day program, 
			pre-vocational programs or Transportation Dept.  Ensure the health, safety, and welfare 
			of individuals.  Provide training and supervision.  Assist with program plans, including 
			active treatment in the areas of self-help, community living, motor, communication, and 
			pre-vocational skills, at the facilities and utilizing community resources.  Assist with 
			care to include, but not limited to bathing, dressing, feeding, walking, positioning, 
			restroom assistance, preparing meals, converse with individuals giving them assurance,
			answering requests, housekeeping.  Administering medication.  Other duties as assigned.
		</p>
		<dl class="clearfix">
			<dt>Shifts Available:</dt>
			<dd>Day, Evening and overnight shifts working every other weekend as well as split day shifts.</dd>
			<dt>Benefits Available:</dt>
			<dd>Health, Vision and Dental, Life Insurance, 401 K</dd>
			<dt>Qualifications:</dt>
			<dd>
				<ul>
					<li>Must be 21 years or older High School Diploma or GED </li>
					<li>First Aid and CPR Certifications </li>
					<li>Possession of a valid driver's license </li>
					<li>Current driving record </li>
					<li>Must have your own vehicle </li>
					<li>Current & valid automobile insurance</li>
					<li>1+ years of related care giving experience</li>
					<li>Basic computer skills</li>
				</ul>
			</dd>
		</dl>
	</div>
</div>
