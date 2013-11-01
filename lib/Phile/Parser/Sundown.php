<?php
namespace Phile\Parser;

class Sundown implements ParserInterface {
	// overload the Markdown parse with the Sundown parser
	public function parse($data) {
		$extensions = array(
			'fenced_code_blocks' => true,
			'tables' => false,
			'autolink' => true,
			'space_after_headers' => false,
			'lax_html_blocks' => true
			);
		$sundown = new \Sundown\Markdown(\Sundown\Render\HTML, $extensions);
		return $sundown->render($data);
	}
}
