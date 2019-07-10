# Release Notes - heidelpay Payment Gateway for Magento 2 _(patched to be compatible with Magento 2.3)_

## Versioning

This project does not follow a versioning standard. Versions are crafted after the dates; for example, the version 17.7.25 was released on July, 25th in 2017

## XX.X.XX
### Change
- improved status handling to ensure compatibility with magento.
### Fixed
- An issue that prevented an invoice to be (partly) refunded twice.
- An issue where different currencies can cause that order is created in base currency.

### Changed
- Improved response handling if Post data is empty: Customer gets redirected to cart with an error message. Wording of
log entry was changed for a better understanding.
- Removed static version from composer command in installation manual.  

## [19.1.22][19.1.22]

### Change
*   Patched [heidelpay/magento2](https://github.com/heidelpay/magento2) module to allow updating to magento 2.3.

[19.1.22]: https://github.com/heidelpay/magento2-version2.3-patch/tree/19.1.22
[19.2.4]: https://github.com/heidelpay/magento2-version2.3-patch/compare/19.1.22..19.2.4