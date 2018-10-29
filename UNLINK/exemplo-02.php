<?php 

if ( !is_dir("images") ) mkdir($file);

foreach ( scandir("images") as $item ) {
    if ( !in_array( $item, array( ".", ".." ) ) ) {

        unlink( "images/" . $item );

    }
}

echo "OK";

?>