<?php

namespace phpdk\jenkinsApi\builds;


class Factory
{
    public function createByJson($json): Build
    {
        return new Build();
    }

}