<?php
/**
 * 执行类.
 * User: lx
 * Date: 2017/7/18
 * Time: 15:05
 */

namespace Package;

use Concerns\RoutesRequests;

class Application
{
    use RoutesRequests;

    public $basePath;
    /**
     * Application constructor.
     * @param $path
     */
    public function __construct($path)
    {
        date_default_timezone_set('PRC');

        $this->basePath = $path;
    }


}