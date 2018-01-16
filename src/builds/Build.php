<?php

namespace phpdk\jenkinsApi\builds;

class Build
{
    /** @var  bool */
    protected $building;
    protected $description;
    protected $displayName;
    protected $duration;
    protected $estimatedDuration;
    protected $executor;
    protected $fullDisplayName;
    protected $id;
    protected $keepLog;
    protected $number;
    protected $queueId;
    protected $result;
    protected $timestamp;
    protected $url;

    public static function createByArray(array $list)
    {
        $obj = new static();
        foreach ($list as $key => $value) {
            $obj->{$key} = $value;
        }

        return $obj;
    }

    /**
     * @return bool
     */
    public function isBuilding(): bool
    {
        return $this->building;
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
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @return mixed
     */
    public function getEstimatedDuration()
    {
        return $this->estimatedDuration;
    }

    /**
     * @return mixed
     */
    public function getExecutor()
    {
        return $this->executor;
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
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getKeepLog()
    {
        return $this->keepLog;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @return mixed
     */
    public function getQueueId()
    {
        return $this->queueId;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }


}