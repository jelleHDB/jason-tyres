<?php
/*
Template Name: Home
*/

$link_home1 = get_field('link-overons-home_1');
$link_home2 = get_field('link-overons-home_2');
$link_home3 = get_field('link-network');

get_header(); ?>

<div class="homepage-whole">
	<div class="home-usp-whole">
		<div class="home-usp-inhoud">
			<div class="home-usp">
			<?php if( get_field('usp-home-img_1') ): ?>
				<img class="usp-home-img_1" src="<?php the_field('usp-home-img_1'); ?>" />
			<?php endif; ?>
			<?php if( get_field('usp-home-titel_1') ): ?>
                <h2 class="usp-home-titel_1"><?php the_field('usp-home-titel_1'); ?></h2>
            <?php endif; ?>
			<?php if( get_field('usp-home-info_1') ): ?>
                <p class="usp-home-info_1"><?php the_field('usp-home-info_1'); ?></p>
            <?php endif; ?>
			</div>
			<div class="home-usp">
			<?php if( get_field('usp-home-img_2') ): ?>
				<img class="usp-home-img_2" src="<?php the_field('usp-home-img_2'); ?>" />
			<?php endif; ?>
			<?php if( get_field('usp-home-titel_2') ): ?>
                <h2 class="usp-home-titel_2"><?php the_field('usp-home-titel_2'); ?></h2>
            <?php endif; ?>
			<?php if( get_field('usp-home-info_2') ): ?>
                <p class="usp-home-info_2"><?php the_field('usp-home-info_2'); ?></p>
            <?php endif; ?>
			</div>
			<div class="home-usp">
			<?php if( get_field('usp-home-img_3') ): ?>
				<img class="usp-home-img_3" src="<?php the_field('usp-home-img_3'); ?>" />
			<?php endif; ?>
			<?php if( get_field('usp-home-titel_3') ): ?>
                <h2 class="usp-home-titel_3"><?php the_field('usp-home-titel_3'); ?></h2>
            <?php endif; ?>
			<?php if( get_field('usp-home-info_3') ): ?>
                <p class="usp-home-info_3"><?php the_field('usp-home-info_3'); ?></p>
            <?php endif; ?>
			</div>
		</div>
	</div>
	<div class="home-overons">
		<div class="home-overons-inner">
			<div class="home-overons-c1">
				<?php if( get_field('titel-overons-home_1') ): ?>
					<h4 class="titel-overons-home_1"><?php the_field('titel-overons-home_1'); ?></h4>
				<?php endif; ?>
				<?php if( get_field('titel-overons-home_2') ): ?>
                	<h2 class="titel-overons-home_2"><?php the_field('titel-overons-home_2'); ?></h2>
				<?php endif; ?>
				<?php if( get_field('informatie-overons-home') ): ?>
					<p class="informatie-overons-home"><?php the_field('informatie-overons-home'); ?></p>
				<?php endif; ?>
				<?php
				if( $link_home1 ): ?>
					<a class="link-overons-home_1" target="_blank" href="<?php echo esc_url( $link_home1 ); ?>">
						<?php the_field('tekstLink-overons-home_1'); ?>
					</a>
				<?php endif; ?>
				<?php
				if( $link_home2 ): ?>
					<a class="link-overons-home_2" target="_blank" href="<?php echo esc_url( $link_home2 ); ?>">
						<?php the_field('tekstLink-overons-home_2'); ?>
					</a>
				<?php endif; ?>
			</div>
			<div class="home-overons-c2">
				<?php if( get_field('afbeelding-overons-home') ): ?>
					<img class="afbeelding-overons-home" src="<?php the_field('afbeelding-overons-home'); ?>" />
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="network">
		<div class="network-inner">
			<div class="network-c1">
				<div class="network-c1-c1">
					<?php if( get_field('rood_vlak-network_1') ): ?>
						<h2 class="rood_vlak-network_1"><?php the_field('rood_vlak-network_1'); ?></h2>
					<?php endif; ?>
					<?php if( get_field('rood_vlak-network_2') ): ?>
						<h2 class="rood_vlak-network_2"><?php the_field('rood_vlak-network_2'); ?></h2>
					<?php endif; ?>
				</div>
				<div class="network-c1-c2">
					<?php if( get_field('rood_vlak-network_3') ): ?>
						<h2 class="rood_vlak-network_3"><?php the_field('rood_vlak-network_3'); ?></h2>
					<?php endif; ?>
					<?php if( get_field('rood_vlak-network_4') ): ?>
						<h2 class="rood_vlak-network_4"><?php the_field('rood_vlak-network_4'); ?></h2>
					<?php endif; ?>
				</div>
			</div>
			<div class="network-c2">
				<?php if( get_field('titel-network_1') ): ?>
					<h2 class="titel-network_1"><?php the_field('titel-network_1'); ?></h2>
				<?php endif; ?>
				<?php if( get_field('titel-network_2') ): ?>
					<h2 class="titel-network_2"><?php the_field('titel-network_2'); ?></h2>
				<?php endif; ?>
				<?php if( get_field('informatie-network_1') ): ?>
					<p class="informatie-network_1"><?php the_field('informatie-network_1'); ?></p>
				<?php endif; ?>
				<?php if( get_field('informatie-network_2') ): ?>
					<p class="informatie-network_2"><?php the_field('informatie-network_2'); ?></p>
				<?php endif; ?>
				<?php
				if( $link_home3 ): ?>
					<a class="link-network" target="_blank" href="<?php echo esc_url( $link_home3 ); ?>">
						<?php the_field('tekst_link-network'); ?>
					</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>

