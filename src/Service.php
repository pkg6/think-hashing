<?php

/*
 * This file is part of the tp5er/think-hashing
 *
 * (c) pkg6 <https://github.com/pkg6>
 *
 * (L) Licensed <https://opensource.org/license/MIT>
 *
 * (A) zhiqiang <https://www.zhiqiang.wang>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace tp5er\think\hashing;

class Service extends \think\Service
{
    public function register(): void
    {
        $this->app->bind('hash', function () {
            return new HashManager($this->app);
        });
        $this->app->bind('hash.driver', function () {
            return $this->app->get("hash")->driver();
        });

    }
}
