<div id="primary">
	<?php echo $this->element('nav'); ?>
	<div id="splash"><img src="/img/events/title.png" border="0"/></div>
</div>
<div id="events" class="clearfix">
	<div class="leftColumn">
		<?php
		$events = array(
			 '06-01' => array(
				  array(
						'title' => 'SO Exercise',
						'time' => '5:00pm',
				  )
			 ),
			 '06-03' => array(
				  array(
						'title' => 'Manicures',
				  )
			 ),
			 '06-06' => array(
				  array(
						'title' => 'friendAble Social Club',
				  ),
				  array(
						'title' => 'Bowling State Games',
				  ),
				  array(
						'title' => 'Concert Series at Town Center',
				  ),
			 ),
			 '06-07' => array(
				  array(
						'title' => 'Grills and Thrills',
						'time' => '11:00a-1:30p',
						'note' => '2210 Cedar Road. Bring Suit and towel.',
				  ),
			 ),
			 '06-08' => array(
				  array(
						'title' => "Attend Church",
				  ),
				  array(
						'title' => "Visit Family",
				  ),
				  array(
						'title' => 'SO Exercise',
						'time' => '5:00pm',
				  )
			 ),
			 '06-11' => array(
				  array(
						'title' => 'Play board game of your choice',
				  ),
			 ),
			 '06-13' => array(
				  array(
						'title' => 'Bowling State Games',
				  ),
				  array(
						'title' => 'Concert Series at Town Center',
				  ),
			 ),
			 '06-14' => array(
				  array(
						'title' => 'Just People Family Fun Day',
						'time' => '12-3p',
						'note' => '1728 Hearthside Ct E',
				  ),
			 ),
			 '06-15' => array(
				  array(
						'title' => "Attend Church",
				  ),
				  array(
						'title' => "Visit Family",
				  ),
				  array(
						'title' => 'SO Exercise',
						'time' => '5:00pm',
				  )
			 ),
			 '06-17' => array(
				  array(
						'title' => 'Manicures',
				  )
			 ),
			 '06-20' => array(
				  array(
						'title' => 'Special Olympics',
				  ),
				  array(
						'title' => 'Dinner & Dance',
						'time' => '6:15pm',
						'note' => '1201 Club House Dr.'
					),
					array(
						'title' => 'OR Fun Bowling'
					)
			 ),
			 '06-21' => array(
				  array(
						'title' => 'Alley Cats Bowling',
						'note' => '$1.69 AMF CH'
				  ),
				  array(
						'title' => 'First Day of Summer',
						'note' => 'Enjoy some ice cream!',
				  )
			 ),
			 '06-22' => array(
				  array(
						'title' => 'Tides Game',
						'time' => '12:15pm',
						'note' => '$5 Parking per Vehicle'
				  ),
				  array(
						'title' => 'SO Exercise',
						'time' => '5:00pm',
				  )
			 ),
			 '06-25' => array(
				  array(
						'title' => 'Play board game of your choice',
				  ),
			 ),
			 '06-27' => array(
				  array(
						'title' => 'Concert Series',
						'note' => 'Town Center at Greenbrier',
						'time' => '6pm-8:30pm'
				  ),
					array(
						'title' => 'OR Fun Bowling'
					)
			 ),
			 '06-29' => array(
				  array(
						'title' => "Melvin's Birthday",
				  ),
				  array(
						'title' => 'SO Exercise',
						'time' => '5:00pm',
				  )
			 ),
		);
		?>
		<div class="clearfix">
			<div class="month">June 2014: Residential</div>
			<?php foreach ($events as $date => $evs): ?>
				<dt>
				<?php
				$d = new DateTime('2014-06-'.substr($date, 3, 2));
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
	</div>
	<div class="rightColumn">
		<?php
		$prev = array(
			 array('Norfolk Zoo', array(3)),
			 array('Keyboard Challenge', array(9)),
			 array('Meal On Wheels (Chesapeake)', array(10,24)),
			 array('Meal On Wheels (VA Beach) & Mount Trashmore', array(17)),
			 array('Skill Building', array(2,4,6,11,16,20,23,25,27)),
			 array('Freestyle Friday', array(13)),
			 array('Community Walk', array(18,30)),
			 array('Cinema Cafe', array(19)),
			 array('Union Mission', array(5,12,26)),
		);
		$day = array(
			 array('Social Activities', array(2,9,16,23,30)),
			 array('Board Games', array(3)),
			 array('Jam Fest', array(4,18)),
			 array('Movie and Popcorn', array(5,12,19,26)),
			 array('Current Events', array(6,13,20,27)),
			 array('Comic View - Jokes and Riddles', array(10)),
			 array('Bingo', array(11)),
			 array('JPI Fun Day', array(14)),
			 array('Games', array(17)),
			 array('JPI Scrapbook', array(24)),
		);
		?>
		<div class="clearfix">
			<?php
			foreach ($prev as $ev => $pr) {
				foreach ($pr[1] as $d) {
					$prevDates[$d] = $pr[0];
				}
			}
			ksort($prevDates);
			?>
			<div class="month">June 2014: Prevocational</div>
			<?php foreach ($prevDates as $pd => $title): ?>
				<dt><?php
			$d = new DateTime('2014-06-'.$pd);
			echo $d->format('l, F j');
				?></dt>
				<dd>
					<div class="eventTitle"><?php echo $title ?></div>
				</dd>
			<?php endforeach; ?>
		</div>
		<div class="clearfix" style="margin-top: 30px;">
			<?php
			foreach ($day as $ev => $pr) {
				foreach ($pr[1] as $d) {
					$dayDates[$d] = $pr[0];
				}
			}
			ksort($dayDates);
			?>
			<div class="month">June 2014: Day Program</div>
			<?php foreach ($dayDates as $pd => $title): ?>
				<dt><?php
			$d = new DateTime('2014-06-'.$pd);
			echo $d->format('l, F j');
				?></dt>
				<dd>
					<div class="eventTitle"><?php echo $title ?></div>
				</dd>
			<?php endforeach; ?>
		</div>
	</div>
</div>
