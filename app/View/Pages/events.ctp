<div id="primary">
	<?php echo $this->element('nav'); ?>
	<div id="splash"><img src="/img/events/title.png" border="0"/></div>
</div>
<div id="events" class="clearfix">
	<div class="leftColumn">
		<?php
		
		$events = array(
			 
		);
		
		$events = array(
			 '05-02-2014' => array(
				  array(
						'title' => 'Bowling',
						'time' => '5:45pm',
				  )
			 ),
			 '05-03-2014' => array(
				  array(
						'title' => 'Bowling Area Tournament',
						'note' => 'Salem HS, Indian River AMF',
				  )
			 ),
			 '05-04-2014' => array(
				  array(
						'title' => 'Church for individuals who attend.',
				  ),
				  array(
						'title' => 'Take a walk at Oak Grove Park',
				  ),
				  array(
						'title' => 'SO Practice',
				  ),
			 ),
			 '05-05-2014' => array(
				  array(
						'title' => 'Attend kids baseball game in your back yard',
				  ),
			 ),
			 '05-06-2014' => array(
				  array(
						'title' => 'Attend kids baseball game in your back yard',
				  ),
			 ),
			 '05-07-2014' => array(
				  array(
						'title' => 'Attend kids baseball game in your back yard',
				  ),
			 ),
			 '05-08-2014' => array(
				  array(
						'title' => 'Attend kids baseball game in your back yard',
				  ),
			 ),
			 '05-09-2014' => array(
				  array(
						'title' => 'Bowling',
						'time' => '5:45pm',
				  )
			 ),
			 '05-10-2014' => array(
				  array(
						'title' => 'Bowling Area Tournament',
						'note' => 'Plaza MS, Lynnhaven AMF',
				  )
			 ),
			 '05-11-2014' => array(
				  array(
						'title' => 'Church for individuals who attend.',
				  ),
				  array(
						'title' => 'SO Practice',
				  ),
			 ),
			 '05-12-2014' => array(
				  array(
						'title' => 'Attend kids baseball game in your back yard',
				  ),
			 ),
			 '05-13-2014' => array(
				  array(
						'title' => 'Attend kids baseball game in your back yard',
				  ),
			 ),
			 '05-14-2014' => array(
				  array(
						'title' => 'Attend kids baseball game in your back yard',
				  ),
			 ),
			 '05-15-2014' => array(
				  array(
						'title' => 'Attend kids baseball game in your back yard',
				  ),
			 ),
			 '05-16-2014' => array(
				  array(
						'title' => 'Tallwood HS Fiesta Spring Prom',
						'time' => '6:00-8:30p',
				  ),
			 ),
			 '05-17-2014' => array(
				  array(
						'title' => 'Country and Western Dance',
						'time' => '6:00pm (Suffolk Church)',
				  ),
				  array(
						'title' => 'Tides Game',
						'time' => '3:30/7:00',
				  ),
			 ),
			 '05-18-2014' => array(
				  array(
						'title' => 'Church for individuals who attend.',
				  ),
				  array(
						'title' => 'SO Practice',
				  ),
			 ),
			 '05-19-2014' => array(
				  array(
						'title' => 'Attend kids baseball game in your back yard',
				  ),
			 ),
			 '05-20-2014' => array(
				  array(
						'title' => 'Attend kids baseball game in your back yard',
				  ),
			 ),
			 '05-21-2014' => array(
				  array(
						'title' => 'Attend kids baseball game in your back yard',
				  ),
			 ),
			 '05-22-2014' => array(
				  array(
						'title' => 'Attend kids baseball game in your back yard',
				  ),
			 ),
			 '05-23-2014' => array(
				  array(
						'title' => 'Client\'s Choice',
				  ),
			 ),
			 '05-25-2014' => array(
				  array(
						'title' => 'Church for individuals who attend.',
				  ),
			 ),
			 '05-26-2014' => array(
				  array(
						'title' => 'Memorial Day',
				  ),
			 ),
			 '05-27-2014' => array(
				  array(
						'title' => 'Board Game of your choice',
				  ),
			 ),
			 '05-28-2014' => array(
				  array(
						'title' => 'Trim Fingernails and toenails',
				  ),
			 ),
			 '05-29-2014' => array(
				  array(
						'title' => 'Play Uno',
				  ),
			 ),
			 '05-29-2014' => array(
				  array(
						'title' => 'Bowling',
						'time' => '5:45pm',
				  ),
			 ),
			 '05-30-2014' => array(
				  array(
						'title' => 'Mount Trashmore, Chesapeake City, OR Norfolk',
				  ),
			 ),
		 );

		$prev = array(
			 array('Recycling/Park', array(13)),
			 array('Nature Trail', array(30)),
			 array('Union Mission', array(8, 15, 22, 29)),
			 array('Freestyle Friday', array(23)),
			 array('Skill Building', array(2, 7, 9, 12, 16, 19, 21, 28)),
			 array('Community Walk', array(14)),
			 array('Volunteer Meal On Wheels', array(1, 6, 20, 27)),
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
