<!-- footer -->
	<div class="row footer">
		<div class="rodape">
			<div class="col-md-4 col-sm-4">
				<?php 
			      $args = array(
			        'theme_location' => 'menu-footer',
			        'menu' => 'menu-footer',
			        'container' => '',
			        'container_class' => '',
			        'container_id' => '',
			        'menu_class' => '',
			        'menu_id' => '',
			        'echo' => true,
			        'before' => '',
			        'after' => '',
			        'link_before' => '',
			        'link_after' => '',
			        'depth' => 0,
			        'walker' => ''
			      );
			      wp_nav_menu($args);
			    ?>
			</div>
			<div class="col-md-4 col-sm-4">
				<?php
			$loop = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'showposts' => 5));
			if($loop->have_posts()){
				while($loop->have_posts()){
					$loop->the_post();
			?>
				<ul>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				</ul>

				<?php  
			}
		}
				?>
			</div>
			<div class="col-md-4 col-sm-4">
				 <!-- SDK Facebbok -->
    			<div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.11';
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>

  					<!-- Chamando a página -->
  					<div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="200" data-height="200" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
			</div>
		</div>
	</div>
	<!-- Direitos autorais -->
	<div class="direitos row">
		<p>Todos os direitos reservados a Johnatan Tavares &copy;</p>
	</div>


</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
    <script src="https://use.fontawesome.com/1c8c88a612.js"></script>
  </body>
</html>