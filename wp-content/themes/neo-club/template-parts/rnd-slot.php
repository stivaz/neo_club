<?php
$rnd_post = get_posts( [
	'numberposts' => 1,
	'post_type'   => 'casino',
	'orderby'     => 'rand'
] );
$rnd_link = get_permalink($rnd_post[0]->ID);
?>
<div class="rnd-slot">
	<div class="container">
		<div class="rnd-title">Не можете выбрать казино?</div>
		<div class="rnd-descr">Положитесь на удачу и кликайте по кнопке</div>
		<div class="rnd-btn"><a href="<?= $rnd_link; ?>" class="btn btn-yellow btn-big"><i class="fas fa-random"></i> Случайное казино</a></div>
	</div>
</div>
