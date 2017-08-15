<?php

namespace sys;

/**
 * Description of Application
 *
 * @author hexd@baicaiqiche.com
 */
class Application extends Container
{

    private $_config = [];
    private $_requst;
    public $response;

    public function __construct($config = [])
    {

        if (!empty($config) && is_array($config)) {
            $this->_config = array_merge($this->_config, $config);
        }
    }


    public function __call($name, $arguments)
    {
        return call_user_func(function ($arguments, $methodName) {
            echo $methodName, PHP_EOL;
            return $this;
        }, $arguments, $name);
    }

    public function run()
    {
        try {
            $response = $this->handleRequest($this->getRequest());
        } catch (\Exception $e) {

        }
    }

    public function handleRequest(Request $request)
    {
        $request->resolve($this);
    }

}
