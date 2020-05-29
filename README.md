# PSD EngineData [![SymfonyInsight](https://insight.symfony.com/projects/b104293a-2b70-409f-ac3f-5dc61b4a4ad1/small.svg)](https://insight.symfony.com/projects/b104293a-2b70-409f-ac3f-5dc61b4a4ad1)
[![Build Status](https://travis-ci.com/LoginovIlya/php-psd-enginedata.svg?branch=master)](https://travis-ci.com/LoginovIlya/php-psd-enginedata)
![Coveralls github](https://img.shields.io/coveralls/github/LoginovIlya/php-psd-enginedata.svg)

Parser [enginedata](https://github.com/layervault/psd-enginedata) on php

## Installation
Add this line to your application's composer.json in require block:
```
"loginovilya/php-psd-enginedata": "^3.0"
```
And then execute:
```
$ composer install
```
Or install it yourself as:
```
$ composer require loginovilya/php-psd-enginedata
```
## Usage
```php
<?php

require "vendor/autoload.php";

use Enginedata\Enginedata;

$data = file_get_contents('filename');
$parser = new Enginedata($data);

$data = $parser->parse();

var_dump($data);
```
