<?php
$this->Html->script(array(
	 '/slimbox/js/mootools',
	 '/slimbox/js/slimbox'
	), array('inline' => false));
$this->Html->css(array(
	 '/slimbox/css/slimbox'
	), null, array('inline' => false));


$photos = array(
	 '100_1872.jpg',
	 '100_2122.jpg',
	 '100_2173.jpg',
	 '100_2205.jpg',
	 '100_2211.jpg',
	 '100_2214.jpg',
	 '100_2222.jpg',
	 '100_2737.jpg',
	 '100_2922.jpg',
	 //'100_2973.jpg',
	 '100_2974.jpg',
	 //'100_2975.jpg',
	 '100_3092.jpg',
	 '100_3276.jpg',
	 '100_3303.jpg',
	 //'100_3311.jpg',
	 '100_3361.jpg',
	 '100_3367.jpg',
	 '100_3391.jpg',
	 '100_3392.jpg',
	 '100_3397.jpg',
	 '100_3434.jpg',
	 '100_3476.jpg'
	)
?>
<div id="primary">
	<?php echo $this->element('nav'); ?>
	<div id="splash"><img src="/img/gallery/title.png" border="0"/></div>
</div>
<div class="gallery">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<?php
		$photo_i = 0;
		$rows = ceil(count($photos) / 5);
		?>

		<?php for ($i = 0; $i < $rows; $i++): ?>
			<tr>
				<?php for ($j = 0; $j < 5; $j++): ?>
					<td>
						<?php
						$photo_i++;
						?>
						<?php if (!empty($photos[$photo_i])): ?>
							<a href="/img/gallery/2012-10/<?php echo $photos[$photo_i]; ?>" rel="lightbox"><img src="/img/gallery/2012-10/thumbs/<?php echo $photos[$photo_i]; ?>" border="0" /></a>
						<?php endif; ?>
					<?php endfor; ?>
				</td>
			</tr>
		<?php endfor; ?>
	</table>
</div>