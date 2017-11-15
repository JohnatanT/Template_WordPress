<?php 
/* Template Name: Sobre */
?>

<?php get_header(); ?>
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

<!-- Sobre Nós -->
<div class="row info-sobre">
	<div class="sobre-nos">
		<div class="centralizado">
			<div class="col-md-4 col-sm-4">
				<div class="cabecalho">
					<i class="fa fa-anchor" aria-hidden="true"></i>
					<h3>Qualidade</h3>
				</div>
				<div class="conteudo">
					É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação.
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="cabecalho">
					<i class="fa fa-calendar" aria-hidden="true"></i>
					<h3>Nossos Planos</h3>
				</div>
				<div class="conteudo">
					É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação.
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="cabecalho">
					<i class="fa fa-users" aria-hidden="true"></i>
					<h3>Profissionais</h3>
				</div>
				<div class="conteudo">
					É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação.
				</div>
			</div>
		</div>
	</div>
</div>	


<!-- Mais sobre a empresa -->
<div class="row info">
	<?php 
		if(have_posts()){
			while(have_posts()){
				the_post();

				the_content();
			}
		}
		wp_reset_postdata();
	?>
</div>


<?php get_footer(); ?>