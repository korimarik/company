<?php

/**
 * Created by PhpStorm.
 * User: Dimitrie.M
 * Date: 12.04.2017
 * Time: 16:46
 */

class myPDOStatement extends PDOStatement
{
    function execute($data = array())
    {
        parent::execute($data);
        return $this;
    }
}