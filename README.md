[![Latest Version on Packagist](https://img.shields.io/packagist/v/heidelpay/magento2-version2.3-patch?style=flat-square)](https://packagist.org/packages/heidelpay/magento2-version2.3-patch)
[![PHP 7.1](https://img.shields.io/badge/php-7.1-blue.svg)](http://www.php.net)
[![PHP 7.2](https://img.shields.io/badge/php-7.2-blue.svg)](http://www.php.net)

![Logo](http://dev.heidelpay.com/devHeidelpay_400_180.jpg)

# Heidelpay payment extension for Magento2

This extension for Magento 2.3 provides a direct integration of the supported payment methods mentioned below to your Magento 2.3 shop.
>heidelpay is offering this magento2 plugin as a temporary solution in order to ensure Magento 2.3 compatibility.  
>Please note that we will not provide long-term support for this version and strongly recommend waiting for the official release of the magento 2.3 module, based on our new backend technology stack.  
>Release is planned for Q3/Q4 of 2019. The new plugin offers the following benefits:
>*	Long term support
>*	Magento 2.3 PWA Support
>*	Continuous improvements
>*	Up-to-date, innovative payment methods (e.g Apple Pay, Hire Purchase, Invoice guaranteed, flexi-pay)
>*	Support for the new PayPal API, including their Fraud Toolings
>*	Mobile SDK’s
>
>For more information on our upcoming technology stack visit: https://docs.heidelpay.com

For more information on this implementation please visit [our dev-page](http://dev.heidelpay.com/magento2).

## SYSTEM REQUIREMENTS

This extension requires PHP 7.1 or PHP 7.2 as well as Magento 2.3.
It also depends on the heidelpay php-payment-api and the php-basket-api, which will be installed along with the plugin.  

## LICENSE

You can find a copy of this license in [LICENSE.txt](LICENSE.txt).

## Release notes

*   Based on the [php-payment-api](https://github.com/heidelpay/php-payment-api). Please refer to the [developer documentation](https://dev.heidelpay.com/PhpPaymentApi/).
*   Based on the [php-basket-api](https://github.com/heidelpay/php-basket-api). Please refer to the [developer documentation](https://dev.heidelpay.com/php-composer-bundle/php-basket-api/).

Currently supported payment methods are:
* Credit Card
* Debit Card
* Direct Debit
* Direct Debit (Secured) (B2C)
* Sofort.
* PayPal
* Prepayment
* Invoice
* Invoice (Secured) (B2C)
* giropay
* iDeal

## Installation

### Install the heidelpay Magento 2.3 composer package

```composer require "heidelpay/magento2-version2.3-patch"```

### Enable the extension in Magento 2.3

```php -f bin/magento module:enable Heidelpay_Gateway --clear-static-content```

### Setup the extension and refresh cache

```php -f bin/magento setup:upgrade```

```php -f bin/magento cache:flush```

```php -f bin/magento setup:di:compile```

```php -f bin/magento setup:static-content:deploy```

and you are ready to go.

## Update to Magento 2.3
> Prerequisite: The heidelpay/magento2 plugin was previously installed)

### Require the new magento version in your composer.json
```"magento/product-community-edition": "^2.3.0"```

### Replace the heidelpay/magento2 module with this patched version
```"heidelpay/magento2-version2.3-patch": "*"```

### Perform the composer update
```composer update```

### Setup the extension and refresh cache
```php -f bin/magento setup:upgrade```

```php -f bin/magento cache:flush```

```php -f bin/magento setup:di:compile```

```php -f bin/magento setup:static-content:deploy```

### If you run into trouble compiling
Check this [Issue](https://github.com/magento/magento2/issues/15441).

and you are ready to go.

## Support
For any issues or questions please get in touch with our support.

#### Web page
https://dev.heidelpay.com/
 
#### Email
support@heidelpay.com
 
#### Phone
+49 (0)6221/6471-100

#### Twitter
@devHeidelpay
