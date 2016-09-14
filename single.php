<?php get_header(); ?>

<section id="main" class="container">
	<section id="articles-single">
	<?php if (have_posts()) : while ( have_posts()) : the_post(); ?>
		<article>
			<div class="thumb">
				<?php if(has_post_thumbnail()) { the_post_thumbnail('single-thumbs'); } ?>
			</div>
			<hgroup>
				<span class="categoria"><?php the_category(); ?></span>
				<h2><?php the_title(); ?></h2>
				<div class="date"><?php the_date(); ?></div>
				<div class="extract"><?php the_content(); ?></div>
				<div class="tags"><?php the_tags( ' ', ' ', '<br />' ); ?> </div>
			</hgroup>
		</article>
		<?php endwhile; else: ?>
	<h1>No se encontraron articulos</h1>
	<?php endif; ?>
	<!-- Integracion con FB -->
	<div id="comentarios">
		<div class="fb-comments" data-href="<?php echo the_permalink() ?>" data-colorscheme="light" data-numposts="5" data-width="100%"></div>
	</div>
	<!-- Fin Int con FB -->
	</section>


<?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>