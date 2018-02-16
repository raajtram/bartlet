<?php

/*

  Name: Bartlet
  Author: Raaj Trambadia
  Description: Bartlet is a Thesis Skin en route to an undetermined destination. Opportunities galore. Talk about impressive!
  Version: 1.0
  Class: bartlet
  Docs: https://thesislove.com/skins/bartlet
  Changelog: https://thesislove.com/skins/bartlet
  License: MIT - https://thesislove.com/mit-license/

  Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the “Software”), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

  The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

  THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

*/

class bartlet extends thesis_skin {

  public $functionality = array(

    /**
     * Add Thesis-specific Functionality
     *
     * @see http://diythemes.com/thesis/rtfm/api/skin/properties/functionality/
    */

    /**
     * Can't use the css_preprocessor due to an "Allowed memory size exhausted" error when the family for the System default font in the fonts() method is too long (possibly an issue with the # of characters allowed in the parser).
     *
     * @see http://diythemes.com/thesis/rtfm/api/skin/properties/functionality/
     * @todo wait until the SASS Parser can get fixed/updated
     *
     * 'css_preprocessor' => 'scss',
    */

    'fonts_google' => true,
    'legacy_image_support' => false,
		'logo' => true,
    'meta_viewport' => "width=device-width, initial-scale=1, shrink-to-fit=no"

  );

  protected function boxes() {

    /**
     * Add boxes from the box.php file
     *
     * @see http://diythemes.com/thesis/rtfm/api/skin/methods/boxes/
    */

  	return array(
  		'jb_hero',
      'jb_cols',
      'jb_cta',
      'jb_quote'
    );

  }

  protected function construct() {

    global $tl_upd_mgr;

    /**
     * The Skin pseudo-constructor
     * Add all hooks, filters, actions etc. here
     * For any functions in this class, use array ($this, 'function_name') to call the function
     *
     * @see http://diythemes.com/thesis/rtfm/api/skin/methods/construct/
    */

    /* Stylesheets before the main stylesheet */
    add_action( 'hook_before_stylesheet', array( $this, 'jb_styles' ), 11 );
    /* Enable Box Options */
    add_filter('thesis_editor_box_options', '__return_true');
    /* All JS Functions */
    if(!is_admin()) {
  	   wp_enqueue_script( 'jb-functions', THESIS_USER_SKIN_URL . '/inc/js/functions.min.js', array('jquery'), null, true );
    }
    /* TL Update Manager */
		if(is_admin()) {

			if( !isset($tl_upd_mgr) && file_exists(THESIS_USER_SKIN . '/inc/functions/update.php')) {

				if(!class_exists('tl_update_manager')) // Load the asset handler class if it hasn't been already.
					require_once( dirname(__FILE__) . '/inc/functions/update.php');
				$tl_upd_mgr = new tl_update_manager;

			}

		}

  }

  public function jb_styles() {

    /**
     * Add any additional stylesheets. These will be hooked BEFORE the css.css file.
    */

    echo "<link rel=\"stylesheet\" href=\"" . THESIS_USER_SKIN_URL ."/inc/css/bootstrap.min.css\" />\n";

  }

  protected function fonts() {

    /**
     * Add additional Fonts for the Design Options
     *
     * @see http://diythemes.com/thesis/rtfm/api/skin/methods/fonts/
    */

    return array(
			'jb_system_default' => array(
        'name' => 'System Default',
				'family' => '-apple-system, BlinkMacSystemFont,"Segoe UI", "Roboto", "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"'
			)
		);

  }

  /*---:[ Skin Design Options ]:---*/

  protected function design() {
		$css = $this->css_tools->options; // shorthand for all options available in the CSS API
		$fsc = $fc = $this->css_tools->font_size_color(); // the CSS API contains shorthand for font, size, and color options
    unset($fc['color']); // remove color control from font_size_color.
		return array(
			'colors' => $this->color_scheme(array( // the Skin API contains a color_scheme() method for easy implementation
				'id' => 'colors',
        'label' => 'Skin Color Sceme',
        'colors' => array(
          'col_bg' => __('Background', $this->_class),
          'col_primary' => __('Text', $this->_class),
          'col_links' => __('Links', $this->_class),
          'col_links_dark' => __('Links Hover', $this->_class)),
				'default' => array(
          'col_bg' => 'F5F5F3',
					'col_primary' => '111111',
					'col_links' => '0060DD',
					'col_links_dark' => '0056C7'))),
      'elements' => array( // this is an object set containing all other design options for this Skin
				'type' => 'object_set',
				'label' => __('Layout, Fonts, Sizes, and Colors', $this->_class),
				'objects' => array(
					'layout' => array(
						'type' => 'object',
						'label' => __('Layout &amp; Dimensions', $this->_class),
						'fields' => array(
							'c_width' => array(
								'type' => 'text',
								'width' => 'tiny',
								'label' => __('Site Width', $this->_class),
								'tooltip' => __('The width of the container (box) of the site.', $this->_class),
								'description' => 'px',
								'default' => 1140))),
          'p_font' => array(
              'type' => 'object',
              'label' => __('Primary: Font &amp; Size', $this->_class),
              'fields' => array(
                'family' => array_merge($css['font']['fields']['font-family'], array('default' => 'jb_system_default')),
  							'size' => array_merge($css['font']['fields']['font-size'], array('default' => 1.0, 'description' => 'rem. Use decimals here. Default is 1.0.')),
              )
          ),
          'p_headlines' => array(
              'type' => 'object',
              'label' => __('Headlines: Font &amp; Size', $this->_class),
              'fields' => array (
                'family' => array_merge($css['font']['fields']['font-family'], array('default' => 'jb_system_default')))
          ),
		    ))
      );
    }

    /*---:[ Skin Design Options ]:---*/

  	public function css_variables() {

      global $thesis;

      /* Width: Container */
      $px['w_container'] = !empty($this->design['layout']['c_width']) && is_numeric($this->design['layout']['c_width']) ? abs($this->design['layout']['c_width']) : 1140;

      /* Font Family: Body */
      $vars['f_body'] = $thesis->api->fonts->family($font = !empty($this->design['p_font']['family']) ? $this->design['p_font']['family'] : 'jb_system_default');

      /* Font Size: Body */
      $rem['s_body'] = !empty($this->design['p_font']['size']) && is_numeric($this->design['p_font']['size']) ? abs($this->design['p_font']['size']) : 1.0;

      /* Font Family: Headlines */
      $vars['f_headlines'] = $thesis->api->fonts->family($font = !empty($this->design['p_headlines']['family']) ? $this->design['p_headlines']['family'] : 'jb_system_default');

      // Add the 'px' unit to the $px array constructed above
  		$vars = is_array($px) ? array_merge($vars, $this->css_tools->unit($px)) : $vars;

      // Add the 'rem' unit to the $rem array constructed above
  		$vars = is_array($rem) ? array_merge($vars, $this->css_tools->unit($rem, $base = true, 'rem')) : $vars;

      /* Colors */
      foreach (array( 'col_bg', 'col_primary', 'col_links', 'col_links_dark' ) as $color)
        $vars[$color] = !empty($this->design[$color]) ? $thesis->api->colors->css($this->design[$color]) : false;

      return $vars;

    }

}
