<?php

namespace phpdk\jenkinsApi\tests\unit;

use phpdk\jenkinsApi\Jenkins;
use phpdk\jenkinsApi\tests\TestCase;
use phpdk\jenkinsApi\User;
use phpdk\net\Url;

class JobTest extends TestCase
{
    public function testBuildCollection()
    {
        $jenkins = new Jenkins(new Url('http://localhost:8082'), new User('ad', 'cutewater'));
        foreach ($jenkins->getJobs() as $job) {
            echo $job->getName() . PHP_EOL;
        }
    }


}