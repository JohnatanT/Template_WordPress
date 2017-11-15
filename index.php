
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

<!-- Bloco Navegação -->
<div class="row navegacao">
	<div class="bloco-sobre">
		<div class="row linha-sobre">
			<div class="col-md-6">
				<div class="col-md-6">
					<img src="<?php bloginfo('template_url'); ?>/imagens/icons8-Weixing-128.png" class="img-responsive">
				</div>
				<div class="col-md-6">
					<h2>Conheça Mais Sobre Nós</h2>
					<p>É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação</p>
					<?php
						$id = get_post(23);
					?>
					<a href="<?php the_permalink($id); ?>" class="btn btn-purple">Acessar</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<img src="<?php bloginfo('template_url'); ?>/imagens/icons8-WordPress-128.png" class="img-responsive">
				</div>
				<div class="col-md-6">
					<h2>Olhe Nossos últimos Posts</h2>
					<p>É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação</p>
					<?php
						$id = get_post(25);
					?>
					<a href="<?php the_permalink($id); ?>" class="btn btn-purple">Acessar</a>
				</div>
			</div>
		</div>
		<div class="row linha-sobre">
			<div class="col-md-6">
				<div class="col-md-6">
					<img src="<?php bloginfo('template_url'); ?>/imagens/icons8-Google Photos-128.png
					" class="img-responsive">
				</div>
				<div class="col-md-6">
					<h2>Veja Nossa Galeria</h2>
					<p>É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação</p>
					<?php
						$id = get_post(28);
					?>
					<a href="<?php the_permalink($id); ?>" class="btn btn-purple">Acessar</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<img src="<?php bloginfo('template_url'); ?>/imagens/icons8-Telefone-128.png" class="img-responsive">
				</div>
				<div class="col-md-6">
					<h2>Entre em Contato</h2>
					<p>É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação</p>
					<?php
						$id = get_post(31);
					?>
					<a href="<?php the_permalink($id); ?>" class="btn btn-purple">Acessar</a>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Mensagem -->
<div class="row mensagem">
	<div class="texto">
		<h2>Ninguém é igual a ninguém. Todo o ser humano é um estranho ímpar.</h2>
		<p>Carlos Drummond de Andrade</p>
	</div>
</div>

<!-- Ultimos Posts -->
<div class="row ultimos-posts">
	<div class="linha-posts">
		<?php
			$loop = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'showposts' => 4));
			if($loop->have_posts()){
				while($loop->have_posts()){
					$loop->the_post();
					?>
		<div class="col-md-3">
			<div class="bloco-posts">
				<?php
					$attr = array('class' => 'img-responsive','alt' => get_the_title());
					the_post_thumbnail("medium",$attr); 
				?>
				<div class="texto">
					<h4><?php the_title(); ?></h4>
					<p><?php the_excerpt(); ?></p>
				</div>
				<a href="<?php the_permalink(); ?>">Leia Mais.</a>
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
