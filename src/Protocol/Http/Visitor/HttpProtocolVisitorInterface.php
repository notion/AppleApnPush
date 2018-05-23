<?php

declare(strict_types = 1);

/*
 * This file is part of the AppleApnPush package
 *
 * (c) Vitaliy Zhuk <zhuk2205@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code
 */

namespace Apple\ApnPush\Protocol\Http\Visitor;

use Apple\ApnPush\Model\Notification;
use Apple\ApnPush\Protocol\Http\Request;

/**
 * All visitors for visit for notification and request before send request to Apple Apn Push service should implement
 * this interface.
 */
interface HttpProtocolVisitorInterface
{
    /**
     * Visit before send request to Apple Apn Push service
     *
     * @param Notification $notification
     * @param Request      $request
     *
     * @return Request Should return modified request
     */
    public function visit(Notification $notification, Request $request): Request;
}
