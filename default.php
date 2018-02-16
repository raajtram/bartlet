<?php

function bartlet_defaults() {
	return array (
  'boxes' => 
  array (
    'thesis_html_container' => 
    array (
      'thesis_html_container_1518647190' => 
      array (
        'html' => 'header',
        'id' => 'header',
        'class' => 'clearfix py-3 mb-5',
        '_name' => 'Header',
      ),
      'thesis_html_container_1518647195' => 
      array (
        'class' => 'container',
        '_admin' => 
        array (
          'open' => true,
        ),
        '_name' => 'Container',
      ),
      'thesis_html_container_1518647199' => 
      array (
        'class' => 'container',
        '_admin' => 
        array (
          'open' => true,
        ),
        '_name' => 'Container',
      ),
      'thesis_html_container_1518647241' => 
      array (
        'class' => 'row',
        '_admin' => 
        array (
          'open' => true,
        ),
        '_name' => 'Row',
      ),
      'thesis_html_container_1518647267' => 
      array (
        'class' => 'col-md-3',
        '_admin' => 
        array (
          'open' => true,
        ),
        '_name' => '3/12',
      ),
      'thesis_html_container_1518647269' => 
      array (
        'class' => 'col-md-9 align-self-center',
        '_admin' => 
        array (
          'open' => true,
        ),
        '_name' => '9/12',
      ),
      'thesis_html_container_1518647313' => 
      array (
        'html' => 'nav',
        'id' => 'nav-menu',
        'class' => 'nav-menu clearfix',
        '_admin' => 
        array (
          'open' => true,
        ),
        '_name' => 'Nav Container',
      ),
      'thesis_html_container_1518647405' => 
      array (
        'html' => 'section',
        'id' => 'main',
        'class' => 'clearfix',
        '_name' => 'Main Content',
      ),
      'thesis_html_container_1518647501' => 
      array (
        'id' => 'blog-byline',
        'class' => 'clearfix mb-3 small',
        '_admin' => 
        array (
          'open' => true,
        ),
        '_name' => 'Post: Byline',
      ),
      'thesis_html_container_1518647576' => 
      array (
        'id' => 'blog-nav',
        'class' => 'clearfix',
        '_name' => 'Blog Navigation',
      ),
      'thesis_html_container_1518647624' => 
      array (
        'html' => 'footer',
        'id' => 'footer',
        'class' => 'pt-5 clearfix',
        '_name' => 'Footer',
      ),
      'thesis_html_container_1518647626' => 
      array (
        'class' => 'container',
        '_admin' => 
        array (
          'open' => true,
        ),
        '_name' => 'Container',
      ),
      'thesis_html_container_1518647631' => 
      array (
        'class' => 'row',
        '_admin' => 
        array (
          'open' => true,
        ),
        '_name' => 'Row',
      ),
      'thesis_html_container_1518648538' => 
      array (
        'class' => 'row justify-content-center',
        '_admin' => 
        array (
          'open' => true,
        ),
        '_name' => 'Row (Centered)',
      ),
      'thesis_html_container_1518735737' => 
      array (
        'id' => 'archive-intro',
        'class' => 'clearfix pb-4 text-center',
        '_name' => 'Archive Intro',
      ),
    ),
    'thesis_wp_nav_menu' => 
    array (
      'thesis_wp_nav_menu_1518647363' => 
      array (
        '_name' => 'Nav Menu',
      ),
    ),
    'thesis_post_box' => 
    array (
      'thesis_post_box_1518647444' => 
      array (
        'html' => 'article',
        'wp' => 
        array (
          'auto' => true,
        ),
        'schema' => 'article',
        '_name' => 'Blog: Post Box',
      ),
      'thesis_post_box_1518647781' => 
      array (
        'html' => 'article',
        'wp' => 
        array (
          'auto' => true,
        ),
        'schema' => 'article',
        '_name' => 'Single: Post Box',
      ),
    ),
    'thesis_post_headline' => 
    array (
      'thesis_post_box_1518647444_thesis_post_headline' => 
      array (
        'html' => 'h2',
        'link' => 
        array (
          'on' => true,
        ),
        '_parent' => 'thesis_post_box_1518647444',
      ),
    ),
    'thesis_post_excerpt' => 
    array (
      'thesis_post_box_1518647444_thesis_post_excerpt' => 
      array (
        'read_more_show' => 
        array (
          'show' => true,
        ),
        '_parent' => 'thesis_post_box_1518647444',
      ),
    ),
    'thesis_wp_featured_image' => 
    array (
      'thesis_post_box_1518647444_thesis_wp_featured_image' => 
      array (
        'size' => 'large',
        'alignment' => 'center',
        '_parent' => 'thesis_post_box_1518647444',
      ),
      'thesis_post_box_1518647781_thesis_wp_featured_image' => 
      array (
        'size' => 'large',
        'alignment' => 'center',
        'link' => 
        array (
          'link' => false,
        ),
        '_parent' => 'thesis_post_box_1518647781',
      ),
    ),
    'thesis_wp_widgets' => 
    array (
      'thesis_wp_widgets_1518647687' => 
      array (
        'div_wrap' => 
        array (
          'show' => true,
        ),
        'div' => 'div',
        'div_class' => 'col-md-4 footer-widget mb-4 mb-md-0',
        '_name' => 'Footer: Col 1',
      ),
      'thesis_wp_widgets_1518647701' => 
      array (
        'div_wrap' => 
        array (
          'show' => true,
        ),
        'div' => 'div',
        'div_class' => 'col-md-4 footer-widget mb-4 mb-md-0',
        '_name' => 'Footer: Col 2',
      ),
      'thesis_wp_widgets_1518647719' => 
      array (
        'div_wrap' => 
        array (
          'show' => true,
        ),
        'div' => 'div',
        'div_class' => 'col-md-4 footer-widget',
        '_name' => 'Footer: Col 3',
      ),
    ),
    'thesis_comments' => 
    array (
      'thesis_comments_1518647857' => 
      array (
        '_name' => 'Comment List',
      ),
    ),
    'thesis_comment_form' => 
    array (
      'thesis_comment_form_1518647860' => 
      array (
        '_name' => 'Comment Form',
      ),
    ),
    'thesis_comment_avatar' => 
    array (
      'thesis_comments_1518647857_thesis_comment_avatar' => 
      array (
        'size' => '25',
        '_parent' => 'thesis_comments_1518647857',
      ),
    ),
    'thesis_comment_date' => 
    array (
      'thesis_comments_1518647857_thesis_comment_date' => 
      array (
        'format' => 'M j, Y, g:i a',
        '_parent' => 'thesis_comments_1518647857',
      ),
    ),
  ),
  'templates' => 
  array (
    'home' => 
    array (
      'boxes' => 
      array (
        'thesis_html_body' => 
        array (
          0 => 'thesis_html_container_1518647190',
          1 => 'thesis_html_container_1518647405',
          2 => 'thesis_html_container_1518647624',
        ),
        'thesis_html_container_1518647190' => 
        array (
          0 => 'thesis_html_container_1518647195',
        ),
        'thesis_html_container_1518647195' => 
        array (
          0 => 'thesis_html_container_1518647241',
        ),
        'thesis_html_container_1518647241' => 
        array (
          0 => 'thesis_html_container_1518647267',
          1 => 'thesis_html_container_1518647269',
        ),
        'thesis_html_container_1518647267' => 
        array (
          0 => 'thesis_site_title',
        ),
        'thesis_html_container_1518647269' => 
        array (
          0 => 'thesis_html_container_1518647313',
        ),
        'thesis_html_container_1518647313' => 
        array (
          0 => 'thesis_wp_nav_menu_1518647363',
        ),
        'thesis_html_container_1518647405' => 
        array (
          0 => 'thesis_html_container_1518647199',
        ),
        'thesis_html_container_1518647199' => 
        array (
          0 => 'thesis_wp_loop',
          1 => 'thesis_html_container_1518647576',
        ),
        'thesis_wp_loop' => 
        array (
          0 => 'thesis_post_box_1518647444',
        ),
        'thesis_post_box_1518647444' => 
        array (
          0 => 'thesis_post_box_1518647444_thesis_wp_featured_image',
          1 => 'thesis_post_box_1518647444_thesis_post_headline',
          2 => 'thesis_html_container_1518647501',
          3 => 'thesis_post_box_1518647444_thesis_post_excerpt',
        ),
        'thesis_html_container_1518647501' => 
        array (
          0 => 'thesis_post_box_1518647444_thesis_post_date',
        ),
        'thesis_html_container_1518647576' => 
        array (
          0 => 'thesis_previous_posts_link',
          1 => 'thesis_next_posts_link',
        ),
        'thesis_html_container_1518647624' => 
        array (
          0 => 'thesis_html_container_1518647626',
          1 => 'thesis_attribution',
        ),
        'thesis_html_container_1518647626' => 
        array (
          0 => 'thesis_html_container_1518647631',
        ),
        'thesis_html_container_1518647631' => 
        array (
          0 => 'thesis_wp_widgets_1518647687',
          1 => 'thesis_wp_widgets_1518647701',
          2 => 'thesis_wp_widgets_1518647719',
        ),
      ),
    ),
    'single' => 
    array (
      'boxes' => 
      array (
        'thesis_html_body' => 
        array (
          0 => 'thesis_html_container_1518647190',
          1 => 'thesis_html_container_1518647405',
          2 => 'thesis_html_container_1518647624',
        ),
        'thesis_html_container_1518647190' => 
        array (
          0 => 'thesis_html_container_1518647195',
        ),
        'thesis_html_container_1518647195' => 
        array (
          0 => 'thesis_html_container_1518647241',
        ),
        'thesis_html_container_1518647241' => 
        array (
          0 => 'thesis_html_container_1518647267',
          1 => 'thesis_html_container_1518647269',
        ),
        'thesis_html_container_1518647267' => 
        array (
          0 => 'thesis_site_title',
        ),
        'thesis_html_container_1518647269' => 
        array (
          0 => 'thesis_html_container_1518647313',
        ),
        'thesis_html_container_1518647313' => 
        array (
          0 => 'thesis_wp_nav_menu_1518647363',
        ),
        'thesis_html_container_1518647405' => 
        array (
          0 => 'thesis_html_container_1518647199',
        ),
        'thesis_html_container_1518647199' => 
        array (
          0 => 'thesis_wp_loop',
        ),
        'thesis_wp_loop' => 
        array (
          0 => 'thesis_post_box_1518647781',
        ),
        'thesis_post_box_1518647781' => 
        array (
          0 => 'thesis_post_box_1518647781_thesis_wp_featured_image',
          1 => 'thesis_post_box_1518647781_thesis_post_headline',
          2 => 'thesis_html_container_1518647501',
          3 => 'thesis_post_box_1518647781_thesis_post_content',
          4 => 'thesis_comments_intro',
          5 => 'thesis_comments_1518647857',
          6 => 'thesis_comment_form_1518647860',
        ),
        'thesis_html_container_1518647501' => 
        array (
          0 => 'thesis_post_box_1518647781_thesis_post_date',
        ),
        'thesis_comments_1518647857' => 
        array (
          0 => 'thesis_comments_1518647857_thesis_comment_avatar',
          1 => 'thesis_comments_1518647857_thesis_comment_author',
          2 => 'thesis_comments_1518647857_thesis_comment_date',
          3 => 'thesis_comments_1518647857_thesis_comment_text',
          4 => 'thesis_comments_1518647857_thesis_comment_reply',
        ),
        'thesis_comment_form_1518647860' => 
        array (
          0 => 'thesis_comment_form_1518647860_thesis_comment_form_title',
          1 => 'thesis_comment_form_1518647860_thesis_comment_form_cancel',
          2 => 'thesis_comment_form_1518647860_thesis_comment_form_name',
          3 => 'thesis_comment_form_1518647860_thesis_comment_form_email',
          4 => 'thesis_comment_form_1518647860_thesis_comment_form_url',
          5 => 'thesis_comment_form_1518647860_thesis_comment_form_comment',
          6 => 'thesis_comment_form_1518647860_thesis_comment_form_submit',
        ),
        'thesis_html_container_1518647624' => 
        array (
          0 => 'thesis_html_container_1518647626',
          1 => 'thesis_attribution',
        ),
        'thesis_html_container_1518647626' => 
        array (
          0 => 'thesis_html_container_1518647631',
        ),
        'thesis_html_container_1518647631' => 
        array (
          0 => 'thesis_wp_widgets_1518647687',
          1 => 'thesis_wp_widgets_1518647701',
          2 => 'thesis_wp_widgets_1518647719',
        ),
      ),
    ),
    'page' => 
    array (
      'boxes' => 
      array (
        'thesis_html_body' => 
        array (
          0 => 'thesis_html_container_1518647190',
          1 => 'thesis_html_container_1518647405',
          2 => 'thesis_html_container_1518647624',
        ),
        'thesis_html_container_1518647190' => 
        array (
          0 => 'thesis_html_container_1518647195',
        ),
        'thesis_html_container_1518647195' => 
        array (
          0 => 'thesis_html_container_1518647241',
        ),
        'thesis_html_container_1518647241' => 
        array (
          0 => 'thesis_html_container_1518647267',
          1 => 'thesis_html_container_1518647269',
        ),
        'thesis_html_container_1518647267' => 
        array (
          0 => 'thesis_site_title',
        ),
        'thesis_html_container_1518647269' => 
        array (
          0 => 'thesis_html_container_1518647313',
        ),
        'thesis_html_container_1518647313' => 
        array (
          0 => 'thesis_wp_nav_menu_1518647363',
        ),
        'thesis_html_container_1518647405' => 
        array (
          0 => 'thesis_html_container_1518647199',
        ),
        'thesis_html_container_1518647199' => 
        array (
          0 => 'thesis_wp_loop',
        ),
        'thesis_wp_loop' => 
        array (
          0 => 'thesis_post_box_1518647781',
        ),
        'thesis_post_box_1518647781' => 
        array (
          0 => 'thesis_post_box_1518647781_thesis_wp_featured_image',
          1 => 'thesis_post_box_1518647781_thesis_post_headline',
          2 => 'thesis_post_box_1518647781_thesis_post_content',
        ),
        'thesis_html_container_1518647624' => 
        array (
          0 => 'thesis_html_container_1518647626',
          1 => 'thesis_attribution',
        ),
        'thesis_html_container_1518647626' => 
        array (
          0 => 'thesis_html_container_1518647631',
        ),
        'thesis_html_container_1518647631' => 
        array (
          0 => 'thesis_wp_widgets_1518647687',
          1 => 'thesis_wp_widgets_1518647701',
          2 => 'thesis_wp_widgets_1518647719',
        ),
      ),
    ),
    'front' => 
    array (
      'boxes' => 
      array (
        'thesis_html_body' => 
        array (
          0 => 'thesis_html_container_1518647190',
          1 => 'thesis_html_container_1518647405',
          2 => 'thesis_html_container_1518647624',
        ),
        'thesis_html_container_1518647190' => 
        array (
          0 => 'thesis_html_container_1518647195',
        ),
        'thesis_html_container_1518647195' => 
        array (
          0 => 'thesis_html_container_1518647241',
        ),
        'thesis_html_container_1518647241' => 
        array (
          0 => 'thesis_html_container_1518647267',
          1 => 'thesis_html_container_1518647269',
        ),
        'thesis_html_container_1518647267' => 
        array (
          0 => 'thesis_site_title',
        ),
        'thesis_html_container_1518647269' => 
        array (
          0 => 'thesis_html_container_1518647313',
        ),
        'thesis_html_container_1518647313' => 
        array (
          0 => 'thesis_wp_nav_menu_1518647363',
        ),
        'thesis_html_container_1518647405' => 
        array (
          0 => 'thesis_html_container_1518647199',
        ),
        'thesis_html_container_1518647199' => 
        array (
          0 => 'thesis_wp_loop',
        ),
        'thesis_wp_loop' => 
        array (
          0 => 'thesis_post_box_1518647781',
        ),
        'thesis_post_box_1518647781' => 
        array (
          0 => 'thesis_post_box_1518647781_thesis_wp_featured_image',
          1 => 'thesis_post_box_1518647781_thesis_post_headline',
          2 => 'thesis_post_box_1518647781_thesis_post_content',
        ),
        'thesis_html_container_1518647624' => 
        array (
          0 => 'thesis_html_container_1518647626',
          1 => 'thesis_attribution',
        ),
        'thesis_html_container_1518647626' => 
        array (
          0 => 'thesis_html_container_1518647631',
        ),
        'thesis_html_container_1518647631' => 
        array (
          0 => 'thesis_wp_widgets_1518647687',
          1 => 'thesis_wp_widgets_1518647701',
          2 => 'thesis_wp_widgets_1518647719',
        ),
      ),
    ),
    'custom_1518648488' => 
    array (
      'title' => 'Full Width',
      'options' => 
      array (
        'thesis_html_body' => 
        array (
          'class' => 'template-full',
        ),
      ),
      'boxes' => 
      array (
        'thesis_html_body' => 
        array (
          0 => 'thesis_html_container_1518647190',
          1 => 'thesis_html_container_1518647405',
          2 => 'thesis_html_container_1518647624',
        ),
        'thesis_html_container_1518647190' => 
        array (
          0 => 'thesis_html_container_1518647195',
        ),
        'thesis_html_container_1518647195' => 
        array (
          0 => 'thesis_html_container_1518647241',
        ),
        'thesis_html_container_1518647241' => 
        array (
          0 => 'thesis_html_container_1518647267',
          1 => 'thesis_html_container_1518647269',
        ),
        'thesis_html_container_1518647267' => 
        array (
          0 => 'thesis_site_title',
        ),
        'thesis_html_container_1518647269' => 
        array (
          0 => 'thesis_html_container_1518647313',
        ),
        'thesis_html_container_1518647313' => 
        array (
          0 => 'thesis_wp_nav_menu_1518647363',
        ),
        'thesis_html_container_1518647405' => 
        array (
          0 => 'thesis_html_container_1518647199',
        ),
        'thesis_html_container_1518647199' => 
        array (
          0 => 'thesis_wp_loop',
        ),
        'thesis_wp_loop' => 
        array (
          0 => 'thesis_post_box_1518647781',
        ),
        'thesis_post_box_1518647781' => 
        array (
          0 => 'thesis_post_box_1518647781_thesis_wp_featured_image',
          1 => 'thesis_post_box_1518647781_thesis_post_headline',
          2 => 'thesis_post_box_1518647781_thesis_post_content',
        ),
        'thesis_html_container_1518647624' => 
        array (
          0 => 'thesis_html_container_1518647626',
          1 => 'thesis_attribution',
        ),
        'thesis_html_container_1518647626' => 
        array (
          0 => 'thesis_html_container_1518647631',
        ),
        'thesis_html_container_1518647631' => 
        array (
          0 => 'thesis_wp_widgets_1518647687',
          1 => 'thesis_wp_widgets_1518647701',
          2 => 'thesis_wp_widgets_1518647719',
        ),
      ),
    ),
    'custom_1518648511' => 
    array (
      'title' => 'Landing Page',
      'options' => 
      array (
        'thesis_html_body' => 
        array (
          'class' => 'template-landing',
        ),
      ),
      'boxes' => 
      array (
        'thesis_html_body' => 
        array (
          0 => 'thesis_html_container_1518647190',
          1 => 'thesis_html_container_1518647405',
          2 => 'thesis_html_container_1518647624',
        ),
        'thesis_html_container_1518647190' => 
        array (
          0 => 'thesis_html_container_1518647195',
        ),
        'thesis_html_container_1518647195' => 
        array (
          0 => 'thesis_html_container_1518648538',
        ),
        'thesis_html_container_1518648538' => 
        array (
          0 => 'thesis_html_container_1518647267',
        ),
        'thesis_html_container_1518647267' => 
        array (
          0 => 'thesis_site_title',
        ),
        'thesis_html_container_1518647405' => 
        array (
          0 => 'thesis_html_container_1518647199',
        ),
        'thesis_html_container_1518647199' => 
        array (
          0 => 'thesis_wp_loop',
        ),
        'thesis_wp_loop' => 
        array (
          0 => 'thesis_post_box_1518647781',
        ),
        'thesis_post_box_1518647781' => 
        array (
          0 => 'thesis_post_box_1518647781_thesis_wp_featured_image',
          1 => 'thesis_post_box_1518647781_thesis_post_headline',
          2 => 'thesis_post_box_1518647781_thesis_post_content',
        ),
        'thesis_html_container_1518647624' => 
        array (
          0 => 'thesis_html_container_1518647626',
          1 => 'thesis_attribution',
        ),
        'thesis_html_container_1518647626' => 
        array (
          0 => 'thesis_html_container_1518647631',
        ),
        'thesis_html_container_1518647631' => 
        array (
          0 => 'thesis_wp_widgets_1518647687',
          1 => 'thesis_wp_widgets_1518647701',
          2 => 'thesis_wp_widgets_1518647719',
        ),
      ),
    ),
    'archive' => 
    array (
      'options' => 
      array (
        'thesis_html_body' => 
        array (
          'class' => 'template-archives',
        ),
      ),
      'boxes' => 
      array (
        'thesis_html_body' => 
        array (
          0 => 'thesis_html_container_1518647190',
          1 => 'thesis_html_container_1518647405',
          2 => 'thesis_html_container_1518647624',
        ),
        'thesis_html_container_1518647190' => 
        array (
          0 => 'thesis_html_container_1518647195',
        ),
        'thesis_html_container_1518647195' => 
        array (
          0 => 'thesis_html_container_1518647241',
        ),
        'thesis_html_container_1518647241' => 
        array (
          0 => 'thesis_html_container_1518647267',
          1 => 'thesis_html_container_1518647269',
        ),
        'thesis_html_container_1518647267' => 
        array (
          0 => 'thesis_site_title',
        ),
        'thesis_html_container_1518647269' => 
        array (
          0 => 'thesis_html_container_1518647313',
        ),
        'thesis_html_container_1518647313' => 
        array (
          0 => 'thesis_wp_nav_menu_1518647363',
        ),
        'thesis_html_container_1518647405' => 
        array (
          0 => 'thesis_html_container_1518647199',
        ),
        'thesis_html_container_1518647199' => 
        array (
          0 => 'thesis_html_container_1518735737',
          1 => 'thesis_wp_loop',
          2 => 'thesis_html_container_1518647576',
        ),
        'thesis_html_container_1518735737' => 
        array (
          0 => 'thesis_archive_title',
          1 => 'thesis_archive_content',
        ),
        'thesis_wp_loop' => 
        array (
          0 => 'thesis_post_box_1518647444',
        ),
        'thesis_post_box_1518647444' => 
        array (
          0 => 'thesis_post_box_1518647444_thesis_wp_featured_image',
          1 => 'thesis_post_box_1518647444_thesis_post_headline',
          2 => 'thesis_html_container_1518647501',
          3 => 'thesis_post_box_1518647444_thesis_post_excerpt',
        ),
        'thesis_html_container_1518647501' => 
        array (
          0 => 'thesis_post_box_1518647444_thesis_post_date',
        ),
        'thesis_html_container_1518647576' => 
        array (
          0 => 'thesis_previous_posts_link',
          1 => 'thesis_next_posts_link',
        ),
        'thesis_html_container_1518647624' => 
        array (
          0 => 'thesis_html_container_1518647626',
          1 => 'thesis_attribution',
        ),
        'thesis_html_container_1518647626' => 
        array (
          0 => 'thesis_html_container_1518647631',
        ),
        'thesis_html_container_1518647631' => 
        array (
          0 => 'thesis_wp_widgets_1518647687',
          1 => 'thesis_wp_widgets_1518647701',
          2 => 'thesis_wp_widgets_1518647719',
        ),
      ),
    ),
  ),
  'css' => '/*---:[ Prerequisites ]:---*/

html {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

*, *:before, *:after {
  -webkit-box-sizing: inherit;
  -moz-box-sizing: inherit;
  box-sizing: inherit;
}

/*---:[ Container Set-up ]:---*/

.container {
  max-width: $w_container;
}

.template-home #main .container, .template-single #main .container, .template-page #main .container, .template-landing #main .container, .template-archives #main .container {
  max-width: 768px;
  background: #FFFFFF;
}


/*---:[ Global Styles ]:---*/

body {
  background-color: $col_bg;
  font-family: $f_body;
  font-size: $s_body;
  line-height: 1.618;
  color: $col_primary;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

body a {
  color: $col_links;
}

body a:hover {
  color: $col_links_dark;
}

.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
  font-family: $f_headlines;
}


/*---:[ Header ]:---*/

#header {
  background: #FFFFFF;
}

#header img#thesis_logo_image {
  margin: 0 auto;
}

