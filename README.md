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
$validator->isValid('');
$validator->isValid('');
```

Returns:

```shell
true
true
```

Invalid Bulgaria vat number:

```php
$validator = new BGVatFormatValidator();
$validator->isValid('');
$validator->isValid('');
```

```shell
false
false
```

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.

