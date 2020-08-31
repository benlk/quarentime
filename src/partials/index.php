<?php
/**
 * This template partial establishes the webpage.
 */
?>
<!DOCTYPE html>
<html>
	<head>
		<?php
			include( 'head.php' );
		?>
	</head>
	<body>
		<?php
			include( 'usa-banner.php' );
			include( 'usa-header-basic.php' );
		?>
		<main id="main-content">
			<?php
				include( 'chunk-day-march.php' );
				include( 'chunk-day-quarenday.php' );
				include( 'chunk-day-touch.php' );
				include( 'section-what.php' );
				include( 'section-why.php' );
				include( 'section-who.php' );
			?>
		</main>
		<?php
			include( 'footer.php' );
		?>
		<script src="assets/js/uswds.min.js"></script>
	</body>
</html>