#header #site_title {
  text-align: center;
  margin: 0;
  margin-bottom: 0.75rem;
  font-family: $f_headlines;
  font-size: 2rem;
}

#header #site_title a {
  font-family: $f_headlines;
  font-size: 2rem;
}

#header #site_title a:hover {
  color: $col_links_dark;
  text-decoration: none;
}

@media (min-width: 768px) {
  #header #site_title {
    font-size: 2rem;
    padding: 0;
    text-align: left;
    margin-bottom: 0;
  }
}


/*---:[ Responsive Navigation Menu ]:---*/

@media (max-width: 768px) {
  .js #nav-menu {
    clip: rect(0 0 0 0);
    max-height: 0;
    position: absolute;
    display: block;
    overflow: hidden;
    zoom: 1;
  }
  #nav-menu.opened {
    max-height: 9999px;
  }
  .nav-toggle {
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;
  }
  .nav-toggle {
    margin: 0 auto;
    font-size: 1.05rem;
    display: table;
    color: $col_primary;
    text-decoration: none;
    padding: 0 0;
  }
  .nav-toggle:hover {
    color: $col_primary;
    text-decoration: none;
  }
  #header svg {
    height: 1.25rem;
    width: 1.25rem;
    color: $col_primary;
    vertical-align: -.25rem;
    line-height: 1.25;
  }
  #header .menu li {
    display: block;
  }
  #header .menu ul {
    margin-left: 1rem;
  }
  #header .menu a {
    padding: 0.5rem 0;
    display: block;
    border-bottom: 1px solid #f1f1f1;
  }
}

