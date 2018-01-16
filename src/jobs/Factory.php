<?php

namespace phpdk\jenkinsApi\jobs;

use phpdk\jenkinsApi\builds\Build;

class Factory
{
    /** @var  \phpdk\jenkinsApi\builds\Factory */
    protected $buildFactory;

    public function __construct()
    {
        return $this->buildFactory = new \phpdk\jenkinsApi\builds\Factory();
    }

    public function createByArray(array $array): Job
    {
        $builds = [
            'firstBuild',
            'lastCompletedBuild',
            'lastFailedBuild',
            'lastStableBuild',
            'lastSuccessfulBuild',
            'lastUnstableBuild',
            'lastUnsuccessfulBuild',
        ];

        $list = [];
        foreach ($array['builds'] as $build) {
            $list[] = Build::createByArray($build);
        }
        $array['builds'] = $list;

        foreach ($builds as $buildName) {
            if ($array[$buildName]) {
                $array[$buildName] = Build::createByArray($array[$buildName]);
            }
        }

        return Job::createByArray($array);
    }

}