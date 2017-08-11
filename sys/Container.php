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

    function __get($k)
    {
        return $this->s[$k]($this);
    }

}
