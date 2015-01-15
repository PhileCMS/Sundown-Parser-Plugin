<?php
/**
 * Plugin class
 */
namespace Phile\Plugin\Phile\Sundown;

/**
 * Replace the default parser in Phile with the PHP-Sundown (C parser for Markdown)
 */
class Plugin extends \Phile\Plugin\AbstractPlugin implements \Phile\Gateway\EventObserverInterface {
	/**
	 * the constructor
	 */
	public function __construct() {
		if (!extension_loaded('sundown')) {
			throw new \Exception('Sundown is not installed or is not configured correctly');
			exit;
		} else {
			\Phile\Event::registerEvent('plugins_loaded', $this);
		}
	}

	/**
	 * event method
	 * @param string $eventKey
	 * @param null   $data
	 *
	 * @return mixed|void
	 */
	public function on($eventKey, $data = null) {
		// check $eventKey for which you have registered
		if ($eventKey == 'plugins_loaded') {
			\Phile\ServiceLocator::registerService('Phile_Parser', new \Phile\Plugin\Phile\Sundown\Parser($this->settings));
		}
	}
}
