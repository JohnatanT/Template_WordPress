<?php
/* Template Name: Galeria */
 get_header(); ?>

 <!-- Banner --> 
<div class="row">
	<?php
		if(have_posts()){
			while(have_posts()) {
				the_post();
				$attr = array('class' => 'img-responsive','alt' => get_the_title());
				the_post_thumbnail("full",$attr); 
			}
		}
		wp_reset_postdata();
	?>
</div>

<!-- Galeria de Fotos -->
<div class="row galeria">
	<div class="fotos">
		<div class="titulo">
			<h2>Veja Algumas de Nossas Fotos</h2>
		</div>
		<?php 
			$loop = new WP_Query(array('post_type' => 'galeria', 'post_status' => 'publish'));
			if($loop->have_posts()){
				while($loop->have_posts()){
					$loop->the_post();
		?>
			<div class="col-md-4">
				<div class="bloco-fotos">
					<?php  
						$attr = array('class' => 'img-responsive','alt' => get_the_title());
						the_post_thumbnail("medium_large",$attr);
					?> 
				</div>
			</div>
					<?php
				}
			}
			wp_reset_postdata();
		?>		
	</div>
</div>


<?php get_footer(); ?>