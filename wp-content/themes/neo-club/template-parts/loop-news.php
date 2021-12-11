<div class="news-item">
	<a href="<?php the_permalink(); ?>" class="news-img">
		<img src="<?= kama_thumb_src( "w=510 &h=418" ) ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
	</a>
	<div class="news-text">
		<a class="news-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<div class="news-descr"><?php the_excerpt(); ?></div>
	</div>
</div>
