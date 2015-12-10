<?php
/**
 * @file      init_option.php
 * @date      12/6/2015
 * @time      6:16 AM
 * @author    Agiel K. Saputra <13nightevil@gmail.com>
 * @copyright Copyright (c) 2015 Agiel K. Saputra
 * @license   http://www.writesdown.com/license/
 */

return [
    [
        'option_name'  => 'sitetitle',
        'option_value' => 'WritesDown',
        'option_label' => 'Site Title',
        'option_group' => 'general',
    ],
    [
        'option_name'  => 'tagline',
        'option_value' => 'CMS Built with Yii Framework',
        'option_label' => 'Tagline',
        'option_group' => 'general',
    ],
    [
        'option_name'  => 'admin_email',
        'option_value' => 'superadmin@writesdown.com',
        'option_label' => 'E-mail Address',
        'option_group' => 'general',
    ],
    [
        'option_name'  => 'allow_signup',
        'option_value' => '0',
        'option_label' => 'Membership',
        'option_group' => 'general',
    ],
    [
        'option_name'  => 'default_role',
        'option_value' => 'subscriber',
        'option_label' => 'New User Default Role',
        'option_group' => 'general',
    ],
    [
        'option_name'  => 'time_zone',
        'option_value' => 'Asia/Jakarta',
        'option_label' => 'Timezone',
        'option_group' => 'general',
    ],
    [
        'option_name'  => 'date_format',
        'option_value' => 'F d, Y',
        'option_label' => 'Date Format',
        'option_group' => 'general',
    ],
    [
        'option_name'  => 'time_format',
        'option_value' => 'g:i:s a',
        'option_label' => 'Time Format',
        'option_group' => 'general',
    ],
    [
        'option_name'  => 'show_on_front',
        'option_value' => 'posts',
        'option_label' => 'Front page displays',
        'option_group' => 'reading',
    ],
    [
        'option_name'  => 'front_post_type',
        'option_value' => 'all',
        'option_label' => 'Post type on front page',
        'option_group' => 'reading',
    ],
    [
        'option_name'  => 'front_page',
        'option_value' => '',
        'option_label' => 'Front page',
        'option_group' => 'reading',
    ],
    [
        'option_name'  => 'posts_page',
        'option_value' => '',
        'option_label' => 'Posts page',
        'option_group' => 'reading',
    ],
    [
        'option_name'  => 'posts_per_page',
        'option_value' => '10',
        'option_label' => 'Posts Per Page',
        'option_group' => 'reading',
    ],
    [
        'option_name'  => 'posts_per_rss',
        'option_value' => '10',
        'option_label' => 'Posts Per RSS',
        'option_group' => 'reading',
    ],
    [
        'option_name'  => 'rss_use_excerpt',
        'option_value' => '0',
        'option_label' => 'For each article in a feed, show ',
        'option_group' => 'reading',
    ],
    [
        'option_name'  => 'disable_site_indexing',
        'option_value' => '0',
        'option_label' => 'Search Engine Visibility ',
        'option_group' => 'reading',
    ],
    [
        'option_name'  => 'default_comment_status',
        'option_value' => 'open',
        'option_label' => 'Default article settings',
        'option_group' => 'discussion',
    ],
    [
        'option_name'  => 'require_name_email',
        'option_value' => '1',
        'option_label' => 'Comment author must fill out name and e-mail ',
        'option_group' => 'discussion',
    ],
    [
        'option_name'  => 'comment_registration',
        'option_value' => '0',
        'option_label' => 'Users must be registered and logged in to comment ',
        'option_group' => 'discussion',
    ],
    [
        'option_name'  => 'close_comments_for_old_posts',
        'option_value' => '0',
        'option_label' => 'Automatically close comments on articles older',
        'option_group' => 'discussion',
    ],
    [
        'option_name'  => 'close_comments_days_old',
        'option_value' => '14',
        'option_label' => 'Days when the comments of the article is closed',
        'option_group' => 'discussion',
    ],
    [
        'option_name'  => 'thread_comments',
        'option_value' => '1',
        'option_label' => 'Enable threaded (nested) comments',
        'option_group' => 'discussion',
    ],
    [
        'option_name'  => 'page_comments',
        'option_value' => '5',
        'option_label' => 'Break comments into pages with',
        'option_group' => 'discussion',
    ],
    [
        'option_name'  => 'thread_comments_depth',
        'option_value' => '5',
        'option_label' => 'Thread Comments Depth',
        'option_group' => 'discussion',
    ],
    [
        'option_name'  => 'comments_per_page',
        'option_value' => '10',
        'option_label' => 'Top level comments per page',
        'option_group' => 'discussion',
    ],
    [
        'option_name'  => 'default_comments_page',
        'option_value' => 'newest',
        'option_label' => 'page displayed by default\nComments should be displayed with the',
        'option_group' => 'discussion',
    ],
    [
        'option_name'  => 'comments_notify',
        'option_value' => '1',
        'option_label' => 'Notify when anyone posts a comment',
        'option_group' => 'discussion',
    ],
    [
        'option_name'  => 'moderation_notify',
        'option_value' => '0',
        'option_label' => 'Notify when a comment is held for moderation',
        'option_group' => 'discussion',
    ],
    [
        'option_name'  => 'comment_moderation',
        'option_value' => '1',
        'option_label' => 'Comment must be manually approved',
        'option_group' => 'discussion',
    ],
    [
        'option_name'  => 'comment_whitelist',
        'option_value' => '0',
        'option_label' => 'Comment author must have a previously approved comment',
        'option_group' => 'discussion',
    ],
    [
        'option_name'  => 'show_avatars',
        'option_value' => '1',
        'option_label' => 'Show Avatars',
        'option_group' => 'discussion',
    ],
    [
        'option_name'  => 'avatar_rating',
        'option_value' => 'G',
        'option_label' => 'Maximum Rating',
        'option_group' => 'discussion',
    ],
    [
        'option_name'  => 'avatar_default',
        'option_value' => 'mystery',
        'option_label' => 'Default Avatar',
        'option_group' => 'discussion',
    ],
    [
        'option_name'  => 'comment_order',
        'option_value' => 'asc',
        'option_label' => 'comments at the top of each page',
        'option_group' => 'discussion',
    ],
    [
        'option_name'  => 'thumbnail_width',
        'option_value' => '150',
        'option_label' => 'Width',
        'option_group' => 'media',
    ],
    [
        'option_name'  => 'thumbnail_height',
        'option_value' => '150',
        'option_label' => 'Height',
        'option_group' => 'media',
    ],
    [
        'option_name'  => 'thumbnail_crop',
        'option_value' => '1',
        'option_label' => 'Crop thumbnail to exact dimensions',
        'option_group' => 'media',
    ],
    [
        'option_name'  => 'medium_width',
        'option_value' => '300',
        'option_label' => 'Max Width',
        'option_group' => 'media',
    ],
    [
        'option_name'  => 'medium_height',
        'option_value' => '300',
        'option_label' => 'Max Height',
        'option_group' => 'media',
    ],
    [
        'option_name'  => 'large_width',
        'option_value' => '1024',
        'option_label' => 'Max Width',
        'option_group' => 'media',
    ],
    [
        'option_name'  => 'large_height',
        'option_value' => '1024',
        'option_label' => 'Max Height',
        'option_group' => 'media',
    ],
    [
        'option_name'  => 'uploads_yearmonth_based',
        'option_value' => '1',
        'option_label' => 'Organize my uploads into month- and year-based folders',
        'option_group' => 'media',
    ],
    [
        'option_name'  => 'uploads_username_based',
        'option_value' => '0',
        'option_label' => 'Organize my uploads into username-based folders',
        'option_group' => 'media',
    ],
    [
        'option_name'  => 'theme',
        'option_value' => 'default',
        'option_label' => 'Theme',
        'option_group' => '',
    ],
];