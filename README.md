# International Bank Account Number (IBAN) Validator

<a href="https://packagist.org/packages/davidvandertuijn/iban"><img src="https://poser.pugx.org/davidvandertuijn/iban/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/davidvandertuijn/iban"><img src="https://poser.pugx.org/davidvandertuijn/iban/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/davidvandertuijn/iban"><img src="https://poser.pugx.org/davidvandertuijn/iban/license.svg" alt="License"></a>

### Install

```
composer require davidvandertuijn/iban
```

### Usage

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
