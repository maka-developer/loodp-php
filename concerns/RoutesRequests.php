<?php
/**
 * 路由控制器.
 * User: Administrator
 * Date: 2017/7/18
 * Time: 16:06
 */

namespace Concerns;

trait RoutesRequests
{
    /**
     * @param $request_uri
     * @param $action
     * @return $this
     */
    public function get($request_uri, $action)
    {
        $this->addRoute('GET', $request_uri, $action);

        return $this;
    }

    /**
     * @param $request_uri
     * @param $action
     * @return $this
     */
    public function post($request_uri, $action)
    {
        $this->addRoute('POST', $request_uri, $action);

        return $this;
    }

    public function addRoute($method, $uri, $action)
    {
        $action = $this->parseAction($action);


    }

    /**
     * @param $action
     * @return array
     */
    public function parseAction($action)
    {
        if(is_string($action)){
            return ['uses' => $action];
        }elseif(!is_array($action)){
            return [$action];
        }

        return $action;
    }

    /**
     * 获取url中uri
     * @param $request_uri
     * @return mixed
     */
    public function getUri($request_uri)
    {
        $host_arr = explode('?', $request_uri);
        $uri = $host_arr[0];
        return $uri;
    }
}

