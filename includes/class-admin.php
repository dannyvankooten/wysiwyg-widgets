<?php

class WYSIWYG_Widgets_Admin
{
    public function __construct()
    {
        add_action('add_meta_boxes', [$this, 'add_meta_box'], 20);
    }

    /**
     * Add meta box to "edit" screen
     */
    public function add_meta_box()
    {
        add_meta_box(
            'wysiwyg-widget-donate-box',
            __('More..', 'wysiwyg-widgets'),
            [ $this, 'meta_donate_box' ],
            'wysiwyg-widget',
            'side',
            'low'
        );
    }

    /**
     * Render the meta box on the "edit screen"
     *
     * @param \WP_Post $post
     */
    public function meta_donate_box($post)
    {
        ?>
            <div>
                <h3 style="margin-bottom:8px"><?php esc_html_e('How do I use this?', 'wysiwyg-widgets'); ?></h3>
                <p><?php printf(wp_kses(__('Show this widget block by going to your %1$swidgets page%2$s and then adding the <strong>Widget Blocks Widget</strong> to one of your widget areas.', 'wysiwyg-widgets'), ['strong' => []]), '<a href="' . esc_url(admin_url('widgets.php')) . '">', '</a>'); ?></p>
            </div>

            <div style="margin-top: 36px;">
                <h3 style="margin-bottom:8px"><?php esc_html_e('Help promote this plugin', 'wysiwyg-widgets'); ?></h3>
                <ul class="ul-square">
                    <li><a href="https://wordpress.org/support/plugin/wysiwyg-widgets/reviews/#new-post" target="_blank"><?php esc_html_e('Leave a &#9733;&#9733;&#9733;&#9733;&#9733; review on WordPress.org', 'wysiwyg-widgets'); ?></a></li>
                </ul>
            </div>

            <div style="margin-top: 36px;">
                <h3 style="margin-bottom:8px"><?php esc_html_e('Other plugins by ibericode', 'wysiwyg-widgets'); ?></h3>
                <ul class="ul-square">
                    <li>
                        <strong><a href="https://wordpress.org/plugins/mailchimp-for-wp/">Mailchimp for Wordpress</a></strong><br>
                        Sign-up methods for your Mailchimp newsletter audience.                      
                    </li>
                    <li>
                        <strong><a href="https://wordpress.org/plugins/koko-analytics/">Koko Analytics</a></strong><br>
                        Privacy-friendly and self-hosted analytics for WordPress sites.
                    </li>
                    <li>
                        <strong><a href="https://wordpress.org/plugins/boxzilla/">Boxzilla Pop-Ups</a></strong><br>
                        Easy and flexible pop-ups to show at just the right time.
                    </li>
                    <li>
                        <strong><a href="https://wordpress.org/plugins/mailchimp-top-bar/">Mailchimp Top Bar</a></strong><br>
                        Capture more leads with an unobtrusive Mailchimp notification bar.
                    </li>
                </ul>
            </div>

        <?php
    }
}
