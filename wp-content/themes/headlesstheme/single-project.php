<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
        the_post();
?>
        <h1>AAA<?php echo the_title(); ?></h1>
        <p><?php echo the_content(); ?></p>
<?php
	} 
} else {
    echo "no post available";
}
?>