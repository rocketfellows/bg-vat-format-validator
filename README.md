# Bulgaria vat format validator

![Code Coverage Badge](./badge.svg)

This component provides Bulgaria vat number format validator.

Implementation of interface **rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface**

Depends on https://github.com/rocketfellows/country-vat-format-validator-interface

## Installation

```shell
composer require rocketfellows/bg-vat-format-validator
```

## Usage example

Valid Bulgaria vat number:

```php
$validator = new BGVatFormatValidator();
$validator->isValid('BG123456789');
$validator->isValid('BG0123456789');
$validator->isValid('123456789');
$validator->isValid('0123456789');
```

Returns:

```shell
true
true
true
true
true
```

Invalid Bulgaria vat number:

```php
$validator = new BGVatFormatValidator();
$validator->isValid('BG01234567899');
$validator->isValid('BG01234567');
$validator->isValid('012345667899');
$validator->isValid('12345667');
```

```shell
false
false
false
false
```

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.
