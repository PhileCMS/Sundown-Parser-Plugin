Sundown-Parser-Plugin
=====================

Replace the default parser in [Phile](https://github.com/PhileCMS/Phile) with the [PHP-Sundown](https://github.com/chobie/php-sundown) (C parser for Markdown).

### Installation

* Install [PHP-Sundown](https://github.com/chobie/php-sundown)
* Install [Phile](https://github.com/PhileCMS/Phile)
* Download this repo and drop it into the Phile root directory

After you have installed the plugin. You need to add the following line to your `config.php` file:

```php
$config['plugins']['phileSundown'] = array('active' => true);
```