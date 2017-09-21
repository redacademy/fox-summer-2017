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
                            <div class="blog-mobile-caption">
                                <?php echo CFS()->get( 'blog_mobile_caption' ); ?>
                            </div>    
                            <span class="post-date"><?php danielfox_posted_on(); ?></span>
                            
                            <div class="blog-photo">
                                <div class="icon-container-desktop">    
                                    <a href="<?php echo esc_url( get_permalink() )?>#comments">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/commenticon.svg" class="comment-icon" alt="Comment icon" />
                                    </a>
                                    <div class="shareRoundIcons" 
                                        data-share-title="<?php echo get_the_title(); ?>" 
                                        data-share-link="<?php echo esc_url(get_the_permalink()); ?>">
                                    </div>
                                </div>
                                <?php if ( has_post_thumbnail() ) : ?>
                                <div class="blog-image" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>)">
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
                            <span class="read-more-mobile"><a href="<?php echo esc_url( get_permalink() )?>">Read More</a></span>
                        </div><!-- .entry-content -->
                    </div>
                </article><!-- #post-## -->

            <?php endwhile; ?>

            <div class="blog-nav"><?php posts_nav_link( ' ',
            '<span class="nav-newer">Newer Posts</span>',
            '<span class="nav-older">Older Posts</span>' ); ?></div>
            
        <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
        <?php endif; ?>
        <div class="subscribe-mobile-container">
            <?php dynamic_sidebar( 'subscribe-1' ); ?>
        </div>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>