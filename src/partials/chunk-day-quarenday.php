<?php
/**
 * How many days of quarentime?
 */


?>

<section class="grid-container usa-section">
	<div class="grid-row grid-gap">
		<div class="tablet:grid-col-4">
			<h2 class="font-heading-xl margin-top-0 tablet:margin-bottom-0">You've been in quarentine or isolation for a while</h2>
		</div>
		<div class="tablet:grid-col-8 usa-prose">
			<p>Not everyone has had the same experience with lockdowns.</p>
			<p>Some people &mdash; or their employers &mdash; started limiting nonessential travel before local governments began official restrictions. Some people started in response to particular incidents, like a known case at a conference. Some people followed their local government guidelines for limiting nonessential travel. Some fools never limited nonessential travel. </p>
			<?php
				printf(
					'<h1><em>Day %1$s</em> of quarantine</h1>',
					days_since( $first_day_of_quarentine )
				);
			?>

			<p>
				Quarentine started on
				<?php
					printf(
						'<time datetime="%1$s">%2$s</time>,',
						date_format( $first_day_of_quarentine, 'c' ),
						date_format( $first_day_of_quarentine, 'l, F j, Y' )
					);
				?>
				after NICAR.
			</p>

		</div>
	</div>
</section>


