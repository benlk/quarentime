<?php
/**
 * Given a date, return how many days it's been since then.
 *
 * @param DateTime $march_1
 * @retun DateTimeInterval
 */
function days_since( DateTime $march_1 ) {
	$diff = date_diff( $march_1, new DateTime( "tomorrow", new DateTimeZone( 'America/New_York' ) ) );
	return $diff->format( '%a' );
}
