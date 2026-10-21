<?php
/**
 * Viral Son Comments Template
 *
 * @package ViralSon
 */

if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area" style="margin-top: 48px; padding-top: 32px; border-top: 2px solid var(--border-color);">
    <?php if (have_comments()) : ?>
        <h3 class="comments-title" style="font-size: 1.4rem; font-weight: 800; color: var(--text-dark); margin-bottom: 24px;">
            <?php
            $viralson_comment_count = get_comments_number();
            if ('1' === $viralson_comment_count) {
                printf(esc_html__('1 Reader Comment on &ldquo;%1$s&rdquo;', 'viralson'), '<span>' . wp_kses_post(get_the_title()) . '</span>');
            } else {
                printf(
                    esc_html(_nx('%1$s Reader Comment', '%1$s Reader Comments', $viralson_comment_count, 'comments title', 'viralson')),
                    number_format_i18n($viralson_comment_count)
                );
            }
            ?>
        </h3>

        <ol class="comment-list" style="list-style: none; padding: 0; margin-bottom: 36px;">
            <?php
            wp_list_comments(array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 48,
            ));
            ?>
        </ol>

        <?php the_comments_navigation(); ?>
    <?php endif; ?>

    <?php if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
        <p class="no-comments" style="color: var(--text-light); font-style: italic;"><?php esc_html_e('Discussion on this piece is now closed.', 'viralson'); ?></p>
    <?php endif; ?>

    <?php
    comment_form(array(
        'class_form'           => 'comment-form',
        'title_reply'          => __('Join the Discussion', 'viralson'),
        'title_reply_to'       => __('Leave a Reply to %s', 'viralson'),
        'cancel_reply_link'    => __('Cancel reply', 'viralson'),
        'label_submit'         => __('Post Comment', 'viralson'),
        'class_submit'         => 'btn',
        'submit_button'        => '<button type="submit" name="%1$s" id="%2$s" class="%3$s">%4$s</button>',
        'comment_field'        => '<p class="comment-form-comment" style="margin-bottom: 16px;"><label for="comment" style="display: block; font-weight: 600; margin-bottom: 6px;">' . _x('Your Comment', 'noun', 'viralson') . '</label><textarea id="comment" name="comment" cols="45" rows="5" required style="width: 100%; padding: 12px; border: 1px solid var(--border-color); border-radius: var(--radius-sm); background: var(--input-bg); color: var(--text-dark); font-size: 0.95rem;"></textarea></p>',
    ));
    ?>
</div>
