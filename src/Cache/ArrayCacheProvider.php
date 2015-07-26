<?php namespace Mitch\LaravelDoctrine\Cache;

use Doctrine\Common\Cache\ArrayCache;

class ArrayCacheProvider implements Provider
{
    public function make($config = null)
    {
        $cache = new ArrayCache();

        return $cache;
    }

    public function isAppropriate($provider)
    {
        return $provider == 'array';
    }
}
