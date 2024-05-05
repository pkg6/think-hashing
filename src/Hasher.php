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

interface Hasher
{
    /**
     * Get information about the given hashed value.
     *
     * @param  string  $hashedValue
     *
     * @return array
     */
    public function info($hashedValue);

    /**
     * Hash the given value.
     *
     * @param  string  $value
     * @param  array  $options
     *
     * @return string
     */
    public function make($value, array $options = []);

    /**
     * Check the given plain value against a hash.
     *
     * @param  string  $value
     * @param  string  $hashedValue
     * @param  array  $options
     *
     * @return bool
     */
    public function check($value, $hashedValue, array $options = []);

    /**
     * Check if the given hash has been hashed using the given options.
     *
     * @param  string  $hashedValue
     * @param  array  $options
     *
     * @return bool
     */
    public function needsRehash($hashedValue, array $options = []);
}
