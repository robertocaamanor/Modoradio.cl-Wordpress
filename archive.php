<?php get_header(); ?>

<section id="main" class="container">
	<section id="list-articles">
	<h2 id="cat-name"><?php single_cat_title( $prefix = '', $display = true); ?></h2>
	<?php if (have_posts()) : while ( have_posts()) : the_post(); ?>
		<article>
			<div class="thumb">
				<a href="<?php the_permalink(); ?>">
					<?php if(has_post_thumbnail()) { the_post_thumbnail('list-articles-thumbs'); } ?>
				</a>
			</div>
			<hgroup>
				<div class="categoria"><?php the_category(); ?></div>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="date"><?php the_date(); ?></span></div>
				<div class="extract"><?php the_excerpt(); ?></div>
			</hgroup>
		</article>
		<?php endwhile; else: ?>
	<h1>No se encontraron articulos</h1>
	<?php endif; ?>
	<div id="pagination">
		<p><?php next_posts_link('<-Siguientes') ?>
		<?php previous_posts_link('Anteriores->') ?></p>
	</div>
	</section>


<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>