<?php

/*

  Author: Raaj Trambadia (@raajtram)
  Docs: https://thesislove.com/skins/bartlet
  License: MIT - https://thesislove.com/mit-license/

  Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the “Software”), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

  The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

  THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

*/

class jb_hero extends thesis_box {

  protected function translate() {
	   $this->title = __('Bartlet: Hero', $this->_class);
   }

  protected function construct() {
    global $thesis;
  }

  public function html($args = array()) {
    global $thesis, $wp_query, $post, $wp;
    extract($args = is_array($args) ? $args : array());
    /* Box HTML output should be echoed here */
    $img_url      =   $this->class_options['image_url'];
    $headline     =   $this->class_options['headline'];
    $content      =   $this->class_options['content'];
    $site_title   =   get_bloginfo( 'name' );
    /* button */
    $btn_text     =   !empty($this->class_options['btn_text']) ? $this->class_options['btn_text'] : 'Button Text';
    $btn_url      =   !empty($this->class_options['btn_url']) ? $this->class_options['btn_url'] : '#';
    $btn_target   =   !empty($this->options['btn_target']) ? $this->options['btn_target'] : '_self';
    $btn_class    =   !empty($this->options['class']) ? $this->options['class'] : '';
    $btn_id       =   !empty($this->options['id']) ? $this->options['id'] : '';

      echo "<div id=\"jb-hero\" class=\"pb-5\">\n";
        echo "<div class=\"container\">\n";
        if(!empty($this->class_options['image_url']) && empty($this->class_options['headline']) && empty($this->class_options['content'])) {
          echo "<div class=\"row justify-content-center\">\n";
            echo "<div class=\"col-lg-6 text-center mb-4 mb-lg-0\">\n";
              echo "<img src=\"$img_url\" alt=\"$site_title\" title=\"$site_title\" class='mx-auto'>";
            echo "</div>";
          echo "</div>\n";
        }
        if( !empty($this->class_options['headline']) || !empty($this->class_options['content']) ) {
          echo "<div class=\"row\">\n";
            echo "<div class=\"col-lg-5 mb-4 mb-lg-0\">\n";
              echo "<img src=\"$img_url\" alt=\"$site_title\" title=\"$site_title\" class='mx-lg-0 mx-auto'>";
            echo "</div>";
            echo "<div class=\"col-lg-7 pl-lg-5 text-center text-lg-left align-self-center\">\n";
              echo "<h1 class=\"h2 mb-4\">$headline</h1>";
              echo "<p class=\"mb-4\">$content</p>";
              echo "<a id=\"$btn_id\" href=\"$btn_url\" class=\"btn btn-lg jb-btn jb-btn-primary $btn_class\" target=\"$btn_target\">$btn_text</a>";
            echo "</div>";
          echo "</div>\n";
        }
        echo "</div>\n";
      echo "</div>";

  }

  protected function class_options() {
    global $thesis;
    $html = $thesis->api->html_options();
    $media_page = admin_url( 'media-new.php' );
	   return array(
      'image_url' => array(
   			'type' => 'text',
         'width' => 'full',
         'description' => __('<a href="'.$media_page.'" target="_blank">Upload an image</a> and paste the Image URL here. Recommended size is 440x340px.', $this->_class),
   			'label' => __('Image URL', $this->_class)
      ),
  		'headline' => array(
  			'type' => 'text',
        'width' => 'full',
  			'label' => __('Headline', $this->_class)
      ),
      'content' => array(
  			'type' => 'textarea',
        'width' => 'full',
  			'label' => __('Content', $this->_class)
      ),
      'button' => array(
    		'type' => 'group',
    		'label' => __('Button', $this->_class),
    		'fields' => array_merge(array(
          'btn_text' => array(
      			'type' => 'text',
            'width' => 'medium',
      			'label' => __('Text', $this->_class)
          ),
          'btn_url' => array(
      			'type' => 'text',
            'width' => 'medium',
      			'label' => __('URL', $this->_class)
          ),
          'btn_target' => array(
      			'type' => 'select',
            'options' => array(
              '_self' => __('Open in the same tab', $this->_class),
        			'_blank' => __('Open in a new tab', $this->_class),
            ),
      			'label' => __('Link Target', $this->_class)
          ),
        ),$html)
      )
    );
  }

}

class jb_cols extends thesis_box {

  public $type = 'rotator';
  public $switch = true;