@media (min-width: 768px) {
  .js #nav-menu {
    position: relative;
  }
  .js #nav-menu.closed {
    max-height: none;
  }
  .nav-toggle {
    display: none;
  }
}

@media (min-width: 768px) {
  #header .menu {
    position: relative;
    list-style: none;
    z-index: 50;
    float: right;
    margin-top: 0;
    margin-bottom: 0;
  }
  #header .menu li {
    position: relative;
    float: left;
  }
  #header .menu ul {
    position: absolute;
    visibility: hidden;
    list-style: none;
    z-index: 110;
    background: #f1f1f1;
    padding: 0.5rem;
  }
  #header .menu ul li {
    clear: both;
  }
  #header .menu a {
    display: block;
  }
  #header .menu ul ul {
    position: absolute;
    top: 0;
  }
  #header .menu li:hover ul, #header .menu a:hover ul, #header .menu :hover ul :hover ul, #header .menu :hover ul :hover ul :hover ul {
    visibility: visible;
  }
  #header .menu :hover ul ul, #header .menu :hover ul :hover ul ul {
    visibility: hidden;
  }
  #header .menu ul, #header .menu ul li {
    width: 150px;
  }
  #header .menu ul ul, #header .menu :hover ul :hover ul {
    left: 150px;
  }
  #header .menu a {
    color: $col_primary;
    padding: 0.25rem 1rem;
    border: 0;
  }
  #header .menu a:hover {
    color: $col_links;
  }
  #header .menu ul a {
    width: auto;
  }
}


