# ValueObjects - Metrology

<p align="center">
<a href="https://packagist.org/packages/ValueObjects/Metrology"><img src="https://img.shields.io/packagist/v/ValueObjects/Metrology" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/ValueObjects/Metrology"><img src="https://img.shields.io/packagist/dt/ValueObjects/Metrology" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/ValueObjects/Metrology"><img src="https://poser.pugx.org/ValueObjects/Metrology/dependents.svg" alt="Dependents"></a>
<a href="https://packagist.org/packages/ValueObjects/Metrology"><img src="https://img.shields.io/packagist/l/ValueObjects/Metrology" alt="License"></a>
</p>

<p align="center">
<a href="https://travis-ci.org/ValueObjects/Metrology"><img src="https://travis-ci.com/ValueObjects/Metrology.svg" alt="Build Status"></a>
<a href="https://scrutinizer-ci.com/g/ValueObjects/Metrology/build-status/master"><img src="https://scrutinizer-ci.com/g/ValueObjects/Metrology/badges/quality-score.png?b=master" title="Scrutinizer Code Quality"></a>
<a href="https://styleci.io/repos/302069112" rel="nofollow"><img src="https://styleci.io/repos/302069112/shield?branch=master" alt="StyleCI"></a>
</p>

## About

**Metrology** package is a subpackage of the <a href="https://github.com/ValueObjects/ValueObjects">ValueObjects</a> library.

It makes your job much easier if you are doing operations such as conversion with measurement units, calculation, addition as below.
 - Temperature (Celsius, Fahrenheit etc.), 
 - Length (Meters, Feet etc.),
 - Area (Square Meters, Hektares etc.),
 - Currency (USD, Euro etc.),
 - Power (Watts, Joules etc.),

## For Example
```php
$celsius = new Celsius(23.45);
echo $celsius->convert()->toKelvin()->getValue();    // result 296.6
echo $celsius->convert()->toFahrenheit()->getValue();    // result 74.21

$fahrenheit = new Fahrenheit(32);
echo $fahrenheit->compare()->isEqual($celsius);    // result false

$fahrenheit = $fahrenheit->calculate()->addUnit($celsius);
echo $fahrenheit->getValue();    // result 106.21
```

## Requirements

PHP 7.4+. Other than that, this library has no requirements. ValueObjects will not provide any support for PHP versions not supported by the language itself. There may be dependencies for a feature. See the documentation for more information.

## Install

```bash
$ composer require valueobjects/metrology
```

## Other Sub Packages

Below is a list of other packages under ValueObjects:

- [Common](https://github.com/ValueObjects/Common): It is the auxiliary package used by all sub-packages. You can use it to create your own ValueObjects package.

## Contributing

Thank you for finding value in improving the ValueObjects - Metrology package. To contribute, you can contact me at [www@mehmetogmen.com.tr](mailto:www@mehmetogmen.com.tr).

## Security Vulnerabilities

If you discover a security vulnerability within ValueObjects - Metrology, please send an e-mail to Mehmet ÖĞMEN via [www@mehmetogmen.com.tr](mailto:www@mehmetogmen.com.tr). All security vulnerabilities will be promptly addressed.

## License

The ValueObjects - Metrology package is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).