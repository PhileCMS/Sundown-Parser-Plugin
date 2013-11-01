<?php

/**
 * Replace the default parser in Phile with the PHP-Sundown (C parser for Markdown)
 */
class PhileSundown extends \Phile\Plugin\AbstractPlugin implements \Phile\EventObserverInterface {
	// $this->settings will be filled with the data from the config.php file from the plugin folder
	// var_dump($this->settings);
	public function __construct() {
		\Phile\Event::registerEvent('plugins_loaded', $this);
	}

	public function on($eventKey, $data = null) {
		// check $eventKey for which you have registered
		if ($eventKey == 'plugins_loaded') {
			\Phile\ServiceLocator::registerService('Phile_Parser', new \Phile\Parser\Sundown());
		}
	}
}
