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
		?>
			<p>Previous record: 54 days into quarantine, when I received a brief, chaste, gloved touch of the postmaster's finger as she handed me a box.</p>
	</div>
</section>
