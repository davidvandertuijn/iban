# International Bank Account Number (IBAN) Validator

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