/*---:[ Skin Button(s) ]:---*/

.jb-btn-primary {
  background: $col_links;
  color: #FFFFFF;
}

.jb-btn-primary:hover {
  color: #FFFFFF;
  background: $col_links_dark;
}


/*---:[ Blockquotes ]:---*/

blockquote {
  background-image: url(images/left-quotes.png);
  background-size: 64px;
  background-position: top left;
  background-repeat: no-repeat;
  padding-top: 2rem;
}


/*---:[ Box: Cols ]:---*/

#jb-cols .col-md {
  background: #ffffff;
  padding: 2rem 1rem;
  text-align: center;
}

#jb-cols .col-md.has_img {
  margin-top: 3rem;
}

#jb-cols .col-md:first-child.has_img {
  margin-top: 0;
}

@media (min-width: 768px) {
  #jb-cols .col-md.has_img {
    margin-top: 0;
  }
}

#jb-cols .col-md:not(:first-child) {
  border-left: 1px solid #eeeeee;
}


/*---:[ CTA ]:---*/

#jb-cta {
  background: #FFFFFF;
}


/*---:[ Post Box ]:---*/

.post_box {
  background: #FFFFFF;
  padding: 1.5rem 0;
  border-bottom: 1px solid #F1F1F1;
}

.template-front .post_box {
  padding: 1.5rem;
}

