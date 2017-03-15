<?php 
$css_especifico = 'index';
require_once('header.php');  
?> <!-- <?php// include('header.php') ?>  or <?php// get_header();?> -->

<!-- https://codex.wordpress.org/The_Loop -->
<main class="home-main">
	<div class="container">
	<ul class="imoveis-listagem">
		<?php 

		$args = array( 'post_type' => 'imovel');
		$loop = new WP_Query( $args);
		if ( $loop->have_posts() ) {
			 while ( $loop->have_posts() ) {
				 $loop->the_post(); 
		?>
			
			<li class ="imoveis-listagem-item">
			<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
					<h2><?php the_title(); ?></h2>
					<div><?php the_content(); ?></div>
				</a>
			</li>
			<?php }	?>
		</ul>
		<?php } ?>
	</div>
	
</main>
<?php get_footer(); ?>