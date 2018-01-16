<?php

namespace phpdk\jenkinsApi\builds;


class Factory
{
    public function createByArray(array $build): Build
    {
        return Build::createByArray($build);
    }

}