@media (min-width: 768px) {
  .post_box {
    padding: 3rem;
    margin-bottom: 3rem;
    border: 0;
  }
  .template-home #main .container, .template-single #main .container, .template-page #main .container, .template-landing #main .container, .template-archives #main .container {
    background: transparent;
  }
  .post_box:last-of-type {
    margin-bottom: 0;
    border: 0;
  }
  .template-front .post_box {
    padding: 3rem;
  }
}

.post_box .post_excerpt .excerpt_read_more {
  display: block;
  margin-bottom: 0;
  margin-top: 1rem;
}

.post_box .post_excerpt p {
  margin-bottom: 0;
}

.post_box .wp-post-image {
  margin-bottom: 2rem;
}

.post_box #blog-byline {
  opacity: .6;
}

.post_box .headline a {
  color: $col_primary;
}

.post_box .headline a:hover {
  color: $col_links;
  text-decoration: none;
}

.post_box p:last-of-type {
  margin-bottom: 0;
}


/*---:[ Post Styles ]:---*/

.template-front .post_box .headline, .template-page .post_box .headline {
  margin-bottom: 1.5rem;
}

.post_box .post_content h2, .post_box .post_content h3, .post_box .post_content h4 {
  margin-top: 1.5rem;
  margin-bottom: 1rem;
}

