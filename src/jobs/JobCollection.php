<?php

namespace phpdk\jenkinsApi\jobs;

use phpdk\util\TList;

class JobCollection extends TList
{
    public function __construct($list)
    {
        parent::__construct(Job::class, $list);
    }

    /**
     * @return \ArrayIterator|\SplObjectStorage|Job[]
     */
    public function getIterator()
    {
        return parent::getIterator();
    }
}