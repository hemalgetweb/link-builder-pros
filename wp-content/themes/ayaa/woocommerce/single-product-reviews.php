<?php

/**
 * Display single product reviews (comments)
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product-reviews.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.3.0
 */

defined('ABSPATH') || exit;

global $product;

if (!comments_open()) {
	return;
}

?>
<div id="reviews" class="product-review">
	<div class="review-overview pt-10">
		<div class="left">
			<h2><?php echo esc_html(ayaa_get_single_product_total_avarage_rating()); ?> <span>/<?php echo esc_html__('5', 'ayaa'); ?></span></h2>
			<?php
			if (ayaa_get_single_product_total_rating() > 0) :
			?>
				<p><?php echo esc_html(ayaa_get_single_product_total_rating()); ?> <?php echo esc_html__('Ratings', 'ayaa'); ?></p>
			<?php else : ?>
				<p><?php echo esc_html(ayaa_get_single_product_total_rating()); ?> <?php echo esc_html__('Rating', 'ayaa'); ?></p>
			<?php endif; ?>
		</div>
		<div class="right">
			<?php ayaa_get_product_star_review_list(); ?>
		</div>
	</div>
	<div id="comments" class="ayaa-shop-details-review-box pb-40">
		<div class="review-title">
			<h3>
				<?php
				$count = $product->get_review_count();
				if ($count && wc_review_ratings_enabled()) {
					/* translators: 1: reviews count 2: product name */
					$reviews_title = sprintf(esc_html(_n('%1$s review for %2$s', '%1$s reviews for %2$s', $count, 'ayaa')), esc_html($count), '<span>' . esc_html(get_the_title()) . '</span>');
					echo apply_filters('woocommerce_reviews_title', $reviews_title, $count, $product); // WPCS: XSS ok.
				} else {
					esc_html_e('Reviews', 'ayaa');
				}
				?>
			</h3>
		</div>
		<div class="review-wrap">
			<?php if (have_comments()) : ?>
				<?php wp_list_comments(apply_filters('woocommerce_product_review_list_args', array('callback' => 'woocommerce_comments'))); ?>

				<?php
				if (get_comment_pages_count() > 1 && get_option('page_comments')) :
					echo '<nav class="woocommerce-pagination pt-10">';
					paginate_comments_links(
						apply_filters(
							'woocommerce_comment_pagination_args',
							array(
								'prev_text' => is_rtl() ? '&rarr;' : '&larr;',
								'next_text' => is_rtl() ? '&larr;' : '&rarr;',
								'type'      => 'list',
							)
						)
					);
					echo '</nav>';
				endif;
				?>
			<?php else : ?>
				<p class="woocommerce-noreviews"><?php esc_html_e('There are no reviews yet.', 'ayaa'); ?></p>
			<?php endif; ?>
		</div>
	</div>

	<?php if (get_option('woocommerce_review_rating_verification_required') === 'no' || wc_customer_bought_product('', get_current_user_id(), $product->get_id())) : ?>
		<div id="review_form_wrapper">
			<div id="review_form" class="ayaa-contact-form">
				<?php
				$commenter    = wp_get_current_commenter();
				$comment_form = array(
					/* translators: %s is product title */
					'title_reply'         => have_comments() ? esc_html__('Add a review', 'ayaa') : sprintf(esc_html__('Be the first to review &ldquo;%s&rdquo;', 'ayaa'), get_the_title()),
					/* translators: %s is product title */
					'title_reply_to'      => esc_html__('Leave a Reply to %s', 'ayaa'),
					'title_reply_before'  => '<h4 id="reply-title" class="ayaa-shop-details-review-title-443 mb-20 comment-reply-title">',
					'title_reply_after'   => '</h4>',
					'comment_notes_after' => '',
					'label_submit'        => esc_html__('Submit Request', 'ayaa'),
					'logged_in_as'        => '',
					'comment_field'       => '',
				);

				$name_email_required = (bool) get_option('require_name_email', 1);
				$fields              = array(
					'author' => array(
						'label'    => __('Name', 'ayaa'),
						'type'     => 'text',
						'value'    => $commenter['comment_author'],
						'required' => $name_email_required,
					),
					'email'  => array(
						'label'    => __('Email', 'ayaa'),
						'type'     => 'email',
						'value'    => $commenter['comment_author_email'],
						'required' => $name_email_required,
					)
				);

				$comment_form['fields'] = array();

				foreach ($fields as $key => $field) {
					$field_html  = '<p class="comment-form-' . esc_attr($key) . '">';
					$field_html .= '<label for="' . esc_attr($key) . '">' . esc_html($field['label']);

					if ($field['required']) {
						$field_html .= '&nbsp;<span class="required">*</span>';
					}

					$field_html .= '</label><input id="' . esc_attr($key) . '" name="' . esc_attr($key) . '" type="' . esc_attr($field['type']) . '" value="' . esc_attr($field['value']) . '" size="30" ' . ($field['required'] ? 'required' : '') . ' /></p>';

					$comment_form['fields'][$key] = $field_html;
				}

				$account_page_url = wc_get_page_permalink('myaccount');
				if ($account_page_url) {
					/* translators: %s opening and closing link tags respectively */
					$comment_form['must_log_in'] = '<p class="must-log-in">' . sprintf(esc_html__('You must be %1$slogged in%2$s to post a review.', 'ayaa'), '<a href="' . esc_url($account_page_url) . '">', '</a>') . '</p>';
				}

				if (wc_review_ratings_enabled()) {
					$comment_form['comment_field'] = '<div class="comment-form-rating ayaa-review mb-22"><span>' . esc_html__('Your rating', 'ayaa') . (wc_review_ratings_required() ? '&nbsp;<span class="required">*</span>' : '') . '</span><div class="ayaa-fz-product-review-rating-border-box-wrap"><div class="ayaa-comment-form-rating-box-443"><select name="rating" id="rating" required>
					<option value="">' . esc_html__('Rate&hellip;', 'ayaa') . '</option>
					<option value="5">' . esc_html__('Perfect', 'ayaa') . '</option>
					<option value="4">' . esc_html__('Good', 'ayaa') . '</option>
					<option value="3">' . esc_html__('Average', 'ayaa') . '</option>
					<option value="2">' . esc_html__('Not that bad', 'ayaa') . '</option>
					<option value="1">' . esc_html__('Very poor', 'ayaa') . '</option>
				</select> <span class="ayaa-fz-product-rating-count-label-443">' . esc_html__('0 of 5', 'ayaa') . '</span></div></div></div>';
				}

				$comment_form['comment_field'] .= '<p class="comment-form-comment"><label for="comment">' . esc_html__('Your review', 'ayaa') . '&nbsp;<span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" required></textarea></p>';

				comment_form(apply_filters('woocommerce_product_review_comment_form_args', $comment_form));
				?>
			</div>
		</div>
	<?php else : ?>
		<p class="woocommerce-verification-required"><?php esc_html_e('Only logged in customers who have purchased this product may leave a review.', 'ayaa'); ?></p>
	<?php endif; ?>

	<div class="clear"></div>
</div>