<?php

namespace phpdk\jenkinsApi\jobs;

class Factory
{

    public function createByArray(array $array): Job
    {
        return Job::createByArray($array);
    }

}