<img src="img/banner.png" alt="Logo">

[![Latest Version on Packagist](https://img.shields.io/packagist/v/timwassenburg/laravel-dutch-phone-number-validator.svg?style=flat-square)](https://packagist.org/packages/timwassenburg/laravel-dutch-phone-number-validator)
[![Total Downloads](https://img.shields.io/packagist/dt/timwassenburg/laravel-dutch-phone-number-validator.svg?style=flat-square)](https://packagist.org/packages/timwassenburg/laravel-dutch-phone-number-validator)
[![License](https://img.shields.io/packagist/l/timwassenburg/laravel-dutch-phone-number-validator)](https://packagist.org/packages/timwassenburg/laravel-dutch-phone-number-validator)

<hr>

## Table of Contents
  <ol>
    <li><a href="#installation">Installation</a></li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#translations">Translations</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
  </ol>

## Installation
Run composer require to install the package.
```bash
composer require timwassenburg/laravel-dutch-phone-number-validator
```

## Usage
Add the ```dutch-phone-number``` rule to the field you want to validate.

```php
'phone' => 'required|dutch-phone-number'
```

## Translations
Publish the translations with the following command.
```bash
php artisan vendor:publish --provider="TimWassenburg\DutchPhoneNumberValidator\PhoneValidatorServiceProvider" --tag="translations"
```
You can now add or update translations in the ```resources/lang/vendor/dutch-phone-number``` folder.

## Contributing
Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
