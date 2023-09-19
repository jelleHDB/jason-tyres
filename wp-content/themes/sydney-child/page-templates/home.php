<?php
/*
Template Name: Home
*/

$link_home1 = get_field('link-overons-home_1');
$link_home2 = get_field('link-overons-home_2');
$link_home3 = get_field('link-network');
$link_home4 = get_field('link-onderdeel');

get_header(); ?>
<div id="breedte-page">
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
</div>
<div class="camo" style="background-image: linear-gradient( rgba(0, 0, 0, 0), rgba(0, 0, 0, 0) ), url(<?php the_field('achtergrond_afbeelding-camo'); ?>)">
	<div class="camo-inner">
		<div class="camo-c1">

		<?php

		// Check rows existexists.
		if( have_rows('repeater_1-camo') ):

			// Loop through rows.
			while( have_rows('repeater_1-camo') ) : the_row();

				// Load sub field value.
				$tekstCamo1 = get_sub_field('titel-repeater-camo_1');
				$informatieCamo1 = get_sub_field('informatie-repeater-camo_1');
				// Do something... ?>

				<div class="repeaterCamoDiv">
					<h2 class="titel-camo"><?php echo $tekstCamo1 ?></h2>
					<p class="info-camo"><?php echo $informatieCamo1 ?></p>
				</div>


			<?php // End loop.
			endwhile;

		// No value.
		else :
			// Do something...
		endif;

		?>


		</div>
		<div class="camo-c2">

		<?php

		// Check rows existexists.
		if( have_rows('repeater_2-camo') ):

			// Loop through rows.
			while( have_rows('repeater_2-camo') ) : the_row();

				// Load sub field value.
				$tekstCamo2 = get_sub_field('titel-repeater-camo_2');
				$informatieCamo2 = get_sub_field('informatie-repeater-camo_2');
				// Do something... ?>

				<div class="repeaterCamoDiv">
					<h2 class="titel-camo"><?php echo $tekstCamo2 ?></h2>
					<p class="info-camo"><?php echo $informatieCamo2 ?></p>
				</div>


			<?php // End loop.
			endwhile;

		// No value.
		else :
			// Do something...
		endif;

		?>

		</div>
		<div class="camo-c3">
			<div class="repeaterCamoDiv">
				<?php if( get_field('titel-camo') ): ?>
					<h2 class="titel-camo"><?php the_field('titel-camo'); ?></h2>
				<?php endif; ?>
				<?php if( get_field('informatie-camo') ): ?>
					<p class="informatie-camo"><?php the_field('informatie-camo'); ?></p>
				<?php endif; ?>
				<?php if( get_field('afbeelding-camo') ): ?>
					<img class="afbeelding-camo" src="<?php the_field('afbeelding-camo'); ?>" />
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<div class="laatsteHome">
	<div class="onderdeel">
		<div class="onderdeel-inner">
			<div class="onderdeel-c1">
				<?php if( get_field('afbeelding-camo') ): ?>
					<img class="afbeelding-camo" src="<?php the_field('afbeelding-camo'); ?>" />
				<?php endif; ?>
			</div>
			<div class="onderdeel-c2">
				<?php if( get_field('titel-onderdeel_1') ): ?>
					<h2 class="titel-onderdeel_1"><?php the_field('titel-onderdeel_1'); ?></h2>
				<?php endif; ?>
				<?php if( get_field('titel-onderdeel_2') ): ?>
					<h2 class="titel-onderdeel_2"><?php the_field('titel-onderdeel_2'); ?></h2>
				<?php endif; ?>
				<?php if( get_field('informatie-onderdeel_1') ): ?>
					<p class="informatie-onderdeel_1"><?php the_field('informatie-onderdeel_1'); ?></p>
				<?php endif; ?>
				<?php if( get_field('informatie-onderdeel_2') ): ?>
					<p class="informatie-onderdeel_2"><?php the_field('informatie-onderdeel_2'); ?></p>
				<?php endif; ?>
				<?php if( get_field('informatie-onderdeel_3') ): ?>
					<p class="informatie-onderdeel_3"><?php the_field('informatie-onderdeel_3'); ?></p>
				<?php endif; ?>
				<?php
				if( $link_home4 ): ?>
					<a class="link-onderdeel" href="<?php echo esc_url( $link_home4 ); ?>">
						<?php the_field('tekst_link-onderdeel'); ?>
					</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="nieuwsbrief">
		<div class="nieuwsbrief-inner">
			<?php if( get_field('titelNieuwsbrief_1') ): ?>
				<h2 class="titelNieuwsbrief_1"><?php the_field('titelNieuwsbrief_1'); ?></h2>
			<?php endif; ?>
			<?php if( get_field('titelNieuwsbrief_2') ): ?>
				<h2 class="titelNieuwsbrief_2"><?php the_field('titelNieuwsbrief_2'); ?></h2>
			<?php endif; ?>
			<?php if( get_field('nieuwsbrief-nieuwsbrief') ): ?>
				<?php the_field('nieuwsbrief-nieuwsbrief'); ?>
			<?php endif; ?>
		</div>
	</div>
</div>


<?php get_footer(); ?>

