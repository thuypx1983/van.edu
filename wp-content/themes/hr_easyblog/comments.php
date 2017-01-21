<?php
	
// Do not delete these lines

if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Please do not load this page directly. Thanks!');

if ( post_password_required() ) { ?>
	<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.', 'hiresponsive') ?></p>

<?php return; } ?>

<?php $comments_by_type = &separate_comments($comments); ?>    

<!-- You can start editing here. -->

<div id="comments">

<?php if ( have_comments() ) : ?>

	<?php if ( ! empty($comments_by_type['comment']) ) : ?>

		<h3><?php comments_number(__('No Responses', 'hiresponsive'), __('One Response', 'hiresponsive'), __('% Responses', 'hiresponsive') );?> <?php _e('to', 'hiresponsive') ?> &#8220;<?php the_title(); ?>&#8221;</h3>

		<ol class="commentlist">
	
			<?php wp_list_comments('avatar_size=35&callback=custom_comment&type=comment'); ?>
		
		</ol>    

		<div class="navigation">
			<div class="fl"><?php previous_comments_link() ?></div>
			<div class="fr"><?php next_comments_link() ?></div>
			<div class="fix"></div>
		</div><!-- /.navigation -->
	<?php endif; ?>
		    
	<?php if ( ! empty($comments_by_type['pings']) ) : ?>
    		
        <h3 id="pings"><?php _e('Trackbacks/Pingbacks', 'hiresponsive') ?></h3>
    
        <ol class="pinglist">
            <?php wp_list_comments('type=pings&callback=list_pings'); ?>
        </ol>
    	
	<?php endif; ?>
    	
<?php else : // this is displayed if there are no comments so far ?>

		<?php if ('open' == $post->comment_status) : ?>
			<!-- If comments are open, but there are no comments. -->
			<p class="nocomments"><?php _e('No comments yet.', 'hiresponsive') ?></p>

		<?php else : // comments are closed ?>
			<!-- If comments are closed. -->
			<p class="nocomments"><?php _e('Comments are closed.', 'hiresponsive') ?></p>

		<?php endif; ?>

<?php endif; ?>

</div><!-- /#comments_wrap -->

<?php if ('open' == $post->comment_status) : ?>

<?php if ( get_option('comment_registration') && !$user_ID ) : //If registration required & not logged in. ?>

		<p><?php _e('You must be', 'hiresponsive') ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"><?php _e('logged in', 'hiresponsive') ?></a> <?php _e('to post a comment.', 'hiresponsive') ?></p>

	<?php else : //No registration required ?>
	
<?php 
$args = array(
		'fields' => apply_filters(
				'comment_form_default_fields', array(
						'author' =>'<div class="row"><div class="col-lg-4 col-md-4"><p class="comment-form-author">' . '<input id="author" placeholder="Your Name (No Keywords)" name="author" type="text" value="' .
						esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'.
						'</p></div>'
						,
						'email'  => '<div class="col-lg-4 col-md-4"><p class="comment-form-email">' . '<input id="email" placeholder="email@domain.com" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
						'" size="30"' . $aria_req . ' />'  .
						
						'</p></div>',
						'url'    => '<div class="col-lg-4 col-md-4"><p class="comment-form-url">' .
						'<input id="url" name="url" placeholder="http://your-site-name.com" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /> ' .
						'</p></div></div>'
				)
		),
		'comment_field' => '<p class="comment-form-comment">' .
		'<textarea id="comment" name="comment" placeholder="Express your thoughts, idea or write a feedback by clicking here & start an awesome comment" cols="45" rows="8" aria-required="true"></textarea>' .
		'</p>',
		'comment_notes_after' => '',
		'title_reply' => 'Please Post Your Comments & Reviews'
);
?>
	
<?php comment_form($args, $post->ID); ?>

	<?php endif; // If registration required ?>
	

	<div class="fix"></div>

<!-- /#respond -->

<?php endif; // if you delete this the sky will fall on your head ?>
