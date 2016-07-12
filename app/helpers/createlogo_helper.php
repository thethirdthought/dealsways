<?php
include_once('class-php-ico.php');
function createlogo($filename='',$ext=''){
		$source = 'image/'.$filename.'.'.$ext;
		$destination ='image/logo.ico';
		$destination1 ='image/logo.jpg';
		$ico_lib = new PHP_ICO( $source,array( array( 32, 32 ) ) );
		$ico_lib->save_ico( $destination );

		$ico_lib = new PHP_ICO( $source,array( array( 150, 150 ) ) );
		$ico_lib->save_ico( $destination1 );
	}
?>