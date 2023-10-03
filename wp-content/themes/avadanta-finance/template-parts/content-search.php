<div class="col-lg-6 col-md-6">
<div class="post post-full avadanta-agency" id="post-<?php the_ID(); ?>">
	<div class="post-thumb">
		<?php if(has_post_thumbnail()) : ?>
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail(); ?>
		</a>
		 <?php endif; ?>
	</div>
	<div class="post-entry d-sm-flex d-block align-items-start avadanta-post-agncy">
		
		<div class="post-content">
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<div class="post-author d-flex align-items-center">
				
				<div class="author-name">
					<?php avadanta_posted_by(); ?>
				</div>
				<div class="post-tag d-flex comment">
				<?php avadanta_get_comments_numbers(); ?>
				</div>
				<div class="post-tag d-flex date">
				<?php avadanta_posted_on(); ?>
				</div>

			</div>
			
			<div class="content">
				<?php the_excerpt(); ?>
			</div>
			<div class="post-tag d-flex">
				<a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More','avadanta-finance'); ?>
				</a>
			</div>
		</div>
	</div>
</div><!-- .post -->
</div>