.post_box p, .post_box ul, .post_box ol, .post_box blockquote, .post_box pre, .post_box dl, .post_box dd {
  margin-bottom: 1.5rem;
}

.post_box ul, .post_box ol {
  margin-left: 1rem;
}

.post_box ul ul, .post_box ul ol, .post_box ol ul, .post_box ol ol {
  margin-left: 26px;
}

.post_box ul ul, .post_box ul ol, .post_box ol ul, .post_box ol ol, .wp-caption p {
  margin-bottom: 0;
}

.wp-caption-text {
  text-align: center;
  opacity: .65;
  font-size: 0.85rem;
  line-height: 1.618rem;
}

.post_box .left, .post_box .alignleft, .post_box .ad_left {
  margin-bottom: 1.5rem;
  margin-right: 1rem;
}

.post_box .right, .post_box .alignright, .post_box .ad {
  margin-bottom: 1.5rem;
  margin-left: 1rem;
}

.post_box .center, .post_box .aligncenter {
  margin-bottom: 1.5rem;
}

.post_box .block, .post_box .alignnone {
  margin-bottom: 1.5rem;
}

.post_box .stack {
  margin-left: 1.5rem;
}


/*---:[ Comments ]:---*/

.post_box .comment_list {
  margin-left: 0;
}

