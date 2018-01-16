<?php

namespace phpdk\jenkinsApi\jobs;

use phpdk\util\TList;

class JobCollection extends TList
{
    public function __construct($list)
    {
        parent::__construct(JobInterface::class, $list);
    }

    /**
     * @return \ArrayIterator|\SplObjectStorage|JobInterface[]
     */
    public function getIterator()
    {
        return parent::getIterator();
    }
}