<?php

namespace phpdk\jenkinsApi;

use phpdk\jenkinsApi\api\Api;
use phpdk\jenkinsApi\jobs\Factory;
use phpdk\jenkinsApi\jobs\JobCollection;
use phpdk\net\Url;

class Jenkins
{
    /** @var  Url */
    protected $url;
    /** @var  Api */
    protected $api;
    /**
     * Jenkins constructor.
     * @param Url $url
     * @param User|null $user
     */
    public function __construct(Url $url, User $user = null)
    {
        $this->url = $url;
        $this->api = new Api($url, $user);
    }

    public function getApi(): Api
    {
        return $this->api;
    }

    public function getJobs(): JobCollection
    {
        $list = $this->getApi()->execute('/api/json', ['depth' => 1]);
        $factory = new Factory();
        $jobs = new JobCollection([]);
        foreach ($list['jobs'] ?? [] as $jobArray) {
            $jobs->add($factory->createByArray($jobArray));
        }


        return $jobs;
    }
}