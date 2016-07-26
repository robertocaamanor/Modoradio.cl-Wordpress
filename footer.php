<footer class="container">
	<section id="ft_widgets">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer')) : endif; ?>
	</section>
	<p id="copyright">@ 2016 Modoradio - Derechos reservados - Plantilla diseñada por Roberto Caamaño</p>
</footer>
<script src="<?php bloginfo('template_url') ?>/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>