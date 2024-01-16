<?php
/*
Template Name: All Course Categories
*/

get_header();

$terms = get_terms(array(
    'taxonomy'   => 'course_category',
    'hide_empty' => false,
));

if ($terms) :
    foreach ($terms as $term) :
        echo '<h2>' . $term->name . '</h2>';
        echo '<p>' . $term->description . '</p>';
        // You can customize the display of each category as needed
    endforeach;
else :
    echo '<p>No course categories found</p>';
endif;

get_footer();
?>
