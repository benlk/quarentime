<?php
/**
 * How many days of quarentime?
 */

$days = array(
	array(
		'date' => '2020-01-23',
		'note' => 'Border shutdown in Wuhan, Hubei Province, China',
	),
	array(
		'date' => '2020-03-09',
		'note' => 'Monday after NICAR',
	),
	array(
		'date' => '2020-03-10',
		'note' => 'Tuesday after NICAR, when <a href="https://www.ire.org/archives/41054">attendees were notified</a> of a presumptive positive test in a person who attended the conference.',
	),
	array(
		'date' => '2020-03-15',
		'note' => 'Puerto Rico\'s lockdown begins.',
	),
	array(
		'date' => '2020-03-17',
		'note' => 'San Francisco Bay Area lockdown begins.',
	),
	array(
		'date' => '2020-03-19',
		'note' => 'California\'s statewide lockdown begins.',
	),
	array(
		'date' => '2020-03-21',
		'note' => 'Illinois and New Jersey stay-at-home orders gointo effect.',
	),
	array(
		'date' => '2020-03-22',
		'note' => 'New York state stay-at-home order goes into effect.',
	),
	array(
		'date' => '2020-03-23',
		'note' => 'Connecticut, Ohio, Oregon, and West Virginia stay-at-home orders go into effect.',
	),
	array(
		'date' => '2020-03-24',
		'note' => 'Massachusetts, Michigan, Nevada and  stay-at-home orders go into effect.',
	),
	array(
		'date' => '2020-03-25',
		'note' => 'Indiana, Michigan,  and Ohio stay-at-home orders go into effect.',
	),
);

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
					'<h1><em>Day %1$s</em> of quarantime</h1>',
					days_since( $first_day_of_quarentine )
				);
			?>

			<p>
				This site maintainer's quarentime started on
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

<section class="grid-container usa-section">
	<div class="grid-row grid-gap">
		<div class="desktop:grid-col-10 desktop:grid-offset-1 usa-prose">

			<table class="usa-table usa-table--borderless">
				<caption>Depending on when you started, here's how long you've been operating on quarentime:</caption>
				<thead>
					<tr>
						<th scope="col">Start</th>
						<th scope="col">Notable occurrences this day</th>
						<th scope="col" class="text-no-wrap">How long?</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ( $days as $day ) {
							$day_datetime = new DateTime( $day['date'] );
							$print_date = date_format( $day_datetime, 'M j' );
							$print_description = $day['note'];
							$print_days = days_since( $day_datetime );

							include 'chunk-day-quarenday-tr.php';
						}
					?>
				</tbody>
			</table>

		</div>
	</div>
</section>


