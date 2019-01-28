<?php

	$file =  get_template_directory() . '/post.txt';
	$productName = $_POST[ 'productname' ];
// Open the file to get existing content
	$current = "Post contents are: $productName ";
	$open = fopen( $file, "a" ); 
    $write = fputs( $open, $current ); 
    fclose( $open );
    var_dump( $_POST );