  public $dependents = array(
  	'jb_col_single_1',
    'jb_col_single_2',
    'jb_col_single_3'
  );

  public $children = array(
  	'jb_col_single_1'
  );

  protected function translate() {
	   $this->title = __('Bartlet: Cols', $this->_class);
  }

  protected function construct() {
    global $thesis;
  }

  public function html($args = array()) {
    global $thesis, $wp_query, $post, $wp;
    extract($args = is_array($args) ? $args : array());
    /* Box HTML output should be echoed here */
    $img          =   $this->options['image'];
    $headline     =   $this->options['headline'];
    $content      =   $this->options['content'];

    /* link */
    $link_text    =   $this->options['link_text'];
    $link_url     =   !empty($this->options['link_url']) ? $this->options['link_url'] : '#';

    echo "<div id=\"jb-cols\" class=\"py-5\">\n";
      echo "<div class=\"container\">\n";
        echo "<div class=\"row no-gutters\">\n";
          echo $this->rotator($depth + 2);
        echo "</div>\n";
      echo "</div>\n";
    echo "</div>\n";

  }

  protected function options() {
    global $thesis;
  }

}


class jb_col_single_1 extends thesis_box {

  protected function translate() {
	   $this->title = __('Column 1', $this->_class);
  }

  protected function construct() {
    global $thesis;
  }

  public function html($args = array()) {
    global $thesis, $wp_query, $post, $wp;
    extract($args = is_array($args) ? $args : array());
    /* Box HTML output should be echoed here */
    $img          =   $this->options['image'];
    $img_w        =   $this->options['image_w'];
    $headline     =   $this->options['headline'];
    $content      =   $this->options['content'];
    $has_img      =   !empty($img) ? 'has_img' : '';

    /* link */
    $link_text    =   $this->options['link_text'];
    $link_url     =   !empty($this->options['link_url']) ? $this->options['link_url'] : '#';

    echo "<div class=\"col-md mb-4 mb-md-0 $has_img\">\n";
      if(!empty($img)) {
        echo "<img src=\"$img\" class=\"rounded-circle mx-auto mb-4\" height=\"$img_w\" style=\"height: ${img_w}px; width: auto; margin-top: -${img_w}px;\" alt=\"$headline\" />\n";
      }
      if(!empty($headline)) {
        echo "<p class=\"h5 font-weight-bold\">$headline</p>\n";
      }
      if(!empty($content)) {
        echo "<p>$content</p>\n";
      }
      if(!empty($link_text)) {
        echo "<a href=\"$link_url\">$link_text</a>\n";
      }
    echo "</div>";

  }

  protected function options() {
    global $thesis;
    $html = $thesis->api->html_options();
	   return array(
       'image' => array(
   			'type' => 'text',
        'width' => 'full',
   			'label' => __('Image URL', $this->_class)
       ),
       'image_w' => array(
   			'type' => 'text',
        'width' => 'tiny',
        'description' => 'px. Recommended width is 75. For better performance, crop the image exactly to the width you set here.',
   			'label' => __('Image Width', $this->_class)
       ),
    		'headline' => array(
    			'type' => 'text',
          'width' => 'full',
    			'label' => __('Headline', $this->_class)
        ),
        'content' => array(
    			'type' => 'text',
          'width' => 'full',
    			'label' => __('Content', $this->_class)
        ),
        'link_text' => array(
    			'type' => 'text',
          'width' => 'medium',
    			'label' => __('Link Text', $this->_class)
        ),
        'link_url' => array(
    			'type' => 'text',
          'width' => 'full',
    			'label' => __('Link URL', $this->_class)
        ),
    );
  }

}


class jb_col_single_2 extends thesis_box {

  protected function translate() {
	   $this->title = __('Column 2', $this->_class);
  }

  protected function construct() {
    global $thesis;
  }

