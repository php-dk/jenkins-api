<?php

namespace phpdk\jenkinsApi\jobs;


use phpdk\jenkinsApi\builds\Build;
use phpdk\jenkinsApi\builds\BuildCollection;

class Job implements JobInterface
{
    protected $description;
    protected $displayName;
    protected $displayNameOrNull;
    protected $fullDisplayName;
    protected $fullName;
    protected $name;
    protected $url;
    protected $buildable;
    protected $builds;
    protected $color;

    /** @var  Build|null */
    protected $firstBuild;
    /** @var  Build|null */
    protected $lastCompletedBuild;
    /** @var  Build|null */
    protected $lastFailedBuild;
    /** @var  Build|null */
    protected $lastStableBuild;
    /** @var  Build|null */
    protected $lastSuccessfulBuild;
    /** @var  Build|null */
    protected $lastUnstableBuild;
    /** @var  Build|null */
    protected $lastUnsuccessfulBuild;
    /** @var  Build|null */
    protected $nextBuildNumber;

    public static function createByArray(array $list)
    {
        $obj = new static();
        foreach ($list as $key => $value) {
            $obj->{$key} = $value;
        }

        return $obj;
    }

    public function getName(): string
    {
       return $this->name;
    }

    public function start()
    {
        // TODO: Implement start() method.
    }

    public function stop()
    {
        // TODO: Implement stop() method.
    }

    public function isStart(): bool
    {
        // TODO: Implement isStart() method.
    }

    public function getBuilds(): BuildCollection
    {
        return BuildCollection::emptyList();
    }
}