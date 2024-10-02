# International Bank Account Number (IBAN) Validator

<a href="https://packagist.org/packages/davidvandertuijn/iban"><img src="https://poser.pugx.org/davidvandertuijn/iban/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/davidvandertuijn/iban"><img src="https://poser.pugx.org/davidvandertuijn/iban/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/davidvandertuijn/iban"><img src="https://poser.pugx.org/davidvandertuijn/iban/license.svg" alt="License"></a>

![International Bank Account Number (IBAN) Validator](https://cdn.davidvandertuijn.nl/github/iban.png)

The International Bank Account Number (IBAN) Validator is an essential tool designed to ensure the accuracy and validity of IBANs used in international banking transactions. With globalization and cross-border trade becoming increasingly prevalent, it is crucial to have a reliable mechanism for verifying IBANs to prevent errors, fraud, and delays in financial transactions.

[!["Buy Me A Coffee"](https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png)](https://www.buymeacoffee.com/davidvandertuijn)

## Install

```shell
composer require davidvandertuijn/iban
```

## Usage

```php
use Davidvandertuijn\Iban;
```

**toHumanFriendly**

```php
Iban::toHumanFriendly('NL02ABNA0123456789'); // NL02 ABNA 0123 4567 89
```

**Validate**

```php
Iban::validate('NL02ABNA0123456789'); // true
```
