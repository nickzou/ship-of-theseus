<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <?php wp_head(); ?>
</head>
<body>
    <?php
// Load WordPress loop for processing posts

$args = array(
    'post_type' => 'task', // Replace with your custom post type name
    'posts_per_page' => 10 // Number of posts to show (you can change this number)
);

$tasks = new WP_Query( $args );

if ( $tasks->have_posts() ) : 
    while ( $tasks->have_posts() ) : $tasks->the_post(); 
        // Display the post's title and content
        echo '<h1>' . get_the_title() . '</h1>';
        the_content();
    endwhile; 
else : 
    echo '<p>No posts found.</p>';
endif; 
?>
</body>
</html>
<?php wp_footer() ?>