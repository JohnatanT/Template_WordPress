<?php get_header(); ?>

<!-- Conteudo do Post -->
<div class="row" id="conteudo-post">
	<div class="conteudo">
		<?php the_post(); ?>
		<h2><?php the_title(); ?></h2>
		<?php  the_content(); ?>
	</div>
	<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a08e07fa5f4f28a"></script> 
</div>


<?php get_footer(); ?>