  public function html($args = array()) {
    global $thesis, $wp_query, $post, $wp;
    extract($args = is_array($args) ? $args : array());
    /* Box HTML output should be echoed here */
    $img          =   $this->options['image'];
    $img_w        =   $this->options['image_w'];
    $headline     =   $this->options['headline'];
    $content      =   $this->options['content'];
    $has_img      =   !empty($img) ? 'has_img' : '';

    /* link */
    $link_text    =   $this->options['link_text'];
    $link_url     =   !empty($this->options['link_url']) ? $this->options['link_url'] : '#';

    echo "<div class=\"col-md mb-4 mb-md-0 $has_img\">\n";
      if(!empty($img)) {
        echo "<img src=\"$img\" class=\"rounded-circle mx-auto mb-4\" height=\"$img_w\" style=\"height: ${img_w}px; width: auto; margin-top: -${img_w}px;\" alt=\"$headline\" />\n";
      }
      if(!empty($headline)) {
        echo "<p class=\"h5 font-weight-bold\">$headline</p>\n";
      }
      if(!empty($content)) {
        echo "<p>$content</p>\n";
      }
      if(!empty($link_text)) {
        echo "<a href=\"$link_url\">$link_text</a>\n";
      }
    echo "</div>";

  }

  protected function options() {
    global $thesis;
    $html = $thesis->api->html_options();
	   return array(
       'image' => array(
   			'type' => 'text',
        'width' => 'full',
   			'label' => __('Image URL', $this->_class)
       ),
       'image_w' => array(
   			'type' => 'text',
        'width' => 'tiny',
        'description' => 'px. Recommended width is 75. For better performance, crop the image exactly to the width you set here.',
   			'label' => __('Image Width', $this->_class)
       ),
    		'headline' => array(
    			'type' => 'text',
          'width' => 'full',
    			'label' => __('Headline', $this->_class)
        ),
        'content' => array(
    			'type' => 'text',
          'width' => 'full',
    			'label' => __('Content', $this->_class)
        ),
        'link_text' => array(
    			'type' => 'text',
          'width' => 'medium',
    			'label' => __('Link Text', $this->_class)
        ),
        'link_url' => array(
    			'type' => 'text',
          'width' => 'full',
    			'label' => __('Link URL', $this->_class)
        ),
    );
  }

}


class jb_col_single_3 extends thesis_box {

  protected function translate() {
	   $this->title = __('Column 3', $this->_class);
  }

  protected function construct() {
    global $thesis;
  }

  public function html($args = array()) {
    global $thesis, $wp_query, $post, $wp;
    extract($args = is_array($args) ? $args : array());
    /* Box HTML output should be echoed here */
    $img          =   $this->options['image'];
    $img_w        =   $this->options['image_w'];
    $headline     =   $this->options['headline'];
    $content      =   $this->options['content'];
    $has_img      =   !empty($img) ? 'has_img' : '';

    /* link */
    $link_text    =   $this->options['link_text'];
    $link_url     =   !empty($this->options['link_url']) ? $this->options['link_url'] : '#';

    echo "<div class=\"col-md mb-4 mb-md-0 $has_img\">\n";
      if(!empty($img)) {
        echo "<img src=\"$img\" class=\"rounded-circle mx-auto mb-4\" height=\"$img_w\" style=\"height: ${img_w}px; width: auto; margin-top: -${img_w}px;\" alt=\"$headline\" />\n";
      }
      if(!empty($headline)) {
        echo "<p class=\"h5 font-weight-bold\">$headline</p>\n";
      }
      if(!empty($content)) {
        echo "<p>$content</p>\n";
      }
      if(!empty($link_text)) {
        echo "<a href=\"$link_url\">$link_text</a>\n";
      }
    echo "</div>";

  }

  protected function options() {
    global $thesis;
    $html = $thesis->api->html_options();
	   return array(
       'image' => array(
   			'type' => 'text',
        'width' => 'full',
   			'label' => __('Image URL', $this->_class)
       ),
       'image_w' => array(
   			'type' => 'text',
        'width' => 'tiny',
        'description' => 'px. Recommended width is 75. For better performance, crop the image exactly to the width you set here.',
   			'label' => __('Image Width', $this->_class)
       ),
    		'headline' => array(
    			'type' => 'text',
          'width' => 'full',
    			'label' => __('Headline', $this->_class)
        ),
        'content' => array(
    			'type' => 'text',
          'width' => 'full',
    			'label' => __('Content', $this->_class)
        ),
        'link_text' => array(
    			'type' => 'text',
          'width' => 'medium',
    			'label' => __('Link Text', $this->_class)
        ),
        'link_url' => array(
    			'type' => 'text',
          'width' => 'full',
    			'label' => __('Link URL', $this->_class)
        ),
    );
  }

}


class jb_cta extends thesis_box {

  protected function translate() {
	   $this->title = __('Bartlet: CTA', $this->_class);
  }

