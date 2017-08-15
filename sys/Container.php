<?php

namespace sys;

/**
 * Description of Container
 *
 * @author hexd@baicaiqiche.com
 */
class Container
{

    private $s = array();

    function __set($k, $c)
    {
        $this->s[$k] = $c;
    }

    public function getContainer()
    {
        return $this->s;
    }

    function __get($k)
    {
        if (!isset($this->s[$k])) {
            $this->createObject($k);
        }
        return $this->s[$k];
    }

    function createObject($k)
    {
        $this->s[$k] = new $k();
    }

    function getRequest()
    {
        $className = Request::class;
        return $this->$className;
    }

}
