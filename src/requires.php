<?php

$requires = array(
	__DIR__ . '/functions.php',
	__DIR__ . '/config.php',
);

foreach ( $requires as $require ) {
	require_once( $require );
}
