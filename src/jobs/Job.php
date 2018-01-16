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

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @return mixed
     */
    public function getDisplayNameOrNull()
    {
        return $this->displayNameOrNull;
    }

    /**
     * @return mixed
     */
    public function getFullDisplayName()
    {
        return $this->fullDisplayName;
    }

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @return mixed
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return mixed
     */
    public function getBuildable()
    {
        return $this->buildable;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return null|Build
     */
    public function getFirstBuild()
    {
        return $this->firstBuild;
    }

    /**
     * @return null|Build
     */
    public function getLastCompletedBuild()
    {
        return $this->lastCompletedBuild;
    }

    /**
     * @return null|Build
     */
    public function getLastFailedBuild()
    {
        return $this->lastFailedBuild;
    }

    /**
     * @return null|Build
     */
    public function getLastStableBuild()
    {
        return $this->lastStableBuild;
    }

    /**
     * @return null|Build
     */
    public function getLastSuccessfulBuild()
    {
        return $this->lastSuccessfulBuild;
    }

    /**
     * @return null|Build
     */
    public function getLastUnstableBuild()
    {
        return $this->lastUnstableBuild;
    }

    /**
     * @return null|Build
     */
    public function getLastUnsuccessfulBuild()
    {
        return $this->lastUnsuccessfulBuild;
    }

    /**
     * @return null|Build
     */
    public function getNextBuildNumber()
    {
        return $this->nextBuildNumber;
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
        return new BuildCollection($this->builds);
    }
}