.comment .avatar {
  float: left;
  margin-right: 0.25rem;
}

.comment .comment_author {
  font-weight: bold;
  font-size: 1.25rem;
  line-height: 1.25;
}

.comment .comment_author a {
  color: $col_primary;
}

.comment .comment_author a:hover {
  color: $col_links;
  text-decoration: none;
}

.comment .comment_date {
  display: block;
  font-size: 0.75rem;
  color: #888;
  line-height: 1.75rem;
}

.comment .comment_text {
  display: block;
  clear: both;
  padding: 1rem;
  position: relative;
  background: #f1f1f1;
}

.comment.bypostauthor {
  border-left: 1px solid $col_links;
  padding-left: 1.5rem;
}

.comment .comment_text p:last-of-type {
  margin-bottom: 0;
}

.comment:hover .comment-reply-link {
  visibility: visible;
  position: static;
}

a.comment-reply-link {
  position: absolute;
  right: 0;
  top: 0;
  visibility: hidden;
  float: right;
  font-size: 0.8rem;
  line-height: 21px;
}

.children .comment {
  list-style-type: none;
  margin-left: 2rem;
}

.comment {
  list-style: none;
  margin: 2rem 0;
}

#commentform .comment_form_title {
  font-size: 1.5rem;
}

.post_box .comment_list {
  border-top: 1px solid #f1f1f1;
}

