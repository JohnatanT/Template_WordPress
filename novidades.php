<?php 
/* Template Name: Novidades */
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

<!-- Posts -->
<div class="row">
	<div class="posts">
		<?php
			$loop = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'showposts' => 8));
			if($loop->have_posts()){
				while($loop->have_posts()){
					$loop->the_post();
		?>
					<div class="bloco-posts">
						<div class="col-md-4 col-sm-4">
							<?php
								$attr = array('class' => 'img-responsive','alt' => get_the_title());
								the_post_thumbnail("medium",$attr); 
							?>
						</div>
						<div class="col-md-8 col-sm-8">
							<div class="resumo">
								<h2><?php the_title(); ?></h2>
								<?php the_excerpt();  ?>
								<a href="<?php the_permalink(); ?>">Leia Mais</a>
							</div>
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