<?php
/**
 *	Template Name: Gallery Page 
 * Template Name Posts: gallery
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>

<ul>
<?php
 $args = array(
   'post_type' => 'attachment',
   'numberposts' => -1,
   'post_status' => null,
   'post_parent' => $post->ID
  );

  $attachments = get_posts( $args );
     if ( $attachments ) {
      $attachments = array_reverse($attachments);
        foreach ( $attachments as $attachment ) {
           echo '<li>';
           echo wp_get_attachment_image( $attachment->ID, 'full' );
           echo '<div class="title">';
           echo apply_filters( 'the_title', $attachment->post_title );
           echo '</div><div id="caption">';
           echo get_post_field('post_excerpt', $attachment->ID);
           echo '</div></li>';
          }
     }

?>
</ul>