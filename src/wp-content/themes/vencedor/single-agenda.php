<?php get_header(); ?>
    <section id="main-section" class="wrap clearfix">
	    <div id="content" class="col-8">		
	    <?php if ( have_posts()) : the_post(); ?>
	    <?php $meta = get_metadata('post', $post->ID); ?>		
		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
			<header>
				<h2><?php the_title();?></h2>
            </header>
		    <div class="post-content">			    
				<?php if (has_post_thumbnail()) : ?> 
					<?php the_post_thumbnail('medium'); ?>				 
				<?php endif; ?>
				<?php the_content(); ?>
				<div class="event-info clear">
					<h3>Informações do Evento</h3>
					<?php
					if ($meta['_data_inicial'][0]) echo '<p class="bottom"><span class="label">Data Inicial:</span> ', date('d/m/Y', strtotime($meta['_data_inicial'][0])), '</p>';
					if ($meta['_data_final'][0]) echo '<p class="bottom"><span class="label">Data Final:</span> ', date('d/m/Y', strtotime($meta['_data_final'][0])), '</p>';
					if ($meta['_onde'][0]) echo '<p class="bottom"><span class="label">Local:</span> ', $meta['_onde'][0], '</p>';
					if ($meta['_link'][0]) echo '<p class="bottom"><span class="label">Site:</span> ', $meta['_link'][0], '</p>';
					?>
				</div>
            </div>
		    <!-- .post-content -->
		    <footer class="post-footer clearfix">
				<?php get_template_part('interaction'); ?>
		    </footer>
		    <!-- comentários -->
		</article>
		<!-- .post -->
		<nav class="navigation" class="clearfix">
			<a href="<?php bloginfo('url'); ?>/agenda?eventos">Ver próximos eventos</a> | <a href="<?php bloginfo('url'); ?>/agenda?eventos=passados">Ver eventos passados</a>
		</nav>				
		<?php else : ?>		
		    <p class="post"><?php _e('No results found.', 'temavencedor'); ?></p>
	    <?php endif; ?>
	    </div>
	    <!-- #content -->
	    <aside id="sidebar" class="col-4 clearfix">
			<?php get_sidebar(); ?>
	    </aside>
	    <!-- #sidebar -->      
    </section>
    <!-- #main-section -->
<?php get_footer(); ?>