.comments_intro {
  margin: 2rem 0;
  font-size: 1.25rem;
}


/*---:[ Blog Nav ]:---*/

#blog-nav {
  padding: 1rem 0rem;
  font-size: 0.9rem;
  opacity: .8;
}

#blog-nav a {
  color: $col_primary;
}

#blog-nav p {
  margin: 0;
}

#blog-nav .previous_posts {
  float: left;
}

#blog-nav .next_posts {
  float: right;
}


/*---:[ Footer ]:---*/

#footer .widget .widget_title {
  font-size: 1.5rem;
}

#footer .widget ul {
  margin-left: 1rem;
}

#footer .attribution {
  font-size: 0.8rem;
  background: #ddd;
  padding: 1rem;
  margin-top: 2rem;
  text-align: center;
  margin-bottom: 0;
}

#footer .attribution a {
  color: $col_primary;
  text-decoration: underline;
}

#footer .attribution a:hover {
  text-decoration: none;
}


/*---:[ Input Styles ]:---*/

input[type=email], input[type=number], input[type=password], input[type=tel], input[type=text], input[type=url], textarea {
  display: block;
  width: 100%;
  padding: .375rem .75rem;
  line-height: 1.5;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: .25rem;
  outline: none;
}

input[type=submit] {
  display: inline-block;
  font-weight: 400;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  border: 1px solid transparent;
  padding: .375rem .75rem;
  font-size: $s_body;
  border-radius: .25rem;
  transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
  background: $col_links;
  color: #FFFFFF;
}

input[type=submit]:hover {
  color: #FFFFFF;
  background: $col_links_dark;
}


/*---:[ Archives ]:---*/

#archive-intro .archive_title {
  font-size: 2.0rem;
}


/*---:[ Contact Form 7 Styles ]:---*/

.wpcf7 label {
  display: block;
}

.wpcf7 label span {
  margin-top: 0.5rem;
  display: block;
}',
  'vars' => 
  array (
    'var_1518648065' => 
    array (
      'name' => 'Color: Background',
      'ref' => 'col_bg',
      'css' => '#F5F5F3',
    ),
    'var_1518648074' => 
    array (
      'name' => 'Color: Links',
      'ref' => 'col_links',
      'css' => '#0060DD',
    ),
    'var_1518648081' => 
    array (
      'name' => 'Color: Links (Dark)',
      'ref' => 'col_links_dark',
      'css' => '#0056C7',
    ),
    'var_1518648087' => 
    array (
      'name' => 'Color: Body',
      'ref' => 'col_primary',
      'css' => '#111111',
    ),
    'var_1518648094' => 
    array (
      'name' => 'Font: Body',
      'ref' => 'f_body',
      'css' => '-apple-system, BlinkMacSystemFont,"Segoe UI", "Roboto", "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"',
    ),
    'var_1518648101' => 
    array (
      'name' => 'Font: Headlines',
      'ref' => 'f_headlines',
      'css' => '-apple-system, BlinkMacSystemFont,"Segoe UI", "Roboto", "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"',
    ),
    'var_1518648109' => 
    array (
      'name' => 'Size: Body',
      'ref' => 's_body',
      'css' => '1rem',
    ),
    'var_1518648137' => 
    array (
      'name' => 'Width: Container',
      'ref' => 'w_container',
      'css' => '1140px',
    ),
  ),
);
}
