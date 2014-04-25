Sundown-Parser-Plugin
=====================

Replace the default parser in [Phile](https://github.com/PhileCMS/Phile) with the [PHP-Sundown](https://github.com/chobie/php-sundown) (C parser for Markdown).

### 1. Installation

* Install [PHP-Sundown](https://github.com/chobie/php-sundown)
* Install [Phile](https://github.com/PhileCMS/Phile)

### 1.1 Installation (composer)
```
php composer.phar require phile/sundown:*
```
### 1.2 Installation (Download)

* Clone this repo into `plugins/phile/sundown`
* add `$config['plugins']['phile\\sundown'] = array('active' => true);` to your `config.php`

### 2. Activation

After you have installed the plugin. You need to add the following line to your `config.php` file:

```php
$config['plugins']['phile\\sundown'] = array('active' => true);
```