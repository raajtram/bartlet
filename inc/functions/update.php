<?php

/*

	Thesislove Update Manager

	Author: Raaj Trambadia (@raajtram)
	Original Author: Tim Milligan (https://github.com/voidzone)
	Docs: https://thesislove.com/skins/bartlet
	License: MIT - https://thesislove.com/mit-license/

	Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the “Software”), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

	The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

	THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

*/

class tl_update_manager {
	const CALLOUT_TRANSIENT = 'tl_callout';

	public function __construct() {
		if (is_dir(WP_CONTENT_DIR . '/thesis'))
			add_action('thesis_updates', array($this, 'get_updates'), 1);
		add_action('upgrader_process_complete', array($this, 'reset_transients'));
	}

	public function get_updates() {
		global $thesis;

		//delete_transient(self::CALLOUT_TRANSIENT); //uncommenting this line will force an update check, for testing purposes only
		if (get_transient(self::CALLOUT_TRANSIENT))
			return;

		set_transient(self::CALLOUT_TRANSIENT, time(), 60*60*24);

		$objects = array(
			'skins' => thesis_skins::get_items(),
			'boxes' => thesis_user_boxes::get_items(),
			'packages' => thesis_user_packages::get_items()
		);

		$transients = array(
			'skins' => 'thesis_skins_update',
			'boxes' => 'thesis_boxes_update',
			'packages' => 'thesis_packages_update'
		);

		$all = array();

		foreach ($objects as $object => $array)
			if (is_array($array) && !empty($array))
				foreach ($array as $class => $data)
					$all[$object][$class] = $data['version'];

		foreach ($transients as $key => $transient)
			if (get_transient($transient))
				unset($all[$key]);

		if (empty($all))
			return;

		$all['thesis'] = $thesis->version;

		$from = 'https://thesislove.com/api/update.php';
		$post_args = array(
			'body' => array(
				'data' => serialize($all),
				'wp' => $GLOBALS['wp_version'],
				'php' => phpversion(),
				'user-agent' => "WordPress/{$GLOBALS['wp_version']};" . home_url()
			)
		);

		$post = wp_remote_post($from, $post_args);

		if (is_wp_error($post) || empty($post['body']))
			return;

		$returned = @unserialize($post['body']);

		if (!is_array($returned))
			return;

		foreach ($returned as $type => $data) // will only return the data that we need to update
			if (in_array("thesis_{$type}_update", $transients))
				set_transient("thesis_{$type}_update", $returned[$type], 60*60*24);
	}

	public function reset_transients() {
		foreach (array('skins', 'boxes', 'packages') as $tr)
			delete_transient("thesis_{$tr}_update");
		delete_transient(self::CALLOUT_TRANSIENT);
		wp_cache_flush();
	}
}
?>
