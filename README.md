# Solat-PHP

Solat-PHP is a PHP library to fetch solat time for Malaysian. All solat time is based on JAKIM's e-solat.

#### Usage
```php
require "../vendor/autoload.php";
use Solat\Solat;

$solat = new Solat();
$result = $solat->location('SGR04');
var_dump($result);
```

#### LICENSE
MIT