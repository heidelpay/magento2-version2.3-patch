<?php

namespace Heidelpay\Gateway\Controller\Index;

use Magento\Framework\App\Request\InvalidRequestException;
use Magento\Framework\App\RequestInterface;

/**
 * Notification handler for the payment response
 *
 * The heidelpay payment server will call this page directly after the payment
 * process to send the result of the payment to your shop. Please make sure
 * that this page is reachable form the Internet without any authentication.
 *
 * The controller use cryptographic methods to protect your shop in case of
 * fake payment responses. The plugin can not take care of man in the middle attacks,
 * so please make sure that you use https for the checkout process.
 *
 * @license Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 * @copyright Copyright © 2016-present heidelpay GmbH. All rights reserved.
 *
 * @link http://dev.heidelpay.com/magento2
 *
 * @author Jens Richter
 *
 * @package heidelpay\magento2\controllers
 */

if (interface_exists('\Magento\Framework\App\CsrfAwareActionInterface')) {
    class Response extends ResponseAbstract implements \Magento\Framework\App\CsrfAwareActionInterface
    {
        /**
         * Create exception in case CSRF validation failed.
         * Return null if default exception will suffice.
         *
         * @param RequestInterface $request
         *
         * @return InvalidRequestException|null
         */
        public function createCsrfValidationException(RequestInterface $request): ?InvalidRequestException
        {
            return null;
        }

        /**
         * Perform custom request validation.
         * Return null if default validation is needed.
         *
         * @param RequestInterface $request
         *
         * @return bool|null
         */
        public function validateForCsrf(RequestInterface $request): ?bool
        {
            return true;
        }
    }
} else {
    class Response extends ResponseAbstract
    {
        // no changes
    }
}
