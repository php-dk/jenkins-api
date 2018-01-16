<?php

namespace phpdk\jenkinsApi\builds;

use phpdk\util\TList;

class BuildCollection extends TList
{
    public function __construct($list)
    {
        parent::__construct(Build::class, $list);
    }

    /**
     * @return \ArrayIterator|\SplObjectStorage|Build[]
     */
    public function getIterator()
    {
        return parent::getIterator();
    }
}