  protected function construct() {
    global $thesis;
  }

  public function html($args = array()) {
    global $thesis, $wp_query, $post, $wp;
    extract($args = is_array($args) ? $args : array());
    /* Box HTML output should be echoed here */
    $headline     =   !empty($this->class_options['headline']) ? $this->class_options['headline'] : 'The CTA Headline';

    /* button */
    $btn_text     =   !empty($this->class_options['btn_text']) ? $this->class_options['btn_text'] : 'Button Text';
    $btn_url      =   !empty($this->class_options['btn_url']) ? $this->class_options['btn_url'] : '#';
    $btn_target   =   !empty($this->class_options['btn_target']) ? $this->class_options['btn_target'] : '_self';
    $btn_class    =   !empty($this->class_options['class']) ? $this->class_options['class'] : '';
    $btn_id       =   !empty($this->class_options['id']) ? $this->class_options['id'] : '';

    echo "<div id=\"jb-cta\" class=\"py-5 clearfix\">\n";
      echo "<div class=\"container\">\n";
        echo "<div class=\"row align-items-center\">\n";
          echo "<div class=\"col-xl-8 text-center text-xl-left mb-3 mb-xl-0\">\n";
            echo "<h2 class=\"h3\">$headline</h3>\n";
          echo "</div>\n";
          echo "<div class=\"col-xl-4 text-center text-xl-right\">\n";
            echo "<p class=\"h5\"><a id=\"$btn_id\" href=\"$btn_url\"class=\"btn btn-lg jb-btn jb-btn-primary $btn_class\" target=\"$btn_target\">$btn_text</a></p>";
          echo "</div>\n";
        echo "</div>\n";
      echo "</div>\n";
    echo "</div>";

  }

  protected function class_options() {
    global $thesis;
    $html = $thesis->api->html_options();
	   return array(
    		'headline' => array(
    			'type' => 'text',
          'width' => 'full',
    			'label' => __('Headline', $this->_class)
        ),
        'button' => array(
      		'type' => 'group',
      		'label' => __('Button', $this->_class),
      		'fields' => array_merge(array(
            'btn_text' => array(
        			'type' => 'text',
              'width' => 'medium',
        			'label' => __('Text', $this->_class)
            ),
            'btn_url' => array(
        			'type' => 'text',
              'width' => 'medium',
        			'label' => __('URL', $this->_class)
            ),
            'btn_target' => array(
        			'type' => 'select',
              'options' => array(
                '_self' => __('Open in the same tab', $this->_class),
          			'_blank' => __('Open in a new tab', $this->_class),
              ),
        			'label' => __('Link Target', $this->_class)
            ),
          ),$html)
        ),
    );
  }

}


class jb_quote extends thesis_box {

  protected function translate() {
	   $this->title = __('Bartlet: Quote', $this->_class);
  }

  protected function construct() {
    global $thesis;
  }

  public function html($args = array()) {
    global $thesis, $wp_query, $post, $wp;
    extract($args = is_array($args) ? $args : array());
    $tab = str_repeat("\t", !empty($depth) ? $depth : 1);
    /* Box HTML output should be echoed here */
    $content      =   !empty($this->class_options['content']) ? $this->class_options['content'] : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ipsum dolor sit amet. Cras ultricies ligula sed magna dictum porta.';
    $author       =   $this->class_options['author'];

    echo "<div id=\"jb-quote\" class=\"py-5 clearfix\">\n";
      echo "<div class=\"container\">\n";
        echo "<div class=\"row justify-content-center\">\n";
          echo "<div class=\"col-md-8 text-center\">\n";
            echo "<blockquote class=\"blockquote text-center\">\n";
              echo "<p class=\"mb-3\">$content</p>\n";
              if(!empty($author)) {
                echo "<footer class=\"blockquote-footer\">$author</footer>\n";
              }
            echo "</blockquote>\n";
          echo "</div>\n";
        echo "</div>\n";
      echo "</div>\n";
    echo "</div>";

  }

  protected function class_options() {
    global $thesis;
    $html = $thesis->api->html_options();
	   return array(
    		'content' => array(
    			'type' => 'textarea',
          'rows' => 3,
    			'label' => __('Quote Content', $this->_class)
        ),
        'author' => array(
    			'type' => 'text',
          'width' => 'medium',
    			'label' => __('Author/Citation', $this->_class)
        )
    );
  }

}
