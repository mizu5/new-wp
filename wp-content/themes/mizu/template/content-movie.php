<?php get_header(); ?>
<div id="main">
  <div id="content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="jb-post-single jb-format-quote">
        <h2>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
<?php 
echo get_post_format();
?>        
        <?php the_content(); ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>포스터</td>
<td>
<?php 

$image = get_field('poster');
$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
echo wp_get_attachment_image( $image['id'], $size );
?>
</td>
</tr>
<tr>
<td width="25%"><strong>제목:</strong></td>
<td width="75%"><?php the_field('title'); ?></td>
</tr>
<tr>
<td><strong>감독:</strong></td>
<td><?php the_field('director'); ?></td>
</tr>
<tr>
<td><strong>출연:</strong></td>
<td><?php the_field('actors'); ?></td>
</tr>
<tr>
<td><strong>평점:</strong></td>
<td><?php if( get_field('rating') ) {
$starNumber = get_field('rating');

for($x=1;$x<=$starNumber;$x++) {
	echo "<img class='starIcon' src='".get_bloginfo('template_directory')."/image/star.png' />";
}
if (strpos($starNumber,'.')) {
	echo "<img class='starIcon' src='".get_bloginfo('template_directory')."/image/half.png' />";
$x++;
}
while ($x<=5) {
	echo "<img class='starIcon' src='".get_bloginfo('template_directory')."/image/blank.png' />";
$x++;
}
echo '(';
the_field('rating');
echo ')';
}
?></td>
</tr>

<tr>
<td><strong>트레일러:</strong></td>
<td><?php if( get_field('youtubeurl') ){	
	$videourl = get_field('youtubeurl');
	$htmlcode = wp_oembed_get($videourl);
	echo $htmlcode;
} ?></td>
</tr>



</table>
        <?php comments_template(); ?> 
      </div>
    <?php endwhile; else: ?>
      <h2>Sorry!</h2>
    <?php endif; ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>