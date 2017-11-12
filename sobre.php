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
	<div class="titulo-info">
		<h2><i class="fa fa-coffee" aria-hidden="true"></i></h2>
		Buscamos relacionamentos baseados na transparência, persistência, confiança mútua e integridade com nossos colaboradores, clientes e outros parceiros de negócios.
	</div>
	<div class="centro">
		<div>
		<div class="conteudo">
				Vendemos resultados e somos pagos pelos resultados que geramos. Não vai ser da noite para o dia que alavancaremos seu negócio na internet, faremos isso um passo de cada vez, obtendo resultados contínuos e graduais; de mãos dadas com nossos clientes.
		</div>
	</div>
	<div>
		<div class="conteudo">
				Oferecemos diversos serviços de Marketing Digital para empresas que precisam divulgar seus produtos e serviços através de remarketing, Google Adwords, Facebook Ads, estratégias de SEO e outras estratégias de Marketing Digital que irão destacar sua marca e trazer notoriedade para sua empresa no mundo online.
		</div>
	</div>
	</div>
</div>


<?php get_footer(); ?>