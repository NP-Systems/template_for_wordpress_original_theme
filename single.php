<?php
if ( in_category("<my-specific-category-name>") ) {
	get_template_part( "single-<my-specific-category-name>" , false );
}
else {
	get_template_part( "single-default" , "normal");
}
?>
