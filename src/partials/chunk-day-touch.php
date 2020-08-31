<?php
/**
 * How many days since touch?
 */
?>
<section class="usa-section bg-accent-cool-lighter">
	<div class="grid-container">
		<?php
			printf(
				'<h1><em>%1$s days</em> since meaningful physical contact</h1>',
				days_since( $last_day_of_touch )
			);
			printf(
				'<p>This record was last updated on %1$s. The maintainer of this site last held anyone on July 6, 2020, when his parents were in town.</p>',
				date_format( DateTime::createFromFormat( 'U', filemtime( __FILE__ ) ), 'F j, Y' )
			);
		?>
		<p>Previous record: 54 days into quarantine, this site's maintainer received a brief, chaste, gloved touch of the postmaster's finger as she handed over a box.</p>
	</div>
</section>
