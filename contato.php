<?php
/* Template Name: Contato */
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

<div class="row contato">
	<div class="col-md-6 col-sm-6">
		<div class="form">
			<form class="form-horizontal">
			    <div class="col-md-12">
			      <input type="email" required="required" class="form-control" name="nome" id="nome" placeholder="Digite seu Nome">
			    </div>
			    <div class="col-md-12">
			      <input type="email" required="required" class="form-control" name="email" id="email" placeholder="Digite seu Email">
			    </div>
			    <div class="col-md-12">
			      <input type="email" required="required" class="form-control" name="assunto" id="assunto" placeholder="Assunto">
			    </div>
				<div class="col-md-12">
			  		<textarea class="form-control" required="required" rows="12" maxlength="1000" name="mensagem" placeholder="Mensagem"></textarea>
			  	</div>
			  <button type="submit">Enviar</button>
			</form>
		</div>
	</div>
	<div class="col-md-6 col-sm-6">
		<div class="info-contato">
			<h2>Contato</h2>
			<div class="bloco-info">
				<div class="col-md-6">
					<div class="info-cont">
						RIO MAR
						Rua Desembargador Lauro 
						Nogueira, 1500 - Loja 8000
						Papicu
					</div>
				</div>
				<div class="col-md-6">
					<div class="info-cont">
						RIO MAR
						Rua Desembargador Lauro 
						Nogueira, 1500 - Loja 8000
						Papicu
					</div>
				</div>
				<div class="col-md-6">
					<div class="info-cont">
						RIO MAR
						Rua Desembargador Lauro 
						Nogueira, 1500 - Loja 8000
						Papicu
					</div>
				</div>
				<div class="col-md-6">
					<div class="info-cont">
						RIO MAR
						Rua Desembargador Lauro 
						Nogueira, 1500 - Loja 8000
						Papicu
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>