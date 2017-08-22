<?php get_header();?>
	  <div id="main">
	    <div id="content">
<?php if(have_posts()):while(have_posts()):the_post();?>
<div class="jb-post-list">
	<h2>
		<a href="<?php the_permalink();?>"><?php the_title();?></a>
		<p>
		<?php echo get_the_date();?><?php echo get_the_time()?>|<?php the_category(',')?>
		</p>
		<?php 
			if(has_post_thumbnail()){
				the_post_thumbnail(array(100,100),array('class'=>'jb-thumbnail'));
			}
		?>
		<?php the_excerpt();?>
	</h2>
</div>	
<?php endwhile; else:?>
	<h2>Sorry!</h2>
<?php endif;?>

	    </div>
<?php get_sidebar();?>
	  </div>
<?php get_footer();?>