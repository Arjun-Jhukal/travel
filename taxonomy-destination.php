<?php
$object = get_queried_object();
$object_id = get_queried_object_id();

get_header(); ?>

<?php
if ($object->parent) {
  // This is a child term.
  // Check if it has subchildren (children of children).
  $subchildren = get_term_children($object_id, $object->taxonomy);

  if (!empty($subchildren)) {
    // Include the template for subchildren.
    get_template_part('template-parts/destination-subchildren', null, ['object_id' => $object_id, 'object' => $object]);
  } else {
    // Include the template for regular children.
    get_template_part('template-parts/destination-children', null, ['object_id' => $object_id, 'object' => $object]);
  }
} else {
  // This is a parent term.
  get_template_part('template-parts/destination-parent', null, ['object_id' => $object_id, 'object' => $object]);
}
?>

<?php get_footer(); ?>