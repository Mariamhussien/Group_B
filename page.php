<?php get_header(); ?>
<div class="container">
<div class="row">
  <?php
  foreach(get_list_category() as $childcat) :
$parentcat = $childcat->category_parent;
if (cat_is_ancestor_of(5, $childcat)) :
echo get_cat_name($parentcat);
?>
    <div class="col-md-2">
    <div class="thumbnail">
       <a href="<?php the_permalink()?>"> <?php  the_post_thumbnail('thumbnail',array( 'class' => 'img-circle' )); ?></a>
        <div class="caption">
          <h3><?php the_title() ?></h3>
        </div>
      </div>
  </div>

<?php
endif;
endforeach;
?>

</div>

</div>
<?php get_footer();