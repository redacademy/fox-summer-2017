<?php
/**
 * The template for displaying comments.
 *
 * @package Daniel_Fox_Theme
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php esc_html( comments_number( '0 Comments', '1 Comment', '% Comments' ) ); ?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html( 'Comment navigation' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html( 'Older Comments' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html( 'Newer Comments' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'callback' => 'danielfox_comment_list'
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html( 'Comment navigation' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html( 'Older Comments' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html( 'Newer Comments' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php endif; // Check for comment navigation. ?>

	<?php endif; // Check for have_comments(). ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php esc_html( 'Comments are closed.' ); ?></p>
	<?php endif; ?>

	<?php 
	
	$comment_author = 'What\'s your name?';
	$comment_email = 'What\'s your email?';
	$comment_website = 'What\'s your website?';
	$comment_area = 'Comment';
	
	comment_form( array(
		'title_reply'          => esc_html( 'Post a Comment' ),
		'comment_notes_before' => wp_kses( '<p class="comment-notes">Want to join the discussion? Feel free to contribute!</p>', array( 'p' => array( 'class' => '' ) ) ),
		'fields' => apply_filters( 'comment_form_default_fields', array(
			'author'	=> '<p class="comment-form-author"><input placeholder="'. $comment_author .'" id="author" name="author" type="text" value="" size="30" maxlength="245" aria-required="true" required="required"></p>',
			'email' => '<p class="comment-form-email"><input placeholder="'. $comment_email .'" id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" aria-required="true" required="required"></p>',
			'website' => '<p class="comment-form-url"><input placeholder="'. $comment_website .'" id="url" name="url" type="url" value="" size="30" maxlength="200"></p>')),
		'comment_field' =>  '<p class="comment-form-comment"><textarea placeholder="'. $comment_area .'" id="comment" name="comment" cols="45" rows="8" aria-required="true">' . '</textarea></p>',
		
		'comment_author'         => esc_html( 'Submit' ),
		'cancel_reply_link'    => esc_html( '[Cancel reply]' )
	) ); ?>

</div><!-- #comments -->
