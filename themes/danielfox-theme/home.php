<?php
/**
 * The main template file.
 *
 * @package Daniel_Fox_Theme
 */
get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        <?php if ( have_posts() ) : ?>
            <?php if ( is_home() && ! is_front_page() ) : ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
            <?php endif; ?>
            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
                
            
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
	                <header class="entry-header">
                            <!-- <span class="post-date"><?php danielfox_posted_on(); ?></span> -->
                            
                            <div class="blog-photo">
                                <div class="icon-container-desktop">    
                                    <i class="fa fa-comment-o" aria-hidden="true" alt="Comment logo"></i>
                                    <!-- <i class="fa fa-facebook" aria-hidden="true" alt="Facebook logo"></i>
                                    <i class="fa fa-twitter" aria-hidden="true" alt="Twitter logo"></i> -->
                                </div>
                                <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'large' ); ?>
                            </div>
                            <?php endif; ?>
                    </header><!-- .entry-header -->

                <div class="text-content">
                    
		                    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                            <?php if ( 'post' === get_post_type() ) : ?>
                            <span class="post-date-2"><?php danielfox_posted_on(); ?></span>
		                    <div class="entry-meta">
                                    <?php danielfox_entry_footer(); ?>
		                    </div><!-- .entry-meta -->
		                    <?php endif; ?>

	                <div class="entry-content">
                            <?php the_excerpt(); ?>
                            <div class="social-media-container" id="shareRoundIcons">adjflajdfljadlfjadf</div>
                            <span class="read-more"><a href="<?php echo esc_url( get_permalink() )?>">Read More</a></span>
                    </div><!-- .entry-content -->
                </div>
            </article><!-- #post-## -->

            <?php endwhile; ?>
            <div class="blog-nav"><?php posts_nav_link( ' ',
            '<i class="fa fa-chevron-left" aria-hidden="true"></i>Older Posts',
            'Newer Posts<i class="fa fa-chevron-right" aria-hidden="true"></i>'); ?></div>
        <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
        <?php endif; ?>
        <div class="subscribe-mobile-container">
            <?php dynamic_sidebar( 'subscribe-1' ); ?>
        </div>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_sidebar(); ?>