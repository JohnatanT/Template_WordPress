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
			<h2>Veja Nossas Fotos</h2>
		</div>
		<div class="col-md-4">
			<div class="bloco-fotos">
				<img src="imagens/ultimos-posts.png" class="img-responsive">
			</div>
		</div>
		<div class="col-md-4">
			<div class="bloco-fotos">
				<img src="imagens/ultimos-posts.png" class="img-responsive">
			</div>
		</div>
		<div class="col-md-4">
			<div class="bloco-fotos">
				<img src="imagens/ultimos-posts.png" class="img-responsive">
			</div>
		</div>
		<div class="col-md-4">
			<div class="bloco-fotos">
				<img src="imagens/ultimos-posts.png" class="img-responsive">
			</div>
		</div>
		<div class="col-md-4">
			<div class="bloco-fotos">
				<img src="imagens/ultimos-posts.png" class="img-responsive">
			</div>
		</div>
		<div class="col-md-4">
			<div class="bloco-fotos">
				<img src="imagens/ultimos-posts.png" class="img-responsive">
			</div>
		</div>
		<div class="col-md-4">
			<div class="bloco-fotos">
				<img src="imagens/ultimos-posts.png" class="img-responsive">
			</div>
		</div>
		<div class="col-md-4">
			<div class="bloco-fotos">
				<img src="imagens/ultimos-posts.png" class="img-responsive">
			</div>
		</div>
		<div class="col-md-4">
			<div class="bloco-fotos">
				<img src="imagens/ultimos-posts.png" class="img-responsive">
			</div>
		</div>
		<div class="col-md-4">
			<div class="bloco-fotos">
				<img src="imagens/ultimos-posts.png" class="img-responsive">
			</div>
		</div>
		<div class="col-md-4">
			<div class="bloco-fotos">
				<img src="imagens/ultimos-posts.png" class="img-responsive">
			</div>
		</div>
		<div class="col-md-4">
			<div class="bloco-fotos">
				<img src="imagens/ultimos-posts.png" class="img-responsive">
			</div>
		</div>
		<div class="col-md-4">
			<div class="bloco-fotos">
				<img src="imagens/ultimos-posts.png" class="img-responsive">
			</div>
		</div>
		<div class="col-md-4">
			<div class="bloco-fotos">
				<img src="imagens/ultimos-posts.png" class="img-responsive">
			</div>
		</div>
		<div class="col-md-4">
			<div class="bloco-fotos">
				<img src="imagens/ultimos-posts.png" class="img-responsive">
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>