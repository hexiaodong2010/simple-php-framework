<?php

namespace sys;

/**
 * Description of Application
 *
 * @author hexd@baicaiqiche.com
 */
class Application
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
        return $this;
    }

}
