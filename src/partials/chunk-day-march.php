<?php
/**
 * This template partial defines what day today is in March.
 */

?>
<section class="usa-hero" aria-label="Introduction">
	<div class="grid-container">
		<div class="usa-hero__callout">
			<h1 class="usa-hero__heading">
				<span class="usa-hero__heading--alt">Today is:</span>
				<?php
					printf(
						'March %1$s',
						days_since( $first_day_of_march )
					);
				?>
			</h1>
			<p>But that's not really important.</p>
		</div>
	</div>
</section>


