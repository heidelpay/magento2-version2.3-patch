# Release Notes - heidelpay Payment Gateway for Magento 2 _(patched to be compatible with Magento 2.3)_

## Versioning

This project does not follow a versioning standard. Versions are crafted after the dates; for example, the version 17.7.25 was released on July, 25th in 2017

## XX.X.XX
### Change
- improved status handling to ensure compatibility with magento 2.2.8
### Fixed
- An issue that prevented an invoice to be (partly) refunded twice.
- An issue where different currencies can cause that order is created in base currency.

### Changed
- Improved response handling if Post data is empty: Customer gets redirected to cart with an error message. Wording of
log entry was changed for a better understanding.
- Removed static version from composer command in installation manual.  

## 19.1.30

### Fixed
- Fixed a bug which resulted in an problem when sending the new order mail which resulted in the customer being redirected to an empty cart instead of the success page.
- iDEAL: Add missing checkbox for terms of conditions.
- iDEAL: Set correct default channel for test system.

### Added
- Support information to readme.

## 18.10.1

### Added
- payment method iDeal

## 18.9.20

### Fixed
- An issue which resulted in an error on checkout with secured payment methods with magento security patch SUPEE-10888 (Magento Version 2.2.6).
- An issue concerning the versions of the dependencies.

## 18.8.9

### Fixed
- An issue which resulted in the order mail being sent twice.

## 18.6.11

### Fixed
- An issue which resulted in basked requests always being performed in sandbox mode.

## 18.6.7

### Fixed
- A bug which resulted in a problem in developer mode forcing the shop-owner to perform di:compile on install.

## 18.4.23

### Fixed
- A bug which resulted in an error in some circumstances when a customer was paying via invoice secured payment method.

## 18.4.12

### Added
- BasketApi support in general and activated it for InvoiceSecuredPaymentMethod.
- Basket helper class to provide for general BasketApi support.
- Trait to be able to dump getter results from a class to an array.
- BasketApi integration tests.
- Refactored payment method classes with regards to the payment code. 

### Changed
- Refactored configuration reading (heidelpay main and payment specific config) in order to inject it where needed.
- Replaced obsolete PhpApi with PhpPaymentApi.

### Fixed
- Set Order to the correct state when receiving a receipt via push.

## 18.3.1

### Changed
- Tlds from de to com.
- Fixed links to point to the correct magento version.

## 18.2.28

### Changed
- Renamed 'Heidelberger Payment GmbH' to 'heidelpay GmbH' due to re-branding.

## 18.1.24

### Fixed
- Bug which resulted in a REC (push) not being referenceable to the corresponding order if the payment has been received >30 days after order placement.

### Changed
- Replaced php-customer-message with php-message-code-mapper.

## 17.10.12
## [19.2.4][19.2.4]

### Fixed
- Fixed a bug which resulted in an problem when sending the new order mail which resulted in the customer being redirected to an empty cart instead of the success page.

### Added
- Support information to readme.

## [19.1.22][19.1.22]

### Change
*   Patched [heidelpay/magento2](https://github.com/heidelpay/magento2) module to allow updating to magento 2.3.

[19.1.22]: https://github.com/heidelpay/magento2-version2.3-patch/tree/19.1.22
[19.2.4]: https://github.com/heidelpay/magento2-version2.3-patch/compare/19.1.22..19.2.4