<?php
/**
 * 入口.
 * User: Administrator
 * Date: 2017/7/18
 * Time: 14:44
 */

require_once dirname(__FILE__) . '\vendor\autoload.php';

$app = new Package\Application(
    realpath(dirname(__FILE__))
);

$app->get('','');