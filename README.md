<br />
<div align="center">
  <a href="https://github.com/timwassenburg/laravel-dutch-phone-number-validator">
    <img src="img/logo.png" alt="Logo" width=120>
  </a>

<h1 align="center">Laravel Dutch Phone Number Validator</h1>

  <p align="center">
    Validate if the given phone number is a valid Dutch phone number
  </p>
<br><br>
</div>

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
