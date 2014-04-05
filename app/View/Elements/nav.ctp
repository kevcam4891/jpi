<?php
$here = $this->request->url;
if (empty($here)) {
	$here = '/';
}

$urls = array(
	 array(
		  'order' => 1,
		  'img' => 'welcome',
		  'url' => '/'
	 ),
	 array(
		  'order' => 2,
		  'img' => 'services',
		  'url' => 'services'
	 ),
	 array(
		  'order' => 3,
		  'img' => 'gallery',
		  'url' => 'gallery'
	 ),
	 array(
		  'order' => 4,
		  'img' => 'employment',
		  'url' => 'employment'
	 ),
	 array(
		  'order' => 5,
		  'img' => 'events',
		  'url' => 'events'
	 )
);



//if ($urls[$urls[$url]['order'] + 1])
?>

<div id="tabs" class="clearfix">
	
	<?php if($here == $urls[0]['url']): ?>
	<img src="/img/common/nav/cap-left-active.png" border="0"/>
	
		<?php else: ?>
	<img src="/img/common/nav/cap-left.png" border="0"/>
	
	<?php endif; ?>
	
	
		<?php foreach ($urls as $key => $url): ?>
		<a href="<?php echo $url['url'] ?>">
			<?php if ($here == $url['url']): ?>

				<img src="/img/common/nav/tab-<?php echo $url['img'] ?>-active.png" border="0"/>

				<?php if ($key < count($urls) - 1): ?>

					<?php if ($here == $urls[$key + 1]['url']): ?>
						<img src="/img/common/nav/sep-active-inactive.png" border="0"/>
					<?php else: ?>
						<img src="/img/common/nav/sep-active-inactive.png" border="0"/>
					<?php endif; ?>

				<?php else: ?>
					<img src="/img/common/nav/sep-active.png" border="0"/>
				<?php endif; ?>


			<?php else: ?>
				<img src="/img/common/nav/tab-<?php echo $url['img'] ?>.png" border="0"/>

				<?php if ($key < count($urls) - 1): ?>

					<?php if ($here == $urls[$key + 1]['url']): ?>
						<img src="/img/common/nav/sep-inactive-active.png" border="0"/>
					<?php else: ?>
						<img src="/img/common/nav/sep-inactive-inactive.png" border="0"/>
					<?php endif; ?>
				<?php else: ?>
					<img src="/img/common/nav/sep-inactive.png" border="0"/>
				<?php endif; ?>



			<?php endif; ?>
		</a>
	<?php endforeach; ?>


</div>