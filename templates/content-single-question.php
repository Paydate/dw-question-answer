<?php
/**
 * The template for displaying single questions
 *
 * @package DW Question & Answer
 * @since DW Question & Answer 1.4.0
 */
?>

<?php do_action( 'dwqa_before_single_question_content' ); ?>
<div class="dwqa-question-item">
	<div class="dwqa-question-vote">
		<span class="dwqa-vote-count">0</span>
		<a class="dwqa-vote dwqa-vote-up" href="#"><?php _e( 'Vote Up', 'dwqa' ); ?></a>
		<a class="dwqa-vote dwqa-vote-down" href="#"><?php _e( 'Vote Down', 'dwqa' ); ?></a>
	</div>
	<div class="dwqa-question-meta">
		<?php $user_id = get_post_field( 'post_author', get_the_ID() ) ? get_post_field( 'post_author', get_the_ID() ) : false ?>
		<?php printf( '<span><a href="%s">%s%s</a> %s</span>', dwqa_get_author_link( $user_id ), get_avatar( $user_id, 48 ), dwqa_get_author(), human_time_diff( get_post_time( 'U' ) ) ) ?>
		<span class="dwqa-question-actions"><?php dwqa_question_button_action() ?></span>
	</div>
	<div class="dwqa-question-content"><?php the_content(); ?></div>
	<footer class="dwqa-question-footer">
		<div class="dwqa-question-meta"><?php echo get_the_term_list( get_the_ID(), 'dwqa-question_tag', __( 'Question Tagged: ', 'dwqa' ) , ', ' ); ?></div>
	</footer>
	<?php comments_template(); ?>
</div>
<?php do_action( 'dwqa_after_single_question_content' ); ?>
