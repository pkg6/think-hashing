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

if ( ! function_exists('hash_info')) {

    /**
     * @param $hashedValue
     *
     * @return array
     */
    function hash_info($hashedValue)
    {
        return app()->get("hash")->info($hashedValue);
    }
}

if ( ! function_exists('hash_make')) {

    /**
     * @param $value
     * @param array $options
     *
     * @return string
     */
    function hash_make($value, array $options = [])
    {
        return app()->get("hash")->make($value, $options);
    }
}

if ( ! function_exists('hash_check')) {

    /**
     * @param $value
     * @param $hashedValue
     * @param array $options
     *
     * @return bool
     */
    function hash_check($value, $hashedValue, array $options = [])
    {
        return app()->get("hash")->check($value, $hashedValue, $options);
    }
}

if ( ! function_exists('hash_needsRehash')) {

    /**
     * @param $hashedValue
     * @param array $options
     *
     * @return bool
     */
    function hash_needsRehash($hashedValue, array $options = [])
    {
        return app()->get("hash")->needsRehash($hashedValue, $options);
    }
}
