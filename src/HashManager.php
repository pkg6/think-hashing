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

use think\Manager;

class HashManager extends Manager implements Hasher
{
    /**
     * @return BcryptHasher
     */
    public function createBcryptDriver()
    {
        return new BcryptHasher($this->app->config->get('hashing.bcrypt') ?? []);
    }

    /**
     * @return ArgonHasher
     */
    public function createArgonDriver()
    {
        return new ArgonHasher($this->app->config->get('hashing.argon') ?? []);
    }

    /**
     * @return Argon2IdHasher
     */
    public function createArgon2idDriver()
    {
        return new Argon2IdHasher($this->app->config->get('hashing.argon') ?? []);
    }

    /**
     * @return array|mixed|string|null
     */
    public function getDefaultDriver()
    {
        return $this->app->config->get('hashing.driver', 'bcrypt');
    }

    /**
     * @param $hashedValue
     *
     * @return array
     */
    public function info($hashedValue)
    {
        return $this->driver()->info($hashedValue);
    }

    /**
     * @param $value
     * @param array $options
     *
     * @return string
     */
    public function make($value, array $options = [])
    {
        return $this->driver()->make($value, $options);
    }

    /**
     * @param $value
     * @param $hashedValue
     * @param array $options
     *
     * @return bool
     */
    public function check($value, $hashedValue, array $options = [])
    {
        return $this->driver()->check($value, $hashedValue, $options);
    }

    /**
     * @param $hashedValue
     * @param array $options
     *
     * @return bool
     */
    public function needsRehash($hashedValue, array $options = [])
    {
        return $this->driver()->needsRehash($hashedValue, $options);
    }
}
